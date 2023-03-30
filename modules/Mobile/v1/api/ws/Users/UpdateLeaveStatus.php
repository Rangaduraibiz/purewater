<?php

class Mobile_WS_UpdateLeaveStatus extends Mobile_WS_Controller {
    function process(Mobile_API_Request $request) {
        global $current_user, $adb;
        $response = new Mobile_API_Response();
        $userName = $current_user->user_name;
        $sql = 'select serviceengineerid from vtiger_serviceengineer ' .
            ' inner join vtiger_crmentity on vtiger_crmentity.crmid = vtiger_serviceengineer.serviceengineerid' .
            ' where badge_no = ? and vtiger_crmentity.deleted= 0 ORDER BY serviceengineerid DESC LIMIT 1';
        $sqlResult = $adb->pquery($sql, array($userName));
        $employeeRecordModel = '';
        $num_rows = $adb->num_rows($sqlResult);
        if ($num_rows > 0) {
            $dataRow = $adb->fetchByAssoc($sqlResult, 0);
            $employeeRecordModel = Vtiger_Record_Model::getInstanceById($dataRow['serviceengineerid'], 'ServiceEngineer');
        }
        if (!empty($employeeRecordModel)) {
            $employeeRecordModel->set('mode', 'edit');
            $employeeRecordModel->set('on_leave', $request->get('on_leave'));
            $employeeRecordModel->save();

            $response->setApiSucessMessage('Leave Status Is Updated Successfully');
            $responseObject['message'] = 'Leave Status Is Updated Successfully';
            $response->setResult($responseObject);
            return $response;
        } else {
            $response->setError(100, 'Not Able To Update User Leave Status');
            return $response;
        }
    }
   
}
