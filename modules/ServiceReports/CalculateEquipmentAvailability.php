<?php
function CalculateEquipmentAvailability($entityData) {
    global $adb;
    $recordInfo = $entityData->{'data'};
    $id = $recordInfo['id'];
    $id = explode('x', $id);
    $id = $id[1];

    $equipId = $recordInfo['equipment_id'];
    $equipId = explode('x', $equipId);
    $equipId = $equipId[1];

    $createdDate = $recordInfo['createdtime'];
    $createdDate = substr($createdDate, 0, 7);
    include_once('include/utils/GeneralConfigUtils.php');
    calculateEquipmentAvailabilty($equipId, $createdDate, $recordInfo['createdtime']);
}
