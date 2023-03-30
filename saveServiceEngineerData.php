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

    function getRoleIdBasedOnRoleName($roleName) {
        global $adb;
        $sql = "SELECT * FROM `vtiger_role` where rolename = ?";
        $result = $adb->pquery($sql, array($roleName));
        $dataRow = $adb->fetchByAssoc($result, 0);
        if (empty($dataRow['roleid'])) {
            return '';
        } else {
            return $dataRow['roleid'];
        }
    }

    function autoUser($data){
        echo $data['badge_no'];
        global $adb;
        $result = $adb->pquery('SELECT 1 FROM `vtiger_users` where user_name = ?', array($data['badge_no']));
        $rowCount = $adb->num_rows($result);
        if ($rowCount > 0) {
            return;
        }
        $focus = new Users();
        $focus->column_fields['user_name'] =   $data['badge_no'];
        $focus->column_fields['first_name'] =  '';
        $focus->column_fields['last_name'] =  $data['service_engineer_name'];
        $focus->column_fields['status'] =  'Active';
        $focus->column_fields['is_admin'] =  'off';
        $focus->column_fields['user_password'] =  "Badmin@123";
        $focus->column_fields['confirm_password'] =  "Badmin@123";
        $focus->column_fields['email1'] =   $data['email'];
        // $focus->column_fields['address_street'] = $data['bill_street'];
        $focus->column_fields['phone_mobile'] = $data['phone'];
        $roleFeldName = 'Engineer';
	    $role = getRoleIdBasedOnRoleName($roleFeldName);
        $focus->column_fields['roleid'] = $role; //'H37';
        $focus->column_fields['tz'] =  'Asia/Kolkata';
        $focus->column_fields['time_zone'] =  'Asia/Kolkata';
        $focus->column_fields['date_format'] =  'dd/mm/yyyy';
        $focus->column_fields['title'] =  'Asia';
        $focus->save("Users");

    }
    // Create connection
    $conn = new mysqli($hostName, $userName, $password, $dbName);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM uniuserprofile";
    $result = $conn->query($sql);

    if( empty($adb) ) {
        $adb = new PearDatabase();
        $adb->connect();
        $adb->setDebug(true);
    }

    $recordCnt = 0;

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $serviceEngineer = CRMEntity::getInstance('ServiceEngineer');
            $serviceEngineer->column_fields['assigned_user_id'] = 1;
            $serviceEngineer->column_fields["badge_no"] = $row["AtxUserName"];
            $serviceEngineer->column_fields["service_engineer_name"] = $row["AtxDisplayName"];
            $serviceEngineer->column_fields["email"] = $row["AtxEmail"];
            $serviceEngineer->column_fields["date_of_birth"] = ( $row["AtxBirthDate"] != '0000-00-00') ? $row["AtxBirthDate"] : NULL;
            $serviceEngineer->column_fields["phone"] = $row["AtxHomePhone"];
            $serviceEngineer->column_fields["description"] = $row["AtxDescription"];
            $serviceEngineer->column_fields["approval_status"] = "Accepted";
            $serviceEngineer->column_fields["ser_usr_log_plat"] = "Both";

            $serviceEngineer->save("ServiceEngineer");

            $suma=$serviceEngineer->{'column_fields'};
            $reflection = new ReflectionClass( $suma);
            $storage_property = $reflection->getProperty('storage');
            $storage_property->setAccessible(true);
            $storage_array = $storage_property->getValue( $suma);
            autoUser($storage_array);
            $recordCnt++;
            echo "user ". $recordCnt." completed";

        }
      
    } else {
        echo "0 results";
    }

    $conn->close();

    echo "Total " . $recordCnt . " records has been inserted.";
    exit;
