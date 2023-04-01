<?php
require_once("modules/com_vtiger_workflow/include.inc");
require_once("modules/com_vtiger_workflow/tasks/VTEntityMethodTask.inc");
require_once("modules/com_vtiger_workflow/VTEntityMethodManager.inc");
require_once("include/database/PearDatabase.php");
$adb = PearDatabase::getInstance();
$emm = new VTEntityMethodManager($adb);
require_once 'vtlib/Vtiger/Module.php';
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);


$moduleInstance = Vtiger_Module::getInstance('servicerequest');//add module name
$blockInstance = Vtiger_Block::getInstance('CUSTOMER DETAILS', $moduleInstance); // add block name
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('customer_name', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'customer_name';
        $fieldInstance->label = 'Address';
        $fieldInstance->table = $moduleInstance->basetable;// add suitable table
        $fieldInstance->column = 'customer_name';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~M';
        $fieldInstance->columntype = 'VARCHAR(250)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
        $fieldInstance->setPicklistValues(array());
    } else {
        echo "field is already Present --- addrcustomer_nameess in HelpDesk Module --- <br>";
    }


    $fieldInstance = Vtiger_Field::getInstance('address', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'address';
        $fieldInstance->label = 'Address';
        $fieldInstance->table = $moduleInstance->basetable;// add suitable table
        $fieldInstance->column = 'address';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~M';
        $fieldInstance->columntype = 'TEXT';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
        $fieldInstance->setPicklistValues(array());
    } else {
        echo "field is already Present --- address in HelpDesk Module --- <br>";
    }
    
    $fieldInstance = Vtiger_Field::getInstance('mobile', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'mobile';
        $fieldInstance->label = 'Mobile';
        $fieldInstance->table = $moduleInstance->basetable;// add suitable table
        $fieldInstance->column = 'mobile';
        $fieldInstance->uitype = '11';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(30)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- mobile in HelpDesk Module --- <br>";
    }

} else {
    echo "Block does not exits --- LBL_CUSTOM_INFORMATION -- <br>";
}



$moduleInstance = Vtiger_Module::getInstance('servicerequest');// Enter module name
$blockInstance = Vtiger_Block::getInstance('PRODUCT DETAILS', $moduleInstance);// Enter block name 'LBL_example'
if ($blockInstance) {

    $fieldInstance = Vtiger_Field::getInstance('product_name', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'product_name';
        $fieldInstance->label = 'Product Name';
        $fieldInstance->table = $moduleInstance->basetable;// add suitable table
        $fieldInstance->column = 'product_name';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~M';
        $fieldInstance->columntype = 'VARCHAR(250)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- product_name in HelpDesk Module --- <br>";
    }

    
    $fieldInstance = Vtiger_Field::getInstance('product_modal', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'product_modal';
        $fieldInstance->label = 'Product Modal';
        $fieldInstance->table = $moduleInstance->basetable;// add suitable table
        $fieldInstance->column = 'product_modal';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~M';
        $fieldInstance->columntype = 'VARCHAR(250)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- product_modal in HelpDesk Module --- <br>";
    }
     
    $fieldInstance = Vtiger_Field::getInstance('product_category', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'product_category';
        $fieldInstance->label = 'Product Category';
        $fieldInstance->table = $moduleInstance->basetable;// add suitable table
        $fieldInstance->column = 'product_category';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~M';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
        $fieldInstance->setPicklistValues(array());
    } else {
        echo "field is already Present --- product_category in HelpDesk Module --- <br>";
    }

    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'product_subcategory';
        $fieldInstance->label = 'Product Subcategory';
        $fieldInstance->table = $moduleInstance->basetable;// add suitable table
        $fieldInstance->column = 'Product_subcategory';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~M';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
        $fieldInstance->setPicklistValues(array());
    } else {
        echo "field is already Present --- product_subcategory in HelpDesk Module --- <br>";
    }


} else {
    echo " block does not exits --- LBL_CUSTOM_INFORMATION  in HelpDesk -- <br>";
}


