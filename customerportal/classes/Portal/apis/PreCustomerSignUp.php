<?php

class Portal_PreCustomerSignUp_API extends Portal_Default_API {

	public function requireLogin() {
		return false;
	}

	public function preProcess(Portal_Request $request) {
	}

	public function postProcess(Portal_Request $request) {
	}

	public function process(Portal_Request $request) {
		$wholeRequest = array_merge($request->getAll(), $_REQUEST);
		$ResponseFromPortal = Vtiger_Connector::getInstance()->PreCustomerSignUp($wholeRequest);
		$result = array();
		$response = new Portal_Response();
		if (isset($ResponseFromPortal['code'])) {
			$response->setError($ResponseFromPortal['code'], $ResponseFromPortal['message']);
		} else {
			$result['message'] = $ResponseFromPortal['message'];
			$result['uid'] = $ResponseFromPortal['uid'];
			$response->setResult($result);
		}
		$response->setResult($ResponseFromPortal);
		return $response;
	}
}
