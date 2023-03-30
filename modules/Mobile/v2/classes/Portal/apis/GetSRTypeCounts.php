<?php
class Portal_GetSRTypeCounts_API extends Portal_Default_API {
	public function process(Portal_Request $request) {
		$params = array(
			'_operation' => 'GetSRTypeCounts'
		);
		$result = Vtiger_Connector::getInstance()->fireRequest($params);
		$response = new Portal_Response();
		$response->setResult($result);
		return $response;
	}
}