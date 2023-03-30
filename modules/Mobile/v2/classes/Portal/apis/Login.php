<?php
class Portal_Login_API extends Portal_Default_API {

	public function requireLogin() {
		return false;
	}

	public function preProcess(Portal_Request $request) {
		
	}

	public function postProcess(Portal_Request $request) {
		
	}

	public function process(Portal_Request $request) {
		$response = new Portal_Response();
		$params = $request->get('q');
		$userName = $request->get('username');
		if(empty($userName)){
			$response->setError('Username Is Missing');
			return $response;
		}
		$password = $request->get('password');
		if(empty($password)){
			$response->setError('Password Is Missing');
			return $response;
		}
		if ($params['language']) {
			Portal_Session::set('language', $params['language']);
		}
		$result = Vtiger_Connector::getInstance()->ping($userName, $password);
		$loginStatus = array();
		if (isset($result['message']) && (!strcmp($result['message'], "Login Required"))) {
			$response->setError(1501,  'Could not authenticate.');
		} else if (isset($result['message']) && !strcmp($result['message'], "Login failed")) {
			$response->setError(1501,  'The email or password you entered is incorrect.');
		} else if (isset($result['message']) && strpos($result['message'], "Portal access has not been enabled for this account") !== false) {
			$response->setError(1501, 'Portal access has not been enabled for this account.');
		} else if (isset($result['message']) && strpos($result['message'], "Access to the portal was disabled on ") !== false) {
			$response->setError(1501,  $result['message']);
		} else if (isset($result['message']) && strpos($result['message'], "Contacts module is disabled") !== false) {
			$response->setError(1501,  "Contacts module is disabled!");
		} else if (isset($result['message']) && strpos($result['message'], "Customer portal not available with the current edition, please upgrade!!") !== false) {
			$response->setError(1501,  $result['message']);
		} else if (isset($result['message']) && strpos($result['message'], "Your access to portal is not enabled yet. Access to support starts on") !== false) {
			$response->setError(1501,  $result['message']);
		} else if (empty($result)) {
			$response->setError(1501, 'Cannot connect to Server.Please configure your site url in provided config file.');
		} else {
			Portal_Session::set('username', $userName);
			Portal_Session::set('password', $password);
			Vtiger_Connector::getInstance()->fetchModules();
			Vtiger_Connector::getInstance()->updateLoginDetails('Login');
			$loginStatus['session'] = session_id();
			$date = new DateTime();
			//$data = $this->getUserDetailsBasedOnEmployeeModule($userName);
			// if($data == false){
			// 	$response->setError(1501, 'Not Able To Find User Details');
			// 	return $response;
			// }
			$loginStatus['usertype'] = 'CUSTOMER';
			$loginStatus['usercreatedid'] = $data['contactid'];
			$loginStatus['usermobilenumber'] = $data['mobile'];
			$loginStatus['timestamp'] = $date->getTimestamp();
			$loginStatus['useruniqeid'] = 'Unique Id From Server//to do';
			$loginStatus['message'] = 'Thank You Have Been Login Succesfully';
			$response->setApiSucessMessage('Successfully Logged In');
			$response->setResult($loginStatus);
		}
		return $response;
	}

	function getUserDetailsBasedOnEmployeeModule($badgeNo) {
		global $adb;
		$sql = 'select contactid,mobile from vtiger_contactdetails '
			. ' inner join vtiger_crmentity on vtiger_crmentity.crmid = vtiger_contactdetails.contactid '
			. ' where vtiger_contactdetails.contact_no = ? and vtiger_crmentity.deleted = 0';
		$sqlResult = $adb->pquery($sql, array($badgeNo));
		$num_rows = $adb->num_rows($sqlResult);
		if ($num_rows == 1) {
			$dataRow = $adb->fetchByAssoc($sqlResult, 0);
			return $dataRow;
		} else {
			return false;
		}
	}

}
