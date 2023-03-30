<?php

class Portal_GetPincodeInfo_API extends Portal_Default_API {

	public function requireLogin() {
		return false;
	}

	public function preProcess(Portal_Request $request) {
	}

	public function postProcess(Portal_Request $request) {
	}

	public function process(Portal_Request $request) {
		$wholeRequest = array_merge($request->getAll(),$_REQUEST);
		$responseObject = Vtiger_Connector::getInstance()->GetPincodeInfo($wholeRequest);
		$result = array();
		$response = new Portal_Response();
		$response->setResult($responseObject['describe']);
		return $response;
	}
}
