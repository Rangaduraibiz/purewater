<?php
/*+**********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 ************************************************************************************/
class Mobile_WS_RecentlyClosedTasks extends Mobile_WS_Controller {
	
	function process(Mobile_API_Request $request) {
		$resp = [];
		$adb = PearDatabase::getInstance();

		$today = date('Y-m-d', strtotime("+1 day"));
		$oneWeekAgo =  date('Y-m-d',strtotime("-1 week"));

		$whereQuery = "SELECT * FROM vtiger_modtracker_detail 
		INNER JOIN vtiger_modtracker_basic 
		ON vtiger_modtracker_basic.id = vtiger_modtracker_detail.id 
		INNER JOIN vtiger_project 
		ON vtiger_project.projectid = vtiger_modtracker_basic.crmid 
		LEFT JOIN vtiger_account 
		ON vtiger_account.accountid = vtiger_project.linktoaccountscontacts 
		WHERE vtiger_modtracker_basic.module='Project' AND postvalue = 'Completed' AND changedon BETWEEN '$oneWeekAgo' AND '$today' ";

		$recentlyClosedProjects = [];
		$result = $adb->pquery($whereQuery, array());
		if($result){
			$rowCount = $adb->num_rows($result);
			while ($rowCount > 0) {
				$rowData = $adb->query_result_rowdata($result,$rowCount-1);
				array_push($recentlyClosedProjects, array(
				'accountname' => $rowData['accountname'], 
				'projectName' => $rowData['projectname'], 
				'targetenddate' => $rowData['targetenddate']));
				--$rowCount;
			}
		}

		$resp['recentlyClosedProjects'] = $recentlyClosedProjects;

		$response = new Mobile_API_Response();
		$response->setResult($resp);
        return $response;

	}

}