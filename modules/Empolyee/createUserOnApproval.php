<?php
function createUserOnApproval($entityData) {
	global $adb,$ajaxEditingInSEmod;
	$data = $entityData->{'data'};
	$recordId = explode('x', $data['id']);
	$recordModel = Vtiger_Record_Model::getInstanceById($recordId[1], 'Empolyee');
	$EmpolyeeData = $recordModel->getData();
	$username = preg_replace('/\s+/', '', $EmpolyeeData['email']);
	$password = preg_replace('/\s+/', '', Vtiger_Functions::fromProtectedText($EmpolyeeData['confirm_password']));
	$result = $adb->pquery('SELECT id,user_name FROM `vtiger_users` where user_name = ?', array($username));
    $userDeta = $adb->fetchByassoc($result);
	
	if (!empty($userDeta)) {
		$usersRecordModel = Vtiger_Record_Model::getInstanceById($userDeta['id'], 'Users');
		$usersRecordModel->set('mode', 'edit');
		$recordModel->set('Active', $EmpolyeeData['permitted_status']);
		if($EmpolyeeData['aprovee']!='Accepted'){
			$recordModel->set('Active', 'Inactive');
		}
	}else{
		if($EmpolyeeData['aprovee']=='Accepted'){
			$users= CRMEntity::getInstance('Users');
			$users->column_fields['user_name'] 			=  $EmpolyeeData['email'];
			$users->column_fields['first_name'] 		=  $EmpolyeeData['first_name'];
			$users->column_fields['last_name'] 			=  $EmpolyeeData['lastname'];
			$users->column_fields['status'] 			=  'Active';
			$users->column_fields['is_admin'] 			=  'off';
			$users->column_fields['user_password'] 		=  $password;
			$users->column_fields['confirm_password'] 	=  $password;
			$users->column_fields['email1'] 			=  $EmpolyeeData['email'];
			$users->column_fields['phone_mobile'] 		=  $EmpolyeeData['phone'];
			$users->column_fields['roleid'] 			=  $EmpolyeeData['employee_role']; //'H37';
			$users->column_fields['tz'] 				= 'Asia/Kolkata';
			$users->column_fields['time_zone'] 			= 'Asia/Kolkata';
			$users->column_fields['date_format'] 		= 'dd/mm/yyyy';
			$users->column_fields['title'] 				= 'Asia';
			$users->save("Users");
		}
	}
	
}