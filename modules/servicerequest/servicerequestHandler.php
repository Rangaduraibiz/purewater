<?php

/* +***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 * *********************************************************************************** */
include_once 'include/Webservices/Revise.php';
include_once 'include/Webservices/Retrieve.php';

class servicerequestHandler extends VTEventHandler {

    function handleEvent($eventName, $entityData) {

        $moduleName = $entityData->getModuleName();

        // Validate the event target
        if ($moduleName != 'servicerequest') {
            return;
        }

        //Get Current User Information
        global $current_user, $currentModule;

        /**
         * Adjust the balance amount against total & received amount
         * NOTE: beforesave the total amount will not be populated in event data.
         */
        if ($eventName == 'vtiger.entity.aftersave') {
            // Trigger from other module (due to indirect save) need to be ignored - to avoid inconsistency.
            if ($currentModule != 'servicerequest')
                return;
            $entityDelta = new VTEntityDelta();
            $oldCurrency = $entityDelta->getOldValue($entityData->getModuleName(), $entityData->getId(), 'currency_id');
            $newCurrency = $entityDelta->getCurrentValue($entityData->getModuleName(), $entityData->getId(), 'currency_id');
            $oldConversionRate = $entityDelta->getOldValue($entityData->getModuleName(), $entityData->getId(), 'conversion_rate');
            $db = PearDatabase::getInstance();
            $wsid = vtws_getWebserviceEntityId('servicerequest', $entityData->getId());
            $wsrecord = vtws_retrieve($wsid,$current_user);
            if ($oldCurrency != $newCurrency && $oldCurrency != '') {
              if($oldConversionRate != ''){ 
                $wsrecord['received'] = floatval(($wsrecord['received']/$oldConversionRate) * $wsrecord['conversion_rate']);
              }  
            }
            $wsrecord['balance'] = floatval($wsrecord['hdnGrandTotal'] - $wsrecord['received']);
            if ($wsrecord['balance'] == 0) {
                $wsrecord['servicerequeststatus'] = 'Paid';
            }
            $query = "UPDATE vtiger_servicerequest SET balance=?,received=? WHERE servicerequestid=?";
            $db->pquery($query, array($wsrecord['balance'], $wsrecord['received'], $entityData->getId()));
        }
    }

}

?>
