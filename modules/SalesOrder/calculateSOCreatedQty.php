<?php
function calculateSOCreatedQty($entityData) {
    global $adb;
    $data = $entityData->{'data'};
    include_once('include/utils/GeneralConfigUtils.php');
    foreach ($data['LineItems'] as $key1 => $lineItem) {
        $parentLineId = $lineItem['failedpart_lineid'];
        $qty = getAllSOWithParentId($parentLineId);
        $query = "UPDATE vtiger_inventoryproductrel SET salesorder_cr_qty=? WHERE lineitem_id=?";
        $adb->pquery($query, array($qty, $parentLineId));
    }
}
