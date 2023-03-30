<?php

class HelpDesk_RelationListView_Model extends Vtiger_RelationListView_Model {

	public function getCreateViewUrl() {
		$createViewUrl = parent::getCreateViewUrl();
		$parentRecordModule = $this->getParentRecordModel();
		$parentModule = $parentRecordModule->getModule();
		$parentRecordId = $parentRecordModule->getId();
		$SreportId = $this->getFirstServiceReportOfSR($parentRecordId);
		$firstServiceOrder = $this->getFirstServiceOrderOfSR($parentRecordId);
		$createViewUrl .= '&relationOperation=true&contact_id='.$parentRecordModule->get('contact_id').
		'&account_id='.$parentRecordModule->get('parent_id').
		'&sourceRecord='.$parentRecordId.'&sourceModule='.$parentModule->getName().
		'&ticket_id='.$parentRecordId.
		'&servicereport_id='.$SreportId.
		'&serviceorder_id='. $firstServiceOrder;
		return $createViewUrl;
	}

	public function getFirstServiceReportOfSR($id) {
		global $adb;
        $query = "SELECT servicereportsid FROM `vtiger_servicereports`"
                . " inner join vtiger_crmentity on vtiger_crmentity.crmid = vtiger_servicereports.servicereportsid "
                . " where ticket_id = ? and deleted = ?";
        $result = $adb->pquery($query, array($id, 0));
        $num_rows = $adb->num_rows($result);
        $dataRow = $adb->fetchByAssoc($result, 0);
        if ($num_rows > 0) {
            return $dataRow['servicereportsid'];
        } else {
            return '';
        }
	}
	public function getFirstServiceOrderOfSR($id) {
		global $adb;
        $query = "SELECT serviceordersid FROM `vtiger_serviceorders`"
                . " inner join vtiger_crmentity on vtiger_crmentity.crmid = vtiger_serviceorders.serviceordersid "
                . " where ticket_id = ? and deleted = ?";
        $result = $adb->pquery($query, array($id, 0));
        $num_rows = $adb->num_rows($result);
        $dataRow = $adb->fetchByAssoc($result, 0);
        if ($num_rows > 0) {
            return $dataRow['serviceordersid'];
        } else {
            return '';
        }
	}

}
