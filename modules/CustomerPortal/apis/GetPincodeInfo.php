<?php

class CustomerPortal_GetPincodeInfo extends CustomerPortal_API_Abstract {

	function process(CustomerPortal_API_Request $request) {
		$pincode = $request->get('pincode');
		$url = 'https://api.postalpincode.in/pincode/' . $pincode;
		$arrContextOptions=array(
			"ssl"=>array(
			   "verify_peer"=>false,
			   "verify_peer_name"=>false,
			),
		);
		$res = file_get_contents($url,false, stream_context_create($arrContextOptions));
		$res = json_decode($res, true);
		$address = $res[0]['PostOffice'][0];
		$response = new CustomerPortal_API_Response();
		$response->addToResult('describe', $address);
		return $response;
	}

	function authenticatePortalUser($username, $password) {
		return true;
	}
}
