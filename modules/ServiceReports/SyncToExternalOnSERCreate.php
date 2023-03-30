<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
include_once('include/utils/GeneralUtils.php');
function CreateOnlyNotification($entityData) {
    global $adb;
    global $log;
    $recordInfo = $entityData->{'data'};

    $notiType = $recordInfo['fail_de_sap_noti_type'];
    // no need to sync to sap of undefined notification types
    $id = $recordInfo['id'];
    $id = explode('x', $id);
    $id = $id[1];
    if ($notiType == '--') {
        handleCreationOfRecommisioningReport($recordInfo, $id);
        return;
    }

    $ticketId = $recordInfo['ticket_id'];
    $ticketId = explode('x', $ticketId);
    $ticketId = $ticketId[1];
    $sql = 'select external_app_num,createdtime from vtiger_troubletickets ' .
        ' inner join vtiger_crmentity on vtiger_crmentity.crmid = vtiger_troubletickets.ticketid ' .
        ' where ticketid = ?';
    $sqlResult = $adb->pquery($sql, array($ticketId));
    $dataRow = $adb->fetchByAssoc($sqlResult, 0);
    $ticketCreatedDateTime = '';
    if (empty($dataRow)) {
    } else {
        $exterAppNum = $dataRow['external_app_num'];
        $ticketCreatedDateTime =  $dataRow['createdtime'];
    }
    if (!empty($exterAppNum)) {
        return;
    }

    $reportedById = $recordInfo['reported_by'];
    $reportedById = explode('x', $reportedById);
    $reportedById = $reportedById[1];
    $reportedBy = Vtiger_Functions::getCRMRecordLabel($reportedById);
    $symptoms = $recordInfo['symptoms'];

    $Observation = $recordInfo['fd_obvservation'];
    $actionTaken = $recordInfo['action_taken_block'];

    // Implement fail_de_part_pertains_to
    $partPertainsTo = $recordInfo['fail_de_part_pertains_to'];
    if ($partPertainsTo == 'BEML') {
        $partPertainsTo1 = '';
        if ($recordInfo['fd_sub_div']  == 'Engine') {
            $partPertainsTo1 = "Responsible Agency_._BEML - Engine Divn.";
        } else if ($recordInfo['fd_sub_div']  == 'Truck') {
            $partPertainsTo1 = "Responsible Agency_._BEML - Truck Divn.";
        } else if ($recordInfo['fd_sub_div']  == 'H&P') {
            $partPertainsTo1 = "Responsible Agency_._BEML - H & P Divn.";
        } else if ($recordInfo['fd_sub_div']  == 'EM') {
            $partPertainsTo1 = "Responsible Agency_._BEML - EM Divn.";
        }
        $sql = 'select code , code_group from vtiger_fail_de_part_pertains_to_ano '
            . ' where fail_de_part_pertains_to_ano = ?';
        $sqlResult = $adb->pquery($sql, array($partPertainsTo1));
        $dataRow = $adb->fetchByAssoc($sqlResult, 0);
        $partPertainsToCode = '';
        $partPertainsToCodeGroup = '';
        if (empty($dataRow)) {
            $partPertainsToCode = '';
            $partPertainsToCodeGroup = '';
        } else {
            $partPertainsToCode = $dataRow['code'];
            $partPertainsToCodeGroup = $dataRow['code_group'];
        }
    }

    $SAPrefEquip = '';
    if ($recordInfo['sr_ticket_type'] == 'ERECTION AND COMMISSIONING' || $recordInfo['sr_ticket_type'] == 'PRE-DELIVERY') {
        $equipId = $recordInfo['equip_id_da_sr'];
        $equipId = explode('x', $equipId);
        $equipId = $equipId[1];
        if (!empty($equipId)) {
            $recordInstance = Vtiger_Record_Model::getInstanceById($equipId);
            $SAPrefEquip = $recordInstance->get('manual_equ_ser');
        }
    } else {
        $equipId = $recordInfo['equipment_id'];
        $equipId = explode('x', $equipId);
        $equipId = $equipId[1];
        if (!empty($equipId)) {
            $recordInstance = Vtiger_Record_Model::getInstanceById($equipId);
            $SAPrefEquip = $recordInstance->get('equipment_sl_no');
        }
    }

    $conditionAfterAction = $recordInfo['eq_sta_aft_act_taken'];
    $conditionAfterActionCode = getCodeOFValue('eq_sta_aft_act_taken', $conditionAfterAction);

    $conditionBeforeSRGen = $recordInfo['fd_eq_sta_bsr'];
    $conditionBeforeSRGenCode = getCodeOFValue('fd_eq_sta_bsr', $conditionBeforeSRGen);

    // malfunction Implementation
    $ticketCreatedDateTimeArr = explode(' ', $ticketCreatedDateTime);
    $ticketCreatedTime = $ticketCreatedDateTimeArr[1];

    $time = strtotime($ticketCreatedTime);
    $startTime = date("H:i:s", strtotime('+5 hours 30 minutes', $time));
    $ticketTimeSAPFormat = str_replace(':', '', $startTime);

    $malfunctionStartDate = $recordInfo['date_of_failure'];
    $malfunctionStartDateSAPFormat = str_replace('-', '', $malfunctionStartDate);


    $malfunctionEndDate = $recordInfo['restoration_date'];
    $malfunctionEndDateSAPFormat = str_replace('-', '', $malfunctionEndDate);
    $malfunctionEndTime = $recordInfo['restoration_time'];
    $malfunctionEndTimeSAPFormat = str_replace(':', '', $malfunctionEndTime);

    $hmr = floatval($recordInfo['hmr']);
    $kmRun = floatval($recordInfo['kilometer_reading']);

    $url = getExternalAppURL('CreateOnlySR');
    $header = array('Content-Type:multipart/form-data');
    $data = array(
        'IM_TYPE'  => $notiType,
        'IM_TEXT' => $symptoms,
        'IM_EQUNR'  => $SAPrefEquip,
        'IM_MSAUS' => 'X',
        // 'IM_EAUSZT' =>  '0.00',
        // 'IM_MAUEH'  => '',
        'IM_LTEXT1' => $Observation,
        'IM_LTEXT2' => $actionTaken,
        'IM_LTEXT3' => '',
        'IM_ISHMR' => 'X',
        'IM_LTEXT4' => '',
        'IM_REPORTEDBY' => $reportedBy,
        'IM_RESPOSIBLE' => $partPertainsToCodeGroup . ',' . $partPertainsToCode,
        'IM_EFFECT' =>  getValueEffect($recordInfo['eq_sta_aft_act_taken']),
        'IM_BEFORE_MALFUNC' => $conditionBeforeSRGenCode,
        'IM_AFTER_MALFUNC' =>  getCodeOFValue('sr_equip_status', $recordInfo['sr_equip_status']),
        'IM_COND_AFTERTASK' =>  $conditionAfterActionCode,
        'IM_MALFUNC_STARTDATE' => $malfunctionStartDateSAPFormat,
        'IM_MALFUNC_ENDDATE' => $malfunctionEndDateSAPFormat,
        'IM_MALFUNC_ENDTIME' => $malfunctionEndTimeSAPFormat,
        'IM_HMR_READING' => $hmr,
        'IM_NOTIFDATE' => str_replace('-', '', $ticketCreatedDateTimeArr[0]),
        'IM_NOTIFTIME' => $ticketTimeSAPFormat
    );

    if ($data['IM_RESPOSIBLE'] == ',') {
        $data['IM_RESPOSIBLE'] = "";
    }

    if (!empty($kmRun)) {
        $data['IM_ISHMR'] = '';
        $data['IM_HMR_READING'] = $kmRun;
    }

    if (empty($malfunctionStartDateSAPFormat)) {
        unset($data['IM_MALFUNC_STARTDATE']);
    }
    if (empty($malfunctionEndDateSAPFormat)) {
        unset($data['IM_MALFUNC_ENDDATE']);
    }
    if (empty($ticketTimeSAPFormat)) {
        unset($data['IM_MALFUNC_STARTTIME']);
    }
    if (empty($malfunctionEndTimeSAPFormat)) {
        unset($data['IM_MALFUNC_ENDTIME']);
    }

    if (empty($data['IM_NOTIFDATE'])) {
        unset($data['IM_NOTIFDATE']);
    }

    $data['sr_ticket_type'] = $recordInfo['sr_ticket_type'];
    if ($recordInfo['sr_ticket_type'] == 'BREAKDOWN' || $recordInfo['sr_ticket_type'] == 'ERECTION AND COMMISSIONING' || $recordInfo['sr_ticket_type'] == 'PRE-DELIVERY') {
        if ($recordInfo['sr_ticket_type'] == 'BREAKDOWN') {
            $data['IM_MALFUNC_STARTTIME'] = $ticketTimeSAPFormat;
        }
        $data['IT_OBJECTPART'] = json_encode(getAsArrayOfCodes($recordInfo['fail_de_system_affected'], 'fail_de_system_affected'));
        $data['IT_DAMAGE'] = json_encode(getAsArrayOfCodes($recordInfo['fail_de_parts_affected'], 'fail_de_parts_affected'));
        $data['IT_CAUSE'] = json_encode(getAsArrayOfCodes($recordInfo['fail_de_type_of_damage'], 'fail_de_type_of_damage'));
    }
    // print_r($data);
    // die();
    $log->debug("*****Data Sendig To SAP***********" . json_encode($data) . "********");
    $resource = curl_init();
    curl_setopt($resource, CURLOPT_URL, $url);
    curl_setopt($resource, CURLOPT_HTTPHEADER, $header);
    curl_setopt($resource, CURLOPT_POST, 1);
    curl_setopt($resource, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($resource, CURLOPT_POSTFIELDS, $data);
    $responseUnEncoded = curl_exec($resource);
    $log->debug("*****Response Recived From SAP***********$responseUnEncoded********");
    $response = json_decode($responseUnEncoded, true);
    curl_close($resource);

    $ticketId = $recordInfo['ticket_id'];
    $ticketId = explode('x', $ticketId);
    $ticketId = $ticketId[1];
    if (empty(trim($response['EX_QMNUM']))) {
        global $actionFromMobileApis;
        if ($actionFromMobileApis) {
            $jsonParseError = json_last_error();
            global $hasSAPErrors, $ErrorMessage, $SAPDetailError;
            $hasSAPErrors = true;
            $ErrorMessage = "SAP Sync Is Failed";
            if (empty($jsonParseError)) {
                $SAPDetailError = IgGetSAPErrorFormatASerrorArray($response['IT_RETURN']);
            } else {
                $SAPDetailError = $responseUnEncoded;
            }
        } else {
            $jsonParseError = json_last_error();
            if (empty($jsonParseError)) {
                $_SESSION["errorFromExternalApp"] = IgGetSAPErrorFormatASerrorArray($response['IT_RETURN']);
                $_SESSION["lastSyncedExterAppRecord"] = $id;
                header("Location: index.php?module=ServiceReports&view=Edit&record=$id&app=SUPPORT");
                exit();
            } else {
                $_SESSION["errorFromExternalApp"] = $responseUnEncoded;
                $_SESSION["lastSyncedExterAppRecord"] = $id;
                header("Location: index.php?module=ServiceReports&view=Edit&record=$id&app=SUPPORT");
                exit();
            }
        }
    } else {
        $notificationNumber = trim($response['EX_QMNUM']);
        $failedPartCanBeCreated = FailedPartCanBeCreated($id);
        if ($failedPartCanBeCreated == true) {
            createFailedPartsRecords($id, $ticketId, $notificationNumber);
        }
        if ($recordInstance) {
            $recordInstance->set('mode', 'edit');
            $recordInstance->set('eq_last_hmr', $hmr);
            $recordInstance->save();
        }
        $query = "UPDATE vtiger_troubletickets SET external_app_num=? WHERE ticketid=?";
        $adb->pquery($query, array($notificationNumber, $ticketId));
        handleCreationOfRecommisioningReport($recordInfo, $id);
        $responseObject = changeNotifiationStatus('In Progress', $notificationNumber, $ticketId);
        if ($responseObject['success'] == true) {
            $query = "UPDATE vtiger_troubletickets SET status = ? WHERE ticketid=?";
            $adb->pquery($query, array('In Progress', $ticketId));
        }
    }
}

function handleCreationOfRecommisioningReport($recordInfo, $id) {
    $ticketType = $recordInfo['sr_ticket_type'];
    $purpose = $recordInfo['tck_det_purpose'];
    if ($ticketType == 'BREAKDOWN') {
        $recommisioingReportCanBeCreated = recommisioingReportCanBeCreated($recordInfo);
        if ($recommisioingReportCanBeCreated == true) {
            createRecommisioningReport($id);
        }
    } else if ($ticketType == 'GENERAL INSPECTION' || $ticketType == 'PRE-DELIVERY' || $ticketType == 'ERECTION AND COMMISSIONING') {
        $recommisioingReportCanBeCreated = recommisioingReportCanBeCreatedGI($recordInfo);
        if ($recommisioingReportCanBeCreated == true) {
            createRecommisioningReport($id);
        }
    } else if ($ticketType == 'PREVENTIVE MAINTENANCE') {
        $recommisioingReportCanBeCreated = recommisioingReportCanBeCreatedGI($recordInfo);
        if ($recommisioingReportCanBeCreated == true) {
            createRecommisioningReport($id);
        }
    } else if ($ticketType == 'INSTALLATION OF SUB ASSEMBLY FITMENT') {
        $recommisioingReportCanBeCreated = recommisioingReportCanBeCreatedIOSAF($recordInfo);
        if ($recommisioingReportCanBeCreated == true) {
            createRecommisioningReport($id);
        }
    } else if ($ticketType == 'SERVICE FOR SPARES PURCHASED' && $purpose == 'WARRANTY CLAIM FOR SUB ASSEMBLY / OTHER SPARE PARTS') {
        $recommisioingReportCanBeCreated = recommisioingReportCanBeCreatedSFSP($recordInfo);
        if ($recommisioingReportCanBeCreated == true) {
            createRecommisioningReport($id);
        }
    } else if ($ticketType == 'DESIGN MODIFICATION') {
        $recommisioingReportCanBeCreated = recommisioingReportCanBeCreatedDesignModification($recordInfo);
        if ($recommisioingReportCanBeCreated == true) {
            createRecommisioningReport($id);
        }
    }
}

function recommisioingReportCanBeCreatedSFSP($recordInfo) {
    $equipmentStatus = $recordInfo['eq_sta_aft_act_t_sub'];
    if ($equipmentStatus == 'Not Working' || $equipmentStatus == 'Working with Problem') {
        return true;
    } else {
        return false;
    }
}

function recommisioingReportCanBeCreatedIOSAF($recordInfo) {
    $equipmentStatus = $recordInfo['at_sais'];
    if ($equipmentStatus == 'Not Completed') {
        return true;
    } else {
        return false;
    }
}

function recommisioingReportCanBeCreatedDesignModification($recordInfo) {
    $equipmentStatus = $recordInfo['at_dm_status'];
    if ($equipmentStatus == 'Not Completed') {
        return true;
    } else {
        return false;
    }
}

function recommisioingReportCanBeCreatedGI($recordInfo) {
    $equipmentStatus = $recordInfo['eq_sta_aft_act_taken'];
    $NeedToCreateEqSta = false;
    if ($equipmentStatus == 'Off Road') {
        return true;
    }
    if ($equipmentStatus == 'On Road' || $equipmentStatus == 'Running with Problem') {
        $NeedToCreateEqSta = true;
    }

    $id = $recordInfo['id'];
    $id = explode('x', $id);
    $id = $id[1];

    $demandCheck = getDemandCheckGI($id);

    if ($demandCheck == true && $NeedToCreateEqSta == true) {
        return true;
    } else {
        return false;
    }
}

function getDemandCheckGI($id) {
    global $adb;
    $sql = "select 1 from vtiger_inventoryproductrel  where id = ? and sr_action_one IN (? , ?)";
    $result = $adb->pquery($sql, array($id, 'To be Repaired', 'To be replaced'));
    $count = $adb->num_rows($result);
    if ($count > 0) {
        return true;
    } else {
        return false;
    }
}

function FailedPartCanBeCreated($id) {
    global $adb;
    $sql = "select 1 from vtiger_inventoryproductrel  where id = ? and sr_action_one = ?
     and sr_replace_action = ?";
    $result = $adb->pquery($sql, array($id, 'Replaced', 'From BEML Stock'));
    $count = $adb->num_rows($result);
    if ($count > 0) {
        return true;
    } else {
        return false;
    }
}

function recommisioingReportCanBeCreated($recordInfo) {
    $equipmentStatus = $recordInfo['eq_sta_aft_act_taken'];
    $NeedToCreateEqSta = false;
    if ($equipmentStatus == 'On Road' || $equipmentStatus == 'Running with Problem') {
        $NeedToCreateEqSta = true;
    }

    $id = $recordInfo['id'];
    $id = explode('x', $id);
    $id = $id[1];

    $demandCheck = getDemandCheck($id);

    if ($demandCheck == true && $NeedToCreateEqSta == true) {
        return true;
    } else {
        return false;
    }
}

function getDemandCheck($id) {
    global $adb;
    $sql = "select 1 from vtiger_inventoryproductrel  where id = ? and sr_action_one IN (? , ?)
     and sr_action_two = ?";
    $result = $adb->pquery($sql, array($id, 'To be Repaired', 'To be replaced', 'Required'));
    $count = $adb->num_rows($result);
    if ($count > 0) {
        return true;
    } else {
        return false;
    }
}

function getAsArrayOfCodes($recFieldValue, $fieldName) {
    global $adb;
    $products = [];
    $product = [];
    $reordMultiValues = explode('|##|', $recFieldValue);
    foreach ($reordMultiValues as $reordMultiValue) {
        $sql = "select code , code_group from vtiger_$fieldName "
            . " where $fieldName = ?";
        $sqlResult = $adb->pquery($sql, array(trim($reordMultiValue)));
        $dataRow = $adb->fetchByAssoc($sqlResult, 0);
        $typeOfDamageCode = '';
        $typeOfDamageGroupCode = '';
        if (!empty($dataRow)) {
            $typeOfDamageCode = $dataRow['code'];
            $typeOfDamageGroupCode = $dataRow['code_group'];
            $product['LINE'] = $typeOfDamageGroupCode . ',' . $typeOfDamageCode;
            array_push($products, $product);
        }
    }
    return $products;
}

function SyncToExternalOnSERCreate($entityData) {
    CreateOnlyNotification($entityData);
}

// function CreateAll($entityData) {
//     global $adb;
//     global $log;
//     $recordInfo = $entityData->{'data'};
//     $id = $recordInfo['id'];
//     $id = explode('x', $id);
//     $id = $id[1];

//     $ticketId = $recordInfo['ticket_id'];
//     $ticketId = explode('x', $ticketId);
//     $ticketId = $ticketId[1];
//     $sql = 'select external_app_num,createdtime from vtiger_troubletickets ' .
//         ' inner join vtiger_crmentity on vtiger_crmentity.crmid = vtiger_troubletickets.ticketid ' .
//         ' where ticketid = ?';
//     $sqlResult = $adb->pquery($sql, array($ticketId));
//     $dataRow = $adb->fetchByAssoc($sqlResult, 0);
//     $ticketCreatedDateTime = '';
//     if (empty($dataRow)) {
//     } else {
//         $exterAppNum = $dataRow['external_app_num'];
//         $ticketCreatedDateTime =  $dataRow['createdtime'];
//     }
//     if (!empty($exterAppNum)) {
//         return;
//     }
//     $notiType = $recordInfo['fail_de_sap_noti_type'];
//     $reportedById = $recordInfo['reported_by'];
//     $reportedById = explode('x', $reportedById);
//     $reportedById = $reportedById[1];
//     $reportedBy = Vtiger_Functions::getCRMRecordLabel($reportedById);
//     $symptoms = $recordInfo['symptoms'];

//     $Observation = $recordInfo['fd_obvservation'];
//     $actionTaken = $recordInfo['action_taken_block'];
//     // Implement fail_de_system_affected
//     $systemAffected = $recordInfo['fail_de_system_affected'];
//     $sql = 'select code , code_group from vtiger_fail_de_system_affected '
//         . ' where fail_de_system_affected = ?';
//     $sqlResult = $adb->pquery($sql, array($systemAffected));
//     $dataRow = $adb->fetchByAssoc($sqlResult, 0);
//     $systemAffetedCode = '';
//     $systemAffetedCodeGroup = '';
//     if (empty($dataRow)) {
//         $systemAffetedCode = '';
//         $systemAffetedCodeGroup = '';
//     } else {
//         $systemAffetedCode = $dataRow['code'];
//         $systemAffetedCodeGroup = $dataRow['code_group'];
//     }

//     // Implement fail_de_type_of_damage
//     $typeOfDamage = $recordInfo['fail_de_type_of_damage'];
//     print_r($typeOfDamage);
//     die();
//     $sql = 'select code , code_group from vtiger_fail_de_type_of_damage '
//         . ' where fail_de_type_of_damage = ?';
//     $sqlResult = $adb->pquery($sql, array($typeOfDamage));
//     $dataRow = $adb->fetchByAssoc($sqlResult, 0);
//     $typeOfDamageCode = '';
//     $typeOfDamageGroupCode = '';
//     if (empty($dataRow)) {
//         $typeOfDamageCode = '';
//         $typeOfDamageGroupCode = '';
//     } else {
//         $typeOfDamageCode = $dataRow['code'];
//         $typeOfDamageGroupCode = $dataRow['code_group'];
//     }

//     // Implement fail_de_part_pertains_to
//     $partPertainsTo = $recordInfo['fail_de_part_pertains_to'];
//     $sql = 'select code , code_group from vtiger_fail_de_part_pertains_to '
//         . ' where fail_de_part_pertains_to = ?';
//     $sqlResult = $adb->pquery($sql, array($partPertainsTo));
//     $dataRow = $adb->fetchByAssoc($sqlResult, 0);
//     $partPertainsToCode = '';
//     $partPertainsToCodeGroup = '';
//     if (empty($dataRow)) {
//         $partPertainsToCode = '';
//         $partPertainsToCodeGroup = '';
//     } else {
//         $partPertainsToCode = $dataRow['code'];
//         $partPertainsToCodeGroup = $dataRow['code_group'];
//     }

//     // Implement fail_de_parts_affected
//     $partEffected = $recordInfo['fail_de_parts_affected'];
//     $sql = 'select code , code_group from vtiger_fail_de_parts_affected'
//         . ' where fail_de_parts_affected = ?';
//     $sqlResult = $adb->pquery($sql, array($partEffected));
//     $dataRow = $adb->fetchByAssoc($sqlResult, 0);
//     $partEffectedCode = '';
//     $partEffectedCodeGroup = '';
//     if (empty($dataRow)) {
//         $partEffectedCode = '';
//         $partEffectedCodeGroup = '';
//     } else {
//         $partEffectedCode = $dataRow['code'];
//         $partEffectedCodeGroup = $dataRow['code_group'];
//     }

//     $equipId = $recordInfo['equipment_id'];
//     $equipId = explode('x', $equipId);
//     $equipId = $equipId[1];

//     $SAPrefEquip = '';
//     if (!empty($equipId)) {
//         $recordInstance = Vtiger_Record_Model::getInstanceById($equipId);
//         $SAPrefEquip = $recordInstance->get('equipment_sl_no');
//     }

//     $conditionAfterAction = $recordInfo['eq_sta_aft_act_taken'];
//     $conditionAfterActionCode = getCodeOFValue('eq_sta_aft_act_taken', $conditionAfterAction);

//     $conditionBeforeSRGen = $recordInfo['fd_eq_sta_bsr'];
//     $conditionBeforeSRGenCode = getCodeOFValue('fd_eq_sta_bsr', $conditionBeforeSRGen);

//     // malfunction Implementation
//     $ticketCreatedDateTimeArr = explode(' ', $ticketCreatedDateTime);
//     $ticketCreatedTime = $ticketCreatedDateTimeArr[1];
//     $ticketTimeSAPFormat = str_replace(':', '', $ticketCreatedTime);
//     $malfunctionStartDate = $recordInfo['date_of_failure'];
//     $malfunctionStartDateSAPFormat = str_replace('-', '', $malfunctionStartDate);


//     $malfunctionEndDate = $recordInfo['restoration_date'];
//     $malfunctionEndDateSAPFormat = str_replace('-', '', $malfunctionEndDate);
//     $malfunctionEndTime = $recordInfo['restoration_time'];
//     $malfunctionEndTimeSAPFormat = str_replace(':', '', $malfunctionEndTime);

//     $products = getProductsOfServiceReport($id);
//     $hmr = $recordInfo['hmr'];
//     include_once('include/utils/GeneralUtils.php');
//     $url = getExternalAppURL('CreateSR');
//     $header = array('Content-Type:multipart/form-data');
//     $data = array(
//         'IM_TYPE'  => $notiType,
//         'IM_TEXT' => $symptoms,
//         'IM_EQUNR'  => $SAPrefEquip,
//         'IM_MSAUS' => 'X',
//         'IM_EAUSZT' =>  '0.00',
//         // 'IM_MAUEH'  => '',
//         'IM_TEXT1' => $Observation,
//         'IM_TEXT2' => $actionTaken,
//         'IM_TEXT3' => $Observation . '\n' . $actionTaken,
//         'IM_REPORTEDBY' => $reportedBy,
//         'IM_RESPOSIBLE' => $partPertainsToCodeGroup . ',' . $partPertainsToCode,
//         'IM_OBJECTPART' => $systemAffetedCodeGroup . ',' . $systemAffetedCode,
//         'IM_DAMAGE' => $partEffectedCodeGroup . ',' . $partEffectedCode,
//         'IM_CAUSE' => $typeOfDamageGroupCode . ',' . $typeOfDamageCode,
//         'IM_EFFECT' =>  $conditionAfterActionCode,
//         'IM_BEFORE_MALFUNC' => $conditionBeforeSRGenCode,
//         'IM_AFTER_MALFUNC' =>  getCodeOFValue('sr_equip_status', $recordInfo['sr_equip_status']),
//         'IM_COND_AFTERTASK' =>  $conditionAfterActionCode,
//         'IM_MALFUNC_STARTDATE' => $malfunctionStartDateSAPFormat,
//         'IM_MALFUNC_STARTTIME' =>  $ticketTimeSAPFormat,
//         'IM_MALFUNC_ENDDATE' => $malfunctionEndDateSAPFormat,
//         'IM_MALFUNC_ENDTIME' => $malfunctionEndTimeSAPFormat,
//         // 'IM_MEASURE_POINT'                '891'
//         'IM_HMR_READING' => $hmr,
//         'IT_ITEMS' => json_encode($products)
//     );
//     print_r($data);
//     // die();
//     $log->debug("*****Data Sendig To SAP***********" . json_encode($data) . "********");
//     $resource = curl_init();
//     curl_setopt($resource, CURLOPT_URL, $url);
//     curl_setopt($resource, CURLOPT_HTTPHEADER, $header);
//     curl_setopt($resource, CURLOPT_POST, 1);
//     curl_setopt($resource, CURLOPT_RETURNTRANSFER, 1);
//     curl_setopt($resource, CURLOPT_POSTFIELDS, $data);
//     $response = curl_exec($resource);
//     $responseUnencode = $response;
//     // var_dump($response);
//     // die();
//     $log->debug("*****Response Recived From SAP***********$response********");
//     $response = json_decode($response, true);
//     curl_close($resource);

//     $ticketId = $recordInfo['ticket_id'];
//     $ticketId = explode('x', $ticketId);
//     $ticketId = $ticketId[1];
//     if (empty(trim($response['EX_QMNUM']))) {
//         print_r("<h3> Creating NotificationIn SAP Is Failed Because Of Following Error,Please Fix The Problems</h3></br>");
//         print_r(json_encode($response));
//         print_r($responseUnencode);
//         print_r("<br><h3><a href='index.php?module=ServiceReports&view=Edit&record=$id&app=MARKETING'> Click Here </a></h3>");
//         exit();
//     }

//     global $isAlreadyServiceOrderCreated;
//     $isAlreadyServiceOrderCreated = true;
//     createServiceOrder($id, $ticketId, $response['EX_AUFNR']);
//     createFailedPartsRecords($id, $ticketId);
//     $query = "UPDATE vtiger_troubletickets SET external_app_num=? WHERE ticketid=?";
//     $adb->pquery($query, array($response['EX_QMNUM'], $ticketId));
// }

function getProductsOfServiceReport($recordId) {
    global $adb;
    $query = "SELECT
        case when vtiger_products.productid != '' then vtiger_products.productname else vtiger_service.servicename end as productname,
        case when vtiger_products.productid != '' then vtiger_products.product_no else vtiger_service.service_no end as productcode,
        case when vtiger_products.productid != '' then vtiger_products.unit_price else vtiger_service.unit_price end as unit_price,
        case when vtiger_products.productid != '' then vtiger_products.qtyinstock else 'NA' end as qtyinstock,
        case when vtiger_products.productid != '' then 'Products' else 'Services' end as entitytype,
        vtiger_inventoryproductrel.listprice, vtiger_products.is_subproducts_viewable, 
        vtiger_inventoryproductrel.description AS product_description, vtiger_inventoryproductrel.*,
        vtiger_crmentity.deleted FROM vtiger_inventoryproductrel
        LEFT JOIN vtiger_crmentity ON vtiger_crmentity.crmid=vtiger_inventoryproductrel.productid
        LEFT JOIN vtiger_products ON vtiger_products.productid=vtiger_inventoryproductrel.productid
        LEFT JOIN vtiger_service ON vtiger_service.serviceid=vtiger_inventoryproductrel.productid
        WHERE id=? ORDER BY sequence_no";
    $params = array($recordId);
    $result = $adb->pquery($query, $params);
    $num_rows = $adb->num_rows($result);
    $products = [];
    for ($i = 0; $i < $num_rows; $i++) {
        $product = array();
        $product['MATNR'] = $adb->query_result($result, $i, 'productname');
        $product['MENGE'] = $adb->query_result($result, $i, 'quantity');
        $product['POSTP'] = 'L';
        array_push($products, $product);
    }
    return $products;
}

function getCodeOFValue($keyTable, $value) {
    // global $adb;
    // $sql = 'select code from vtiger_' . $keyTable
    //     . ' where ' . $keyTable . ' = ?';
    // $sqlResult = $adb->pquery($sql, array($value));
    // $dataRow = $adb->fetchByAssoc($sqlResult, 0);
    // $code = '';
    // if (empty($dataRow)) {
    //     $code = '';
    // } else {
    //     $code = $dataRow['code'];
    // }
    // return $code;
    $code = '';
    switch ($value) {
        case "On Road":
            $code = '1';
            break;
        case "Running with Problem":
            $code = '2';
            break;
        case "Off Road":
            $code = '3';
            break;
        default:
            $code = '';
    }
    return $code;
}

function createFailedPartsRecords($id, $ticketId, $sapNotiNumber) {
    $salesorder_id = $id;
    require_once('include/utils/utils.php');
    require_once('modules/ServiceReports/ServiceReports.php');
    require_once('modules/FailedParts/FailedParts.php');
    require_once('modules/Users/Users.php');

    global $current_user;
    if (!$current_user) {
        $current_user = Users::getActiveAdminUser();
    }
    $so_focus = new ServiceReports();
    $so_focus->id = $salesorder_id;
    $so_focus->retrieve_entity_info($salesorder_id, "ServiceReports");
    foreach ($so_focus->column_fields as $fieldname => $value) {
        $so_focus->column_fields[$fieldname] = decode_html($value);
    }

    $focus = new FailedParts();
    $focus = getConvertSrepToServiceOrder($focus, $so_focus, $salesorder_id);
    $focus->id = '';
    $focus->mode = '';
    $invoice_so_fields = array(
        'txtAdjustment' => 'txtAdjustment',
        'hdnSubTotal' => 'hdnSubTotal',
        'hdnGrandTotal' => 'hdnGrandTotal',
        'hdnTaxType' => 'hdnTaxType',
        'hdnDiscountPercent' => 'hdnDiscountPercent',
        'hdnDiscountAmount' => 'hdnDiscountAmount',
        'hdnS_H_Amount' => 'hdnS_H_Amount',
        'assigned_user_id' => 'assigned_user_id',
        'currency_id' => 'currency_id',
        'conversion_rate' => 'conversion_rate',
    );
    foreach ($invoice_so_fields as $invoice_field => $so_field) {
        $focus->column_fields[$invoice_field] = $so_focus->column_fields[$so_field];
    }
    $focus->column_fields['ticket_id'] = $ticketId;
    $focus->column_fields['equipment_id'] = $so_focus->column_fields['equipment_id'];
    $focus->column_fields['project_name'] = $so_focus->column_fields['project_name'];
    $focus->column_fields['sr_app_num'] = $sapNotiNumber;
    $focus->column_fields['replaced_date'] = $so_focus->column_fields['createdtime'];
    global $replacedDate;
    $replacedDate = $so_focus->column_fields['createdtime'];
    $focus->_servicereportid = $salesorder_id;
    $focus->_recurring_mode = 'duplicating_from_service_report';
    global $creationOfFailedPartRecord;
    $creationOfFailedPartRecord = true;

    $focus->save("FailedParts");
    global $adb;
    if (!empty($focus->id)) {
        $query = "UPDATE vtiger_failedparts SET sr_app_num = ? WHERE failedpartid=?";
        $adb->pquery($query, array($sapNotiNumber, $focus->id));
    }
    return $focus->id;
}

function createRecommisioningReport($id) {
    $salesorder_id = $id;
    require_once('include/utils/utils.php');
    require_once('modules/ServiceReports/ServiceReports.php');
    require_once('modules/RecommissioningReports/RecommissioningReports.php');
    require_once('modules/Users/Users.php');

    global $current_user;
    if (!$current_user) {
        $current_user = Users::getActiveAdminUser();
    }
    $so_focus = new ServiceReports();
    $so_focus->id = $salesorder_id;
    $so_focus->retrieve_entity_info($salesorder_id, "ServiceReports");
    foreach ($so_focus->column_fields as $fieldname => $value) {
        $so_focus->column_fields[$fieldname] = decode_html($value);
    }

    $focus = new RecommissioningReports();
    $focus = getConvertSrepToServiceOrder($focus, $so_focus, $salesorder_id);
    $focus->id = '';
    $focus->mode = '';
    $invoice_so_fields = array(
        'txtAdjustment' => 'txtAdjustment',
        'hdnSubTotal' => 'hdnSubTotal',
        'hdnGrandTotal' => 'hdnGrandTotal',
        'hdnTaxType' => 'hdnTaxType',
        'hdnDiscountPercent' => 'hdnDiscountPercent',
        'hdnDiscountAmount' => 'hdnDiscountAmount',
        'hdnS_H_Amount' => 'hdnS_H_Amount',
        'assigned_user_id' => 'assigned_user_id',
        'currency_id' => 'currency_id',
        'conversion_rate' => 'conversion_rate',
    );
    foreach ($invoice_so_fields as $invoice_field => $so_field) {
        $focus->column_fields[$invoice_field] = $so_focus->column_fields[$so_field];
    }
    foreach ($so_focus->column_fields as $fieldname => $value) {
        $focus->column_fields[$fieldname] = decode_html($value);
    }
    $focus->_servicereportid = $salesorder_id;
    $focus->_recurring_mode = 'creating_rr_from_service_report';
    $focus->column_fields['ticketstatus'] = 'In Progress';
    $focus->save("RecommissioningReports");
    return $focus->id;
}
