<?php
ini_set('max_execution_time', 0);
ini_set("memory_limit", "-1");

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

include_once 'config.php';
include_once 'include/Webservices/Relation.php';
include_once 'vtlib/Vtiger/Module.php';
include_once 'includes/main/WebUI.php';

$hostName = "localhost";
$userName = "root";
$password = "";
$dbName = "iitmadaras";

// Create connection
$conn = new mysqli($hostName, $userName, $password, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// GET ZONE RECORDS
$sqlZone = "SELECT * FROM tbl_mst_zone";
$resultZone = $conn->query($sqlZone);
if ($resultZone->num_rows > 0) {
    $arrZone = array();
    // output data of each row
    while ($row = $resultZone->fetch_assoc()) {
        $arrZone[$row["Zone_ID"]] = $row["Zone_Name"];
    }
} else {
    echo "0 Zone results";
}

// GET AREA RECORDS
$sqlArea = "SELECT * FROM tbl_area";
$resultArea = $conn->query($sqlArea);
if ($resultArea->num_rows > 0) {
    $arrArea = array();
    // output data of each row
    while ($row = $resultArea->fetch_assoc()) {
        $arrArea[$row["i_ZoneId"] . "-" . $row["i_AreaId"]] = $row;
    }
} else {
    echo "0 Area results";
}

// GET HOUSE TYPE RECORDS
$sqlHouseType = "SELECT * FROM tbl_mst_housetype";
$resultHouseType = $conn->query($sqlHouseType);
if ($resultHouseType->num_rows > 0) {
    $arrHouseType = array();
    // output data of each row
    while ($row = $resultHouseType->fetch_assoc()) {
        $arrHouseType[$row["Housetype_ID"]] = $row["Housetype_Name"];
    }
} else {
    echo "0 House Type results";
}

$sql = "SELECT a.*, c.GivenName, c.sn, c.Mail, c.Birthday
            FROM accounts as a, crmcontactid as c 
            WHERE a.AccountNumber = c.AccountID";
$result = $conn->query($sql);

global $adb;
global $current_user;
$current_user = CRMEntity::getInstance('Users');
$userid = Users::getActiveAdminId();
$current_user->retrieveCurrentUserInfoFromFile($userid);
$_SESSION["authenticated_user_id"] =  '1';
$isAuthenticated = true;
if (empty($adb)) {
    $adb = new PearDatabase();
    $adb->connect();
    $adb->setDebug(true);
}

$recordCnt = 0;
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {

        $val = isRecordExits($row["AccountNumber"]);

        if (empty($val)) {
            $zone = $arrZone[$row["i_ZoneId"]];
            $arrAreaKey = $row["i_ZoneId"] . "-" . $row["i_AreaId"];
            $area = $arrArea[$arrAreaKey];
            $areaName = $area["v_AreaName"];
            $houseType = $arrHouseType[$row["i_HouseType"]];

            $contact = CRMEntity::getInstance('Contacts');

            // CONATCT DETAILS
            $contact->column_fields['assigned_user_id'] = 1;
            $contact->column_fields["user_id"] = $row["AccountNumber"];
            $contact->column_fields["firstname"] = $row["GivenName"];
            $contact->column_fields["lastname"] = $row["sn"];
            $contact->column_fields["birthday"] = $row["Birthday"];
            $contact->column_fields["email"] = $row["Mail"];
            $contact->column_fields["mobile"] = $row["Phone"];
            $contact->column_fields["homephone"] = $row["Phone2"];
            $contact->column_fields["otherphone"] = $row["alternatephone"];

            // LOCATION DETAILS
            $contact->column_fields["mailingstreet"] = $row["BillingStreet"];
            $contact->column_fields["mailingcity"] = $row["BillingCity"];
            $contact->column_fields["mailingstate"] = $row["BillingState"];
            $contact->column_fields["mailingzip"] = $row["BillingPostalCode"];
            $contact->column_fields["zone"] = $zone;
            $contact->column_fields["area"] = $areaName;
            $contact->column_fields["house_no"] = $row["v_HouseNo"];
            $contact->column_fields["house_type"] = $houseType;
            $contact->column_fields["location_id"] = $row["v_Locationid"];

            $contact->save("Contacts");
        } else {
            $recordModel = Contacts_Record_Model::getInstanceById($val);
            $recordModel->set('mode', 'edit');
            $zone = $arrZone[$row["i_ZoneId"]];
            $arrAreaKey = $row["i_ZoneId"] . "-" . $row["i_AreaId"];
            $area = $arrArea[$arrAreaKey];
            $areaName = $area["v_AreaName"];
            $houseType = $arrHouseType[$row["i_HouseType"]];
            // CONATCT DETAILS
            $recordModel->set("assigned_user_id", 1);
            $recordModel->set("user_id", $row["AccountNumber"]);
            $recordModel->set("firstname", $row["GivenName"]);
            $recordModel->set("lastname", $row["sn"]);
            $recordModel->set("birthday", $row["Birthday"]);
            $recordModel->set("email", $row["Mail"]);
            $recordModel->set("mobile", $row["Phone"]);
            $recordModel->set("homephone", $row["Phone2"]);
            $recordModel->set("otherphone", $row["alternatephone"]);

            // LOCATION DETAILS
            $recordModel->set("mailingstreet", $row["BillingStreet"]);
            $recordModel->set("mailingcity", $row["BillingCity"]);
            $recordModel->set("mailingstate", $row["BillingState"]);
            $recordModel->set("mailingzip", $row["BillingPostalCode"]);
            $recordModel->set("zone", $zone);
            $recordModel->set("area", $areaName);
            $recordModel->set("house_no", $row["v_HouseNo"]);
            $recordModel->set("house_type", $houseType);
            $recordModel->set("location_id", $row["v_Locationid"]);

            $recordModel->save();
        }

        $recordCnt++;
    }
} else {
    echo "0 results";
}

$conn->close();

echo "Total " . $recordCnt . " records has been inserted.";

function isRecordExits($userId) {
    global $adb;
    $sql = 'select contactid from vtiger_contactdetails 
                INNER JOIN vtiger_crmentity
				ON vtiger_crmentity.crmid = vtiger_contactdetails.contactid
    where user_id = ? and vtiger_crmentity.deleted = 0';
    $sqlResult = $adb->pquery($sql, array($userId));
    $num_rows = $adb->num_rows($sqlResult);
    if ($num_rows > 0) {
        $dataRow = $adb->fetchByAssoc($sqlResult, 0);
        return $dataRow['contactid'];
    } else {
        return '';
    }
}

exit;
