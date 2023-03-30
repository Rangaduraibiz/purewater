<?php
    ini_set('max_execution_time', 0);
    ini_set("memory_limit", "-1");

    // ini_set('display_errors', 1);
    // ini_set('display_startup_errors', 1);
    // error_reporting(E_ALL);

    $hostName = "localhost";
    $userName = "root";
    $password = "";
    $dbName = "iit_madras";

    // Create connection
    $conn = new mysqli($hostName, $userName, $password, $dbName);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // GET SLA RECORDS
    $sqlSla = "SELECT * FROM tbl_sla_master";
    $resultSla = $conn->query($sqlSla);
    if ($resultSla->num_rows > 0) {
        $arrSla = array();
        // output data of each row
        while($row = $resultSla->fetch_assoc()) {
            $arrSla[] = $row;
        }
    } else {
        echo "0 SLA results";
    }

    // GET SLA CATEGORY RECORDS
    $sqlSlaCategory = "SELECT * FROM tbl_mst_category";
    $resultCategory = $conn->query($sqlSlaCategory);
    if ($resultCategory->num_rows > 0) {
        $arrSlaCategory = array();
        // output data of each row
        while($row = $resultCategory->fetch_assoc()) {
            $arrSlaCategory[$row["I_CategoryID"]] = $row;
        }
    } else {
        echo "0 SLA Category results";
    }

    // GET SLA SUB CATEGORY RECORDS
    $sqlSlaSubCategory = "SELECT * FROM tbl_mst_subcategory";
    $resultSubCategory = $conn->query($sqlSlaSubCategory);
    if ($resultSubCategory->num_rows > 0) {
        $arrSlaSubCategory = array();
        // output data of each row
        while($row = $resultSubCategory->fetch_assoc()) {
            $arrSlaSubCategory[$row["I_SubCategoryID"]] = $row;
        }
    } else {
        echo "0 SLA Sub Category results";
    }

    $conn->close();

    /**
     * START INSERTING RECORDS INTO vtiger_servicelevelagrrements TABLE
     */

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

    function checkAndInsertSubCategoryOption($subCategoryName) {
        global $adb;

        $sqlCheckSubCategory = 'SELECT * FROM `vtiger_sub_category` WHERE `sub_category` = ?';
        $sqlSubCategoryResult = $adb->pquery($sqlCheckSubCategory, array($subCategoryName));
        $numSubCategoryRows = $adb->num_rows($sqlSubCategoryResult);

        if($numSubCategoryRows > 0) {

        }
        else {
            $insertSubCategorySql = 'INSERT INTO vtiger_sub_category (`sub_category`) VALUES (?)';
            $adb->pquery($insertSubCategorySql, array($subCategoryName));
        }
    }

    $recordCnt = 0;
    foreach($arrSla as $key => $arrSlaDetail) {

        $categoryName = (isset($arrSlaCategory[$arrSlaDetail[i_category_id]]["V_CategoryName"])) ? $arrSlaCategory[$arrSlaDetail[i_category_id]]["V_CategoryName"] : "";
        $subCategoryName = (isset($arrSlaSubCategory[$arrSlaDetail[i_sub_category_id]]["V_SubCategoryName"])) ? $arrSlaSubCategory[$arrSlaDetail[i_sub_category_id]]["V_SubCategoryName"] : "";

        $strSlaHours = $arrSlaDetail['t_visit_time'];
        $slaHours = str_replace("hours", "", $strSlaHours);

        // FUNCTION CALL TO CHECK AND INSERT IF SUB CATEGORY NOT EXIST
        checkAndInsertSubCategoryOption($subCategoryName);

        $serviceLevelAgreement = CRMEntity::getInstance('ServiceLevelAgrrements');

        // SERVICE LEVEL AGREEMENT DETAILS
        $serviceLevelAgreement->column_fields['assigned_user_id'] = 1;
        $serviceLevelAgreement->column_fields["category"] = $categoryName;
        $serviceLevelAgreement->column_fields["sub_category"] = $subCategoryName;
        $serviceLevelAgreement->column_fields["sla_hours"] = $slaHours;

        $serviceLevelAgreement->save("ServiceLevelAgrrements");
        $recordCnt++;
    }

    echo "Total " . $recordCnt . " records has been inserted.";
    exit;
?>