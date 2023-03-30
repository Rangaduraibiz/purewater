<?php
/*+**********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 ************************************************************************************/
// include_once dirname(__FILE__ , 4).'\Settings\MenuEditor\models\module.php';
class Mobile_WS_getRecordComments extends Mobile_WS_Controller {
	
	function process(Mobile_API_Request $request) {
		$adb = PearDatabase::getInstance();
		$whereQuery = "select * from vtiger_modcomments where related_to = ?";
		$recordId = $request->get('record');
		$recordIds = explode("x",$recordId);
		$id = $recordIds[1];
		$result = $adb->pquery($whereQuery, array($id));
		$recentlyClosedProjects = [];
		if($result){
			$rowCount = $adb->num_rows($result);
			while ($rowCount > 0) {
				$rowData = $adb->query_result_rowdata($result,$rowCount-1);
				array_push($recentlyClosedProjects, array(
					'commentcontent' => $rowData['commentcontent'], 
					'modcommentsid' => $rowData['modcommentsid'], 
					'parent_comments' => $rowData['parent_comments']));
				--$rowCount;
			}
		}
		$response = new Mobile_API_Response();
		$response->setResult($recentlyClosedProjects);
        return $response;
	}
	
}