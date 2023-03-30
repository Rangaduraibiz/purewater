<?php
/*+***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 *************************************************************************************/

class HelpDesk_DetailView_Model extends Vtiger_DetailView_Model {

	/**
	 * Function to get the detail view links (links and widgets)
	 * @param <array> $linkParams - parameters which will be used to calicaulate the params
	 * @return <array> - array of link models in the format as below
	 *                   array('linktype'=>list of link models);
	 */
	public function getDetailViewLinksParent($linkParams) {
		$linkTypes = array('DETAILVIEWBASIC','DETAILVIEW');
		$moduleModel = $this->getModule();
		$recordModel = $this->getRecord();

		$moduleName = $moduleModel->getName();
		$recordId = $recordModel->getId();

		$detailViewLink = array();
		$linkModelList = array();
		// if(Users_Privileges_Model::isPermitted($moduleName, 'EditView', $recordId)) {
		// 	$detailViewLinks[] = array(
		// 			'linktype' => 'DETAILVIEWBASIC',
		// 			'linklabel' => 'LBL_EDIT',
		// 			'linkurl' => $recordModel->getEditViewUrl(),
		// 			'linkicon' => ''
		// 	);

		// 	foreach ($detailViewLinks as $detailViewLink) {
		// 		$linkModelList['DETAILVIEWBASIC'][] = Vtiger_Link_Model::getInstanceFromValues($detailViewLink);
		// 	}
		// }

		if(Users_Privileges_Model::isPermitted($moduleName, 'Delete', $recordId)) {
			$deletelinkModel = array(
					'linktype' => 'DETAILVIEW',
					'linklabel' => sprintf("%s %s", getTranslatedString('LBL_DELETE', $moduleName), vtranslate('SINGLE_'. $moduleName, $moduleName)),
					'linkurl' => 'javascript:Vtiger_Detail_Js.deleteRecord("'.$recordModel->getDeleteUrl().'")',
					'linkicon' => ''
			);
			$linkModelList['DETAILVIEW'][] = Vtiger_Link_Model::getInstanceFromValues($deletelinkModel);
		}

		// if($moduleModel->isDuplicateOptionAllowed('CreateView', $recordId)) {
		// 	$duplicateLinkModel = array(
		// 				'linktype' => 'DETAILVIEWBASIC',
		// 				'linklabel' => 'LBL_DUPLICATE',
		// 				'linkurl' => $recordModel->getDuplicateRecordUrl(),
		// 				'linkicon' => ''
		// 		);
		// 	$linkModelList['DETAILVIEW'][] = Vtiger_Link_Model::getInstanceFromValues($duplicateLinkModel);
		// }

		if($this->getModule()->isModuleRelated('Emails') && Vtiger_RecipientPreference_Model::getInstance($this->getModuleName())) {
			$emailRecpLink = array('linktype' => 'DETAILVIEW',
								'linklabel' => vtranslate('LBL_EMAIL_RECIPIENT_PREFS',  $this->getModuleName()),
								'linkurl' => 'javascript:Vtiger_Index_Js.showRecipientPreferences("'.$this->getModuleName().'");',
								'linkicon' => '');
			$linkModelList['DETAILVIEW'][] = Vtiger_Link_Model::getInstanceFromValues($emailRecpLink);
		}

		$linkModelListDetails = Vtiger_Link_Model::getAllByType($moduleModel->getId(),$linkTypes,$linkParams);
		foreach($linkTypes as $linkType) {
			if(!empty($linkModelListDetails[$linkType])) {
				foreach($linkModelListDetails[$linkType] as $linkModel) {
					// Remove view history, needed in vtiger5 to see history but not in vtiger6
					if($linkModel->linklabel == 'View History') {
						continue;
					}
					$linkModelList[$linkType][] = $linkModel;
				}
			}
			unset($linkModelListDetails[$linkType]);
		}

		$relatedLinks = $this->getDetailViewRelatedLinks();

		foreach($relatedLinks as $relatedLinkEntry) {
			$relatedLink = Vtiger_Link_Model::getInstanceFromValues($relatedLinkEntry);
			$linkModelList[$relatedLink->getType()][] = $relatedLink;
		}

		$widgets = $this->getWidgets();
		foreach($widgets as $widgetLinkModel) {
			$linkModelList['DETAILVIEWWIDGET'][] = $widgetLinkModel;
		}

		$currentUserModel = Users_Record_Model::getCurrentUserModel();
		if($currentUserModel->isAdminUser()) {
			$settingsLinks = $moduleModel->getSettingLinks();
			foreach($settingsLinks as $settingsLink) {
				$linkModelList['DETAILVIEWSETTING'][] = Vtiger_Link_Model::getInstanceFromValues($settingsLink);
			}
		}

		return $linkModelList;
	}

