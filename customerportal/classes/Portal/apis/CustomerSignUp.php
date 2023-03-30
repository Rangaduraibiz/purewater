<?php
/* +**********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.2
 * ("License.txt"); You may not use this file except in compliance with the License
 * The Original Code is: Vtiger CRM Open Source
 * The Initial Developer of the Original Code is Vtiger.
 * Portions created by Vtiger are Copyright (C) Vtiger.
 * All Rights Reserved.
 * ***********************************************************************************/

class Portal_CustomerSignUp_API extends Portal_Default_API {

	public function requireLogin() {
		return false;
	}

	public function preProcess(Portal_Request $request) {
	}

	public function postProcess(Portal_Request $request) {
	}

	public function process(Portal_Request $request) {
		$wholeRequest = array_merge($request->getAll(),$_REQUEST);
		$companyDetails = Vtiger_Connector::getInstance()->CustomerSignUp($wholeRequest);
		$result = array();
		$response = new Portal_Response();
		if(isset($companyDetails['code'])){
			$response->setError($companyDetails['code'] , $companyDetails['message']);
		} else {
			$result['message'] = $companyDetails['message'];
			$response->setResult($result);
		}
		return $response;
	}
}
