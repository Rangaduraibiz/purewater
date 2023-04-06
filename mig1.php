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


// $moduleInstance = Vtiger_Module::getInstance('servicerequest');//add module name
// $blockInstance = Vtiger_Block::getInstance('CUSTOMER DETAILS', $moduleInstance); // add block name
// if ($blockInstance) {
//     $fieldInstance = Vtiger_Field::getInstance('customer_name', $moduleInstance);
//     if (!$fieldInstance) {
//         $fieldInstance = new Vtiger_Field();
//         $fieldInstance->name = 'customer_name';
//         $fieldInstance->label = 'Address';
//         $fieldInstance->table = $moduleInstance->basetable;// add suitable table
//         $fieldInstance->column = 'customer_name';
//         $fieldInstance->uitype = '16';
//         $fieldInstance->presence = '0';
//         $fieldInstance->typeofdata = 'V~M';
//         $fieldInstance->columntype = 'VARCHAR(250)';
//         $fieldInstance->defaultvalue = NULL;
//         $blockInstance->addField($fieldInstance);
//         $fieldInstance->setPicklistValues(array());
//     } else {
//         echo "field is already Present --- addrcustomer_nameess in HelpDesk Module --- <br>";
//     }


//     $fieldInstance = Vtiger_Field::getInstance('address', $moduleInstance);
//     if (!$fieldInstance) {
//         $fieldInstance = new Vtiger_Field();
//         $fieldInstance->name = 'address';
//         $fieldInstance->label = 'Address';
//         $fieldInstance->table = $moduleInstance->basetable;// add suitable table
//         $fieldInstance->column = 'address';
//         $fieldInstance->uitype = '16';
//         $fieldInstance->presence = '0';
//         $fieldInstance->typeofdata = 'V~M';
//         $fieldInstance->columntype = 'TEXT';
//         $fieldInstance->defaultvalue = NULL;
//         $blockInstance->addField($fieldInstance);
//         $fieldInstance->setPicklistValues(array());
//     } else {
//         echo "field is already Present --- address in HelpDesk Module --- <br>";
//     }
    
//     $fieldInstance = Vtiger_Field::getInstance('mobile', $moduleInstance);
//     if (!$fieldInstance) {
//         $fieldInstance = new Vtiger_Field();
//         $fieldInstance->name = 'mobile';
//         $fieldInstance->label = 'Mobile';
//         $fieldInstance->table = $moduleInstance->basetable;// add suitable table
//         $fieldInstance->column = 'mobile';
//         $fieldInstance->uitype = '11';
//         $fieldInstance->presence = '0';
//         $fieldInstance->typeofdata = 'V~O';
//         $fieldInstance->columntype = 'VARCHAR(30)';
//         $fieldInstance->defaultvalue = NULL;
//         $blockInstance->addField($fieldInstance);
//     } else {
//         echo "field is already Present --- mobile in HelpDesk Module --- <br>";
//     }

// } else {
//     echo "Block does not exits --- LBL_CUSTOM_INFORMATION -- <br>";
// }



