<?php
    ini_set('max_execution_time', 0);
    ini_set("memory_limit", "-1");

    include_once 'config.php';
    include_once 'include/Webservices/Relation.php';
    include_once 'vtlib/Vtiger/Module.php';
    include_once 'includes/main/WebUI.php';

    global $adb;

    if( empty($adb) ) {
        $adb = new PearDatabase();
        $adb->connect();
        $adb->setDebug(true);
    }

    // ini_set('display_errors', 1);
    // ini_set('display_startup_errors', 1);
    // error_reporting(E_ALL);

    $hostName = "localhost";
    $userName = "root";
    $password = "";
    $dbName = "iitmadaras";

function getCRMEntityContactId($userId) {
    global $adb;
    $sql = 'select contactid from vtiger_contactdetails where user_id = ?';
    $sqlResult = $adb->pquery($sql, array($userId));
    $num_rows = $adb->num_rows($sqlResult);
    if ($num_rows > 0) {
        $dataRow = $adb->fetchByAssoc($sqlResult, 0);
        return $dataRow['contactid'];
    } else {
        return '';
    }
}

    // Create connection
    $conn = new mysqli($hostName, $userName, $password, $dbName);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // $sql = "SELECT *, tbl_mst_category.V_CategoryName as category_type , 
    //  tbl_mst_emergencytype.V_EmergencytypeName as sub_category_type ,tbl_mst_priority.V_CategoryName as urgency_type , tbl_mst_tasktype.V_CategoryName as complain_type ,
    //  tbl_mst_sourcetype.Sourcetype_Name as complaint_source , problemdefination.ComplainDate as reported_on, problemdefination.DeadLine as due_on,
    //  problemdefination.Subject as subject_data,problemdefination.ProblemDescription as description_data,  tbl_mst_status_dk.V_CategoryName as problem_status ,
    //  tbl_mst_timeslot.V_TimeslotName as preferred_timeslot ,accounts.AccountName as account_name
    //   FROM `problemdefination` 
    //   LEFT JOIN tbl_mst_category ON problemdefination.ProblemType = tbl_mst_category.I_CategoryID
    // LEFT JOIN tbl_mst_emergencytype ON problemdefination.SubProblemType = tbl_mst_emergencytype.I_EmergencytypeID
    // LEFT JOIN tbl_mst_priority ON problemdefination.Urgency = tbl_mst_priority.I_CategoryID
    // LEFT JOIN tbl_mst_tasktype ON problemdefination.Type = tbl_mst_tasktype.I_CategoryID
    // LEFT JOIN tbl_mst_sourcetype ON problemdefination.I_SourceID = tbl_mst_sourcetype.Sourcetype_ID
    // LEFT JOIN tbl_mst_status_dk ON problemdefination.DStatus = tbl_mst_status_dk.I_CategoryID 
    // LEFT JOIN tbl_mst_timeslot ON problemdefination.i_TimeSlot = tbl_mst_timeslot.I_TimeSlotID 
    // LEFT JOIN accounts ON problemdefination.ReportedBy = accounts.AccountNumber
    // limit 60";
    // $result = $conn->query($sql);

    

    // if ($result->num_rows > 0 ) {
    //     $arrAccounts = array();
        
        

    //     // output data of each row
    //     while($row = $result->fetch_assoc() ) {
    //         $arrAccounts[] = $row;
            
    //     }
    // } else {
    //     echo "0 results";
    // }
    // $ServiceRequest = CRMEntity::getInstance('HelpDesk');

    // echo '<pre>';
    // print_r($ServiceRequest);

    // // echo 'hai';
    // print_r($arrAccounts);
    // // print_r($arrAccounts1);
    // echo '</pre>';
    // $conn->close();

    function getAssignedUserId($userName){
           global $adb;
           $sql="SELECT id FROM `vtiger_users` WHERE user_name=?";
           $sqlResult = $adb->pquery($sql, array($userName));
           $num_rows = $adb->fetchByAssoc($sqlResult);
           echo '<pre>';
           print_r($num_rows['id']);
           echo '</pre>';
           return $num_rows['id'];
    }

    $sql1 = "SELECT *,problemdefination.i_TechStaffId,uniuserprofile.AtxUserName, tbl_mst_category.V_CategoryName as category_type , 
     tbl_mst_emergencytype.V_EmergencytypeName as sub_category_type ,tbl_mst_priority.V_CategoryName as urgency_type , tbl_mst_tasktype.V_CategoryName as complain_type ,
     tbl_mst_sourcetype.Sourcetype_Name as complaint_source , problemdefination.ComplainDate as reported_on, problemdefination.DeadLine as due_on,
     problemdefination.Subject as subject_data,problemdefination.ProblemDescription as description_data,  tbl_mst_status_dk.V_CategoryName as problem_status ,
     tbl_mst_timeslot.V_TimeslotName as preferred_timeslot , accounts.AccountName as account_name 
      FROM `problemdefination` 
    LEFT JOIN tbl_mst_category ON problemdefination.ProblemType = tbl_mst_category.I_CategoryID
    LEFT JOIN tbl_mst_emergencytype ON problemdefination.SubProblemType = tbl_mst_emergencytype.I_EmergencytypeID
    LEFT JOIN tbl_mst_priority ON problemdefination.Urgency = tbl_mst_priority.I_CategoryID
    LEFT JOIN tbl_mst_tasktype ON problemdefination.Type = tbl_mst_tasktype.I_CategoryID
    LEFT JOIN tbl_mst_sourcetype ON problemdefination.I_SourceID = tbl_mst_sourcetype.Sourcetype_ID
    LEFT JOIN tbl_mst_status_dk ON problemdefination.DStatus = tbl_mst_status_dk.I_CategoryID 
    LEFT JOIN tbl_mst_timeslot ON problemdefination.i_TimeSlot = tbl_mst_timeslot.I_TimeSlotID
    LEFT JOIN accounts ON problemdefination.ReportedBy = accounts.AccountNumber 
    LEFT JOIN uniuserprofile ON problemdefination.i_TechStaffId=  uniuserprofile.AtxUserID
    limit 3000";
    $result1 = $conn->query($sql1);
    if ($result1->num_rows > 0 ) {
        
        // $arrAccounts1 = array();
        $recordCnt = 0;

        // output data of each row
        while( $row1 = $result1->fetch_assoc() ) {
            

        
            // $arrAccounts1[] = $row1;
            $ServiceRequest = CRMEntity::getInstance('HelpDesk');
        

        
            $ServiceRequest->column_fields['assigned_user_id'] = getAssignedUserId($row1['AtxUserName']);
            $ServiceRequest->column_fields["ticket_type"] = $row1["category_type"];
            $ServiceRequest->column_fields["sub_category"] = $row1["sub_category_type"];

            
            $ServiceRequest->column_fields["ticketpriorities"] = $row1["urgency_type"];
            $ServiceRequest->column_fields["complaint_type"] = $row1["complain_type"];
            $ServiceRequest->column_fields["complaint_source"] = $row1["complaint_source"];
            $ServiceRequest->column_fields["reported_on"] = $row1["reported_on"];
            $ServiceRequest->column_fields["due_by"] = $row1["due_on"];
            $ServiceRequest->column_fields["enter_subject"] = $row1["subject_data"];
            $ServiceRequest->column_fields["description"] = $row1["description_data"];
            $ServiceRequest->column_fields["problem_status"] = $row1["problem_status"];
            
            $ServiceRequest->column_fields["preferred_timeslot"] = $row1["preferred_timeslot"];
            // $ServiceRequest->column_fields["contact_id"] = $row1["AccountName"];
            $ServiceRequest->column_fields["opp_name"] = $row1["AccountName"];

            // handle contact Save
            $ServiceRequest->column_fields["contact_id"] = getCRMEntityContactId($row1["ProjectID"]);

            $ServiceRequest->save("HelpDesk");
            $recordCnt++;
            echo "Total " . $recordCnt . "records has been inserted.";
        }
    } else {
        echo "0 results";
    }
    echo "Total " . $recordCnt . " records has been inserted.";
    $conn->close();
    exit;
  

    /*
     * START INSERTING RECORDS INTO vtiger_contactdetails TABLE
     

    include_once 'config.php';
    include_once 'include/Webservices/Relation.php';
    include_once 'vtlib/Vtiger/Module.php';
    include_once 'includes/main/WebUI.php';

    global $adb;

    if( empty($adb) ) {
        $adb = new PearDatabase();
        $adb->connect();
        $adb->setDebug(true);
    }

    $recordCnt = 0;
    // $ServiceRequest = CRMEntity::getInstance('HelpDesk');
    echo '<pre>';
    // print_r($ServiceRequest);

    // echo 'hai';
    print_r($arrAccounts);
    print_r($arrAccounts1);
    echo '</pre>';
    
    // foreach($arrAccounts as $key => $arrAccount) {
    //     $ServiceRequest = CRMEntity::getInstance('HelpDesk');
        

        
    //     $ServiceRequest->column_fields['assigned_user_id'] = 1;
    //     $ServiceRequest->column_fields["ticket_type"] = $arrAccount["category_type"];
    //     $ServiceRequest->column_fields["sub_category"] = $arrAccount["sub_category_type"];

        
    //     $ServiceRequest->column_fields["ticketpriorities"] = $arrAccount["urgency_type"];
    //     $ServiceRequest->column_fields["complaint_type"] = $arrAccount["complain_type"];
    //     $ServiceRequest->column_fields["complaint_source"] = $arrAccount["complaint_source"];
    //     $ServiceRequest->column_fields["reported_on"] = $arrAccount["reported_on"];
    //     $ServiceRequest->column_fields["due_by"] = $arrAccount["due_on"];
    //     $ServiceRequest->column_fields["enter_subject"] = $arrAccount["subject_data"];
    //     $ServiceRequest->column_fields["description"] = $arrAccount["description_data"];
    //     $ServiceRequest->column_fields["problem_status"] = $arrAccount["problem_status"];
        
    //     $ServiceRequest->column_fields["preferred_timeslot"] = $arrAccount["preferred_timeslot"];

    //     $ServiceRequest->save("HelpDesk");
    //     $recordCnt++;
    // }

    echo "Total " . $recordCnt . " records has been inserted.";
    exit;
    */
