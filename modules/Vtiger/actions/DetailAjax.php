<?php

class Vtiger_DetailAjax_Action extends Vtiger_BasicAjax_Action {

    public function __construct() {
        parent::__construct();
        $this->exposeMethod('getRecordsCount');
    }

    public function requiresPermission(Vtiger_Request $request) {
        $permissions = parent::requiresPermission($request);
        $mode = $request->getMode();
        if (!empty($mode)) {
            switch ($mode) {
                case 'getRecordsCount':
                    $permissions[] = array('module_parameter' => 'relatedModule', 'action' => 'DetailView');
                    break;
                default:
                    break;
            }
        }
        return $permissions;
    }

    public function checkPermission(Vtiger_Request $request) {
        return parent::checkPermission($request);
    }

    public function process(Vtiger_Request $request) {
        $mode = $request->get('mode');
        if (!empty($mode)) {
            $this->invokeExposedMethod($mode, $request);
            return;
        }
    }

    /**
     * Function to get related Records count from this relation
     * @param <Vtiger_Request> $request
     * @return <Number> Number of record from this relation
     */
    public function getRecordsCount(Vtiger_Request $request) {
        $moduleName = $request->getModule();
        $relatedModuleName = $request->get('relatedModule');
        $parentId = $request->get('record');
        $label = $request->get('tab_label');

        $parentRecordModel = Vtiger_Record_Model::getInstanceById($parentId, $moduleName);
        $relationListView = Vtiger_RelationListView_Model::getInstance($parentRecordModel, $relatedModuleName, $label);
        $count = $relationListView->IGgetRelatedEntriesCount($request);
        $result = array();
        $result['module'] = $moduleName;
        $result['viewname'] = $cvId;
        $result['count'] = $count;

        $response = new Vtiger_Response();
        $response->setEmitType(Vtiger_Response::$EMIT_JSON);
        $response->setResult($result);
        $response->emit();
    }

}