	public function getDetailViewLinks($linkParams) {
		$currentUserModel = Users_Privileges_Model::getCurrentUserPrivilegesModel();

		$linkModelList = $this->getDetailViewLinksParent($linkParams);
		$recordModel = $this->getRecord();

		$emailModuleModel = Vtiger_Module_Model::getInstance('Emails');
		if($currentUserModel->hasModulePermission($emailModuleModel->getId())) {
			$basicActionLink = array(
				'linktype' => 'DETAILVIEWBASIC',
				'linklabel' => 'LBL_SEND_EMAIL',
				'linkurl' => 'javascript:Vtiger_Detail_Js.triggerSendEmail("index.php?module='.$this->getModule()->getName().
								'&view=MassActionAjax&mode=showComposeEmailForm&step=step1","Emails");',
				'linkicon' => ''
			);
			$linkModelList['DETAILVIEWBASIC'][] = Vtiger_Link_Model::getInstanceFromValues($basicActionLink);
		}

		$quotesModuleModel = Vtiger_Module_Model::getInstance('Faq');
		if($currentUserModel->hasModuleActionPermission($quotesModuleModel->getId(), 'CreateView')) {
			$basicActionLink = array(
				'linktype' => 'DETAILVIEW',
				'linklabel' => 'LBL_CONVERT_FAQ',
				'linkurl' => $recordModel->getConvertFAQUrl(),
				'linkicon' => ''
			);
			$linkModelList['DETAILVIEW'][] = Vtiger_Link_Model::getInstanceFromValues($basicActionLink);
		}

		$idOfTheRecord = $recordModel->get('id');
		$resultObject = $this->alreadyReportGenerated($idOfTheRecord);
		$alreadyReportGenerated = $resultObject['alreadySRGenerated'];
		if($alreadyReportGenerated == false) {
			$basicActionLink = array(
				'linktype' => 'DETAILVIEW',
				'linklabel' => 'Generate Service Report',
				'linkurl' => "index.php?module=ServiceReports&view=Edit&returnmode=showRelatedList&returntab_label=ServiceReports".
				"&returnrecord=$idOfTheRecord&returnmodule=HelpDesk&returnview=Detail&".
				"returnrelatedModuleName=ServiceReports&returnrelationId=215&relationOperation=true&".
				"sourceRecord=$idOfTheRecord&sourceModule=HelpDesk&ticket_id=$idOfTheRecord&app=SUPPORT",
				'linkicon' => ''
			);
			$linkModelList['DETAILVIEWBASIC'][] = Vtiger_Link_Model::getInstanceFromValues($basicActionLink);
		} else {
			include_once('include/utils/GeneralUtils.php');
			$resultObjectOrder = IGalreadyServiceOrderGenerated($idOfTheRecord);
			if($resultObjectOrder['orderGenerated'] == false){
				$generatedId = $resultObject['generatedSRData']['servicereportsid'];
				$basicActionLink = array(
					'linktype' => 'DETAILVIEW',
					'linklabel' => 'Generate Service Order',
					'linkurl' => "index.php?module=ServiceOrders&view=Edit&" .
					"returnmode=showRelatedList&returntab_label=ServiceOrders&" .
					"returnrecord=$idOfTheRecord&returnmodule=HelpDesk&returnview=Detail&" .
					"returnrelatedModuleName=ServiceOrders&returnrelationId=230&" .
					"relationOperation=true&relationOperation=true&" .
					"sourceRecord=$idOfTheRecord&sourceModule=HelpDesk&" .
					"ticket_id=$idOfTheRecord&servicereport_id=$generatedId&" .
					"app=MARKETING",
					'linkicon' => ''
				);
				$linkModelList['DETAILVIEWBASIC'][] = Vtiger_Link_Model::getInstanceFromValues($basicActionLink);
			}
		}

		return $linkModelList;
	}

	public function alreadyReportGenerated($id) {
		global $adb;
		$sql = 'select servicereportsid from vtiger_servicereports'
		. ' INNER JOIN vtiger_crmentity '
		. ' ON vtiger_crmentity.crmid = vtiger_servicereports.servicereportsid '
		. ' where vtiger_servicereports.ticket_id = ? and vtiger_crmentity.deleted = 0';
		$sqlResult = $adb->pquery($sql, array($id));
		$num_rows = $adb->num_rows($sqlResult);
		$resultObject = [];
		if ($num_rows > 0) {
			$resultObject['alreadySRGenerated'] = true;
			$resultObject['generatedSRData'] = $adb->fetchByAssoc($sqlResult, 0);
		} else {
			$resultObject['alreadySRGenerated'] = false;
		}
		return $resultObject;
	}

	/**
	 * Function to get the detail view widgets
	 * @return <Array> - List of widgets , where each widget is an Vtiger_Link_Model
	 */
	public function getWidgets() {
		$userPrivilegesModel = Users_Privileges_Model::getCurrentUserPrivilegesModel();
		$widgetLinks = parent::getWidgets();
		$widgets = array();

        $documentsInstance = Vtiger_Module_Model::getInstance('Documents');
		if($userPrivilegesModel->hasModuleActionPermission($documentsInstance->getId(), 'DetailView')) {
			$createPermission = $userPrivilegesModel->hasModuleActionPermission($documentsInstance->getId(), 'CreateView');
			$widgets[] = array(
					'linktype' => 'DETAILVIEWWIDGET',
					'linklabel' => 'Documents',
					'linkName'	=> $documentsInstance->getName(),
					'linkurl' => 'module='.$this->getModuleName().'&view=Detail&record='.$this->getRecord()->getId().
							'&relatedModule=Documents&mode=showRelatedRecords&page=1&limit=5',
					'action'	=>	($createPermission == true) ? array('Add') : array(),
					'actionURL' =>	$documentsInstance->getQuickCreateUrl()
			);
		}

		foreach ($widgets as $widgetDetails) {
			$widgetLinks[] = Vtiger_Link_Model::getInstanceFromValues($widgetDetails);
		}

		return $widgetLinks;
	}


}
