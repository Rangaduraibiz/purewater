<?php
class CustomerPortal_DescribeModuleForSR extends CustomerPortal_API_Abstract {

	function process(CustomerPortal_API_Request $request) {
		$current_user = $this->getActiveUser();
		$response = new CustomerPortal_API_Response();

		if ($current_user) {
			$module = $request->get('module');

			if (!CustomerPortal_Utils::isModuleActive($module)) {
				throw new Exception('Module not accessible', 1412);
				exit;
			}

			$describeInfo = vtws_describe($module, $current_user);
			$activeFields = CustomerPortal_Utils::getActiveFields($module, true);
			$activeFieldKeys = array_keys($activeFields);
			$dependencyFields = array('purpose', 'manual_equ_ser', 'manual_loc');
			foreach ($describeInfo['fields'] as $key => $value) {
				if (!in_array($value['name'], $activeFieldKeys)) {
					unset($describeInfo['fields'][$key]);
				} else {
					if (in_array($value['name'], $dependencyFields)) {
						if ($value['name'] == 'purpose') {
							$value['dependentField'] = true;
							$value['initialDisplay'] = false;
							$value['dependentOnOption'] = 'GENERAL INSPECTION';
							$value['mandatoryOndepentOnOption'] = true;
							$value['dependentOnField'] = 'ticket_type';
						} elseif ($value['name'] == 'manual_equ_ser') {
							$value['dependentField'] = true;
							$value['initialDisplay'] = false;
							$value['dependentOnOption'] = 'Other';
							$value['mandatoryOndepentOnOption'] = true;
							$value['dependentOnField'] = 'equipment_id';
						} elseif ($value['name'] == 'manual_loc') {
							$value['dependentField'] = true;
							$value['initialDisplay'] = false;
							$value['dependentOnOption'] = true;
							$value['mandatoryOndepentOnOption'] = true;
							$value['dependentOnField'] = 'chg_func_loc';
						}
					} else {
						$value['initialDisplay'] = false;
					}
					if ($value['name'] == 'ticket_type') {
						$value['initialDisplay'] = true;
						$pickList = $value['type']['picklistValues'];
						$pickListWithOnlyPermitted = [];
						foreach ($pickList as $pickListKey => $pickListValue) {
							if($pickListValue['value'] == 'DESIGN MODIFICATION' || $pickListValue['value'] == 'PRE-DELIVERY'){
								continue;
							}
							$pickListValue['label'] = $pickListValue['label'];
							$pickListValue['value'] = $pickListValue['value'];
							array_push($pickListWithOnlyPermitted,$pickListValue);
						}
						$value['type']['picklistValues'] = $pickListWithOnlyPermitted;
					}
					$value['default'] = decode_html($value['default']);
					if ($value['type']['name'] === 'picklist' || $value['type']['name'] === 'metricpicklist') {
						$pickList = $value['type']['picklistValues'];
						foreach ($pickList as $pickListKey => $pickListValue) {
							$pickListValue['label'] = decode_html(vtranslate($pickListValue['value'], $module));
							$pickListValue['value'] = decode_html($pickListValue['value']);
							$pickList[$pickListKey] = $pickListValue;
						}
						$value['type']['picklistValues'] = $pickList;
					} else if ($value['type']['name'] === 'time') {
						$value['default'] = Vtiger_Time_UIType::getTimeValueWithSeconds($value['default']);
					}
					$value['label'] = decode_html($value['label']);
					if ($activeFields[$value['name']]) {
						$value['editable'] = true;
					} else {
						$value['editable'] = false;
					}
					$describeInfo['fields'][$key] = $value;

					$position = array_search($value['name'], $activeFieldKeys);
					$fieldList[$position] = $describeInfo['fields'][$key];
				}
			}
			if ($fieldList) {
				unset($describeInfo['fields']);
				$describeInfo['fields'] = $fieldList;
			}

			$describeInfo['label'] = decode_html(vtranslate($describeInfo['label'], $module));
			$dependencyArray = [];
			$dependencyArray['ticket_type'] = Vtiger_DependencyPicklist::getFieldsFitDependency('HelpDesk', 'ticket_type', 'ticketpriorities');
			$dependencyArray['purpose'] = Vtiger_DependencyPicklist::getFieldsFitDependency('HelpDesk', 'purpose', 'ticketstatus');
			$describeInfo['FieldDependency'] = $dependencyArray;
			$picklistDependency = [];
			$picklistDependency['ticket_type'] = Vtiger_DependencyPicklist::getPickListDependency('HelpDesk', 'ticket_type', 'purpose');
			$describeInfo['picklistDependency'] = $picklistDependency;
			$response->addToResult('describe', $describeInfo);
		}
		return $response;
	}
}
  