<?php
function HandleTicketAssignment($entityData) {
    global $adb;
    $recordInfo = $entityData->{'data'};
    // $functionalLocationId = $recordInfo['func_loc_id'];
    // $record = getUsersIdOfASsociatedFuntionalLocation($functionalLocationId);
    $id = $recordInfo['id'];
    $id = explode('x', $id);
    $id = $id[1];
    // if (!empty($record['crmid'])) {
    //     $recordInstance = Vtiger_Record_Model::getInstanceById($record['crmid'], $record['module']);
    //     $badgeNo = $recordInstance->get('badge_no');
    //     $userId = getUserIdBasedOnBadge($badgeNo);
    // } else {
    //     $contcatId = $recordInfo['contact_id'];
    //     $contcatId = explode('x', $contcatId);
    //     $contcatId = $contcatId[1];
    //     if (!empty($contcatId)) {
    //         $recordInstance = Vtiger_Record_Model::getInstanceById($contcatId, 'Contacts');
    //         $nearestOffice = $recordInstance->get('nearest_office');
    //         $userId = getAssignedPerson($nearestOffice);
    //     }
    // }

    // if (!empty($userId)) {
    //     $query = "UPDATE vtiger_crmentity SET smownerid=? WHERE crmid=?";
    //     $adb->pquery($query, array($userId, $id));
    // }

    $equipmentId = $recordInfo['equipment_id'];
    $equipmentId = explode('x', $equipmentId);
    $equipmentId = $equipmentId[1];
    include_once('include/utils/GeneralUtils.php');
    $dataArr = getSingleColumnValue(array(
        'table' => 'vtiger_equipment',
        'columnId' => 'equipmentid',
        'idValue' => $equipmentId,
        'expectedColValue' => 'account_id'
    ));
    $accountId = $dataArr[0]['account_id'];
    $query = "UPDATE vtiger_troubletickets SET ticket_date=?, status = ?, 
    no_of_days = ? , parent_id = ?
    WHERE ticketid=?";
    $adb->pquery($query, array(date('Y-m-d'), 'Open', 1, $accountId, $id));
}
function getAssignedPerson($roleName) {
    $realRole = explode(" - ", $roleName);
    $region = trim($realRole[0]);
    global $adb;
    $roleName = $region . ' - REGIONAL MANAGER';
    $sql = "SELECT * FROM `vtiger_role` 
    INNER JOIN `vtiger_user2role` ON `vtiger_user2role`.`roleid` = `vtiger_role`.`roleid` 
    where rolename = ?";
    $result = $adb->pquery($sql, array($roleName));
    $dataRow = $adb->fetchByAssoc($result, 0);
    if (empty($dataRow['userid'])) {
        return 1;
    } else {
        return $dataRow['userid'];
    }
}

function getRegionalMangaerUserId($badgeNo) {
}
function getUserIdBasedOnBadge($badgeNo) {
    global $adb;
    $sql = "SELECT * FROM `vtiger_users` where user_name = ? ";
    $allRecords = $adb->pquery($sql, array($badgeNo));
    $dataRow = $adb->fetchByAssoc($allRecords, 0);
    return $dataRow['id'];
}

function getUsersIdOfASsociatedFuntionalLocation($functionalLocationId) {
    global $adb;
    $sql = "SELECT * FROM `vtiger_crmentityrel` " .
        " inner join vtiger_crmentity on vtiger_crmentity.crmid=vtiger_crmentityrel.crmid " .
        " where relcrmid = ? and module =  ?  and vtiger_crmentity.deleted = 0";

    $functionalLocationId = explode('x', $functionalLocationId);
    $functionalLocationId = $functionalLocationId[1];
    $allRecords = $adb->pquery($sql, array($functionalLocationId, 'ServiceEngineer'));
    $dataRow = $adb->fetchByAssoc($allRecords, 0);
    return $dataRow;
}