$moduleInstance = Vtiger_Module::getInstance('OnProucts');// Enter module name
$blockInstance = Vtiger_Block::getInstance('LBL_ONPROUCTS_INFORMATION', $moduleInstance);// Enter block name 'LBL_example'
if ($blockInstance) {

    $fieldInstance = Vtiger_Field::getInstance('warrenty_period', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'warrenty_period';
        $fieldInstance->label = 'Warrenty Period';
        $fieldInstance->table = $moduleInstance->basetable;// add suitable table
        $fieldInstance->column = 'warrenty_period';
        $fieldInstance->uitype = '2';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~M';
        $fieldInstance->columntype = 'VARCHAR(250)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- warrenty_period in HelpDesk Module --- <br>";
    }

    // $fieldInstance = Vtiger_Field::getInstance('product_serial', $moduleInstance);
    // if (!$fieldInstance) {
    //     $fieldInstance = new Vtiger_Field();
    //     $fieldInstance->name = 'product_serial';
    //     $fieldInstance->label = 'Serial No';
    //     $fieldInstance->table = $moduleInstance->basetable;// add suitable table
    //     $fieldInstance->column = 'product_serial';
    //     $fieldInstance->uitype = '2';
    //     $fieldInstance->presence = '0';
    //     $fieldInstance->typeofdata = 'V~M';
    //     $fieldInstance->columntype = 'VARCHAR(250)';
    //     $fieldInstance->defaultvalue = NULL;
    //     $blockInstance->addField($fieldInstance);
    // } else {
    //     echo "field is already Present --- product_serial in HelpDesk Module --- <br>";
    // }
     
    // $fieldInstance = Vtiger_Field::getInstance('product_category', $moduleInstance);
    // if (!$fieldInstance) {
    //     $fieldInstance = new Vtiger_Field();
    //     $fieldInstance->name = 'product_category';
    //     $fieldInstance->label = 'Product Category';
    //     $fieldInstance->table = $moduleInstance->basetable;// add suitable table
    //     $fieldInstance->column = 'product_category';
    //     $fieldInstance->uitype = '16';
    //     $fieldInstance->presence = '0';
    //     $fieldInstance->typeofdata = 'V~M';
    //     $fieldInstance->columntype = 'VARCHAR(250)';
    //     $fieldInstance->defaultvalue = NULL;
    //     $blockInstance->addField($fieldInstance);
    //     $fieldInstance->setPicklistValues(array('hia'));
    // } else {
    //     echo "field is already Present --- product_category in HelpDesk Module --- <br>";
    // }

    // $fieldInstance = Vtiger_Field::getInstance('product_subcategory', $moduleInstance);
    // if (!$fieldInstance) {
    //     $fieldInstance = new Vtiger_Field();
    //     $fieldInstance->name = 'product_subcategory';
    //     $fieldInstance->label = 'Product Subcategory';
    //     $fieldInstance->table = $moduleInstance->basetable;// add suitable table
    //     $fieldInstance->column = 'Product_subcategory';
    //     $fieldInstance->uitype = '16';
    //     $fieldInstance->presence = '0';
    //     $fieldInstance->typeofdata = 'V~M';
    //     $fieldInstance->columntype = 'VARCHAR(250)';
    //     $fieldInstance->defaultvalue = NULL;
    //     $blockInstance->addField($fieldInstance);
    //     $fieldInstance->setPicklistValues(array('hai'));
    // } else {
    //     echo "field is already Present --- product_subcategory in HelpDesk Module --- <br>";
    // }

    // $fieldInstance = Vtiger_Field::getInstance('manufacturer', $moduleInstance);
    // if (!$fieldInstance) {
    //     $fieldInstance = new Vtiger_Field();
    //     $fieldInstance->name = 'manufacturer';
    //     $fieldInstance->label = 'Manufacturer';
    //     $fieldInstance->table = $moduleInstance->basetable;// add suitable table
    //     $fieldInstance->column = 'manufacturer';
    //     $fieldInstance->uitype = '16';
    //     $fieldInstance->presence = '0';
    //     $fieldInstance->typeofdata = 'V~M';
    //     $fieldInstance->columntype = 'VARCHAR(250)';
    //     $fieldInstance->defaultvalue = NULL;
    //     $blockInstance->addField($fieldInstance);
    //     $fieldInstance->setPicklistValues(array('hai'));
    // } else {
    //     echo "field is already Present --- manufacturer in HelpDesk Module --- <br>";
    // }

    // $fieldInstance = Vtiger_Field::getInstance('imagename', $moduleInstance);
    // if (!$fieldInstance) {
    //     $field = new Vtiger_Field();
    //     $field->name = 'imagename';
    //     $field->column = 'imagename';
    //     $field->uitype = 69;
    //     $field->table = $invoiceModule->basetable;
    //     $field->label = 'Upload Image';
    //     $field->summaryfield = 1;
    //     $field->readonly = 1;
    //     $field->presence = 2;
    //     $field->typeofdata = 'V~O';
    //     $field->columntype = 'VARCHAR(150)';
    //     $field->quickcreate = 3;
    //     $field->displaytype = 1;
    //     $field->masseditable = 1;
    //     $field->defaultvalue = 0;
    //     $blockInstance->addField($field);
    // } else {
    //     echo "field is present -- imagename in HelpDesk --- <br>";
    // }

    // $fieldInstance = Vtiger_Field::getInstance('price', $moduleInstance);
    // if (!$fieldInstance) {
    //     $fieldInstance = new Vtiger_Field();
    //     $fieldInstance->name = 'price';
    //     $fieldInstance->column = 'price';
    //     $fieldInstance->uitype = 71; // This value denotes a currency field
    //     $fieldInstance->table = $moduleInstance->basetable;
    //     $fieldInstance->label = 'Price';
    //     $fieldInstance->summaryfield = 1;
    //     $fieldInstance->readonly = 0;
    //     $fieldInstance->presence = 0;
    //     $fieldInstance->typeofdata = 'N~O';
    //     $fieldInstance->quickcreate = 0;
    //     $fieldInstance->displaytype = 1;
    //     $fieldInstance->masseditable = 1;
    //     $fieldInstance->defaultvalue = 0;
    //     $blockInstance->addField($fieldInstance);
    // } else {
    //     echo "Field is already present --- price in Products module --- <br>";
    // }

} else {
    echo " block does not exits --- LBL_CUSTOM_INFORMATION  in HelpDesk -- <br>";
}


