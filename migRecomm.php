<?php
require_once("modules/com_vtiger_workflow/include.inc");
require_once("modules/com_vtiger_workflow/tasks/VTEntityMethodTask.inc");
require_once("modules/com_vtiger_workflow/VTEntityMethodManager.inc");
require_once("include/database/PearDatabase.php");
$adb = PearDatabase::getInstance();
$emm = new VTEntityMethodManager($adb);
require_once 'vtlib/Vtiger/Module.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('Contacts');
$blockInstance = Vtiger_Block::getInstance('LBL_CUSTOM_INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('chargeable_outside_war', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'chargeable_outside_war';
        $field->column = 'chargeable_outside_war';
        $field->table = $invoiceModule->basetable;
        $field->label = 'Chargeable For Outside Warranty';
        $field->uitype = 56;
        $field->columntype = 'INT(1) DEFAULT 0';
        $field->typeofdata = 'I~O';
        $field->displaytype = 2;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- chargeable_outside_war In Contacts Module --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_BLOCK_GENERAL_INFORMATION in Contacts -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('Contacts');
$blockInstance = Vtiger_Block::getInstance('LBL_CUSTOM_INFORMATION', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('business_sector', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'business_sector';
        $fieldInstance->label = 'Business Sector';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'business_sector';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
    //    $fieldInstance->setPicklistValues(array('Coal', 'Cement', 'Iron'));
    } else {
        echo "field is already Present --- business_sector in Contacts Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_CUSTOM_INFORMATION -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('Contacts');
$blockInstance = Vtiger_Block::getInstance('LBL_CUSTOM_INFORMATION', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('customer_type', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'customer_type';
        $fieldInstance->label = 'Customer Type';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'customer_type';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
    //  $fieldInstance->setPicklistValues(array('PSU', 'State Govt.', 'Central Govt.', 'Private'));
    } else {
        echo "field is already Present --- customer_type in Contacts Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_CUSTOM_INFORMATION -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('Contacts');
$blockInstance = Vtiger_Block::getInstance('LBL_CUSTOM_INFORMATION', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('nearest_office', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'nearest_office';
        $fieldInstance->label = 'Nearest Office';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'nearest_office';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
  //    $fieldInstance->setPicklistValues(array('Bilaspur', 'Neyveli', 'Dhanbad', 'Hyderabad'));
    } else {
        echo "field is already Present --- nearest_office in Contacts Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_CUSTOM_INFORMATION -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('Contacts');
$blockInstance = Vtiger_Block::getInstance('LBL_CUSTOM_INFORMATION', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('office_type', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'office_type';
        $fieldInstance->label = 'Office Type';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'office_type';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
  //    $fieldInstance->setPicklistValues(array('Headquarter/Corporate Office', 'Area office', 'Project Office', 'Plant office','Site Office', 'Workshop'));
    } else {
        echo "field is already Present --- office_type in Contacts Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_CUSTOM_INFORMATION -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('Contacts');
$blockInstance = Vtiger_Block::getInstance('LBL_CUSTOM_INFORMATION', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('user_password', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'user_password';
        $fieldInstance->label = 'Set Password';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'user_password';
        $fieldInstance->uitype = '99';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'P~M';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- user_password in Contacts Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_CUSTOM_INFORMATION -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('Contacts');
$blockInstance = Vtiger_Block::getInstance('LBL_CUSTOM_INFORMATION', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('confirm_password', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'confirm_password';
        $fieldInstance->label = 'Re-Type Password';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'confirm_password';
        $fieldInstance->uitype = '99';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'P~M';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- confirm_password in Contacts Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_CUSTOM_INFORMATION -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('Contacts');
$blockInstance = Vtiger_Block::getInstance('LBL_CUSTOM_INFORMATION', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('manual_company', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'manual_company';
        $fieldInstance->label = 'Company Name';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'manual_company';
        $fieldInstance->uitype = '2';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(200)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
//        $fieldInstance->setPicklistValues(array('PUTTUR'));
    } else {
        echo "field is already Present --- manual_company in Contacts Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_CUSTOM_INFORMATION  in Contacts -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$emm = null;
$emm = new VTEntityMethodManager($adb);
$result = $adb->pquery("SELECT function_name FROM com_vtiger_workflowtasks_entitymethod WHERE module_name=? AND method_name=?", array('Accounts', 'AccountsExternalAppSync'));
if ($adb->num_rows($result) == 0) {
    $emm->addEntityMethod("Accounts", "AccountsExternalAppSync", "modules/Accounts/AccountsExternalAppSync.php", "AccountsExternalAppSync");
} else {
    print_r("already exits --- workflow function -- AccountsExternalAppSync in Accounts Module <br> ");
}
$emm = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('HelpDesk');
$blockInstance = Vtiger_Block::getInstance('LBL_CUSTOM_INFORMATION', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('ticket_type', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'ticket_type';
        $fieldInstance->label = 'Type';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'ticket_type';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
 //     $fieldInstance->setPicklistValues(array('Periodic Maintenance', 'Breakdown', 'General Inspection', 'Sub Assembly Fitment','Service for Spares','Initial Commissioning'));
    } else {
        echo "field is already Present --- ticket_type in HelpDesk Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_CUSTOM_INFORMATION -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('HelpDesk');
$blockInstance = Vtiger_Block::getInstance('LBL_CUSTOM_INFORMATION', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('system_affected', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'system_affected';
        $fieldInstance->label = 'System Affected';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'system_affected';
        $fieldInstance->uitype = 33;
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'TEXT';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
   //   $fieldInstance->setPicklistValues(array('Engine'));
    } else {
        echo "field is already Present --- system_affected in HelpDesk Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_CUSTOM_INFORMATION -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('HelpDesk');
$blockInstance = Vtiger_Block::getInstance('LBL_CUSTOM_INFORMATION', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('equip_status', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'equip_status';
        $fieldInstance->label = 'Equipment Status';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'equip_status';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
   //   $fieldInstance->setPicklistValues(array('On Road', 'Off Road', 'Running With Problem'));
    } else {
        echo "field is already Present --- equip_status in HelpDesk Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_CUSTOM_INFORMATION -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('HelpDesk');
$blockInstance = Vtiger_Block::getInstance('LBL_CUSTOM_INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('equipment_id', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'equipment_id';
        $field->column = 'equipment_id';
        $field->uitype = 10;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Equipment Serial No.';
        $field->summaryfield = 1;
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'I~O';
        $field->columntype = 'INT(10)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $field->defaultvalue = 0;
        $id = $blockInstance->addFieldIgnite($field);
        echo "igggggggggggggggggggg mission created field --- $id ";
        // ------------------ invoga
       
        $invogamoduleInstance = Vtiger_Module::getInstance('Equipment');
        $relationLabel  = 'HelpDesk';
        $invogamoduleInstance->setRelatedList(
              $invoiceModule, $relationLabel, Array('ADD'), 'get_dependents_list' //you can do select also Array('ADD','SELECT')
        );
        // ------------------------invoga
        $tom = "INSERT INTO `vtiger_fieldmodulerel` (`fieldid`, `module`, `relmodule`, `status`, `sequence`) VALUES ('$id', 'HelpDesk', 'Equipment', NULL, NULL)";
        $adb->pquery($tom);
    } else {
        echo "field is present -- equipment_id  in HelpDesk--- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_CUSTOM_INFORMATION in HelpDesk -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('HelpDesk');
$blockInstance = Vtiger_Block::getInstance('LBL_CUSTOM_INFORMATION', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('hmr', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'hmr';
        $fieldInstance->column = 'hmr';
        $fieldInstance->uitype = 7;
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->label = 'Hour Meter Reading';
        $fieldInstance->summaryfield = 1;
        $fieldInstance->readonly = 1;
        $fieldInstance->presence = 2;
        $fieldInstance->typeofdata = 'I~O';
        $fieldInstance->columntype = 'INT(15)';
        $fieldInstance->quickcreate = 3;
        $fieldInstance->displaytype = 1;
        $fieldInstance->masseditable = 1;
        $fieldInstance->defaultvalue = 0;
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- hmr in HelpDesk Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_CUSTOM_INFORMATION in HelpDesk -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('HelpDesk');
$blockInstance = Vtiger_Block::getInstance('LBL_CUSTOM_INFORMATION', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('kilometer_reading', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'kilometer_reading';
        $fieldInstance->column = 'kilometer_reading';
        $fieldInstance->uitype = 7;
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->label = 'Kilometer Reading (Km)';
        $fieldInstance->summaryfield = 1;
        $fieldInstance->readonly = 1;
        $fieldInstance->presence = 2;
        $fieldInstance->typeofdata = 'I~O';
        $fieldInstance->columntype = 'INT(15)';
        $fieldInstance->quickcreate = 3;
        $fieldInstance->displaytype = 1;
        $fieldInstance->masseditable = 1;
        $fieldInstance->defaultvalue = 0;
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- kilometer_reading in HelpDesk Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_CUSTOM_INFORMATION in HelpDesk -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('HelpDesk');
$blockInstance = Vtiger_Block::getInstance('LBL_CUSTOM_INFORMATION', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('date_of_failure', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'date_of_failure';
        $fieldInstance->label = 'Date Of Failure';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'date_of_failure';
        $fieldInstance->uitype = 5;
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'D~O';
        $fieldInstance->columntype = 'DATE';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- date_of_failure in HelpDesk Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_CUSTOM_INFORMATION -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('Contacts');
$blockInstance = Vtiger_Block::getInstance('LBL_CUSTOM_INFORMATION', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('other_customer_type', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'other_customer_type';
        $fieldInstance->label = 'Other Customer Type';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'other_customer_type';
        $fieldInstance->uitype = '2';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(200)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- other_customer_type in Contacts Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_CUSTOM_INFORMATION  in Contacts -- <br>";
}
$moduleInstance = null;
$blockInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('Contacts');
$blockInstance = Vtiger_Block::getInstance('LBL_CUSTOM_INFORMATION', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('other_business_sector', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'other_business_sector';
        $fieldInstance->label = 'Other Business Sector';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'other_business_sector';
        $fieldInstance->uitype = '2';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(200)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- other_business_sector in Contacts Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_CUSTOM_INFORMATION  in Contacts -- <br>";
}
$moduleInstance = null;
$blockInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('Contacts');
$blockInstance = Vtiger_Block::getInstance('LBL_CUSTOM_INFORMATION', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('other_office_type', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'other_office_type';
        $fieldInstance->label = 'Other Office Type';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'other_office_type';
        $fieldInstance->uitype = '2';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(200)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- other_office_type in Contacts Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_CUSTOM_INFORMATION  in Contacts -- <br>";
}
$moduleInstance = null;
$blockInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('ServiceEngineer');
$blockInstance = Vtiger_Block::getInstance('LBL_USERLOGIN_ROLE', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('business_vertical', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'business_vertical';
        $fieldInstance->label = 'Business Vertical';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'business_vertical';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
    //  $fieldInstance->setPicklistValues(array('Defence', 'Mining & Construction', 'Both Defence and Mining & Construction'));
    } else {
        echo "field is already Present --- business_vertical in ServiceEngineer Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_USERLOGIN_ROLE -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('ServiceEngineer');
$blockInstance = Vtiger_Block::getInstance('LBL_USERLOGIN_ROLE', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('date_of_birth', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'date_of_birth';
        $fieldInstance->label = 'Date Of Birth';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'date_of_birth';
        $fieldInstance->uitype = 5;
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'D~O';
        $fieldInstance->columntype = 'DATE';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- date_of_birth in HelpDesk Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_USERLOGIN_ROLE -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('ServiceEngineer');
$blockInstance = Vtiger_Block::getInstance('LBL_USERLOGIN_ROLE', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('date_of_joining', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'date_of_joining';
        $fieldInstance->label = 'Date Of Joining';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'date_of_joining';
        $fieldInstance->uitype = 5;
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'D~O';
        $fieldInstance->columntype = 'DATE';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- date_of_joining in HelpDesk Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_USERLOGIN_ROLE -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('ServiceEngineer');
$blockInstance = Vtiger_Block::getInstance('LBL_USERLOGIN_ROLE', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('office', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'office';
        $fieldInstance->label = 'Office';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'office';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
    //  $fieldInstance->setPicklistValues(array('Corporate Office-BEML Soudha', 'Marketing Headquarter-Unity Buildings', 'Regional Office','District Office','Activity Centre','Service Centre','Production Division','International Business Division-New Delhi'));
    } else {
        echo "field is already Present --- office in ServiceEngineer Module --- <br>";
    }
} else {
    echo "Block does not exits --- LBL_USERLOGIN_ROLE -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('ServiceEngineer');
$blockInstance = Vtiger_Block::getInstance('LBL_USERLOGIN_ROLE', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('regional_office', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'regional_office';
        $fieldInstance->label = 'Regional Office';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'regional_office';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
      //$fieldInstance->setPicklistValues(array('Neyveli', 'Sambalpur', 'Kolkata','Dhanbad','Bangalore','Hyderabad','New Delhi','Nagpur'));
    } else {
        echo "field is already Present --- regional_office in ServiceEngineer Module --- <br>";
    }
} else {
    echo "Block does not exits --- LBL_USERLOGIN_ROLE -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('ServiceEngineer');
$blockInstance = Vtiger_Block::getInstance('LBL_USERLOGIN_ROLE', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('sub_service_manager_role', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'sub_service_manager_role';
        $fieldInstance->label = 'Sub Servie Manager Role';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'sub_service_manager_role';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
      //$fieldInstance->setPicklistValues(array('Regional Manager', 'Regional Service Manager', 'Service Centre In-charge','District Manager','District Service Manager','International Business Division-Support','Service Manager- Support','Sales Manager','Parts Manager'));
    } else {
        echo "field is already Present --- sub_service_manager_role in ServiceEngineer Module --- <br>";
    }
} else {
    echo "Block does not exits --- LBL_USERLOGIN_ROLE -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('ServiceEngineer');
$blockInstance = Vtiger_Block::getInstance('LBL_USERLOGIN_ROLE', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('cust_role', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'cust_role';
        $fieldInstance->label = 'Role';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'cust_role';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
  //    $fieldInstance->setPicklistValues(array('BEML Management', 'BEML Marketing HQ', 'Divisonal Service Support','Service Manager','Service Engineer'));
    } else {
        echo "field is already Present --- cust_role in ServiceEngineer Module --- <br>";
    }
} else {
    echo "Block does not exits --- LBL_USERLOGIN_ROLE -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('ServiceEngineer');
$blockInstance = Vtiger_Block::getInstance('LBL_USERLOGIN_ROLE', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('designaion', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'designaion';
        $fieldInstance->label = 'Designation';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'designaion';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
     // $fieldInstance->setPicklistValues(array('Chairman & Managing Director', 'Director(Mining & Construction Business)', 'Director(Defence Business)','Director','Executive Director','Executive Director','General Manager','Deputy General Manager','Assistant General Manager','Senior Manager','Manager','Assistant Manager','Engineer','Assistant Engineer','Senior Supervisor-S-6','Senior Supervisor-S-5','Senior Supervisor-S-4','Supervisor- S-3','Joint Supervisior-S-2','Deputy Supervisor-S-1','Master Skilled Technician-Gr.-E','High Skilled Technician-Gr.-D','Senior Technician-Gr.-C','Technician-Gr.-B','Helper- Gr-A'));
    } else {
        echo "field is already Present --- cust_role in ServiceEngineer Module --- <br>";
    }
} else {
    echo "Block does not exits --- LBL_USERLOGIN_ROLE -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('ServiceEngineer');
$blockInstance = Vtiger_Block::getInstance('LBL_USERLOGIN_ROLE', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('user_password', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'user_password';
        $fieldInstance->label = 'Set Password';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'user_password';
        $fieldInstance->uitype = '99';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'P~M';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- user_password in ServiceEngineer Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_USERLOGIN_ROLE -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('ServiceEngineer');
$blockInstance = Vtiger_Block::getInstance('LBL_USERLOGIN_ROLE', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('confirm_password', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'confirm_password';
        $fieldInstance->label = 'Re-Type Password';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'confirm_password';
        $fieldInstance->uitype = '99';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'P~M';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- confirm_password in ServiceEngineer Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_USERLOGIN_ROLE -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('ServiceEngineer');
$blockInstance = Vtiger_Block::getInstance('LBL_USERLOGIN_ROLE', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('badge_no', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'badge_no';
        $field->column = 'badge_no';
        $field->uitype = 2;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Badge Number';
        $field->summaryfield = 1;
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'I~O';
        $field->columntype = 'INT(10)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $field->defaultvalue = 0;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- badge_no ServiceEngineer --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_USERLOGIN_ROLE in ServiceEngineer -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('ServiceEngineer');
$blockInstance = Vtiger_Block::getInstance('LBL_USERLOGIN_ROLE', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('email', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'email';
        $field->column = 'email';
        $field->uitype = 13;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Email Id';
        $field->summaryfield = 1;
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'E~O';
        $field->columntype = 'VARCHAR(50)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $field->defaultvalue = 0;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- email ServiceEngineer --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_USERLOGIN_ROLE in ServiceEngineer -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('ServiceEngineer');
$blockInstance = Vtiger_Block::getInstance('LBL_USERLOGIN_ROLE', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('phone', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'phone';
        $field->column = 'phone';
        $field->uitype = 11;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Mobile Number';
        $field->summaryfield = 1;
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(30)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $field->defaultvalue = 0;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- phone ServiceEngineer --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_USERLOGIN_ROLE in ServiceEngineer -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('ServiceEngineer');
$blockInstance = Vtiger_Block::getInstance('LBL_USERLOGIN_ROLE', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('district_office', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'district_office';
        $fieldInstance->label = 'District Office';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'district_office';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
  //    $fieldInstance->setPicklistValues(array('Neyveli', 'Sambalpur', 'Kolkata','Dhanbad','Bangalore','Hyderabad','New Delhi','Nagpur'));
    } else {
        echo "field is already Present --- district_office in ServiceEngineer Module --- <br>";
    }
} else {
    echo "Block does not exits --- LBL_USERLOGIN_ROLE -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('ServiceEngineer');
$blockInstance = Vtiger_Block::getInstance('LBL_USERLOGIN_ROLE', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('activity_centre', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'activity_centre';
        $fieldInstance->label = 'Activity Centre';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'activity_centre';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
     // $fieldInstance->setPicklistValues(array('Neyveli', 'Sambalpur', 'Kolkata','Dhanbad','Bangalore','Hyderabad','New Delhi','Nagpur'));
    } else {
        echo "field is already Present --- activity_centre in ServiceEngineer Module --- <br>";
    }
} else {
    echo "Block does not exits --- LBL_USERLOGIN_ROLE -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('ServiceEngineer');
$blockInstance = Vtiger_Block::getInstance('LBL_USERLOGIN_ROLE', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('service_centre', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'service_centre';
        $fieldInstance->label = 'Service Centre';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'service_centre';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
     // $fieldInstance->setPicklistValues(array('Neyveli', 'Sambalpur', 'Kolkata','Dhanbad','Bangalore','Hyderabad','New Delhi','Nagpur'));
    } else {
        echo "field is already Present --- service_centre in ServiceEngineer Module --- <br>";
    }
} else {
    echo "Block does not exits --- LBL_USERLOGIN_ROLE -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('ServiceEngineer');
$blockInstance = Vtiger_Block::getInstance('LBL_USERLOGIN_ROLE', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('production_division', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'production_division';
        $fieldInstance->label = 'Production Division';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'production_division';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
   //   $fieldInstance->setPicklistValues(array('Neyveli', 'Sambalpur', 'Kolkata','Dhanbad','Bangalore','Hyderabad','New Delhi','Nagpur'));
    } else {
        echo "field is already Present --- production_division in ServiceEngineer Module --- <br>";
    }
} else {
    echo "Block does not exits --- LBL_USERLOGIN_ROLE -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('Contacts');
$blockInstance = Vtiger_Block::getInstance('LBL_CUSTOM_INFORMATION', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('distance_from_project', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'distance_from_project';
        $fieldInstance->column = 'distance_from_project';
        $fieldInstance->uitype = 7;
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->label = 'Distance From Project';
        $fieldInstance->summaryfield = 1;
        $fieldInstance->readonly = 1;
        $fieldInstance->presence = 2;
        $fieldInstance->typeofdata = 'I~O';
        $fieldInstance->columntype = 'INT(15)';
        $fieldInstance->quickcreate = 3;
        $fieldInstance->displaytype = 1;
        $fieldInstance->masseditable = 1;
        $fieldInstance->defaultvalue = 0;
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- distance_from_project in Contacts Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_CUSTOM_INFORMATION in Contacts -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

// ignite special addres ends here
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('ServiceEngineer');
$blockInstance = Vtiger_Block::getInstance('LBL_USERLOGIN_ROLE', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('auto_asgn_ticket', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'auto_asgn_ticket';
        $field->column = 'auto_asgn_ticket';
        $field->table = $invoiceModule->basetable;
        $field->label = 'Assign SR Automaticaly';
        $field->uitype = 56;
        $field->columntype = 'INT(1) DEFAULT 0';
        $field->typeofdata = 'I~O';
        $field->displaytype = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- auto_asgn_ticket In ServiceEngineer Module --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_USERLOGIN_ROLE in Sales Order -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('ServiceEngineer');
$blockInstance = Vtiger_Block::getInstance('LBL_USERLOGIN_ROLE', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('yoe', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'yoe';
        $fieldInstance->column = 'yoe';
        $fieldInstance->uitype = 7;
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->label = 'Years Of Expirience';
        $fieldInstance->summaryfield = 1;
        $fieldInstance->readonly = 1;
        $fieldInstance->presence = 2;
        $fieldInstance->typeofdata = 'NN~O';
        $fieldInstance->columntype = 'DECIMAL(3,2)';
        $fieldInstance->quickcreate = 3;
        $fieldInstance->displaytype = 1;
        $fieldInstance->masseditable = 1;
        $fieldInstance->defaultvalue = 0;
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- yoe in ServiceEngineer Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_USERLOGIN_ROLE -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$emm = new VTEntityMethodManager($adb);
$result = $adb->pquery("SELECT function_name FROM com_vtiger_workflowtasks_entitymethod WHERE module_name=? AND method_name=?", array('ServiceEngineer', 'calculateYOE'));
if ($adb->num_rows($result) == 0) {
    $emm->addEntityMethod("ServiceEngineer", "calculateYOE", "modules/ServiceEngineer/calculateYOE.php", "calculateYOE");
} else {
    print_r("already exits --- workflow function -- calculateYOE <br> ");
}
$emm = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('ServiceEngineer');
$blockInstance = Vtiger_Block::getInstance('LBL_USERLOGIN_ROLE', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('approval_status', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'approval_status';
        $fieldInstance->label = 'Approval Status';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'approval_status';
        $fieldInstance->uitype = '15';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
     // $fieldInstance->setPicklistValues(array('Pending', 'Accepted', 'Rejected'));
    } else {
        echo "field is already Present --- approval_status in ServiceEngineer Module --- <br>";
    }
} else {
    echo "Block does not exits --- LBL_USERLOGIN_ROLE -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$emm = new VTEntityMethodManager($adb);
$result = $adb->pquery("SELECT function_name FROM com_vtiger_workflowtasks_entitymethod WHERE module_name=? AND method_name=?", array('ServiceEngineer', 'createUserOnApproval'));
if ($adb->num_rows($result) == 0) {
    $emm->addEntityMethod("ServiceEngineer", "createUserOnApproval", "modules/ServiceEngineer/createUserOnApproval.php", "createUserOnApproval");
} else {
    print_r("already exits --- workflow function -- createUserOnApproval <br> ");
}
$emm = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('ServiceEngineer');
$blockInstance = Vtiger_Block::getInstance('LBL_USERLOGIN_ROLE', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('sys_detect_role', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'sys_detect_role';
        $field->column = 'sys_detect_role';
        $field->uitype = 2;
        $field->table = $invoiceModule->basetable;
        $field->label = 'System Detected Role';
        $field->summaryfield = 1;
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(250)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $field->defaultvalue = 0;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- sys_detect_role ServiceEngineer --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_USERLOGIN_ROLE in ServiceEngineer -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('HelpDesk');
$blockInstance = Vtiger_Block::getInstance('LBL_CUSTOM_INFORMATION', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('purpose', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'purpose';
        $fieldInstance->label = 'Purpose';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'purpose';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
   //   $fieldInstance->setPicklistValues(array('Rehabilitation', 'Overhaul', 'Up gradation','Parts Requirement','Equipment Health Check up'));
    } else {
        echo "field is already Present --- purpose in HelpDesk Module --- <br>";
    }
} else {
    echo "Block does not exits --- LBL_CUSTOM_INFORMATION -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;


$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('HelpDesk');
$blockInstance = Vtiger_Block::getInstance('LBL_CUSTOM_INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('manual_equ_ser', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'manual_equ_ser';
        $field->column = 'manual_equ_ser';
        $field->uitype = 2;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Manual Equipment Sl.No.';
        $field->summaryfield = 1;
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(250)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $field->defaultvalue = 0;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- manual_equ_ser in HelpDesk --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_CUSTOM_INFORMATION in HelpDesk -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('HelpDesk');
$blockInstance = Vtiger_Block::getInstance('LBL_CUSTOM_INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('opp_name', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'opp_name';
        $field->column = 'opp_name';
        $field->uitype = 2;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Name';
        $field->summaryfield = 1;
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(250)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $field->defaultvalue = 0;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- opp_name in HelpDesk --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_CUSTOM_INFORMATION in HelpDesk -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('HelpDesk');
$blockInstance = Vtiger_Block::getInstance('LBL_CUSTOM_INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('phone', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'phone';
        $field->column = 'phone';
        $field->uitype = 11;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Mobile Number';
        $field->summaryfield = 1;
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(30)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $field->defaultvalue = 0;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- phone HelpDesk --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_CUSTOM_INFORMATION in HelpDesk -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('ServiceEngineer');
$blockInstance = Vtiger_Block::getInstance('LBL_USERLOGIN_ROLE', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('yoe_inequi_aggre', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'yoe_inequi_aggre';
        $fieldInstance->column = 'yoe_inequi_aggre';
        $fieldInstance->uitype = 7;
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->label = 'Experience in Equipment Model & Aggregates';
        $fieldInstance->summaryfield = 1;
        $fieldInstance->readonly = 1;
        $fieldInstance->presence = 2;
        $fieldInstance->typeofdata = 'NN~O';
        $fieldInstance->columntype = 'DECIMAL(3,2)';
        $fieldInstance->quickcreate = 3;
        $fieldInstance->displaytype = 1;
        $fieldInstance->masseditable = 1;
        $fieldInstance->defaultvalue = 0;
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- yoe_inequi_aggre in ServiceEngineer Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_USERLOGIN_ROLE -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('Contacts');
$blockInstance = Vtiger_Block::getInstance('LBL_CUSTOM_INFORMATION', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('con_approval_status', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'con_approval_status';
        $fieldInstance->label = 'Approval Status';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'con_approval_status';
        $fieldInstance->uitype = '15';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
    //  $fieldInstance->setPicklistValues(array('Pending', 'Accepted', 'Rejected'));
    } else {
        echo "field is already Present --- con_approval_status in Contacts Module --- <br>";
    }
} else {
    echo "Block does not exits --- LBL_CUSTOM_INFORMATION -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$emm = new VTEntityMethodManager($adb);
$result = $adb->pquery("SELECT function_name FROM com_vtiger_workflowtasks_entitymethod WHERE module_name=? AND method_name=?", array('Contacts', 'handleCustomerPortalUser'));
if ($adb->num_rows($result) == 0) {
    $emm->addEntityMethod("Contacts", "handleCustomerPortalUser", "modules/Contacts/handleCustomerPortalUser.php", "handleCustomerPortalUser");
} else {
    print_r("already exits --- workflow function -- handleCustomerPortalUser In Contacts <br> ");
}
$emm = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('Equipment');
$blockInstance = Vtiger_Block::getInstance('LBL_BLOCK_GENERAL_INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('equip_model', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'equip_model';
        $field->column = 'equip_model';
        $field->uitype = 2;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Equipment Model';
        $field->summaryfield = 1;
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(250)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $field->defaultvalue = 0;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- equip_model in Equipment --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_BLOCK_GENERAL_INFORMATION in Equipment -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('HelpDesk');
$blockInstance = Vtiger_Block::getInstance('LBL_CUSTOM_INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('imagename', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'imagename';
        $field->column = 'imagename';
        $field->uitype = 69;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Upload Image';
        $field->summaryfield = 1;
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(150)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $field->defaultvalue = 0;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- imagename in HelpDesk --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_CUSTOM_INFORMATION in HelpDesk -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('Accounts');
$blockInstance = Vtiger_Block::getInstance('LBL_CUSTOM_INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('external_app_num', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'external_app_num';
        $field->column = 'external_app_num';
        $field->uitype = 2;
        $field->table = $invoiceModule->basetable;
        $field->label = 'SAP Reference Number';
        $field->summaryfield = 1;
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(250)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $field->defaultvalue = 0;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- external_app_num in Accounts --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_CUSTOM_INFORMATION in Accounts -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('Equipment');
$blockInstance = Vtiger_Block::getInstance('LBL_BLOCK_GENERAL_INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('functional_loc', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'functional_loc';
        $field->column = 'functional_loc';
        $field->uitype = 10;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Functional Location';
        $field->summaryfield = 1;
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'I~O';
        $field->columntype = 'INT(10)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $field->defaultvalue = 0;
        $id = $blockInstance->addFieldIgnite($field);
        echo "igggggggggggggggggggg mission created field --- $id ";
        // ------------------ invoga
        $invogamoduleInstance = Vtiger_Module::getInstance('FunctionalLocations');
        $relationLabel  = 'Equipments';
        $invogamoduleInstance->setRelatedList(
              $invoiceModule, $relationLabel, Array('ADD'), 'get_dependents_list' //you can do select also Array('ADD','SELECT')
        );
        // ------------------------invoga
        $tom = "INSERT INTO `vtiger_fieldmodulerel` (`fieldid`, `module`, `relmodule`, `status`, `sequence`) VALUES ('$id', 'Equipment', 'FunctionalLocations', NULL, NULL)";
        $adb->pquery($tom);
    } else {
        echo "field is present -- functional_loc  in Equipment--- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_BLOCK_GENERAL_INFORMATION in Equipment -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('FunctionalLocations');
$blockInstance = Vtiger_Block::getInstance('LBL_BLOCK_GENERAL_INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('ftl_loc_desc', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'ftl_loc_desc';
        $field->column = 'ftl_loc_desc';
        $field->uitype = 2;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Description';
        $field->summaryfield = 1;
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(250)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $field->defaultvalue = 0;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- ftl_loc_desc FunctionalLocations --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_BLOCK_GENERAL_INFORMATION in FunctionalLocations -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('Equipment');
$blockInstance = Vtiger_Block::getInstance('LBL_BLOCK_GENERAL_INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('equi_desc', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'equi_desc';
        $field->column = 'equi_desc';
        $field->uitype = 2;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Description';
        $field->summaryfield = 1;
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(250)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $field->defaultvalue = 0;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- equi_desc Equipment --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_BLOCK_GENERAL_INFORMATION in Equipment -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('Equipment');
$blockInstance = Vtiger_Block::getInstance('LBL_BLOCK_GENERAL_INFORMATION', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('eq_equip_status', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'eq_equip_status';
        $fieldInstance->label = 'Equipment Status';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'eq_equip_status';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
    //  $fieldInstance->setPicklistValues(array('AVLB'));
    } else {
        echo "field is already Present --- eq_equip_status in Equipment Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_BLOCK_GENERAL_INFORMATION -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('Equipment');
$blockInstance = Vtiger_Block::getInstance('LBL_BLOCK_GENERAL_INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('maintain_plant', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'maintain_plant';
        $field->column = 'maintain_plant';
        $field->uitype = 2;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Maint Plant';
        $field->summaryfield = 1;
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(100)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $field->defaultvalue = 0;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- maintain_plant Equipment --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_BLOCK_GENERAL_INFORMATION in Equipment -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('Equipment');
$blockInstance = Vtiger_Block::getInstance('LBL_BLOCK_GENERAL_INFORMATION', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('eq_valid_from', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'eq_valid_from';
        $fieldInstance->label = 'Valid From';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'eq_valid_from';
        $fieldInstance->uitype = 5;
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'D~O';
        $fieldInstance->columntype = 'DATE';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- eq_valid_from in Equipment Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_BLOCK_GENERAL_INFORMATION -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('Equipment');
$blockInstance = Vtiger_Block::getInstance('LBL_BLOCK_GENERAL_INFORMATION', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('eq_valid_to', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'eq_valid_to';
        $fieldInstance->label = 'Valid To';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'eq_valid_to';
        $fieldInstance->uitype = 5;
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'D~O';
        $fieldInstance->columntype = 'DATE';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- eq_valid_to in Equipment Module --- <br>";
    }
} else {
    echo "block does not exits --- LBL_BLOCK_GENERAL_INFORMATION -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('Equipment');
$blockInstance = Vtiger_Block::getInstance('LBL_BLOCK_GENERAL_INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('account_id', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'account_id';
        $field->column = 'account_id';
        $field->uitype = 10;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Customer Number';
        $field->summaryfield = 1;
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'I~O';
        $field->columntype = 'INT(10)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $field->defaultvalue = 0;
        $id = $blockInstance->addFieldIgnite($field);
        echo "igggggggggggggggggggg mission created field --- $id ";
        // ------------------ invoga
        $invogamoduleInstance = Vtiger_Module::getInstance('Accounts');
        $relationLabel  = 'Equipments';
        $invogamoduleInstance->setRelatedList(
              $invoiceModule, $relationLabel, Array('ADD'), 'get_dependents_list' //you can do select also Array('ADD','SELECT')
        );
        // ------------------------invoga
        $tom = "INSERT INTO `vtiger_fieldmodulerel` (`fieldid`, `module`, `relmodule`, `status`, `sequence`) VALUES ('$id', 'Equipment', 'Accounts', NULL, NULL)";
        $adb->pquery($tom);
    } else {
        echo "field is present -- account_id  in Equipment--- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_BLOCK_GENERAL_INFORMATION in Equipment -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('HelpDesk');
$blockInstance = Vtiger_Block::getInstance('LBL_CUSTOM_INFORMATION', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('date_of_delivery', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'date_of_delivery';
        $fieldInstance->label = 'Date Of Delivery';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'date_of_delivery';
        $fieldInstance->uitype = 5;
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'D~O';
        $fieldInstance->columntype = 'DATE';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- date_of_delivery in HelpDesk Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_CUSTOM_INFORMATION -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('HelpDesk');
$blockInstance = Vtiger_Block::getInstance('LBL_CUSTOM_INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('pre_address', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'pre_address';
        $field->column = 'pre_address';
        $field->uitype = 2;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Address';
        $field->summaryfield = 1;
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(250)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $field->defaultvalue = 0;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- pre_address HelpDesk --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_CUSTOM_INFORMATION in HelpDesk -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('HelpDesk');
$blockInstance = Vtiger_Block::getInstance('LBL_CUSTOM_INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('pincode', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'pincode';
        $field->column = 'pincode';
        $field->uitype = 2;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Pincode';
        $field->summaryfield = 1;
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(20)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $field->defaultvalue = 0;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- pincode HelpDesk --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_CUSTOM_INFORMATION in HelpDesk -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('HelpDesk');
$blockInstance = Vtiger_Block::getInstance('LBL_CUSTOM_INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('city', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'city';
        $field->column = 'city';
        $field->uitype = 2;
        $field->table = $invoiceModule->basetable;
        $field->label = 'City';
        $field->summaryfield = 1;
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(100)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $field->defaultvalue = 0;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- city HelpDesk --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_CUSTOM_INFORMATION in HelpDesk -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('HelpDesk');
$blockInstance = Vtiger_Block::getInstance('LBL_CUSTOM_INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('state', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'state';
        $field->column = 'state';
        $field->uitype = 2;
        $field->table = $invoiceModule->basetable;
        $field->label = 'State';
        $field->summaryfield = 1;
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(100)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $field->defaultvalue = 0;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- state HelpDesk --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_CUSTOM_INFORMATION in HelpDesk -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('HelpDesk');
$blockInstance = Vtiger_Block::getInstance('LBL_CUSTOM_INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('nearest_railway', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'nearest_railway';
        $field->column = 'nearest_railway';
        $field->uitype = 2;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Nearest Railyway Station';
        $field->summaryfield = 1;
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(250)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $field->defaultvalue = 0;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- nearest_railway HelpDesk --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_CUSTOM_INFORMATION in HelpDesk -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('HelpDesk');
$blockInstance = Vtiger_Block::getInstance('LBL_CUSTOM_INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('func_loc_id', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'func_loc_id';
        $field->column = 'func_loc_id';
        $field->uitype = 10;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Equipment Location';
        $field->summaryfield = 1;
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'I~O';
        $field->columntype = 'INT(10)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $id = $blockInstance->addFieldIgnite($field);
        echo "igggggggggggggggggggg mission created field --- $id ";
        // ------------------ invoga
       
        $invogamoduleInstance = Vtiger_Module::getInstance('FunctionalLocations');
        $relationLabel  = 'HelpDesk';
        $invogamoduleInstance->setRelatedList(
              $invoiceModule, $relationLabel, Array('ADD'), 'get_dependents_list' //you can do select also Array('ADD','SELECT')
        );
        // ------------------------invoga
        $tom = "INSERT INTO `vtiger_fieldmodulerel` (`fieldid`, `module`, `relmodule`, `status`, `sequence`) VALUES ('$id', 'HelpDesk', 'FunctionalLocations', NULL, NULL)";
        $adb->pquery($tom);
    } else {
        echo "field is present -- func_loc_id  in HelpDesk--- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_CUSTOM_INFORMATION in HelpDesk -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('HelpDesk');
$blockInstance = Vtiger_Block::getInstance('LBL_CUSTOM_INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('chg_func_loc', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'chg_func_loc';
        $field->column = 'chg_func_loc';
        $field->table = $invoiceModule->basetable;
        $field->label = 'Change Functional Location';
        $field->uitype = 56;
        $field->columntype = 'INT(1) DEFAULT 0';
        $field->typeofdata = 'I~O';
        $field->displaytype = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- chg_func_loc In HelpDesk Module --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_CUSTOM_INFORMATION in HelpDesk -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

// $invoiceModule = null;
// $blockInstance = null;
// $fieldInstance = null;
// $invoiceModule = Vtiger_Module::getInstance('HelpDesk');
// $blockInstance = Vtiger_Block::getInstance('LBL_CUSTOM_INFORMATION', $invoiceModule);
// if ($blockInstance) {
//     $fieldInstance = Vtiger_Field::getInstance('manual_loc', $invoiceModule);
//     if (!$fieldInstance) {
//         $field = new Vtiger_Field();
//         $field->name = 'manual_loc';
//         $field->column = 'manual_loc';
//         $field->uitype = 2;
//         $field->table = $invoiceModule->basetable;
//         $field->label = 'Other Location';
//         $field->summaryfield = 1;
//         $field->readonly = 1;
//         $field->presence = 2;
//         $field->typeofdata = 'V~O';
//         $field->columntype = 'VARCHAR(250)';
//         $field->quickcreate = 3;
//         $field->displaytype = 1;
//         $field->masseditable = 1;
//         $blockInstance->addField($field);
//     } else {
//         echo "field is present -- manual_loc in HelpDesk --- <br>";
//     }
// } else {
//     echo "Block Does not exits -- LBL_CUSTOM_INFORMATION in HelpDesk -- <br>";
// }
// $invoiceModule = null;
// $blockInstance = null;
// $fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('HelpDesk');
$blockInstance = Vtiger_Block::getInstance('LBL_CUSTOM_INFORMATION', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('sub_assembly', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'sub_assembly';
        $fieldInstance->label = 'SUB ASSEMBLY';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'sub_assembly';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
   //   $fieldInstance->setPicklistValues(array('NEW', 'RECON', 'REPAIR'));
    } else {
        echo "field is already Present --- sub_assembly in HelpDesk Module --- <br>";
    }
} else {
    echo "block does not exits --- LBL_CUSTOM_INFORMATION -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('HelpDesk');
$blockInstance = Vtiger_Block::getInstance('LBL_CUSTOM_INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('det_of_sub_asmbl', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'det_of_sub_asmbl';
        $field->column = 'det_of_sub_asmbl';
        $field->uitype = 2;
        $field->table = $invoiceModule->basetable;
        $field->label = 'det_of_sub_asmbl';
        $field->summaryfield = 1;
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(250)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- det_of_sub_asmbl in HelpDesk --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_CUSTOM_INFORMATION in HelpDesk -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('HelpDesk');
$blockInstance = Vtiger_Block::getInstance('LBL_CUSTOM_INFORMATION', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('war_claim_dte', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'war_claim_dte';
        $fieldInstance->label = 'war_claim_dte';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'war_claim_dte';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $blockInstance->addField($fieldInstance);
      //$fieldInstance->setPicklistValues(array('DATE OF SUPPLY', 'DATE OF FITMENT'));
    } else {
        echo "field is already Present --- war_claim_dte in HelpDesk Module --- <br>";
    }
} else {
    echo "block does not exits --- LBL_CUSTOM_INFORMATION -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('HelpDesk');
$blockInstance = Vtiger_Block::getInstance('LBL_CUSTOM_INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('purchase_ref', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'purchase_ref';
        $field->column = 'purchase_ref';
        $field->uitype = 2;
        $field->table = $invoiceModule->basetable;
        $field->label = 'PURCHASE ORDER REF';
        $field->summaryfield = 1;
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(50)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- purchase_ref in HelpDesk --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_CUSTOM_INFORMATION in HelpDesk -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('SYSTEM INFORMATION', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('sr_system_affected', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'sr_system_affected';
        $fieldInstance->label = 'System Affected';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'sr_system_affected';
        $fieldInstance->uitype = 33;
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'TEXT';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
    //  $fieldInstance->setPicklistValues(array('Engine'));
    } else {
        echo "field is already Present --- sr_system_affected in RecommissioningReports Module --- <br>";
    }
} else {
    echo " block does not exits --- SYSTEM INFORMATION -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('SYSTEM INFORMATION', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('sr_hmr', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'sr_hmr';
        $fieldInstance->label = 'HMR Date';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'sr_hmr';
        $fieldInstance->uitype = 5;
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'D~O';
        $fieldInstance->columntype = 'DATE';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- sr_hmr in Equipment Module --- <br>";
    }
} else {
    echo "block does not exits --- SYSTEM INFORMATION in RecommissioningReports-- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('SYSTEM INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('symptoms', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'symptoms';
        $field->column = 'symptoms';
        $field->uitype = 21;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Symptoms';
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'TEXT';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- symptoms RecommissioningReports --- <br>";
    }
} else {
    echo "Block Does not exits -- SYSTEM INFORMATION in RecommissioningReports -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('SYSTEM INFORMATION', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('dte_of_commissing', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'dte_of_commissing';
        $fieldInstance->label = 'Date Of Commisioning';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'dte_of_commissing';
        $fieldInstance->uitype = 5;
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'D~O';
        $fieldInstance->columntype = 'DATE';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- dte_of_commissing in Equipment Module --- <br>";
    }
} else {
    echo "block does not exits --- SYSTEM INFORMATION in RecommissioningReports-- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('SYSTEM INFORMATION', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('warranty_end_dte', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'warranty_end_dte';
        $fieldInstance->label = 'Warranty End Date';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'warranty_end_dte';
        $fieldInstance->uitype = 5;
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'D~O';
        $fieldInstance->columntype = 'DATE';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- warranty_end_dte in RecommissioningReports Module --- <br>";
    }
} else {
    echo "block does not exits --- SYSTEM INFORMATION in RecommissioningReports-- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('SYSTEM INFORMATION', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('sr_war_status', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'sr_war_status';
        $fieldInstance->label = 'Status';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'sr_war_status';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
     // $fieldInstance->setPicklistValues(array('Coal'));
    } else {
        echo "field is already Present --- sr_war_status in RecommissioningReports Module --- <br>";
    }
} else {
    echo " block does not exits --- SYSTEM INFORMATION -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('SYSTEM INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('sr_warranty_terms', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'sr_warranty_terms';
        $field->column = 'sr_warranty_terms';
        $field->uitype = 2;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Warranty Terms';
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(200)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- sr_warranty_terms RecommissioningReports --- <br>";
    }
} else {
    echo "Block Does not exits -- SYSTEM INFORMATION in RecommissioningReports -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('Contacts');
$blockInstance = Vtiger_Block::getInstance('LBL_CUSTOM_INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('rejection_reason', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'rejection_reason';
        $field->column = 'rejection_reason';
        $field->uitype = 2;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Rejection Reason';
        $field->summaryfield = 1;
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(500)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $field->defaultvalue = 0;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- rejection_reason Contacts --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_CUSTOM_INFORMATION in Contacts -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('Contacts');
$blockInstance = Vtiger_Block::getInstance('LBL_CUSTOM_INFORMATION', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('usr_log_plat', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'usr_log_plat';
        $fieldInstance->label = 'Accessing Portals';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'usr_log_plat';
        $fieldInstance->uitype = 33;
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(500)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
   //   $fieldInstance->setPicklistValues(array('Mobile App','Web Portal'));
    } else {
        echo "field is already Present --- usr_log_plat in Contacts Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_CUSTOM_INFORMATION -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('ServiceEngineer');
$blockInstance = Vtiger_Block::getInstance('LBL_USERLOGIN_ROLE', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('rejection_reason', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'rejection_reason';
        $field->column = 'rejection_reason';
        $field->uitype = 2;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Rejection Reason';
        $field->summaryfield = 1;
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(500)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $field->defaultvalue = 0;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- rejection_reason Contacts --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_USERLOGIN_ROLE in ServiceEngineer -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('ServiceEngineer');
$blockInstance = Vtiger_Block::getInstance('LBL_USERLOGIN_ROLE', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('ser_usr_log_plat', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'ser_usr_log_plat';
        $fieldInstance->label = 'Accessing Portals';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'ser_usr_log_plat';
        $fieldInstance->uitype = 33;
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(500)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
     // $fieldInstance->setPicklistValues(array('Mobile App','Web Portal'));
    } else {
        echo "field is already Present --- ser_usr_log_plat in ServiceEngineer Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_USERLOGIN_ROLE -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('HelpDesk');
$blockInstance = Vtiger_Block::getInstance('LBL_CUSTOM_INFORMATION', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('sr_dep_system', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'sr_dep_system';
        $fieldInstance->label = 'Select System';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'sr_dep_system';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
    //  $fieldInstance->setPicklistValues(array('test value'));
    } else {
        echo "field is already Present --- sr_dep_system in HelpDesk Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_CUSTOM_INFORMATION -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('SYSTEM INFORMATION', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('ticket_date', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'ticket_date';
        $fieldInstance->label = 'Ticket Date';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'ticket_date';
        $fieldInstance->uitype = 5;
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'D~O';
        $fieldInstance->columntype = 'DATE';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- ticket_date in RecommissioningReports Module --- <br>";
    }
} else {
    echo "block does not exits --- SYSTEM INFORMATION in RecommissioningReports-- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('SYSTEM INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('opp_name', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'opp_name';
        $field->column = 'opp_name';
        $field->uitype = 2;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Name';
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(250)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- opp_name in RecommissioningReports --- <br>";
    }
} else {
    echo "Block Does not exits -- SYSTEM INFORMATION in RecommissioningReports -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('SYSTEM INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('phone', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'phone';
        $field->column = 'phone';
        $field->uitype = 11;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Mobile Number';
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(30)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- phone RecommissioningReports --- <br>";
    }
} else {
    echo "Block Does not exits -- SYSTEM INFORMATION in RecommissioningReports -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('SYSTEM INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('reported_by', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'reported_by';
        $field->column = 'reported_by';
        $field->uitype = 10;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Reported By';
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'I~O';
        $field->columntype = 'INT(10)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $id = $blockInstance->addFieldIgnite($field);
        echo "igggggggggggggggggggg mission created field --- $id ";
        $tom = "INSERT INTO `vtiger_fieldmodulerel` (`fieldid`, `module`, `relmodule`, `status`, `sequence`) VALUES ('$id', 'RecommissioningReports', 'Contacts', NULL, NULL)";
        $adb->pquery($tom);
        $tom = "INSERT INTO `vtiger_fieldmodulerel` (`fieldid`, `module`, `relmodule`, `status`, `sequence`) VALUES ('$id', 'RecommissioningReports', 'Users', NULL, NULL)";
        $adb->pquery($tom);
    } else {
        echo "field is present -- reported_by  in RecommissioningReports--- <br>";
    }
} else {
    echo "Block Does not exits -- SYSTEM INFORMATION in RecommissioningReports -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('SYSTEM INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('account_id', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'account_id';
        $field->column = 'account_id';
        $field->uitype = 10;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Organisation Name';
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'I~O';
        $field->columntype = 'INT(10)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $id = $blockInstance->addFieldIgnite($field);
        echo "igggggggggggggggggggg mission created field --- $id ";
        $invogamoduleInstance = Vtiger_Module::getInstance('Accounts');
        $relationLabel  = 'RecommissioningReports';
        $invogamoduleInstance->setRelatedList(
              $invoiceModule, $relationLabel, Array('ADD'), 'get_dependents_list' //you can do select also Array('ADD','SELECT')
        );
        $tom = "INSERT INTO `vtiger_fieldmodulerel` (`fieldid`, `module`, `relmodule`, `status`, `sequence`) VALUES ('$id', 'RecommissioningReports', 'Accounts', NULL, NULL)";
        $adb->pquery($tom);
       
    } else {
        echo "field is present -- account_id  in RecommissioningReports--- <br>";
    }
} else {
    echo "Block Does not exits -- SYSTEM INFORMATION in RecommissioningReports -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('SYSTEM INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('func_loc_id', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'func_loc_id';
        $field->column = 'func_loc_id';
        $field->uitype = 10;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Project Name';
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'I~O';
        $field->columntype = 'INT(10)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $id = $blockInstance->addFieldIgnite($field);
        echo "igggggggggggggggggggg mission created field --- $id ";
        // ------------------ invoga
       
        $invogamoduleInstance = Vtiger_Module::getInstance('FunctionalLocations');
        $relationLabel  = 'RecommissioningReports';
        $invogamoduleInstance->setRelatedList(
              $invoiceModule, $relationLabel, Array('ADD'), 'get_dependents_list' //you can do select also Array('ADD','SELECT')
        );
        // ------------------------invoga
        $tom = "INSERT INTO `vtiger_fieldmodulerel` (`fieldid`, `module`, `relmodule`, `status`, `sequence`) VALUES ('$id', 'RecommissioningReports', 'FunctionalLocations', NULL, NULL)";
        $adb->pquery($tom);
    } else {
        echo "field is present -- func_loc_id  in RecommissioningReports--- <br>";
    }
} else {
    echo "Block Does not exits -- SYSTEM INFORMATION in RecommissioningReports -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('SYSTEM INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('area_name', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'area_name';
        $field->column = 'area_name';
        $field->uitype = 2;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Area Name';
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(250)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- area_name RecommissioningReports --- <br>";
    }
} else {
    echo "Block Does not exits -- SYSTEM INFORMATION in RecommissioningReports -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('SYSTEM INFORMATION', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('sr_ticket_type', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'sr_ticket_type';
        $fieldInstance->label = 'Type';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'sr_ticket_type';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
   //   $fieldInstance->setPicklistValues(array('Periodic Maintenance', 'Breakdown', 'General Inspection', 'Sub Assembly Fitment','Service for Spares','Initial Commissioning'));
    } else {
        echo "field is already Present --- sr_ticket_type in RecommissioningReports Module --- <br>";
    }
} else {
    echo " block does not exits --- SYSTEM INFORMATION -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$emm = null;
$emm = new VTEntityMethodManager($adb);
$result = $adb->pquery("SELECT function_name FROM com_vtiger_workflowtasks_entitymethod WHERE module_name=? AND method_name=?", array('HelpDesk', 'HandleTicketAssignment'));
if ($adb->num_rows($result) == 0) {
    $emm->addEntityMethod("HelpDesk", "HandleTicketAssignment", "modules/HelpDesk/HandleTicketAssignment.php", "HandleTicketAssignment");
} else {
    print_r("already exits --- workflow function -- HandleTicketAssignment in HelpDesk Module <br> ");
}
$emm = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('HelpDesk');
$blockInstance = Vtiger_Block::getInstance('LBL_CUSTOM_INFORMATION', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('tket_acc_status', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'tket_acc_status';
        $fieldInstance->label = 'Acceptance Status';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'tket_acc_status';
        $fieldInstance->uitype = '15';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
    //  $fieldInstance->setPicklistValues(array('Pending', 'Accepted', 'Rejected'));
    } else {
        echo "field is already Present --- tket_acc_status in HelpDesk Module --- <br>";
    }
} else {
    echo "Block does not exits --- LBL_CUSTOM_INFORMATION -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('HelpDesk');
$blockInstance = Vtiger_Block::getInstance('LBL_CUSTOM_INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('rejection_reason', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'rejection_reason';
        $field->column = 'rejection_reason';
        $field->uitype = 2;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Rejection Reason';
        $field->summaryfield = 1;
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(500)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $field->defaultvalue = 0;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- rejection_reason HelpDesk --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_CUSTOM_INFORMATION in HelpDesk -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('Contacts');
$blockInstance = Vtiger_Block::getInstance('LBL_CUSTOM_INFORMATION', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('con_role', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'con_role';
        $fieldInstance->label = 'Contact Role';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'con_role';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
    //  $fieldInstance->setPicklistValues(array('Customer HQ', 'Area Manager', 'Staff officer','Area GM','Project Engineer','Project In charge'));
    } else {
        echo "field is already Present --- con_role in Contacts Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_CUSTOM_INFORMATION -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('SYSTEM INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('ticket_id', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'ticket_id';
        $field->column = 'ticket_id';
        $field->uitype = 10;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Ticket Id';
        $field->summaryfield = 1;
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'I~O';
        $field->columntype = 'INT(10)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $id = $blockInstance->addFieldIgnite($field);
        echo "igggggggggggggggggggg mission created field --- $id ";
        // ------------------ invoga
       
        $invogamoduleInstance = Vtiger_Module::getInstance('HelpDesk');
        $relationLabel  = 'RecommissioningReports';
        $invogamoduleInstance->setRelatedList(
              $invoiceModule, $relationLabel, Array('ADD'), 'get_dependents_list' //you can do select also Array('ADD','SELECT')
        );
        // ------------------------invoga
        $tom = "INSERT INTO `vtiger_fieldmodulerel` (`fieldid`, `module`, `relmodule`, `status`, `sequence`) VALUES ('$id', 'RecommissioningReports', 'HelpDesk', NULL, NULL)";
        $adb->pquery($tom);
    } else {
        echo "field is present -- ticket_id  in RecommissioningReports--- <br>";
    }
} else {
    echo "Block Does not exits -- SYSTEM INFORMATION in RecommissioningReports -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('Equipment');
$blockInstance = Vtiger_Block::getInstance('LBL_BLOCK_SYSTEM_INFORMATION', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('eq_last_hmr', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'eq_last_hmr';
        $fieldInstance->column = 'eq_last_hmr';
        $fieldInstance->uitype = 7;
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->label = 'Hour Meter Reading';
        $fieldInstance->summaryfield = 1;
        $fieldInstance->readonly = 1;
        $fieldInstance->presence = 2;
        $fieldInstance->typeofdata = 'I~O';
        $fieldInstance->columntype = 'INT(15)';
        $fieldInstance->quickcreate = 3;
        $fieldInstance->displaytype = 1;
        $fieldInstance->masseditable = 1;
        $fieldInstance->defaultvalue = 0;
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- eq_last_hmr in Equipment Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_BLOCK_SYSTEM_INFORMATION in Equipment -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('LBL_ITEM_DETAILS', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('sr_action_one', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'sr_action_one';
        $fieldInstance->label = 'Action 1';
        $fieldInstance->table = 'vtiger_inventoryproductrel';
        $fieldInstance->column = 'sr_action_one';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $fieldInstance->helpinfo = 'li_lg';
        $blockInstance->addField($fieldInstance);
  //    $fieldInstance->setPicklistValues(array('To be replaced', 'Can be used'));
    } else {
        echo "field is present -- sr_action_one In RecommissioningReports Module --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_ITEM_DETAILS in RecommissioningReports -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('LBL_ITEM_DETAILS', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('sr_action_two', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'sr_action_two';
        $fieldInstance->label = 'Action 1';
        $fieldInstance->table = 'vtiger_inventoryproductrel';
        $fieldInstance->column = 'sr_action_two';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $fieldInstance->helpinfo = 'li_lg';
        $blockInstance->addField($fieldInstance);
   //   $fieldInstance->setPicklistValues(array('Required', 'Repaired'));
    } else {
        echo "field is present -- sr_action_two In RecommissioningReports Module --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_ITEM_DETAILS in RecommissioningReports -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('LBL_ITEM_DETAILS', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('sr_replace_action', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'sr_replace_action';
        $fieldInstance->label = 'Replacement Action';
        $fieldInstance->table = 'vtiger_inventoryproductrel';
        $fieldInstance->column = 'sr_replace_action';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $fieldInstance->helpinfo = 'li_lg';
        $blockInstance->addField($fieldInstance);
    //  $fieldInstance->setPicklistValues(array('From BEML', 'From Vendor','From Customer'));
    } else {
        echo "field is present -- sr_replace_action In RecommissioningReports Module --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_ITEM_DETAILS in RecommissioningReports -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('Equipment Details', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('sr_equip_status', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'sr_equip_status';
        $fieldInstance->label = 'Equipment Status';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'sr_equip_status';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
  //    $fieldInstance->setPicklistValues(array('On Road', 'Off Road', 'Running With Problem'));
    } else {
        echo "field is already Present --- sr_equip_status in RecommissioningReports Module --- <br>";
    }
} else {
    echo " block does not exits --- Equipment Details in RecommissioningReports -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('Equipment Details', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('eng_sl_no', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'eng_sl_no';
        $field->column = 'eng_sl_no';
        $field->uitype = 2;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Engine Sl No';
        $field->summaryfield = 1;
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(250)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $field->defaultvalue = 0;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- eng_sl_no in RecommissioningReports --- <br>";
    }
} else {
    echo "Block Does not exits -- Equipment Details in RecommissioningReports -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('Equipment Details', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('trans_sl_no', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'trans_sl_no';
        $field->column = 'trans_sl_no';
        $field->uitype = 2;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Transmission Sl No';
        $field->summaryfield = 1;
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(250)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $field->defaultvalue = 0;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- trans_sl_no in RecommissioningReports --- <br>";
    }
} else {
    echo "Block Does not exits -- Equipment Details in RecommissioningReports -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('Equipment Details', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('motor_sl_no', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'motor_sl_no';
        $field->column = 'motor_sl_no';
        $field->uitype = 2;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Motor Sl No';
        $field->summaryfield = 1;
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(250)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $field->defaultvalue = 0;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- motor_sl_no in RecommissioningReports --- <br>";
    }
} else {
    echo "Block Does not exits -- Equipment Details in RecommissioningReports -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('Equipment Details', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('date_of_failure', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'date_of_failure';
        $fieldInstance->label = 'Failure Date';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'date_of_failure';
        $fieldInstance->uitype = 5;
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'D~O';
        $fieldInstance->columntype = 'DATE';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- date_of_failure in RecommissioningReports Module --- <br>";
    }
} else {
    echo " block does not exits --- Equipment Details -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('Equipment Details', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('hmr', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'hmr';
        $fieldInstance->column = 'hmr';
        $fieldInstance->uitype = 7;
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->label = 'Meter reading';
        $fieldInstance->summaryfield = 1;
        $fieldInstance->readonly = 1;
        $fieldInstance->presence = 2;
        $fieldInstance->typeofdata = 'I~O';
        $fieldInstance->columntype = 'INT(15)';
        $fieldInstance->quickcreate = 3;
        $fieldInstance->displaytype = 1;
        $fieldInstance->masseditable = 1;
        $fieldInstance->defaultvalue = 0;
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- hmr in RecommissioningReports Module --- <br>";
    }
} else {
    echo " block does not exits --- Equipment Details in RecommissioningReports -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('Equipment Details', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('kilometer_reading', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'kilometer_reading';
        $fieldInstance->column = 'kilometer_reading';
        $fieldInstance->uitype = 7;
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->label = 'Kilometer';
        $fieldInstance->summaryfield = 1;
        $fieldInstance->readonly = 1;
        $fieldInstance->presence = 2;
        $fieldInstance->typeofdata = 'I~O';
        $fieldInstance->columntype = 'INT(15)';
        $fieldInstance->quickcreate = 3;
        $fieldInstance->displaytype = 1;
        $fieldInstance->masseditable = 1;
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- kilometer_reading in RecommissioningReports Module --- <br>";
    }
} else {
    echo " block does not exits --- Equipment Details in RecommissioningReports -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('Equipment Details', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('kilo_date', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'kilo_date';
        $fieldInstance->label = 'Kilometer Date';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'kilo_date';
        $fieldInstance->uitype = 5;
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'D~O';
        $fieldInstance->columntype = 'DATE';
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- kilo_date in RecommissioningReports Module --- <br>";
    }
} else {
    echo "block does not exits --- Equipment Details in RecommissioningReports-- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('SYSTEM INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('project_name', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'project_name';
        $field->column = 'project_name';
        $field->uitype = 2;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Project Name';
        $field->summaryfield = 1;
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(250)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $field->defaultvalue = 0;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- project_name RecommissioningReports --- <br>";
    }
} else {
    echo "Block Does not exits -- SYSTEM INFORMATION in RecommissioningReports -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('Warranty / Contract Details', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('type_of_conrt', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'type_of_conrt';
        $fieldInstance->label = 'Type of Contract';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'type_of_conrt';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
    //  $fieldInstance->setPicklistValues(array('GPCC', 'COSTCAP', 'FMC','MARC','AMC'));
    } else {
        echo "field is already Present --- type_of_conrt in RecommissioningReports Module --- <br>";
    }
} else {
    echo " block does not exits --- Warranty / Contract Details in RecommissioningReports -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('Warranty / Contract Details', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('cont_start_date', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'cont_start_date';
        $fieldInstance->label = 'Contract Start Date';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'cont_start_date';
        $fieldInstance->uitype = 5;
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'D~O';
        $fieldInstance->columntype = 'DATE';
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- cont_start_date in RecommissioningReports Module --- <br>";
    }
} else {
    echo "block does not exits --- Warranty / Contract Details in RecommissioningReports-- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('Warranty / Contract Details', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('cont_end_date', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'cont_end_date';
        $fieldInstance->label = 'Contract End Date';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'cont_end_date';
        $fieldInstance->uitype = 5;
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'D~O';
        $fieldInstance->columntype = 'DATE';
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- cont_end_date in RecommissioningReports Module --- <br>";
    }
} else {
    echo "block does not exits --- Warranty / Contract Details in RecommissioningReports-- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('Warranty / Contract Details', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('run_year_cont', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'run_year_cont';
        $fieldInstance->column = 'run_year_cont';
        $fieldInstance->uitype = 7;
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->label = 'Running year of Contract';
        $fieldInstance->summaryfield = 1;
        $fieldInstance->readonly = 1;
        $fieldInstance->presence = 2;
        $fieldInstance->typeofdata = 'I~O';
        $fieldInstance->columntype = 'INT(10)';
        $fieldInstance->displaytype = 1;
        $fieldInstance->masseditable = 1;
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- run_year_cont in RecommissioningReports Module --- <br>";
    }
} else {
    echo " block does not exits --- Warranty / Contract Details in RecommissioningReports -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('Warranty / Contract Details', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('sr_eq_warranty_terms', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'sr_eq_warranty_terms';
        $field->column = 'sr_eq_warranty_terms';
        $field->uitype = 2;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Equipment Warranty Terms';
        $field->summaryfield = 1;
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(200)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $field->defaultvalue = 0;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- sr_eq_warranty_terms RecommissioningReports --- <br>";
    }
} else {
    echo "Block Does not exits -- Warranty / Contract Details in RecommissioningReports -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('Warranty / Contract Details', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('sr_agg_warranty_terms', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'sr_agg_warranty_terms';
        $field->column = 'sr_agg_warranty_terms';
        $field->uitype = 2;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Aggregate Warranty Details';
        $field->summaryfield = 1;
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(200)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $field->defaultvalue = 0;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- sr_agg_warranty_terms RecommissioningReports --- <br>";
    }
} else {
    echo "Block Does not exits -- Warranty / Contract Details in RecommissioningReports -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('Warranty / Contract Details', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('sr_transmission', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'sr_transmission';
        $field->column = 'sr_transmission';
        $field->uitype = 2;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Transmission';
        $field->summaryfield = 1;
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(200)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- sr_transmission RecommissioningReports --- <br>";
    }
} else {
    echo "Block Does not exits -- Warranty / Contract Details in RecommissioningReports -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('Warranty / Contract Details', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('sr_engine', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'sr_engine';
        $field->column = 'sr_engine';
        $field->uitype = 2;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Engine';
        $field->summaryfield = 1;
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(200)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- sr_engine RecommissioningReports --- <br>";
    }
} else {
    echo "Block Does not exits -- Warranty / Contract Details in RecommissioningReports -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('Warranty / Contract Details', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('sr_final_drive', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'sr_final_drive';
        $field->column = 'sr_final_drive';
        $field->uitype = 2;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Final Drive';
        $field->summaryfield = 1;
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(200)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- sr_final_drive RecommissioningReports --- <br>";
    }
} else {
    echo "Block Does not exits -- Warranty / Contract Details in RecommissioningReports -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('Warranty / Contract Details', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('sr_rear_axle', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'sr_rear_axle';
        $field->column = 'sr_rear_axle';
        $field->uitype = 2;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Rear Axle';
        $field->summaryfield = 1;
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(200)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present --   RecommissioningReports --- <br>";
    }
} else {
    echo "Block Does not exits -- Warranty / Contract Details in RecommissioningReports -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('Warranty / Contract Details', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('sr_chassis', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'sr_chassis';
        $field->column = 'sr_chassis';
        $field->uitype = 2;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Chassis';
        $field->summaryfield = 1;
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(200)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- sr_chassis   RecommissioningReports --- <br>";
    }
} else {
    echo "Block Does not exits -- Warranty / Contract Details in RecommissioningReports -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('Equipment');
$blockInstance = Vtiger_Block::getInstance('LBL_BLOCK_GENERAL_INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('plant_name', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'plant_name';
        $field->column = 'plant_name';
        $field->uitype = 10;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Plant';
        $field->summaryfield = 1;
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'I~O';
        $field->columntype = 'INT(10)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $field->defaultvalue = 0;
        $id = $blockInstance->addFieldIgnite($field);
        echo "igggggggggggggggggggg mission created field --- $id ";
        // ------------------ invoga
        $invogamoduleInstance = Vtiger_Module::getInstance('MaintenancePlant');
        $relationLabel  = 'Equipments';
        $invogamoduleInstance->setRelatedList(
              $invoiceModule, $relationLabel, Array('ADD'), 'get_dependents_list' //you can do select also Array('ADD','SELECT')
        );
        // ------------------------invoga
        $tom = "INSERT INTO `vtiger_fieldmodulerel` (`fieldid`, `module`, `relmodule`, `status`, `sequence`) VALUES ('$id', 'Equipment', 'MaintenancePlant', NULL, NULL)";
        $adb->pquery($tom);
    } else {
        echo "field is present -- plant_name  in Equipment--- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_BLOCK_GENERAL_INFORMATION in Equipment -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('StockTransferOrders');
$blockInstance = Vtiger_Block::getInstance('LBL_SYSTEM_INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('ticket_id', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'ticket_id';
        $field->column = 'ticket_id';
        $field->uitype = 10;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Ticket Id';
        $field->summaryfield = 1;
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'I~O';
        $field->columntype = 'INT(10)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $field->defaultvalue = 0;
        $id = $blockInstance->addFieldIgnite($field);
        echo "igggggggggggggggggggg mission created field --- $id ";
        // ------------------ invoga
        $invogamoduleInstance = Vtiger_Module::getInstance('HelpDesk');
        $relationLabel  = 'StockTransfer Orders';
        $invogamoduleInstance->setRelatedList(
              $invoiceModule, $relationLabel, Array('ADD'), 'get_dependents_list' //you can do select also Array('ADD','SELECT')
        );
        // ------------------------invoga
        $tom = "INSERT INTO `vtiger_fieldmodulerel` (`fieldid`, `module`, `relmodule`, `status`, `sequence`) VALUES ('$id', 'StockTransferOrders', 'HelpDesk', NULL, NULL)";
        $adb->pquery($tom);
    } else {
        echo "field is present -- ticket_id  in StockTransferOrders--- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_SYSTEM_INFORMATION in StockTransferOrders -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

// $invoiceModule = null;
// $blockInstance = null;
// $fieldInstance = null;
// $invoiceModule = Vtiger_Module::getInstance('BankGuarantee');
// $blockInstance = Vtiger_Block::getInstance('LBL_BLOCK_GENERAL_INFORMATION', $invoiceModule);
// if ($blockInstance) {
//     $fieldInstance = Vtiger_Field::getInstance('equ_ser_no', $invoiceModule);
//     if (!$fieldInstance) {
//         $field = new Vtiger_Field();
//         $field->name = 'equ_ser_no';
//         $field->column = 'equ_ser_no';
//         $field->uitype = 2;
//         $field->table = $invoiceModule->basetable;
//         $field->label = 'Equipment Sl.No.';
//         $field->summaryfield = 1;
//         $field->readonly = 1;
//         $field->presence = 2;
//         $field->typeofdata = 'V~O';
//         $field->columntype = 'VARCHAR(250)';
//         $field->quickcreate = 3;
//         $field->displaytype = 1;
//         $field->masseditable = 1;
//         $field->defaultvalue = 0;
//         $blockInstance->addField($field);
//     } else {
//         echo "field is present -- equ_ser_no in BankGuarantee --- <br>";
//     }
// } else {
//     echo "Block Does not exits -- LBL_BLOCK_GENERAL_INFORMATION in BankGuarantee -- <br>";
// }
// $invoiceModule = null;
// $blockInstance = null;
// $fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('BankGuarantee');
$blockInstance = Vtiger_Block::getInstance('LBL_BLOCK_GENERAL_INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('plant_name', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'plant_name';
        $field->column = 'plant_name';
        $field->uitype = 10;
        $field->table = $invoiceModule->basetable;
        $field->label = 'REGION / PLANT';
        $field->summaryfield = 1;
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'I~O';
        $field->columntype = 'INT(30)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $id = $blockInstance->addFieldIgnite($field);
        echo "igggggggggggggggggggg mission created field --- $id ";
        // ------------------ invoga
        $invogamoduleInstance = Vtiger_Module::getInstance('MaintenancePlant');
        $relationLabel  = 'BankGuarantees';
        $invogamoduleInstance->setRelatedList(
              $invoiceModule, $relationLabel, Array('ADD'), 'get_dependents_list' //you can do select also Array('ADD','SELECT')
        );
        // ------------------------invoga
        $tom = "INSERT INTO `vtiger_fieldmodulerel` (`fieldid`, `module`, `relmodule`, `status`, `sequence`) VALUES ('$id', 'BankGuarantee', 'MaintenancePlant', NULL, NULL)";
        $adb->pquery($tom);
    } else {
        echo "field is present -- plant_name  in BankGuarantee--- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_BLOCK_GENERAL_INFORMATION in BankGuarantee -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('BankGuarantee');
$blockInstance = Vtiger_Block::getInstance('LBL_BLOCK_GENERAL_INFORMATION', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('bg_val', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'bg_val';
        $fieldInstance->column = 'bg_val';
        $fieldInstance->uitype = 7;
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->label = 'BankGuarantee Value';
        $fieldInstance->summaryfield = 1;
        $fieldInstance->readonly = 1;
        $fieldInstance->presence = 2;
        $fieldInstance->typeofdata = 'NN~O';
        $fieldInstance->columntype = 'DECIMAL(30,5)';
        $fieldInstance->quickcreate = 3;
        $fieldInstance->displaytype = 1;
        $fieldInstance->masseditable = 1;
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- bg_val in BankGuarantee Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_BLOCK_GENERAL_INFORMATION -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('BankGuarantee');
$blockInstance = Vtiger_Block::getInstance('LBL_BLOCK_GENERAL_INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('zbg_region', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'zbg_region';
        $field->column = 'zbg_region';
        $field->uitype = 2;
        $field->table = $invoiceModule->basetable;
        $field->label = 'REGION';
        $field->summaryfield = 1;
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(250)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- zbg_region in BankGuarantee --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_BLOCK_GENERAL_INFORMATION in BankGuarantee -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('BankGuarantee');
$blockInstance = Vtiger_Block::getInstance('LBL_BLOCK_GENERAL_INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('account_id', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'account_id';
        $field->column = 'account_id';
        $field->uitype = 10;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Customer Number';
        $field->summaryfield = 1;
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'I~O';
        $field->columntype = 'INT(30)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $field->defaultvalue = 0;
        $id = $blockInstance->addFieldIgnite($field);
        echo "igggggggggggggggggggg mission created field --- $id ";
        // ------------------ invoga
        $invogamoduleInstance = Vtiger_Module::getInstance('Accounts');
        $relationLabel  = 'BankGuarantees';
        $invogamoduleInstance->setRelatedList(
              $invoiceModule, $relationLabel, Array('ADD'), 'get_dependents_list' //you can do select also Array('ADD','SELECT')
        );
        // ------------------------invoga
        $tom = "INSERT INTO `vtiger_fieldmodulerel` (`fieldid`, `module`, `relmodule`, `status`, `sequence`) VALUES ('$id', 'BankGuarantee', 'Accounts', NULL, NULL)";
        $adb->pquery($tom);
    } else {
        echo "field is present -- account_id  in BankGuarantee--- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_BLOCK_GENERAL_INFORMATION in BankGuarantee -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('BankGuarantee');
$blockInstance = Vtiger_Block::getInstance('LBL_BLOCK_GENERAL_INFORMATION', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('bg_valid_from', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'bg_valid_from';
        $fieldInstance->label = 'BG Validity from';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'bg_valid_from';
        $fieldInstance->uitype = 5;
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'D~O';
        $fieldInstance->columntype = 'DATE';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- bg_valid_from in BankGuarantee Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_BLOCK_GENERAL_INFORMATION -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('BankGuarantee');
$blockInstance = Vtiger_Block::getInstance('LBL_BLOCK_GENERAL_INFORMATION', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('bg_valid_to', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'bg_valid_to';
        $fieldInstance->label = 'BG Validity Upto';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'bg_valid_to';
        $fieldInstance->uitype = 5;
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'D~O';
        $fieldInstance->columntype = 'DATE';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- bg_valid_to in BankGuarantee Module --- <br>";
    }
} else {
    echo "block does not exits --- LBL_BLOCK_GENERAL_INFORMATION -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('BankGuarantee');
$blockInstance = Vtiger_Block::getInstance('LBL_BLOCK_GENERAL_INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('zbg_no', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'zbg_no';
        $field->column = 'zbg_no';
        $field->uitype = 2;
        $field->table = $invoiceModule->basetable;
        $field->label = 'BG NUmber';
        $field->summaryfield = 1;
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(250)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- zbg_no in BankGuarantee --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_BLOCK_GENERAL_INFORMATION in BankGuarantee -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('HelpDesk');
$blockInstance = Vtiger_Block::getInstance('LBL_CUSTOM_INFORMATION', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('sr_equip_model', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'sr_equip_model';
        $fieldInstance->label = 'Equipment Model';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'sr_equip_model';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $blockInstance->addField($fieldInstance);
    //  $fieldInstance->setPicklistValues(array('BH100', 'BWS70', 'BG825'));
    } else {
        echo "field is already Present --- sr_equip_model in HelpDesk Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_CUSTOM_INFORMATION -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('ServiceEngineer');
$blockInstance = Vtiger_Block::getInstance('LBL_USERLOGIN_ROLE', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('usr_verification', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'usr_verification';
        $field->column = 'usr_verification';
        $field->table = $invoiceModule->basetable;
        $field->label = 'User Verification';
        $field->uitype = 56;
        $field->columntype = 'INT(1) DEFAULT 0';
        $field->typeofdata = 'I~O';
        $field->displaytype = 2;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- usr_verification In ServiceEngineer Module --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_USERLOGIN_ROLE in ServiceEngineer -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('ServiceEngineer');
$blockInstance = Vtiger_Block::getInstance('LBL_USERLOGIN_ROLE', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('ticket_assign', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'ticket_assign';
        $field->column = 'ticket_assign';
        $field->table = $invoiceModule->basetable;
        $field->label = 'Ticket Assignment';
        $field->uitype = 56;
        $field->columntype = 'INT(1) DEFAULT 0';
        $field->typeofdata = 'I~O';
        $field->displaytype = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- ticket_assign In ServiceEngineer Module --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_USERLOGIN_ROLE in ServiceEngineer -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
//################################################################################
//genchk_engine
//genchk_engine
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('GENERAL_CHECKS', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('genchk_engine', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'genchk_engine';
        $fieldInstance->label = 'Engine';
        $fieldInstance->table = $moduleInstance->basetable."cf";
        $fieldInstance->column = 'genchk_engine';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
  //    $fieldInstance->setPicklistValues(array('OK', 'NOT OK', 'NA'));
    } else {
        echo "field is already Present --- genchk_engine in RecommissioningReports Module --- <br>";
    }
} else {
    echo " block does not exits --- GENERAL_CHECKS -- <br>";
}

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;



$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('GENERAL_CHECKS', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('genchk_oil_pressure', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'genchk_oil_pressure';
        $fieldInstance->label = 'Oil Pressure';
        $fieldInstance->table = $moduleInstance->basetable."cf";
        $fieldInstance->column = 'genchk_oil_pressure';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
    //  $fieldInstance->setPicklistValues(array('OK', 'NOT OK'));
    } else {
        echo "field is already Present --- genchk_oil_pressure in RecommissioningReports Module --- <br>";
    }
} else {
    echo " block does not exits --- GENERAL_CHECKS -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('GENERAL_CHECKS', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('genchk_oil_temperature', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'genchk_oil_temperature';
        $fieldInstance->label = 'Oil Temperature';
        $fieldInstance->table = $moduleInstance->basetable."cf";
        $fieldInstance->column = 'genchk_oil_temperature';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
   //   $fieldInstance->setPicklistValues(array('OK', 'NOT OK'));
    } else {
        echo "field is already Present --- genchk_oil_temperature in RecommissioningReports Module --- <br>";
    }
} else {
    echo " block does not exits --- GENERAL_CHECKS -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('GENERAL_CHECKS', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('genchk_coolant_temperature', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'genchk_coolant_temperature';
        $fieldInstance->label = 'Coolant Temperature';
        $fieldInstance->table = $moduleInstance->basetable."cf";
        $fieldInstance->column = 'genchk_coolant_temperature';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
   //   $fieldInstance->setPicklistValues(array('OK', 'NOT OK'));
    } else {
        echo "field is already Present --- genchk_coolant_temperature in RecommissioningReports Module --- <br>";
    }
} else {
    echo " block does not exits --- GENERAL_CHECKS -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;


$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('GENERAL_CHECKS', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('genchk_transmission', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'genchk_transmission';
        $fieldInstance->label = 'Transmission';
        $fieldInstance->table = $moduleInstance->basetable."cf";
        $fieldInstance->column = 'genchk_transmission';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
  //    $fieldInstance->setPicklistValues(array('OK', 'NOT OK', 'NA'));
    } else {
        echo "field is already Present --- genchk_transmission in RecommissioningReports Module --- <br>";
    }
} else {
    echo " block does not exits --- GENERAL_CHECKS -- <br>";
}

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;


$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('GENERAL_CHECKS', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('genchk_brake', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'genchk_brake';
        $fieldInstance->label = 'Brake';
        $fieldInstance->table = $moduleInstance->basetable."cf";
        $fieldInstance->column = 'genchk_brake';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
    //  $fieldInstance->setPicklistValues(array('OK', 'NOT OK'));
    } else {
        echo "field is already Present --- genchk_brake in RecommissioningReports Module --- <br>";
    }
} else {
    echo " block does not exits --- GENERAL_CHECKS -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('GENERAL_CHECKS', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('genchk_air_pressure', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'genchk_air_pressure';
        $fieldInstance->label = 'Air Pressure';
        $fieldInstance->table = $moduleInstance->basetable."cf";
        $fieldInstance->column = 'genchk_air_pressure';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
  //    $fieldInstance->setPicklistValues(array('OK', 'NOT OK','NA'));
    } else {
        echo "field is already Present --- genchk_air_pressure in RecommissioningReports Module --- <br>";
    }
} else {
    echo " block does not exits --- GENERAL_CHECKS -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('GENERAL_CHECKS', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('genchk_electrical', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'genchk_electrical';
        $fieldInstance->label = 'Electrical';
        $fieldInstance->table = $moduleInstance->basetable."cf";
        $fieldInstance->column = 'genchk_electrical';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
  //    $fieldInstance->setPicklistValues(array('OK', 'NOT OK','NA'));
    } else {
        echo "field is already Present --- genchk_electrical in RecommissioningReports Module --- <br>";
    }
} else {
    echo " block does not exits --- GENERAL_CHECKS -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('GENERAL_CHECKS', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('genchk_motor', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'genchk_motor';
        $fieldInstance->label = 'Motor(AC/DC)';
        $fieldInstance->table = $moduleInstance->basetable."cf";
        $fieldInstance->column = 'genchk_motor';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
  //    $fieldInstance->setPicklistValues(array('OK', 'NOT OK','NA'));
    } else {
        echo "field is already Present --- genchk_motor in RecommissioningReports Module --- <br>";
    }
} else {
    echo " block does not exits --- GENERAL_CHECKS -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;


$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('GENERAL_CHECKS', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('genchk_transformer', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'genchk_transformer';
        $fieldInstance->label = 'Transformer';
        $fieldInstance->table = $moduleInstance->basetable."cf";
        $fieldInstance->column = 'genchk_transformer';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
  //    $fieldInstance->setPicklistValues(array('OK', 'NOT OK','NA'));
    } else {
        echo "field is already Present --- genchk_transformer in RecommissioningReports Module --- <br>";
    }
} else {
    echo " block does not exits --- GENERAL_CHECKS -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;


$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('GENERAL_CHECKS', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('genchk_field_switch', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'genchk_field_switch';
        $fieldInstance->label = 'Field Switch';
        $fieldInstance->table = $moduleInstance->basetable."cf";
        $fieldInstance->column = 'genchk_field_switch';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
  //    $fieldInstance->setPicklistValues(array('OK', 'NOT OK','NA'));
    } else {
        echo "field is already Present --- genchk_field_switch in RecommissioningReports Module --- <br>";
    }
} else {
    echo " block does not exits --- GENERAL_CHECKS -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('GENERAL_CHECKS', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('genchk_auto_electrical_system', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'genchk_auto_electrical_system';
        $fieldInstance->label = 'Auto Electrical System(DC)';
        $fieldInstance->table = $moduleInstance->basetable."cf";
        $fieldInstance->column = 'genchk_auto_electrical_system';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
  //    $fieldInstance->setPicklistValues(array('OK', 'NOT OK','NA'));
    } else {
        echo "field is already Present --- genchk_auto_electrical_system in RecommissioningReports Module --- <br>";
    }
} else {
    echo " block does not exits --- GENERAL_CHECKS -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('GENERAL_CHECKS', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('genchk_hi_volt_ele_system', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'genchk_hi_volt_ele_system';
        $fieldInstance->label = 'High Voltage Electrical System';
        $fieldInstance->table = $moduleInstance->basetable."cf";
        $fieldInstance->column = 'genchk_hi_volt_ele_system';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
  //    $fieldInstance->setPicklistValues(array('OK', 'NOT OK','NA'));
    } else {
        echo "field is already Present --- genchk_hi_volt_ele_system in RecommissioningReports Module --- <br>";
    }
} else {
    echo " block does not exits --- GENERAL_CHECKS -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;


$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('GENERAL_CHECKS', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('genchk_battery_voltage', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'genchk_battery_voltage';
        $fieldInstance->label = 'Battery Voltage';
        $fieldInstance->table = $moduleInstance->basetable."cf";
        $fieldInstance->column = 'genchk_battery_voltage';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
  //    $fieldInstance->setPicklistValues(array('OK', 'NOT OK','NA'));
    } else {
        echo "field is already Present --- genchk_battery_voltage in RecommissioningReports Module --- <br>";
    }
} else {
    echo " block does not exits --- GENERAL_CHECKS -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;


$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('GENERAL_CHECKS', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('genchk_hydraulic', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'genchk_hydraulic';
        $fieldInstance->label = 'Hydraulic';
        $fieldInstance->table = $moduleInstance->basetable."cf";
        $fieldInstance->column = 'genchk_hydraulic';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
  //    $fieldInstance->setPicklistValues(array('OK', 'NOT OK','NA'));
    } else {
        echo "field is already Present --- genchk_hydraulic in RecommissioningReports Module --- <br>";
    }
} else {
    echo " block does not exits --- GENERAL_CHECKS -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;



$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('GENERAL_CHECKS', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('genchk_cylinders', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'genchk_cylinders';
        $fieldInstance->label = 'Cylinders';
        $fieldInstance->table = $moduleInstance->basetable."cf";
        $fieldInstance->column = 'genchk_cylinders';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
  //    $fieldInstance->setPicklistValues(array('OK', 'NOT OK','NA'));
    } else {
        echo "field is already Present --- genchk_cylinders in RecommissioningReports Module --- <br>";
    }
} else {
    echo " block does not exits --- GENERAL_CHECKS -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;


$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('GENERAL_CHECKS', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('genchk_suspension', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'genchk_suspension';
        $fieldInstance->label = 'Suspension';
        $fieldInstance->table = $moduleInstance->basetable."cf";
        $fieldInstance->column = 'genchk_suspension';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
  //    $fieldInstance->setPicklistValues(array('OK', 'NOT OK','NA'));
    } else {
        echo "field is already Present --- genchk_suspension in RecommissioningReports Module --- <br>";
    }
} else {
    echo " block does not exits --- GENERAL_CHECKS -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('GENERAL_CHECKS', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('genchk_pumps', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'genchk_pumps';
        $fieldInstance->label = 'Pumps';
        $fieldInstance->table = $moduleInstance->basetable."cf";
        $fieldInstance->column = 'genchk_pumps';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
  //    $fieldInstance->setPicklistValues(array('OK', 'NOT OK','NA'));
    } else {
        echo "field is already Present --- genchk_pumps in RecommissioningReports Module --- <br>";
    }
} else {
    echo " block does not exits --- GENERAL_CHECKS -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;


$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('GENERAL_CHECKS', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('genchk_oil_cooler', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'genchk_oil_cooler';
        $fieldInstance->label = 'Oil Cooler';
        $fieldInstance->table = $moduleInstance->basetable."cf";
        $fieldInstance->column = 'genchk_oil_cooler';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
  //    $fieldInstance->setPicklistValues(array('OK', 'NOT OK','NA'));
    } else {
        echo "field is already Present --- genchk_oil_cooler in RecommissioningReports Module --- <br>";
    }
} else {
    echo " block does not exits --- GENERAL_CHECKS -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('GENERAL_CHECKS', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('genchk_structure', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'genchk_structure';
        $fieldInstance->label = 'Structure';
        $fieldInstance->table = $moduleInstance->basetable."cf";
        $fieldInstance->column = 'genchk_structure';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
  //    $fieldInstance->setPicklistValues(array('OK', 'NOT OK'));
    } else {
        echo "field is already Present --- genchk_structure in RecommissioningReports Module --- <br>";
    }
} else {
    echo " block does not exits --- GENERAL_CHECKS -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('GENERAL_CHECKS', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('genchk_auto_lubrication', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'genchk_auto_lubrication';
        $fieldInstance->label = 'Auto Lubrication';
        $fieldInstance->table = $moduleInstance->basetable."cf";
        $fieldInstance->column = 'genchk_auto_lubrication';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
  //    $fieldInstance->setPicklistValues(array('OK', 'NOT OK','NA'));
    } else {
        echo "field is already Present --- genchk_auto_lubrication in RecommissioningReports Module --- <br>";
    }
} else {
    echo " block does not exits --- GENERAL_CHECKS -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;


$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('GENERAL_CHECKS', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('genchk_air_conditionn', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'genchk_air_conditionn';
        $fieldInstance->label = 'Air Condition';
        $fieldInstance->table = $moduleInstance->basetable."cf";
        $fieldInstance->column = 'genchk_air_conditionn';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
  //    $fieldInstance->setPicklistValues(array('OK', 'NOT OK','NA'));
    } else {
        echo "field is already Present --- genchk_air_conditionn in RecommissioningReports Module --- <br>";
    }
} else {
    echo " block does not exits --- GENERAL_CHECKS -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;


$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('GENERAL_CHECKS', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('genchk_auto_fire_protection', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'genchk_auto_fire_protection';
        $fieldInstance->label = 'Auto Fire Protection';
        $fieldInstance->table = $moduleInstance->basetable."cf";
        $fieldInstance->column = 'genchk_auto_fire_protection';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
  //    $fieldInstance->setPicklistValues(array('OK', 'NOT OK','NA'));
    } else {
        echo "field is already Present --- genchk_auto_fire_protection in RecommissioningReports Module --- <br>";
    }
} else {
    echo " block does not exits --- GENERAL_CHECKS -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('VISUAL_CHECKS', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('vis_chk_external_damages', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'vis_chk_external_damages';
        $field->column = 'vis_chk_external_damages';
        $field->table = $invoiceModule->basetable."cf";
        $field->label = 'External Damages';
        $field->uitype = '999';
        $field->columntype = 'VARCHAR(100)';
        $field->typeofdata = 'V~O';
        $field->displaytype = 1;
        $blockInstance->addField($field);
        $field->setPicklistValues(array('YES', 'NO'));
    } else {
        echo "field is present -- vis_chk_external_damages In RecommissioningReports Module --- <br>";
    }
} else {
    echo "Block Does not exits -- VISUAL_CHECKS in RecommissioningReports -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('VISUAL_CHECKS', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('vis_chk_hydraulic_air_leakages', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'vis_chk_hydraulic_air_leakages';
        $field->column = 'vis_chk_hydraulic_air_leakages';
        $field->table = $invoiceModule->basetable."cf";
        $field->label = 'Hydraulic & Air Leakages';
        $field->uitype = '999';
        $field->columntype = 'VARCHAR(100)';
        $field->typeofdata = 'V~O';
        $field->displaytype = 1;
        $blockInstance->addField($field);
        $field->setPicklistValues(array('YES', 'NO'));
    } else {
        echo "field is present -- vis_chk_hydraulic_air_leakages In RecommissioningReports Module --- <br>";
    }
} else {
    echo "Block Does not exits -- VISUAL_CHECKS in RecommissioningReports -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('VISUAL_CHECKS', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('vis_chk_work_loseing_hders', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'vis_chk_work_loseing_hders';
        $field->column = 'vis_chk_work_loseing_hders';
        $field->table = $invoiceModule->basetable."cf";
        $field->label = 'Work loosening of Hardwares';
        $field->uitype = '999';
        $field->columntype = 'VARCHAR(100)';
        $field->typeofdata = 'V~O';
        $field->displaytype = 1;
        $blockInstance->addField($field);
        $field->setPicklistValues(array('YES', 'NO'));
    } else {
        echo "field is present -- vis_chk_work_loseing_hders In RecommissioningReports Module --- <br>";
    }
} else {
    echo "Block Does not exits -- VISUAL_CHECKS in RecommissioningReports -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('VISUAL_CHECKS', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('vis_chk_lubrication', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'vis_chk_lubrication';
        $field->column = 'vis_chk_lubrication';
        $field->table = $invoiceModule->basetable."cf";
        $field->label = 'Lubrication';
        $field->uitype = '999';
        $field->columntype = 'VARCHAR(100)';
        $field->typeofdata = 'V~O';
        $field->displaytype = 1;
        $blockInstance->addField($field);
        $field->setPicklistValues(array('YES', 'NO'));
    } else {
        echo "field is present -- vis_chk_lubrication In RecommissioningReports Module --- <br>";
    }
} else {
    echo "Block Does not exits -- VISUAL_CHECKS in RecommissioningReports -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;


$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('VISUAL_CHECKS', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('vis_chk_oil_levels', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'vis_chk_oil_levels';
        $field->column = 'vis_chk_oil_levels';
        $field->table = $invoiceModule->basetable."cf";
        $field->label = 'Oil Levels';
        $field->uitype = '999';
        $field->columntype = 'VARCHAR(100)';
        $field->typeofdata = 'V~O';
        $field->displaytype = 1;
        $blockInstance->addField($field);
        $field->setPicklistValues(array('YES', 'NO'));
    } else {
        echo "field is present -- vis_chk_oil_levels In RecommissioningReports Module --- <br>";
    }
} else {
    echo "Block Does not exits -- VISUAL_CHECKS in RecommissioningReports -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('HelpDesk');
$blockInstance = Vtiger_Block::getInstance('LBL_TICKET_INFORMATION', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('ticket_date', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'ticket_date';
        $fieldInstance->label = 'Ticket Date ';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'ticket_date';
        $fieldInstance->uitype = 5;
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'D~O';
        $fieldInstance->displaytype = 2;
        $fieldInstance->columntype = 'DATE';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- ticket_date in HelpDesk Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_TICKET_INFORMATION -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

//RecommissioningReports_FAILURE_DETAILS
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('FAILURE_DETAILS', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('fail_de_failure_investigation', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'fail_de_failure_investigation';
        $fieldInstance->label = 'Failure Investigation';
        $fieldInstance->table = $moduleInstance->basetable."cf";
        $fieldInstance->column = 'fail_de_failure_investigation';
        $fieldInstance->uitype = '999';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
  //    $fieldInstance->setPicklistValues(array('Completed','In-process','On Hold'));
    } else {
        echo "field is already Present --- fail_de_failure_investigation in RecommissioningReports Module --- <br>";
    }
} else {
    echo " block does not exits --- FAILURE_DETAILS -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('FAILURE_DETAILS', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('fail_de_failure_on_account_of', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'fail_de_failure_on_account_of';
        $fieldInstance->label = 'Failure on account of';
        $fieldInstance->table = $moduleInstance->basetable."cf";
        $fieldInstance->column = 'fail_de_failure_on_account_of';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
  //    $fieldInstance->setPicklistValues(array('testval'));
    } else {
        echo "field is already Present --- fail_de_failure_on_account_of in RecommissioningReports Module --- <br>";
    }
} else {
    echo " block does not exits --- FAILURE_DETAILS -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('FAILURE_DETAILS', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('fail_de_system_affected', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'fail_de_system_affected';
        $fieldInstance->label = 'System Affected';
        $fieldInstance->table = $moduleInstance->basetable."cf";
        $fieldInstance->column = 'fail_de_system_affected';
        $fieldInstance->uitype = '33';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'TEXT';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
  //    $fieldInstance->setPicklistValues(array('testval'));
    } else {
        echo "field is already Present --- fail_de_system_affected in RecommissioningReports Module --- <br>";
    }
} else {
    echo " block does not exits --- FAILURE_DETAILS -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('FAILURE_DETAILS', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('fail_de_parts_affected', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'fail_de_parts_affected';
        $fieldInstance->label = 'Parts Affected';
        $fieldInstance->table = $moduleInstance->basetable."cf";
        $fieldInstance->column = 'fail_de_parts_affected';
        $fieldInstance->uitype = '33';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'TEXT';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
  //    $fieldInstance->setPicklistValues(array('testval'));
    } else {
        echo "field is already Present --- fail_de_parts_affected in RecommissioningReports Module --- <br>";
    }
} else {
    echo " block does not exits --- FAILURE_DETAILS -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('FAILURE_DETAILS', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('fail_de_type_of_damage', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'fail_de_type_of_damage';
        $fieldInstance->label = 'Type of damage';
        $fieldInstance->table = $moduleInstance->basetable."cf";
        $fieldInstance->column = 'fail_de_type_of_damage';
        $fieldInstance->uitype = '33';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'TEXT';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
  //    $fieldInstance->setPicklistValues(array('testval'));
    } else {
        echo "field is already Present --- fail_de_type_of_damage in RecommissioningReports Module --- <br>";
    }
} else {
    echo " block does not exits --- FAILURE_DETAILS -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('FAILURE_DETAILS', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('fail_de_part_pertains_to', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'fail_de_part_pertains_to';
        $fieldInstance->label = 'Part pertains to';
        $fieldInstance->table = $moduleInstance->basetable."cf";
        $fieldInstance->column = 'fail_de_part_pertains_to';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
  //    $fieldInstance->setPicklistValues(array('BEML','Vendor'));
    } else {
        echo "field is already Present --- fail_de_part_pertains_to in RecommissioningReports Module --- <br>";
    }
} else {
    echo " block does not exits --- FAILURE_DETAILS -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('FAILURE_DETAILS', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('fail_de_sap_noti_type', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'fail_de_sap_noti_type';
        $fieldInstance->label = 'Select SAP Service Notification type';
        $fieldInstance->table = $moduleInstance->basetable."cf";
        $fieldInstance->column = 'fail_de_sap_noti_type';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
  //    $fieldInstance->setPicklistValues(array('ZW', 'ZJ','ZC','ZF','ZH','ZO'));
    } else {
        echo "field is already Present --- fail_de_sap_noti_type in RecommissioningReports Module --- <br>";
    }
} else {
    echo " block does not exits --- FAILURE_DETAILS -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('CallAssistance');
$blockInstance = Vtiger_Block::getInstance('LBL_BLOCK_GENERAL_INFORMATION', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('call_equip_model', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'call_equip_model';
        $fieldInstance->label = 'Equipment Model';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'call_equip_model';
        $fieldInstance->uitype = '33';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $blockInstance->addField($fieldInstance);
  //    $fieldInstance->setPicklistValues(array('BH100', 'BWS70', 'BG825'));
    } else {
        echo "field is already Present --- call_equip_model in CallAssistance Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_BLOCK_GENERAL_INFORMATION -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('CallAssistance');
$blockInstance = Vtiger_Block::getInstance('LBL_BLOCK_GENERAL_INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('phone', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'phone';
        $field->column = 'phone';
        $field->uitype = 11;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Mobile Number';
        $field->summaryfield = 1;
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(30)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $field->defaultvalue = 0;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- phone CallAssistance --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_BLOCK_GENERAL_INFORMATION in CallAssistance -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('CallAssistance');
$blockInstance = Vtiger_Block::getInstance('LBL_BLOCK_GENERAL_INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('service_engineerid', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'service_engineerid';
        $field->column = 'service_engineerid';
        $field->uitype = 10;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Employee Name';
        $field->summaryfield = 1;
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'I~O';
        $field->columntype = 'INT(30)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $field->defaultvalue = 0;
        $id = $blockInstance->addFieldIgnite($field);
        echo "igggggggggggggggggggg mission created field --- $id ";
        // ------------------ invoga
       
        $invogamoduleInstance = Vtiger_Module::getInstance('ServiceEngineer');
        $relationLabel  = 'CallAssistance';
        $invogamoduleInstance->setRelatedList(
              $invoiceModule, $relationLabel, Array('ADD'), 'get_dependents_list' //you can do select also Array('ADD','SELECT')
        );
        // ------------------------invoga
        $tom = "INSERT INTO `vtiger_fieldmodulerel` (`fieldid`, `module`, `relmodule`, `status`, `sequence`) VALUES ('$id', 'CallAssistance', 'ServiceEngineer', NULL, NULL)";
        $adb->pquery($tom);
    } else {
        echo "field is present -- service_engineerid  in CallAssistance--- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_BLOCK_GENERAL_INFORMATION in CallAssistance -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$emm = null;
$emm = new VTEntityMethodManager($adb);
$result = $adb->pquery("SELECT function_name FROM com_vtiger_workflowtasks_entitymethod WHERE module_name=? AND method_name=?", array('HelpDesk', 'SyncToExternalOnAccept'));
if ($adb->num_rows($result) == 0) {
    $emm->addEntityMethod("HelpDesk", "SyncToExternalOnAccept", "modules/HelpDesk/SyncToExternalOnAccept.php", "SyncToExternalOnAccept");
} else {
    print_r("already exits --- workflow function -- SyncToExternalOnAccept in HelpDesk Module <br> ");
}
$emm = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('HelpDesk');
$blockInstance = Vtiger_Block::getInstance('LBL_CUSTOM_INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('external_app_num', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'external_app_num';
        $field->column = 'external_app_num';
        $field->uitype = 2;
        $field->table = $invoiceModule->basetable;
        $field->label = 'SAP Reference Number';
        $field->summaryfield = 1;
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(250)';
        $field->quickcreate = 3;
        $field->displaytype = 2;
        $field->masseditable = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- external_app_num in HelpDesk --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_CUSTOM_INFORMATION in HelpDesk -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('Equipment');
$blockInstance = Vtiger_Block::getInstance('LBL_BLOCK_SYSTEM_INFORMATION', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('last_hmr_date', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'last_hmr_date';
        $fieldInstance->label = 'Last HMR Date';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'last_hmr_date';
        $fieldInstance->uitype = 5;
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'D~O';
        $fieldInstance->columntype = 'DATE';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- last_hmr_date in Equipment Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_BLOCK_SYSTEM_INFORMATION -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('Equipment');
$blockInstance = Vtiger_Block::getInstance('LBL_BLOCK_SYSTEM_INFORMATION', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('last_hmr_time', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'last_hmr_time';
        $fieldInstance->label = 'Last HMR Time';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'last_hmr_time';
        $fieldInstance->uitype = 14;
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'T~O';
        $fieldInstance->columntype = 'TIME';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- last_hmr_time in Equipment Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_BLOCK_SYSTEM_INFORMATION -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('Products');
$blockInstance = Vtiger_Block::getInstance('LBL_PRODUCT_INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('plant_name', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'plant_name';
        $field->column = 'plant_name';
        $field->uitype = 10;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Plant';
        $field->summaryfield = 1;
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'I~O';
        $field->columntype = 'INT(10)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $id = $blockInstance->addFieldIgnite($field);
        echo "igggggggggggggggggggg mission created field --- $id ";
        // ------------------ invoga
        $invogamoduleInstance = Vtiger_Module::getInstance('MaintenancePlant');
        $relationLabel  = 'Products';
        $invogamoduleInstance->setRelatedList(
              $invoiceModule, $relationLabel, Array('ADD'), 'get_dependents_list' //you can do select also Array('ADD','SELECT')
        );
        // ------------------------invoga
        $tom = "INSERT INTO `vtiger_fieldmodulerel` (`fieldid`, `module`, `relmodule`, `status`, `sequence`) VALUES ('$id', 'Products', 'MaintenancePlant', NULL, NULL)";
        $adb->pquery($tom);
    } else {
        echo "field is present -- plant_name  in Products--- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_PRODUCT_INFORMATION in Products -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('BankGuarantee');
$blockInstance = Vtiger_Block::getInstance('LBL_BLOCK_GENERAL_INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('equipment_id', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'equipment_id';
        $field->column = 'equipment_id';
        $field->uitype = 10;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Equipment Serial No.';
        $field->summaryfield = 1;
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'I~O';
        $field->columntype = 'INT(10)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $id = $blockInstance->addFieldIgnite($field);
        echo "igggggggggggggggggggg mission created field --- $id ";
       
        $invogamoduleInstance = Vtiger_Module::getInstance('Equipment');
        $relationLabel  = 'BankGuarantees';
        $invogamoduleInstance->setRelatedList(
              $invoiceModule, $relationLabel, Array('ADD'), 'get_dependents_list' //you can do select also Array('ADD','SELECT')
        );
        $tom = "INSERT INTO `vtiger_fieldmodulerel` (`fieldid`, `module`, `relmodule`, `status`, `sequence`) VALUES ('$id', 'BankGuarantee', 'Equipment', NULL, NULL)";
        $adb->pquery($tom);
    } else {
        echo "field is present -- equipment_id  in BankGuarantee--- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_BLOCK_GENERAL_INFORMATION in BankGuarantee -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('Equipment');
$blockInstance = Vtiger_Block::getInstance('Customer_Warranty', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('cust_begin_guar', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'cust_begin_guar';
        $fieldInstance->label = 'Begin guarantee';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'cust_begin_guar';
        $fieldInstance->uitype = 5;
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'D~O';
        $fieldInstance->columntype = 'DATE';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- cust_begin_guar in Equipment Module --- <br>";
    }
} else {
    echo " block does not exits --- Customer_Warranty -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('Equipment');
$blockInstance = Vtiger_Block::getInstance('Customer_Warranty', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('cust_war_end', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'cust_war_end';
        $fieldInstance->label = 'Warranty end';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'cust_war_end';
        $fieldInstance->uitype = 5;
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'D~O';
        $fieldInstance->columntype = 'DATE';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- cust_war_end in Equipment Module --- <br>";
    }
} else {
    echo " block does not exits --- Customer_Warranty -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

// vendor warranty ######################################################
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('Equipment');
$blockInstance = Vtiger_Block::getInstance('Vendor_Warranty', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('ven_begin_guar', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'ven_begin_guar';
        $fieldInstance->label = 'Begin guarantee';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'ven_begin_guar';
        $fieldInstance->uitype = 5;
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'D~O';
        $fieldInstance->columntype = 'DATE';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- ven_begin_guar in Equipment Module --- <br>";
    }
} else {
    echo " block does not exits --- Vendor_Warranty -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('Equipment');
$blockInstance = Vtiger_Block::getInstance('Vendor_Warranty', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('ven_war_end', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'ven_war_end';
        $fieldInstance->label = 'Warranty end';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'ven_war_end';
        $fieldInstance->uitype = 5;
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'D~O';
        $fieldInstance->columntype = 'DATE';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- ven_war_end in Equipment Module --- <br>";
    }
} else {
    echo " block does not exits --- Vendor_Warranty -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('HMREntries');
$blockInstance = Vtiger_Block::getInstance('LBL_BLOCK_GENERAL_INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('equipment_id', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'equipment_id';
        $field->column = 'equipment_id';
        $field->uitype = 10;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Equipment Serial No.';
        $field->summaryfield = 1;
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'I~O';
        $field->columntype = 'INT(10)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $id = $blockInstance->addFieldIgnite($field);
        echo "igggggggggggggggggggg mission created field --- $id ";
       
        $invogamoduleInstance = Vtiger_Module::getInstance('Equipment');
        $relationLabel  = 'HMR Entries';
        $invogamoduleInstance->setRelatedList(
              $invoiceModule, $relationLabel, Array('ADD'), 'get_dependents_list' //you can do select also Array('ADD','SELECT')
        );
        $tom = "INSERT INTO `vtiger_fieldmodulerel` (`fieldid`, `module`, `relmodule`, `status`, `sequence`) VALUES ('$id', 'HMREntries', 'Equipment', NULL, NULL)";
        $adb->pquery($tom);
    } else {
        echo "field is present -- equipment_id  in HMREntries--- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_BLOCK_GENERAL_INFORMATION in HMREntries -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('Equipment');
$blockInstance = Vtiger_Block::getInstance('Customer_Warranty', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('eq_type_of_conrt', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'eq_type_of_conrt';
        $fieldInstance->label = 'Type of Contract';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'eq_type_of_conrt';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
  //    $fieldInstance->setPicklistValues(array('GPCC', 'COSTCAP', 'FMC','MARC','AMC'));
    } else {
        echo "field is already Present --- eq_type_of_conrt in Equipment Module --- <br>";
    }
} else {
    echo " block does not exits --- Customer_Warranty in Equipment -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('Equipment');
$blockInstance = Vtiger_Block::getInstance('Customer_Warranty', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('eq_run_war_st', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'eq_run_war_st';
        $fieldInstance->label = 'Running Status';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'eq_run_war_st';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
  //    $fieldInstance->setPicklistValues(array('Under Warranty', 'Aggregate Warranty', 'Contract','Outside Warranty'));
    } else {
        echo "field is already Present --- eq_run_war_st in Equipment Module --- <br>";
    }
} else {
    echo " block does not exits --- Customer_Warranty in Equipment -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('BankGuarantee');
$blockInstance = Vtiger_Block::getInstance('LBL_BLOCK_GENERAL_INFORMATION', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('bnk_pre_status', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'bnk_pre_status';
        $fieldInstance->label = 'Present Status';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'bnk_pre_status';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
  //    $fieldInstance->setPicklistValues(array('Live', 'Extended', 'Availability Signed','Availability Under Reconciliation','Under Collection'));
    } else {
        echo "field is already Present --- bnk_pre_status in BankGuarantee Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_BLOCK_GENERAL_INFORMATION in BankGuarantee -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('Equipment');
$blockInstance = Vtiger_Block::getInstance('Customer_Warranty', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('cont_start_date', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'cont_start_date';
        $fieldInstance->label = 'Contract Start Date';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'cont_start_date';
        $fieldInstance->uitype = 5;
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'D~O';
        $fieldInstance->columntype = 'DATE';
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- cont_start_date in Equipment Module --- <br>";
    }
} else {
    echo "block does not exits --- Customer_Warranty in Equipment-- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('Equipment');
$blockInstance = Vtiger_Block::getInstance('Customer_Warranty', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('cont_end_date', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'cont_end_date';
        $fieldInstance->label = 'Contract End Date';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'cont_end_date';
        $fieldInstance->uitype = 5;
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'D~O';
        $fieldInstance->columntype = 'DATE';
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- cont_end_date in Equipment Module --- <br>";
    }
} else {
    echo "block does not exits --- Customer_Warranty in Equipment-- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('Equipment');
$blockInstance = Vtiger_Block::getInstance('Customer_Warranty', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('run_year_cont', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'run_year_cont';
        $fieldInstance->column = 'run_year_cont';
        $fieldInstance->uitype = 7;
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->label = 'Running year of Contract';
        $fieldInstance->summaryfield = 1;
        $fieldInstance->readonly = 1;
        $fieldInstance->presence = 2;
        $fieldInstance->typeofdata = 'I~O';
        $fieldInstance->columntype = 'INT(10)';
        $fieldInstance->displaytype = 1;
        $fieldInstance->masseditable = 1;
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- run_year_cont in Equipment Module --- <br>";
    }
} else {
    echo " block does not exits --- Customer_Warranty in Equipment -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('FAILURE_DETAILS', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('fd_ag_war_avl', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'fd_ag_war_avl';
        $field->column = 'fd_ag_war_avl';
        $field->table = $invoiceModule->basetable."cf";
        $field->label = 'Aggregate Warranty Applicable';
        $field->uitype = 56;
        $field->columntype = 'INT(1) DEFAULT 0';
        $field->typeofdata = 'I~O';
        $field->displaytype = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- fd_ag_war_avl In RecommissioningReports Module --- <br>";
    }
} else {
    echo "Block Does not exits -- FAILURE_DETAILS in RecommissioningReports -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('FAILURE_DETAILS', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('fd_obvservation', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'fd_obvservation';
        $field->column = 'fd_obvservation';
        $field->uitype = 21;
        $field->table = $invoiceModule->basetable."cf";
        $field->label = 'Observations after failure investigation';
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'TEXT';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- fd_obvservation In RecommissioningReports Module --- <br>";
    }
} else {
    echo "Block Does not exits -- FAILURE_DETAILS -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('FAILURE_DETAILS', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('fd_sub_div', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'fd_sub_div';
        $fieldInstance->label = 'Select Division';
        $fieldInstance->table = $moduleInstance->basetable."cf";
        $fieldInstance->column = 'fd_sub_div';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
  //    $fieldInstance->setPicklistValues(array('Engine', 'Truck', 'H&P', 'EM'));
    } else {
        echo "field is already Present --- fd_sub_div in RecommissioningReports Module --- <br>";
    }
} else {
    echo " block does not exits --- FAILURE_DETAILS -- <br>";
}

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('FAILURE_DETAILS', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('vendor_id', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'vendor_id';
        $field->column = 'vendor_id';
        $field->uitype = 10;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Vendor Details';
        $field->summaryfield = 1;
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'I~O';
        $field->columntype = 'INT(30)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $id = $blockInstance->addFieldIgnite($field);
        echo "created field --- $id ";
        $invogamoduleInstance = Vtiger_Module::getInstance('Accounts');
        $relationLabel  = 'RecommissioningReports';
        $invogamoduleInstance->setRelatedList(
              $invoiceModule, $relationLabel, Array('ADD'), 'get_dependents_list' //you can do select also Array('ADD','SELECT')
        );
        $tom = "INSERT INTO `vtiger_fieldmodulerel` (`fieldid`, `module`, `relmodule`, `status`, `sequence`) VALUES ('$id', 'RecommissioningReports', 'Vendors', NULL, NULL)";
        $adb->pquery($tom);
    } else {
        echo "field is present -- vendor_id  in RecommissioningReports--- <br>";
    }
} else {
    echo "Block Does not exits -- FAILURE_DETAILS in RecommissioningReports -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('FAILURE_DETAILS', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('fd_ser_id', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'fd_ser_id';
        $field->column = 'fd_ser_id';
        $field->uitype = 2;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Serial No';
        $field->summaryfield = 1;
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(200)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- fd_ser_id in RecommissioningReports --- <br>";
    }
} else {
    echo "Block Does not exits -- FAILURE_DETAILS in RecommissioningReports -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('Equipment Details', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('eq_sr_equip_model', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'eq_sr_equip_model';
        $fieldInstance->label = 'Equipment Model';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'eq_sr_equip_model';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $blockInstance->addField($fieldInstance);
  //    $fieldInstance->setPicklistValues(array('BH100', 'BWS70', 'BG825'));
    } else {
        echo "field is already Present --- eq_sr_equip_model in RecommissioningReports Module --- <br>";
    }
} else {
    echo " block does not exits --- Equipment Details -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('Equipment Details', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('equipment_id', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'equipment_id';
        $field->column = 'equipment_id';
        $field->uitype = 10;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Equipment Serial No.';
        $field->summaryfield = 1;
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'I~O';
        $field->columntype = 'INT(10)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $field->defaultvalue = 0;
        $id = $blockInstance->addFieldIgnite($field);
        echo "created field --- $id ";
        $invogamoduleInstance = Vtiger_Module::getInstance('Equipment');
        $relationLabel  = 'RecommissioningReports';
        $invogamoduleInstance->setRelatedList(
              $invoiceModule, $relationLabel, Array('ADD'), 'get_dependents_list' //you can do select also Array('ADD','SELECT')
        );
        $tom = "INSERT INTO `vtiger_fieldmodulerel` (`fieldid`, `module`, `relmodule`, `status`, `sequence`) VALUES ('$id', 'RecommissioningReports', 'Equipment', NULL, NULL)";
        $adb->pquery($tom);
    } else {
        echo "field is present -- equipment_id  in RecommissioningReports--- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_CUSTOM_INFORMATION in RecommissioningReports -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('FunctionalLocations');
$blockInstance = Vtiger_Block::getInstance('LBL_BLOCK_GENERAL_INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('func_area_name', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'func_area_name';
        $field->column = 'func_area_name';
        $field->uitype = 2;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Area Name';
        $field->summaryfield = 1;
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(250)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $field->defaultvalue = 0;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- func_area_name FunctionalLocations --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_BLOCK_GENERAL_INFORMATION in FunctionalLocations -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('FunctionalLocations');
$blockInstance = Vtiger_Block::getInstance('LBL_BLOCK_GENERAL_INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('func_proj_name', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'func_proj_name';
        $field->column = 'func_proj_name';
        $field->uitype = 2;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Project Name';
        $field->summaryfield = 1;
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(250)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $field->defaultvalue = 0;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- func_proj_name FunctionalLocations --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_BLOCK_GENERAL_INFORMATION in FunctionalLocations -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('FAILURE_DETAILS', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('fd_eq_sta_bsr', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'fd_eq_sta_bsr';
        $fieldInstance->label = 'Status of Equipment Before SR Generation';
        $fieldInstance->table = $moduleInstance->basetable."cf";
        $fieldInstance->column = 'fd_eq_sta_bsr';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
  //    $fieldInstance->setPicklistValues(array('On Road', 'Off Road', 'Running with Problem'));
    } else {
        echo "field is already Present --- fd_eq_sta_bsr in RecommissioningReports Module --- <br>";
    }
} else {
    echo " block does not exits --- FAILURE_DETAILS -- <br>";
}

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('SER_ENGG_DETAIL', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('badge_no', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'badge_no';
        $field->column = 'badge_no';
        $field->uitype = 2;
        $field->table = $invoiceModule->basetable.'cf';
        $field->label = 'Badge Number';
        $field->summaryfield = 1;
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'I~O';
        $field->columntype = 'INT(10)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- badge_no RecommissioningReports --- <br>";
    }
} else {
    echo "Block Does not exits -- SER_ENGG_DETAIL in RecommissioningReports -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('SER_ENGG_DETAIL', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('ser_eng_name', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'ser_eng_name';
        $field->column = 'ser_eng_name';
        $field->uitype = 2;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Name';
        $field->summaryfield = 1;
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(250)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- ser_eng_name in RecommissioningReports --- <br>";
    }
} else {
    echo "Block Does not exits -- SER_ENGG_DETAIL in RecommissioningReports -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('SER_ENGG_DETAIL', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('sr_designaion', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'sr_designaion';
        $fieldInstance->label = 'Designation';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'sr_designaion';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
  //    $fieldInstance->setPicklistValues(array('Chairman & Managing Director', 'Director(Mining & Construction Business)', 'Director(Defence Business)','Director','Executive Director','Executive Director','General Manager','Deputy General Manager','Assistant General Manager','Senior Manager','Manager','Assistant Manager','Engineer','Assistant Engineer','Senior Supervisor-S-6','Senior Supervisor-S-5','Senior Supervisor-S-4','Supervisor- S-3','Joint Supervisior-S-2','Deputy Supervisor-S-1','Master Skilled Technician-Gr.-E','High Skilled Technician-Gr.-D','Senior Technician-Gr.-C','Technician-Gr.-B','Helper- Gr-A'));
    } else {
        echo "field is already Present --- sr_designaion in RecommissioningReports Module --- <br>";
    }
} else {
    echo "Block does not exits --- SER_ENGG_DETAIL -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('SER_ENGG_DETAIL', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('sr_regional_office', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'sr_regional_office';
        $fieldInstance->label = 'Regional Office';
        $fieldInstance->table = $moduleInstance->basetable.'cf';
        $fieldInstance->column = 'sr_regional_office';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
  //    $fieldInstance->setPicklistValues(array('Neyveli', 'Sambalpur', 'Kolkata','Dhanbad','Bangalore','Hyderabad','New Delhi','Nagpur','Bilaspur','Mumbai','Ranchi','Singrauli'));
    } else {
        echo "field is already Present --- sr_regional_office in RecommissioningReports Module --- <br>";
    }
} else {
    echo "Block does not exits --- SER_ENGG_DETAIL -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('SER_ENGG_DETAIL', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('dist_off_or_act_cen', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'dist_off_or_act_cen';
        $fieldInstance->label = 'District Office / Activity Centre';
        $fieldInstance->table = $moduleInstance->basetable.'cf';
        $fieldInstance->column = 'dist_off_or_act_cen';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
  //    $fieldInstance->setPicklistValues(array('Neyveli', 'Sambalpur', 'Kolkata','Dhanbad','Bangalore','Hyderabad','New Delhi','Nagpur'));
    } else {
        echo "field is already Present --- dist_off_or_act_cen in RecommissioningReports Module --- <br>";
    }
} else {
    echo "Block does not exits --- SER_ENGG_DETAIL -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('Equipment Details', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('imagename', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'imagename';
        $field->column = 'imagename';
        $field->uitype = 69;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Upload Image';
        $field->summaryfield = 1;
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(150)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- imagename in RecommissioningReports --- <br>";
    }
} else {
    echo "Block Does not exits -- Equipment Details in RecommissioningReports -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('VISUAL_CHECKS', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('vis_chk_ext_dam', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'vis_chk_ext_dam';
        $field->column = 'vis_chk_ext_dam';
        $field->uitype = 21;
        $field->table = $invoiceModule->basetable."cf";
        $field->label = 'Remarks';
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(500)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- vis_chk_ext_dam In RecommissioningReports Module --- <br>";
    }
} else {
    echo "Block Does not exits -- VISUAL_CHECKS -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('VISUAL_CHECKS', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('vis_chk_hyd_air', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'vis_chk_hyd_air';
        $field->column = 'vis_chk_hyd_air';
        $field->uitype = 21;
        $field->table = $invoiceModule->basetable."cf";
        $field->label = 'Remarks';
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(500)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- vis_chk_hyd_air In RecommissioningReports Module --- <br>";
    }
} else {
    echo "Block Does not exits -- VISUAL_CHECKS -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('VISUAL_CHECKS', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('vis_chk_wrk_los', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'vis_chk_wrk_los';
        $field->column = 'vis_chk_wrk_los';
        $field->uitype = 21;
        $field->table = $invoiceModule->basetable."cf";
        $field->label = 'Remarks';
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(500)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- vis_chk_wrk_los In RecommissioningReports Module --- <br>";
    }
} else {
    echo "Block Does not exits -- VISUAL_CHECKS -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('VISUAL_CHECKS', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('vis_chk_lub_rem', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'vis_chk_lub_rem';
        $field->column = 'vis_chk_lub_rem';
        $field->uitype = 21;
        $field->table = $invoiceModule->basetable."cf";
        $field->label = 'Remarks';
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(500)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- vis_chk_lub_rem In RecommissioningReports Module --- <br>";
    }
} else {
    echo "Block Does not exits -- VISUAL_CHECKS -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('VISUAL_CHECKS', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('vis_chk_oil_rem', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'vis_chk_oil_rem';
        $field->column = 'vis_chk_oil_rem';
        $field->uitype = 21;
        $field->table = $invoiceModule->basetable."cf";
        $field->label = 'Remarks';
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(500)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- vis_chk_oil_rem In RecommissioningReports Module --- <br>";
    }
} else {
    echo "Block Does not exits -- VISUAL_CHECKS -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('VISUAL_CHECKS', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('vis_chk_ext_dam_img', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'vis_chk_ext_dam_img';
        $field->column = 'vis_chk_ext_dam_img';
        $field->uitype = 69;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Upload Image';
        $field->summaryfield = 1;
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(150)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- vis_chk_ext_dam_img in RecommissioningReports --- <br>";
    }
} else {
    echo "Block Does not exits -- VISUAL_CHECKS in RecommissioningReports -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('VISUAL_CHECKS', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('vis_chk_ext_dam_img', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'vis_chk_ext_dam_img';
        $field->column = 'vis_chk_ext_dam_img';
        $field->uitype = 69;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Upload Image';
        $field->summaryfield = 1;
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(150)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- vis_chk_ext_dam_img in RecommissioningReports --- <br>";
    }
} else {
    echo "Block Does not exits -- VISUAL_CHECKS in RecommissioningReports -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('VISUAL_CHECKS', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('vis_hyd_air_dam_img', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'vis_hyd_air_dam_img';
        $field->column = 'vis_hyd_air_dam_img';
        $field->uitype = 69;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Upload Image';
        $field->summaryfield = 1;
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(150)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- vis_hyd_air_dam_img in RecommissioningReports --- <br>";
    }
} else {
    echo "Block Does not exits -- VISUAL_CHECKS in RecommissioningReports -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('VISUAL_CHECKS', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('vis_hyd_wrk_los_img', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'vis_hyd_wrk_los_img';
        $field->column = 'vis_hyd_wrk_los_img';
        $field->uitype = 69;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Upload Image';
        $field->summaryfield = 1;
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(150)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- vis_hyd_wrk_los_img in RecommissioningReports --- <br>";
    }
} else {
    echo "Block Does not exits -- VISUAL_CHECKS in RecommissioningReports -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('VISUAL_CHECKS', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('vis_lub_los_img', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'vis_lub_los_img';
        $field->column = 'vis_lub_los_img';
        $field->uitype = 69;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Upload Image';
        $field->summaryfield = 1;
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(150)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- vis_lub_los_img in RecommissioningReports --- <br>";
    }
} else {
    echo "Block Does not exits -- VISUAL_CHECKS in RecommissioningReports -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('VISUAL_CHECKS', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('vis_oil_lev_img', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'vis_oil_lev_img';
        $field->column = 'vis_oil_lev_img';
        $field->uitype = 69;
        $field->table = $invoiceModule->basetable.'cf';
        $field->label = 'Upload Image';
        $field->summaryfield = 1;
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(150)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- vis_oil_lev_img in RecommissioningReports --- <br>";
    }
} else {
    echo "Block Does not exits -- VISUAL_CHECKS in RecommissioningReports -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$emm = null;
$emm = new VTEntityMethodManager($adb);
$result = $adb->pquery("SELECT function_name FROM com_vtiger_workflowtasks_entitymethod WHERE module_name=? AND method_name=?", array('RecommissioningReports', 'SyncToExternalOnSERCreate'));
if ($adb->num_rows($result) == 0) {
    $emm->addEntityMethod("RecommissioningReports", "SyncToExternalOnSERCreate", "modules/RecommissioningReports/SyncToExternalOnSERCreate.php", "SyncToExternalOnSERCreate");
} else {
    print_r("already exits --- workflow function -- SyncToExternalOnSERCreate in RecommissioningReports Module <br> ");
}
$emm = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('ACTION_TAKEN', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('action_taken_block', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'action_taken_block';
        $field->column = 'action_taken_block';
        $field->uitype = 21;
        $field->table = $invoiceModule->basetable."cf";
        $field->label = 'Action Taken';
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(500)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- action_taken_block In RecommissioningReports Module --- <br>";
    }
} else {
    echo "Block Does not exits -- ACTION_TAKEN -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('ACTION_TAKEN', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('eq_sta_aft_act_taken', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'eq_sta_aft_act_taken';
        $fieldInstance->label = 'eq_sta_aft_act_taken';
        $fieldInstance->table = $moduleInstance->basetable.'cf';
        $fieldInstance->column = 'eq_sta_aft_act_taken';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
  //    $fieldInstance->setPicklistValues(array('On Road', 'Off Road', 'Running with Problem'));
    } else {
        echo "field is already Present --- eq_sta_aft_act_taken in RecommissioningReports Module --- <br>";
    }
} else {
    echo "Block does not exits --- ACTION_TAKEN -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('ACTION_TAKEN', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('restoration_date', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'restoration_date';
        $fieldInstance->label = 'Restoration Date';
        $fieldInstance->table = $moduleInstance->basetable.'cf';
        $fieldInstance->column = 'restoration_date';
        $fieldInstance->uitype = 5;
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'D~O';
        $fieldInstance->columntype = 'DATE';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- restoration_date in RecommissioningReports Module --- <br>";
    }
} else {
    echo "block does not exits --- ACTION_TAKEN in RecommissioningReports-- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('ACTION_TAKEN', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('restoration_time', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'restoration_time';
        $fieldInstance->label = 'Restoration Time';
        $fieldInstance->table = $moduleInstance->basetable.'cf';
        $fieldInstance->column = 'restoration_time';
        $fieldInstance->uitype = 14;
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'T~O';
        $fieldInstance->columntype = 'TIME';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- restoration_time in RecommissioningReports Module --- <br>";
    }
} else {
    echo " block does not exits --- ACTION_TAKEN -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('ACTION_TAKEN', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('off_on_account_of', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'off_on_account_of';
        $fieldInstance->label = 'Off Road on Account of';
        $fieldInstance->table = $moduleInstance->basetable.'cf';
        $fieldInstance->column = 'off_on_account_of';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
  //    $fieldInstance->setPicklistValues(array('BEML', 'CUSTOMER'));
    } else {
        echo "field is already Present --- off_on_account_of in RecommissioningReports Module --- <br>";
    }
} else {
    echo "Block does not exits --- ACTION_TAKEN -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('FAILURE_DETAILS', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('remarks_for_offroad', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'remarks_for_offroad';
        $field->column = 'remarks_for_offroad';
        $field->uitype = 21;
        $field->table = $invoiceModule->basetable."cf";
        $field->label = 'Remarks for Off Road';
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(500)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- remarks_for_offroad In RecommissioningReports Module --- <br>";
    }
} else {
    echo "Block Does not exits -- FAILURE_DETAILS -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('ServiceOrders');
$blockInstance = Vtiger_Block::getInstance('LBL_SYSTEM_INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('ticket_id', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'ticket_id';
        $field->column = 'ticket_id';
        $field->uitype = 10;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Ticket Id';
        $field->summaryfield = 1;
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'I~O';
        $field->columntype = 'INT(30)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $id = $blockInstance->addFieldIgnite($field);
        echo "created field --- $id ";
        $invogamoduleInstance = Vtiger_Module::getInstance('HelpDesk');
        $relationLabel  = 'ServiceOrders';
        $invogamoduleInstance->setRelatedList(
              $invoiceModule, $relationLabel, Array('ADD'), 'get_dependents_list' //you can do select also Array('ADD','SELECT')
        );
        $tom = "INSERT INTO `vtiger_fieldmodulerel` (`fieldid`, `module`, `relmodule`, `status`, `sequence`) VALUES ('$id', 'ServiceOrders', 'HelpDesk', NULL, NULL)";
        $adb->pquery($tom);
    } else {
        echo "field is present -- ticket_id  in ServiceOrders--- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_SYSTEM_INFORMATION in ServiceOrders -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('ServiceOrders');
$blockInstance = Vtiger_Block::getInstance('LBL_SYSTEM_INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('external_app_num', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'external_app_num';
        $field->column = 'external_app_num';
        $field->uitype = 2;
        $field->table = $invoiceModule->basetable;
        $field->label = 'SAP Reference Number';
        $field->summaryfield = 1;
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(250)';
        $field->quickcreate = 3;
        $field->displaytype = 2;
        $field->masseditable = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- external_app_num in ServiceOrders --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_SYSTEM_INFORMATION in ServiceOrders -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('StockTransferOrders');
$blockInstance = Vtiger_Block::getInstance('LBL_STO_INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('collective_no', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'collective_no';
        $field->column = 'collective_no';
        $field->uitype = 2;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Collective No.';
        $field->summaryfield = 1;
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(250)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- collective_no in StockTransferOrders --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_STO_INFORMATION in StockTransferOrders -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('StockTransferOrders');
$blockInstance = Vtiger_Block::getInstance('LBL_STO_INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('your_ref', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'your_ref';
        $field->column = 'your_ref';
        $field->uitype = 2;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Your Reference';
        $field->summaryfield = 1;
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(150)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- your_ref in StockTransferOrders --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_STO_INFORMATION in StockTransferOrders -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('StockTransferOrders');
$blockInstance = Vtiger_Block::getInstance('LBL_STO_INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('our_ref', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'our_ref';
        $field->column = 'our_ref';
        $field->uitype = 2;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Our Reference';
        $field->summaryfield = 1;
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(150)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- our_ref in StockTransferOrders --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_STO_INFORMATION in StockTransferOrders -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('StockTransferOrders');
$blockInstance = Vtiger_Block::getInstance('LBL_STO_INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('plant_name', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'plant_name';
        $field->column = 'plant_name';
        $field->uitype = 10;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Supplying Plant';
        $field->summaryfield = 1;
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'I~O';
        $field->columntype = 'INT(30)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $id = $blockInstance->addFieldIgnite($field);
        echo " created field --- $id ";
        $invogamoduleInstance = Vtiger_Module::getInstance('MaintenancePlant');
        $relationLabel  = 'Stock Transfer Orders';
        $invogamoduleInstance->setRelatedList(
              $invoiceModule, $relationLabel, Array('ADD'), 'get_dependents_list' //you can do select also Array('ADD','SELECT')
        );
        $tom = "INSERT INTO `vtiger_fieldmodulerel` (`fieldid`, `module`, `relmodule`, `status`, `sequence`) VALUES ('$id', 'StockTransferOrders', 'MaintenancePlant', NULL, NULL)";
        $adb->pquery($tom);
    } else {
        echo "field is present -- plant_name  in StockTransferOrders--- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_STO_INFORMATION in StockTransferOrders -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$emm = null;
$emm = new VTEntityMethodManager($adb);
$result = $adb->pquery("SELECT function_name FROM com_vtiger_workflowtasks_entitymethod WHERE module_name=? AND method_name=?", array('StockTransferOrders', 'SyncToExternalOnSTOCreate'));
if ($adb->num_rows($result) == 0) {
    $emm->addEntityMethod("StockTransferOrders", "SyncToExternalOnSTOCreate", "modules/StockTransferOrders/SyncToExternalOnSTOCreate.php", "SyncToExternalOnSTOCreate");
} else {
    print_r("already exits --- workflow function -- SyncToExternalOnSTOCreate in StockTransferOrders Module <br> ");
}
$emm = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('StockTransferOrders');
$blockInstance = Vtiger_Block::getInstance('LBL_STO_INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('external_app_num', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'external_app_num';
        $field->column = 'external_app_num';
        $field->uitype = 2;
        $field->table = $invoiceModule->basetable;
        $field->label = 'SAP Reference Number';
        $field->summaryfield = 1;
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(250)';
        $field->quickcreate = 3;
        $field->displaytype = 2;
        $field->masseditable = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- external_app_num in StockTransferOrders --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_STO_INFORMATION in StockTransferOrders -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('StockTransferOrders');
$blockInstance = Vtiger_Block::getInstance('LBL_STO_INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('rec_plant_name', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'rec_plant_name';
        $field->column = 'rec_plant_name';
        $field->uitype = 10;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Receiving Plant';
        $field->summaryfield = 1;
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'I~O';
        $field->columntype = 'INT(30)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $id = $blockInstance->addFieldIgnite($field);
        echo " created field --- $id ";
        // $invogamoduleInstance = Vtiger_Module::getInstance('MaintenancePlant');
        // $relationLabel  = 'Stock Transfer Orders';
        // $invogamoduleInstance->setRelatedList(
        //       $invoiceModule, $relationLabel, Array('ADD'), 'get_dependents_list' //you can do select also Array('ADD','SELECT')
        // );
        $tom = "INSERT INTO `vtiger_fieldmodulerel` (`fieldid`, `module`, `relmodule`, `status`, `sequence`) VALUES ('$id', 'StockTransferOrders', 'MaintenancePlant', NULL, NULL)";
        $adb->pquery($tom);
    } else {
        echo "field is present -- rec_plant_name  in StockTransferOrders--- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_STO_INFORMATION in StockTransferOrders -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('StockTransferOrders');
$blockInstance = Vtiger_Block::getInstance('LBL_SYSTEM_INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('servicereport_id', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'servicereport_id';
        $field->column = 'servicereport_id';
        $field->uitype = 10;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Service Report Number';
        $field->summaryfield = 1;
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'I~O';
        $field->columntype = 'INT(30)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $id = $blockInstance->addFieldIgnite($field);
        echo " created field --- $id ";
        $invogamoduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
        $relationLabel  = 'StockTransferOrders';
        $invogamoduleInstance->setRelatedList(
              $invoiceModule, $relationLabel, Array('ADD'), 'get_dependents_list' //you can do select also Array('ADD','SELECT')
        );
        $tom = "INSERT INTO `vtiger_fieldmodulerel` (`fieldid`, `module`, `relmodule`, `status`, `sequence`) VALUES ('$id', 'StockTransferOrders', 'RecommissioningReports', NULL, NULL)";
        $adb->pquery($tom);
    } else {
        echo "field is present -- servicereport_id  in StockTransferOrders--- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_SYSTEM_INFORMATION in StockTransferOrders -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$emm = null;
$emm = new VTEntityMethodManager($adb);
$result = $adb->pquery("SELECT function_name FROM com_vtiger_workflowtasks_entitymethod WHERE module_name=? AND method_name=?", array('Products', 'ProductsExternalAppSyncUpdated'));
if ($adb->num_rows($result) == 0) {
    $emm->addEntityMethod("Products", "ProductsExternalAppSyncUpdated", "modules/Products/ProductsExternalAppSyncUpdated.php", "ProductsExternalAppSyncUpdated");
} else {
    print_r("already exits --- workflow function -- ProductsExternalAppSyncUpdated in Products Module <br> ");
}
$emm = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('HelpDesk');
$blockInstance = Vtiger_Block::getInstance('DETAILS OF EQUIPMENT LOCATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('district', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'district';
        $field->column = 'district';
        $field->uitype = 2;
        $field->table = $invoiceModule->basetable;
        $field->label = 'District';
        $field->summaryfield = 1;
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(250)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- district HelpDesk --- <br>";
    }
} else {
    echo "Block Does not exits -- DETAILS OF EQUIPMENT LOCATION in HelpDesk -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('FailedParts');
$blockInstance = Vtiger_Block::getInstance('LBL_BLOCK_GENERAL_INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('description', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'description';
        $field->column = 'description';
        $field->uitype = 21;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Description';
        $field->summaryfield = 1;
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(500)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- description FailedParts --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_BLOCK_GENERAL_INFORMATION in FailedParts -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('FailedParts');
$blockInstance = Vtiger_Block::getInstance('LBL_BLOCK_GENERAL_INFORMATION', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('qty', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'qty';
        $fieldInstance->column = 'qty';
        $fieldInstance->uitype = 7;
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->label = 'Qty.';
        $fieldInstance->summaryfield = 1;
        $fieldInstance->readonly = 1;
        $fieldInstance->presence = 2;
        $fieldInstance->typeofdata = 'I~O';
        $fieldInstance->columntype = 'INT(15)';
        $fieldInstance->quickcreate = 3;
        $fieldInstance->displaytype = 1;
        $fieldInstance->masseditable = 1;
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- qty in FailedParts Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_BLOCK_GENERAL_INFORMATION in FailedParts -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

// $moduleInstance = null;
// $blockInstance = null;
// $fieldInstance = null;
// $moduleInstance = Vtiger_Module::getInstance('FailedParts');
// $blockInstance = Vtiger_Block::getInstance('LBL_BLOCK_GENERAL_INFORMATION', $moduleInstance);
// if ($blockInstance) {
//     $fieldInstance = Vtiger_Field::getInstance('replaced_date', $moduleInstance);
//     if (!$fieldInstance) {
//         $fieldInstance = new Vtiger_Field();
//         $fieldInstance->name = 'replaced_date';
//         $fieldInstance->label = 'Replaced Date';
//         $fieldInstance->table = $moduleInstance->basetable;
//         $fieldInstance->column = 'replaced_date';
//         $fieldInstance->uitype = 5;
//         $fieldInstance->presence = '0';
//         $fieldInstance->typeofdata = 'D~O';
//         $fieldInstance->columntype = 'DATE';
//         $fieldInstance->defaultvalue = NULL;
//         $blockInstance->addField($fieldInstance);
//     } else {
//         echo "field is already Present --- replaced_date in FailedParts Module --- <br>";
//     }
// } else {
//     echo " block does not exits --- LBL_BLOCK_GENERAL_INFORMATION -- <br>";
// }
// $moduleInstance = null;
// $blockInstance = null;
// $fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('HelpDesk');
$blockInstance = Vtiger_Block::getInstance('Contact Person details', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('tele_phone', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'tele_phone';
        $field->column = 'tele_phone';
        $field->uitype = 11;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Tele Phone Number';
        $field->summaryfield = 1;
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(20)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- tele_phone HelpDesk --- <br>";
    }
} else {
    echo "Block Does not exits -- Contact Person details in HelpDesk -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('FailedParts');
$blockInstance = Vtiger_Block::getInstance('LBL_GENERAL_INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('equipment_id', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'equipment_id';
        $field->column = 'equipment_id';
        $field->uitype = 10;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Equipment Serial No.';
        $field->summaryfield = 1;
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'I~O';
        $field->columntype = 'INT(30)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $id = $blockInstance->addFieldIgnite($field);
        echo "created field --- $id ";
        $invogamoduleInstance = Vtiger_Module::getInstance('Equipment');
        $relationLabel  = 'FailedParts';
        $invogamoduleInstance->setRelatedList(
              $invoiceModule, $relationLabel, Array(), 'get_dependents_list' //you can do select also Array('ADD','SELECT')
        );
        $tom = "INSERT INTO `vtiger_fieldmodulerel` (`fieldid`, `module`, `relmodule`, `status`, `sequence`) VALUES ('$id', 'FailedParts', 'Equipment', NULL, NULL)";
        $adb->pquery($tom);
    } else {
        echo "field is present -- equipment_id  in FailedParts--- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_GENERAL_INFORMATION in FailedParts -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('FailedParts');
$blockInstance = Vtiger_Block::getInstance('LBL_GENERAL_INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('ticket_id', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'ticket_id';
        $field->column = 'ticket_id';
        $field->uitype = 10;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Ticket Id';
        $field->summaryfield = 1;
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'I~O';
        $field->columntype = 'INT(30)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $id = $blockInstance->addFieldIgnite($field);
        echo "created field --- $id ";
        $invogamoduleInstance = Vtiger_Module::getInstance('HelpDesk');
        $relationLabel  = 'FailedParts';
        $invogamoduleInstance->setRelatedList(
              $invoiceModule, $relationLabel, Array('ADD'), 'get_dependents_list' //you can do select also Array('ADD','SELECT')
        );
        $tom = "INSERT INTO `vtiger_fieldmodulerel` (`fieldid`, `module`, `relmodule`, `status`, `sequence`) VALUES ('$id', 'FailedParts', 'HelpDesk', NULL, NULL)";
        $adb->pquery($tom);
    } else {
        echo "field is present -- ticket_id  in FailedParts --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_GENERAL_INFORMATION in FailedParts -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('FailedParts');
$blockInstance = Vtiger_Block::getInstance('LBL_GENERAL_INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('sr_app_num', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'sr_app_num';
        $field->column = 'sr_app_num';
        $field->uitype = 2;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Notification No.';
        $field->summaryfield = 1;
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(250)';
        $field->quickcreate = 3;
        $field->displaytype = 2;
        $field->masseditable = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- sr_app_num in FailedParts --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_GENERAL_INFORMATION in FailedParts -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('FailedParts');
$blockInstance = Vtiger_Block::getInstance('LBL_GENERAL_INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('project_name', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'project_name';
        $field->column = 'project_name';
        $field->uitype = 2;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Project';
        $field->summaryfield = 1;
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(250)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $field->defaultvalue = 0;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- project_name FailedParts --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_GENERAL_INFORMATION in FailedParts -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('BankGuarantee');
$blockInstance = Vtiger_Block::getInstance('LBL_BLOCK_GENERAL_INFORMATION', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('ex_val_start_d', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'ex_val_start_d';
        $fieldInstance->label = 'BG Validity start Date';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'ex_val_start_d';
        $fieldInstance->uitype = 5;
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'D~O';
        $fieldInstance->columntype = 'DATE';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- ex_val_start_d in BankGuarantee Module --- <br>";
    }
} else {
    echo "block does not exits --- LBL_BLOCK_GENERAL_INFORMATION -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('BankGuarantee');
$blockInstance = Vtiger_Block::getInstance('LBL_BLOCK_GENERAL_INFORMATION', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('ex_val_end_d', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'ex_val_end_d';
        $fieldInstance->label = 'Extended Validity end  Date';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'ex_val_end_d';
        $fieldInstance->uitype = 5;
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'D~O';
        $fieldInstance->columntype = 'DATE';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- ex_val_end_d in BankGuarantee Module --- <br>";
    }
} else {
    echo "block does not exits --- LBL_BLOCK_GENERAL_INFORMATION -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('BankGuarantee');
$blockInstance = Vtiger_Block::getInstance('LBL_BLOCK_GENERAL_INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('no_times_exten', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'no_times_exten';
        $field->column = 'no_times_exten';
        $field->uitype = 2;
        $field->table = $invoiceModule->basetable;
        $field->label = 'No. of times of extension';
        $field->summaryfield = 1;
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'I~O';
        $field->columntype = 'INT(10)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- no_times_exten BankGuarantee --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_BLOCK_GENERAL_INFORMATION in BankGuarantee -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('BankGuarantee');
$blockInstance = Vtiger_Block::getInstance('LBL_BLOCK_GENERAL_INFORMATION', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('bg_type', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'bg_type';
        $fieldInstance->label = 'BG Type';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'bg_type';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $blockInstance->addField($fieldInstance);
  //    $fieldInstance->setPicklistValues(array('Equipment', 'Service'));
    } else {
        echo "field is already Present --- bg_type in BankGuarantee Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_BLOCK_GENERAL_INFORMATION in BankGuarantee -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('BankGuarantee');
$blockInstance = Vtiger_Block::getInstance('LBL_BLOCK_GENERAL_INFORMATION', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('bg_issued_to', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'bg_issued_to';
        $fieldInstance->label = 'BG Issued';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'bg_issued_to';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $blockInstance->addField($fieldInstance);
  //    $fieldInstance->setPicklistValues(array('Contract PO', 'Repair Aggregates Supply'));
    } else {
        echo "field is already Present --- bg_issued_to in BankGuarantee Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_BLOCK_GENERAL_INFORMATION in BankGuarantee -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('BankGuarantee');
$blockInstance = Vtiger_Block::getInstance('LBL_BLOCK_GENERAL_INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('reason_for_ext', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'reason_for_ext';
        $field->column = 'reason_for_ext';
        $field->uitype = 21;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Reason for Extension';
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'TEXT';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- reason_for_ext In BankGuarantee Module --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_BLOCK_GENERAL_INFORMATION -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('BankGuarantee');
$blockInstance = Vtiger_Block::getInstance('LBL_BLOCK_GENERAL_INFORMATION', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('likely_date_of_col', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'likely_date_of_col';
        $fieldInstance->label = 'Likely Date Of Collection';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'likely_date_of_col';
        $fieldInstance->uitype = 5;
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'D~O';
        $fieldInstance->columntype = 'DATE';
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- likely_date_of_col in BankGuarantee Module --- <br>";
    }
} else {
    echo "block does not exits --- LBL_BLOCK_GENERAL_INFORMATION -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('FailedParts');
$blockInstance = Vtiger_Block::getInstance('LBL_ITEM_DETAILS', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('remarks_by_eng', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'remarks_by_eng';
        $field->column = 'remarks_by_eng';
        $field->uitype = 21;
        $field->table = 'vtiger_inventoryproductrel';
        $field->label = 'Remarks by Service Engineer';
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'TEXT';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- remarks_by_eng In FailedParts Module --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_ITEM_DETAILS -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('FailedParts');
$blockInstance = Vtiger_Block::getInstance('LBL_ITEM_DETAILS', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('replaced_date', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'replaced_date';
        $fieldInstance->label = 'Replaced date';
        $fieldInstance->table = 'vtiger_inventoryproductrel';
        $fieldInstance->column = 'replaced_date';
        $fieldInstance->uitype = 5;
        $fieldInstance->presence = '0';
        $fieldInstance->helpinfo = 'li_lg';
        $fieldInstance->typeofdata = 'D~O';
        $fieldInstance->columntype = 'DATE';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- replaced_date in FailedParts Module --- <br>";
    }
} else {
    echo "block does not exits --- LBL_ITEM_DETAILS -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('FailedParts');
$blockInstance = Vtiger_Block::getInstance('LBL_ITEM_DETAILS', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('date_of_submiss', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'date_of_submiss';
        $fieldInstance->label = 'Replaced date';
        $fieldInstance->table = 'vtiger_inventoryproductrel';
        $fieldInstance->column = 'date_of_submiss';
        $fieldInstance->uitype = 5;
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'D~O';
        $fieldInstance->columntype = 'DATE';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- date_of_submiss in FailedParts Module --- <br>";
    }
} else {
    echo "block does not exits --- LBL_ITEM_DETAILS -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('FailedParts');
$blockInstance = Vtiger_Block::getInstance('LBL_ITEM_DETAILS', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('collect_immidiately', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'collect_immidiately';
        $field->column = 'collect_immidiately';
        $field->table = 'vtiger_inventoryproductrel';
        $field->label = 'Mark as Important to Collect immediately';
        $field->uitype = 56;
        $field->columntype = 'INT(1) DEFAULT 0';
        $field->typeofdata = 'I~O';
        $field->displaytype = 2;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- collect_immidiately In FailedParts Module --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_ITEM_DETAILS in FailedParts -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('FailedParts');
$blockInstance = Vtiger_Block::getInstance('LBL_ITEM_DETAILS', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('part_recived', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'part_recived';
        $fieldInstance->label = 'Received';
        $fieldInstance->table = 'vtiger_inventoryproductrel';
        $fieldInstance->column = 'part_recived';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
  //    $fieldInstance->setPicklistValues(array('Yes', 'No'));
    } else {
        echo "field is present -- part_recived In FailedParts Module --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_ITEM_DETAILS in FailedParts -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('FailedParts');
$blockInstance = Vtiger_Block::getInstance('LBL_ITEM_DETAILS', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('action_by_service_man', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'action_by_service_man';
        $fieldInstance->label = 'Action By Service Manager';
        $fieldInstance->table = 'vtiger_inventoryproductrel';
        $fieldInstance->column = 'action_by_service_man';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
  //    $fieldInstance->setPicklistValues(array('Scrapped', 'Repair at Region','Sent to division'));
    } else {
        echo "field is present -- action_by_service_man In FailedParts Module --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_ITEM_DETAILS in FailedParts -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('FailedParts');
$blockInstance = Vtiger_Block::getInstance('LBL_ITEM_DETAILS', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('purpose_for_sending', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'purpose_for_sending';
        $fieldInstance->label = 'Purpose for Sending';
        $fieldInstance->table = 'vtiger_inventoryproductrel';
        $fieldInstance->column = 'purpose_for_sending';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
  //    $fieldInstance->setPicklistValues(array('Repair', 'Analysis'));
    } else {
        echo "field is present -- purpose_for_sending In FailedParts Module --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_ITEM_DETAILS in FailedParts -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('FailedParts');
$blockInstance = Vtiger_Block::getInstance('LBL_ITEM_DETAILS', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('item_det_division', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'item_det_division';
        $fieldInstance->label = 'Division';
        $fieldInstance->table = 'vtiger_inventoryproductrel';
        $fieldInstance->column = 'item_det_division';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
  //    $fieldInstance->setPicklistValues(array('EM Division', 'H&P Division','Truck Division','Engine Division'));
    } else {
        echo "field is present -- item_det_division In FailedParts Module --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_ITEM_DETAILS in FailedParts -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('FailedParts');
$blockInstance = Vtiger_Block::getInstance('LBL_ITEM_DETAILS', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('remarks_by_ser_mang', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'remarks_by_ser_mang';
        $field->column = 'remarks_by_ser_mang';
        $field->uitype = 21;
        $field->table = 'vtiger_inventoryproductrel';
        $field->label = 'Reamrks by Service Manager';
        $field->readonly = 1;
        $field->presence = 2;
        $field->helpinfo = 'li_lg';
        $field->presence = 2; 
        $field->columntype = 'TEXT';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- remarks_by_ser_mang In FailedParts Module --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_ITEM_DETAILS -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('ServiceEngineer');
$blockInstance = Vtiger_Block::getInstance('LBL_USERLOGIN_ROLE', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('on_leave', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'on_leave';
        $field->column = 'on_leave';
        $field->table = $invoiceModule->basetable;
        $field->label = 'On Leave ?';
        $field->uitype = 56;
        $field->columntype = 'INT(1) DEFAULT 0';
        $field->typeofdata = 'I~O';
        $field->displaytype = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- on_leave In ServiceEngineer Module --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_USERLOGIN_ROLE in ServiceEngineer -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('Equipment Details', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('failure_time', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'failure_time';
        $fieldInstance->label = 'Failure Time';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'failure_time';
        $fieldInstance->uitype = 14;
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'T~O';
        $fieldInstance->columntype = 'TIME';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- failure_time in RecommissioningReports Module --- <br>";
    }
} else {
    echo " block does not exits --- Equipment Details -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('EquipmentAvailability');
$blockInstance = Vtiger_Block::getInstance('LBL_BLOCK_GENERAL_INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('mdy', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'mdy';
        $field->column = 'mdy';
        $field->uitype = 2;
        $field->table = $invoiceModule->basetable;
        $field->label = 'mdY';
        $field->summaryfield = 1;
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(10)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- mdy EquipmentAvailability --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_BLOCK_GENERAL_INFORMATION in EquipmentAvailability -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$emm = null;
$emm = new VTEntityMethodManager($adb);
$result = $adb->pquery("SELECT function_name FROM com_vtiger_workflowtasks_entitymethod WHERE module_name=? AND method_name=?", array('EquipmentAvailability', 'CalculateEquipmentAvailability'));
if ($adb->num_rows($result) == 0) {
    $emm->addEntityMethod("EquipmentAvailability", "CalculateEquipmentAvailability", "modules/EquipmentAvailability/CalculateEquipmentAvailability.php", "CalculateEquipmentAvailability");
} else {
    print_r("already exits --- workflow function -- CalculateEquipmentAvailability in EquipmentAvailability Module <br> ");
}
$emm = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('EquipmentAvailability');
$blockInstance = Vtiger_Block::getInstance('LBL_BLOCK_GENERAL_INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('equipment_id', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'equipment_id';
        $field->column = 'equipment_id';
        $field->uitype = 10;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Equipment Serial No.';
        $field->summaryfield = 1;
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'I~O';
        $field->columntype = 'INT(30)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $field->defaultvalue = 0;
        $id = $blockInstance->addFieldIgnite($field);
        echo "created field --- $id ";
        // ------------------ invoga
        $invogamoduleInstance = Vtiger_Module::getInstance('Equipment');
        $relationLabel  = 'Equipment Availability';
        $invogamoduleInstance->setRelatedList(
              $invoiceModule, $relationLabel, Array('ADD'), 'get_dependents_list' //you can do select also Array('ADD','SELECT')
        );
        // ------------------------invoga
        $tom = "INSERT INTO `vtiger_fieldmodulerel` (`fieldid`, `module`, `relmodule`, `status`, `sequence`) VALUES ('$id', 'EquipmentAvailability', 'Equipment', NULL, NULL)";
        $adb->pquery($tom);
    } else {
        echo "field is present -- equipment_id  in EquipmentAvailability--- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_BLOCK_GENERAL_INFORMATION in HelpDesk -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('EquipmentAvailability');
$blockInstance = Vtiger_Block::getInstance('LBL_BLOCK_GENERAL_INFORMATION', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('total_hours', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'total_hours';
        $fieldInstance->column = 'total_hours';
        $fieldInstance->uitype = 7;
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->label = 'Total Hours';
        $fieldInstance->summaryfield = 1;
        $fieldInstance->readonly = 1;
        $fieldInstance->presence = 2;
        $fieldInstance->typeofdata = 'NN~O';
        $fieldInstance->columntype = 'DECIMAL(10,5)';
        $fieldInstance->quickcreate = 3;
        $fieldInstance->displaytype = 1;
        $fieldInstance->masseditable = 1;
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- total_hours in EquipmentAvailability Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_BLOCK_GENERAL_INFORMATION -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('EquipmentAvailability');
$blockInstance = Vtiger_Block::getInstance('LBL_BLOCK_GENERAL_INFORMATION', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('total_breakdown', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'total_breakdown';
        $fieldInstance->column = 'total_breakdown';
        $fieldInstance->uitype = 7;
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->label = 'Total BreakDown';
        $fieldInstance->summaryfield = 1;
        $fieldInstance->readonly = 1;
        $fieldInstance->presence = 2;
        $fieldInstance->typeofdata = 'NN~O';
        $fieldInstance->columntype = 'DECIMAL(10,5)';
        $fieldInstance->quickcreate = 3;
        $fieldInstance->displaytype = 1;
        $fieldInstance->masseditable = 1;
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- total_breakdown in EquipmentAvailability Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_BLOCK_GENERAL_INFORMATION -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('CallAssistance');
$blockInstance = Vtiger_Block::getInstance('LBL_BLOCK_GENERAL_INFORMATION', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('call_equip_expirence_in', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'call_equip_expirence_in';
        $fieldInstance->label = 'Expirence In';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'call_equip_expirence_in';
        $fieldInstance->uitype = '33';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $blockInstance->addField($fieldInstance);
  //    $fieldInstance->setPicklistValues(array('Electrical', 'Mechanical'));
    } else {
        echo "field is already Present --- call_equip_expirence_in in CallAssistance Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_BLOCK_GENERAL_INFORMATION -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$emm = null;
$emm = new VTEntityMethodManager($adb);
$result = $adb->pquery("SELECT function_name FROM com_vtiger_workflowtasks_entitymethod WHERE module_name=? AND method_name=?", array('ServiceOrders', 'SyncToExternalOnServiceOrderCreate'));
if ($adb->num_rows($result) == 0) {
    $emm->addEntityMethod("ServiceOrders", "SyncToExternalOnServiceOrderCreate", "modules/ServiceOrders/SyncToExternalOnServiceOrderCreate.php", "SyncToExternalOnServiceOrderCreate");
} else {
    print_r("already exits --- workflow function -- SyncToExternalOnServiceOrderCreate in ServiceOrders Module <br> ");
}
$emm = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('Ticket Details', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('tck_det_purpose', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'tck_det_purpose';
        $fieldInstance->label = 'Purpose';
        $fieldInstance->table = $moduleInstance->basetable.'cf';
        $fieldInstance->column = 'tck_det_purpose';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
  //    $fieldInstance->setPicklistValues(array('Rehabilitation', 'Overhaul', 'Up gradation','Parts Requirement','Equipment Health Check up'));
    } else {
        echo "field is already Present --- tck_det_purpose in RecommissioningReports Module --- <br>";
    }
} else {
    echo "Block does not exits --- Ticket Details -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('Equipment');
$blockInstance = Vtiger_Block::getInstance('LBL_BLOCK_SYSTEM_INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('agg_equipment_id', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'agg_equipment_id';
        $field->column = 'agg_equipment_id';
        $field->uitype = 10;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Parent Equipment Serial No.';
        $field->summaryfield = 1;
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'I~O';
        $field->columntype = 'INT(30)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $id = $blockInstance->addFieldIgnite($field);
        echo "created field --- $id ";
        $invogamoduleInstance = Vtiger_Module::getInstance('Equipment');
        $relationLabel  = 'Aggregates';
        $invogamoduleInstance->setRelatedList(
              $invoiceModule, $relationLabel, Array('ADD'), 'get_dependents_list' //you can do select also Array('ADD','SELECT')
        );
        $tom = "INSERT INTO `vtiger_fieldmodulerel` (`fieldid`, `module`, `relmodule`, `status`, `sequence`) VALUES ('$id', 'Equipment', 'Equipment', NULL, NULL)";
        $adb->pquery($tom);
    } else {
        echo "field is present -- agg_equipment_id  in Equipment--- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_BLOCK_SYSTEM_INFORMATION in Equipment -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('Equipment');
$blockInstance = Vtiger_Block::getInstance('LBL_BLOCK_SYSTEM_INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('equip_ag_serial_no', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'equip_ag_serial_no';
        $field->column = 'equip_ag_serial_no';
        $field->uitype = 2;
        $field->table = $invoiceModule->basetable.'cf';
        $field->label = 'Serialno';
        $field->summaryfield = 1;
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(250)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- equip_ag_serial_no in Equipment --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_BLOCK_SYSTEM_INFORMATION in Equipment -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('Equipment');
$blockInstance = Vtiger_Block::getInstance('LBL_BLOCK_SYSTEM_INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('equip_ag_part_no', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'equip_ag_part_no';
        $field->column = 'equip_ag_part_no';
        $field->uitype = 2;
        $field->table = $invoiceModule->basetable.'cf';
        $field->label = 'Part No';
        $field->summaryfield = 1;
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(250)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- equip_ag_part_no in Equipment --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_BLOCK_SYSTEM_INFORMATION in Equipment -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('Equipment');
$blockInstance = Vtiger_Block::getInstance('LBL_BLOCK_SYSTEM_INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('equip_ag_manu_fact', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'equip_ag_manu_fact';
        $field->column = 'equip_ag_manu_fact';
        $field->uitype = 2;
        $field->table = $invoiceModule->basetable.'cf';
        $field->label = 'Manufacturer';
        $field->summaryfield = 1;
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(250)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- equip_ag_manu_fact in Equipment --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_BLOCK_SYSTEM_INFORMATION in Equipment -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

// $moduleInstance = null;
// $blockInstance = null;
// $fieldInstance = null;
// $moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
// $blockInstance = Vtiger_Block::getInstance('Warranty_Terms', $moduleInstance);
// if ($blockInstance) {
//     $fieldInstance = Vtiger_Field::getInstance('wt_war_start_cond', $moduleInstance);
//     if (!$fieldInstance) {
//         $fieldInstance = new Vtiger_Field();
//         $fieldInstance->name = 'wt_war_start_cond';
//         $fieldInstance->label = 'Warranty Start Condition';
//         $fieldInstance->table = $moduleInstance->basetable.'cf';
//         $fieldInstance->column = 'wt_war_start_cond';
//         $fieldInstance->uitype = 16;
//         $fieldInstance->presence = '0';
//         $fieldInstance->typeofdata = 'V~O';
//         $fieldInstance->columntype = 'VARCHAR(100)';
//         $fieldInstance->defaultvalue = NULL;
//         $blockInstance->addField($fieldInstance);
//         $fieldInstance->setPicklistValues(array('Date of Receipt at Customer site', 'Date of commissioning/Fitment', 'Date of Invoice/Billing'));

//     } else {
//         echo "field is already Present --- wt_war_start_cond in RecommissioningReports Module --- <br>";
//     }
// } else {
//     echo "block does not exits --- Warranty_Terms in RecommissioningReports-- <br>";
// }
// $moduleInstance = null;
// $blockInstance = null;
// $fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('Maintenance_Details', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('mt_major_aggrts', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'mt_major_aggrts';
        $fieldInstance->label = 'Major Aggregates';
        $fieldInstance->table = $moduleInstance->basetable.'cf';
        $fieldInstance->column = 'mt_major_aggrts';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
  //    $fieldInstance->setPicklistValues(array('Engine', 'Transmission', 'Final Drive', 'Differential', 'Motor','Others'));

    } else {
        echo "field is already Present --- mt_major_aggrts in RecommissioningReports Module --- <br>";
    }
} else {
    echo "block does not exits --- Maintenance_Details in RecommissioningReports-- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('Maintenance_Details', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('mt_pdical_maint_type', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'mt_pdical_maint_type';
        $fieldInstance->label = 'Periodical Maintenance Type';
        $fieldInstance->table = $moduleInstance->basetable.'cf';
        $fieldInstance->column = 'mt_pdical_maint_type';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
  //    $fieldInstance->setPicklistValues(array('Every 250 hrs', 'Every 500 Hrs', 'Every 750 Hrs', 'Every 1000 Hrs', 'Every 1250 Hrs','Every 1500 Hrs','Every 2000 Hrs','Every 1000 KM'));

    } else {
        echo "field is already Present --- mt_pdical_maint_type in RecommissioningReports Module --- <br>";
    }
} else {
    echo "block does not exits --- Maintenance_Details in RecommissioningReports-- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;


$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('Sub_Assembly_Details', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('mod_of_sub_ambly', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'mod_of_sub_ambly';
        $fieldInstance->label = 'Model of Sub Assembly/Spares Parts';
        $fieldInstance->table = $moduleInstance->basetable.'cf';
        $fieldInstance->column = 'mod_of_sub_ambly';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
  //    $fieldInstance->setPicklistValues(array('EG Engine', 'PCMV Transmission', 'Regular', 'ATGEMS Transmission', 'ALLISION Transmission','AVTEC Transmission','EG Transmission','Not Applicable'));

    } else {
        echo "field is already Present --- mod_of_sub_ambly in RecommissioningReports Module --- <br>";
    }
} else {
    echo "block does not exits --- Sub_Assembly_Details in RecommissioningReports-- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('Equipment');
$blockInstance = Vtiger_Block::getInstance('LBL_BLOCK_SYSTEM_INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('equip_war_terms', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'equip_war_terms';
        $field->column = 'equip_war_terms';
        $field->uitype = 2;
        $field->table = $invoiceModule->basetable.'cf';
        $field->label = 'Master Warranty';
        $field->summaryfield = 1;
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(250)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- equip_war_terms in Equipment --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_BLOCK_SYSTEM_INFORMATION in Equipment -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('Sub_Assembly_Spares_Parts_Details', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('saspd_po_detail', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'saspd_po_detail';
        $field->column = 'saspd_po_detail';
        $field->uitype = 2;
        $field->table = $invoiceModule->basetable.'cf';
        $field->label = 'PO details';
        $field->summaryfield = 1;
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(250)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- saspd_po_detail in RecommissioningReports --- <br>";
    }
} else {
    echo "Block Does not exits -- Sub_Assembly_Spares_Parts_Details in RecommissioningReports -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('Sub_Assembly_Spares_Parts_Details', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('saspd_dod', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'saspd_dod';
        $fieldInstance->label = 'Date Of Delivery';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'saspd_dod';
        $fieldInstance->uitype = 5;
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'D~O';
        $fieldInstance->columntype = 'DATE';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- saspd_dod in RecommissioningReports Module --- <br>";
    }
} else {
    echo " block does not exits --- Sub_Assembly_Spares_Parts_Details -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('Sub_Assembly_Spares_Parts_Details', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('saspd_pod', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'saspd_pod';
        $fieldInstance->label = 'PO date';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'saspd_pod';
        $fieldInstance->uitype = 5;
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'D~O';
        $fieldInstance->columntype = 'DATE';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- saspd_pod in RecommissioningReports Module --- <br>";
    }
} else {
    echo " block does not exits --- Sub_Assembly_Spares_Parts_Details -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('Ticket Details', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('td_symptoms', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'td_symptoms';
        $field->column = 'td_symptoms';
        $field->uitype = 21;
        $field->table = $invoiceModule->basetable.'cf';
        $field->label = 'REMARKS / SYMPTOMS';
        $field->summaryfield = 1;
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'TEXT';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- td_symptoms RecommissioningReports --- <br>";
    }
} else {
    echo "Block Does not exits -- Ticket Details in RecommissioningReports -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('ACTION_TAKEN', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('action_taken_block_seo', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'action_taken_block_seo';
        $field->column = 'action_taken_block_seo';
        $field->uitype = 21;
        $field->table = $invoiceModule->basetable."cf";
        $field->label = 'Service Engineer Observations';
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(500)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- action_taken_block_seo In RecommissioningReports Module --- <br>";
    }
} else {
    echo "Block Does not exits -- ACTION_TAKEN -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('Sub_Assembly_Details', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('sad_det_of_subasmb', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'sad_det_of_subasmb';
        $field->column = 'sad_det_of_subasmb';
        $field->uitype = 2;
        $field->table = $invoiceModule->basetable;
        $field->label = 'sad_det_of_subasmb';
        $field->summaryfield = 1;
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(250)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- sad_det_of_subasmb in RecommissioningReports --- <br>";
    }
} else {
    echo "Block Does not exits -- Sub_Assembly_Details in RecommissioningReports -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('Equipment Details', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('manual_equ_ser', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'manual_equ_ser';
        $field->column = 'manual_equ_ser';
        $field->uitype = 2;
        $field->table = $invoiceModule->basetable;
        $field->label = 'manual_equ_ser';
        $field->summaryfield = 1;
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(250)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- manual_equ_ser in RecommissioningReports --- <br>";
    }
} else {
    echo "Block Does not exits -- Equipment Details in RecommissioningReports -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('StockTransferOrders');
$blockInstance = Vtiger_Block::getInstance('LBL_STO_INFORMATION', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('lsi_sto_type', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'lsi_sto_type';
        $fieldInstance->label = 'STO Type';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'lsi_sto_type';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $blockInstance->addField($fieldInstance);
  //    $fieldInstance->setPicklistValues(array('Equipment'));
    } else {
        echo "field is already Present --- lsi_sto_type in StockTransferOrders Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_STO_INFORMATION in StockTransferOrders -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('StockTransferOrders');
$blockInstance = Vtiger_Block::getInstance('LBL_STO_INFORMATION', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('lsi_purchase_grp', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'lsi_purchase_grp';
        $fieldInstance->label = 'Purch. Group';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'lsi_purchase_grp';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $blockInstance->addField($fieldInstance);
  //    $fieldInstance->setPicklistValues(array('Equipment'));
    } else {
        echo "field is already Present --- lsi_purchase_grp in StockTransferOrders Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_STO_INFORMATION in StockTransferOrders -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('StockTransferOrders');
$blockInstance = Vtiger_Block::getInstance('LBL_STO_INFORMATION', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('lsi_purchase_org', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'lsi_purchase_org';
        $fieldInstance->label = 'Company Code';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'lsi_purchase_org';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $blockInstance->addField($fieldInstance);
  //    $fieldInstance->setPicklistValues(array('SP01'));
    } else {
        echo "field is already Present --- lsi_purchase_org in StockTransferOrders Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_STO_INFORMATION in StockTransferOrders -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('StockTransferOrders');
$blockInstance = Vtiger_Block::getInstance('LBL_STO_INFORMATION', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('lsi_company_code', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'lsi_company_code';
        $fieldInstance->label = 'Company Code';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'lsi_company_code';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $blockInstance->addField($fieldInstance);
  //    $fieldInstance->setPicklistValues(array('1000'));
    } else {
        echo "field is already Present --- lsi_company_code in StockTransferOrders Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_STO_INFORMATION in StockTransferOrders -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('LBL_ITEM_DETAILS', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('lid_manual_sl', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'lid_manual_sl';
        $field->column = 'lid_manual_sl';
        $field->uitype = 2;
        $field->table = 'vtiger_inventoryproductrel';
        $field->label = 'Manufacturer Serial Numner';
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(250)';
        $field->displaytype = 1;
        $field->helpinfo = 'li_lg';
        $field->masseditable = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- lid_manual_sl in RecommissioningReports --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_ITEM_DETAILS in RecommissioningReports -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('LBL_ITEM_DETAILS', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('lid_rejected_qty', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'lid_rejected_qty';
        $fieldInstance->column = 'lid_rejected_qty';
        $fieldInstance->uitype = 7;
        $fieldInstance->table = 'vtiger_inventoryproductrel';
        $fieldInstance->label = 'Rejected Qty';
        $fieldInstance->readonly = 1;
        $fieldInstance->presence = 2;
        $fieldInstance->typeofdata = 'I~O';
        $fieldInstance->columntype = 'INT(15)';
        $fieldInstance->quickcreate = 3;
        $fieldInstance->displaytype = 1;
        $fieldInstance->masseditable = 1;
        $fieldInstance->helpinfo = 'li_lg';
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- lid_rejected_qty in RecommissioningReports Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_ITEM_DETAILS in RecommissioningReports -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('LBL_ITEM_DETAILS', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('lid_remarks', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'lid_remarks';
        $field->column = 'lid_remarks';
        $field->uitype = 2;
        $field->table = 'vtiger_inventoryproductrel';
        $field->label = 'Remarks';
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(250)';
        $field->displaytype = 1;
        $field->helpinfo = 'li_lg';
        $field->masseditable = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- lid_remarks in RecommissioningReports --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_ITEM_DETAILS in RecommissioningReports -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('LBL_ITEM_DETAILS', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('lid_po_qty', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'lid_po_qty';
        $fieldInstance->column = 'lid_po_qty';
        $fieldInstance->uitype = 7;
        $fieldInstance->table = 'vtiger_inventoryproductrel';
        $fieldInstance->label = 'PO Qty';
        $fieldInstance->readonly = 1;
        $fieldInstance->presence = 2;
        $fieldInstance->typeofdata = 'I~O';
        $fieldInstance->columntype = 'INT(15)';
        $fieldInstance->quickcreate = 3;
        $fieldInstance->displaytype = 1;
        $fieldInstance->masseditable = 1;
        $fieldInstance->helpinfo = 'li_lg';
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- lid_po_qty in RecommissioningReports Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_ITEM_DETAILS in RecommissioningReports -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('Ticket Details', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('war_claim_dte', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'war_claim_dte';
        $fieldInstance->label = 'war_claim_dte';
        $fieldInstance->table = 'vtiger_recommissioningreports_other';
        $fieldInstance->column = 'war_claim_dte';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $blockInstance->addField($fieldInstance);
  //    $fieldInstance->setPicklistValues(array('DATE OF SUPPLY', 'DATE OF FITMENT'));
    } else {
        echo "field is already Present --- war_claim_dte in RecommissioningReports Module --- <br>";
    }
} else {
    echo "block does not exits --- Ticket Details   -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('Sub_Assembly_Details', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('sad_hmr', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'sad_hmr';
        $fieldInstance->column = 'sad_hmr';
        $fieldInstance->uitype = 7;
        $fieldInstance->table = 'vtiger_recommissioningreports_other';
        $fieldInstance->label = 'HMR at the time of Fitment';
        $fieldInstance->readonly = 1;
        $fieldInstance->presence = 2;
        $fieldInstance->typeofdata = 'I~O';
        $fieldInstance->columntype = 'INT(15)';
        $fieldInstance->displaytype = 1;
        $fieldInstance->masseditable = 1;
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- sad_hmr in RecommissioningReports Module --- <br>";
    }
} else {
    echo " block does not exits --- Sub_Assembly_Details  in RecommissioningReports -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('LBL_ITEM_DETAILS', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('lid_remarks', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'lid_remarks';
        $field->column = 'lid_remarks';
        $field->uitype = 2;
        $field->table = 'vtiger_inventoryproductrel';
        $field->label = 'Remarks';
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(250)';
        $field->displaytype = 1;
        $field->helpinfo = 'li_lg';
        $field->masseditable = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- lid_remarks in RecommissioningReports --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_ITEM_DETAILS in RecommissioningReports -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('Major_Aggregates_Sl_No', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('chassis_sl_no', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'chassis_sl_no';
        $field->column = 'chassis_sl_no';
        $field->uitype = 2;
        $field->table = 'vtiger_recommissioningreports_other';
        $field->label = 'Chassis Sl.No';
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(250)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- chassis_sl_no RecommissioningReports --- <br>";
    }
} else {
    echo "Block Does not exits -- Major_Aggregates_Sl_No in RecommissioningReports -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('Major_Aggregates_Sl_No', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('chassis_manufacturer', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'chassis_manufacturer';
        $field->column = 'chassis_manufacturer';
        $field->uitype = 2;
        $field->table = 'vtiger_recommissioningreports_other';
        $field->label = 'Chassis Manufacturer';
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(250)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- chassis_manufacturer RecommissioningReports --- <br>";
    }
} else {
    echo "Block Does not exits -- Major_Aggregates_Sl_No in RecommissioningReports -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('Major_Aggregates_Sl_No', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('engine_lh_rh_sl_no', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'engine_lh_rh_sl_no';
        $field->column = 'engine_lh_rh_sl_no';
        $field->uitype = 2;
        $field->table = 'vtiger_recommissioningreports_other';
        $field->label = 'Engine(LH&RH) Sl.No';
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(250)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- engine_lh_rh_sl_no RecommissioningReports --- <br>";
    }
} else {
    echo "Block Does not exits -- Major_Aggregates_Sl_No in RecommissioningReports -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('Major_Aggregates_Sl_No', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('engine_lh_rh_mfd', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'engine_lh_rh_mfd';
        $field->column = 'engine_lh_rh_mfd';
        $field->uitype = 2;
        $field->table = 'vtiger_recommissioningreports_other';
        $field->label = 'Engine(LH&RH) Manufacturer';
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(250)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- engine_lh_rh_mfd RecommissioningReports --- <br>";
    }
} else {
    echo "Block Does not exits -- Major_Aggregates_Sl_No in RecommissioningReports -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('Major_Aggregates_Sl_No', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('transmission_sl_no', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'transmission_sl_no';
        $field->column = 'transmission_sl_no';
        $field->uitype = 2;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Transmission Sl.No';
        $field->summaryfield = 1;
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(250)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $field->defaultvalue = 0;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- transmission_sl_no RecommissioningReports --- <br>";
    }
} else {
    echo "Block Does not exits -- Major_Aggregates_Sl_No in RecommissioningReports -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('Major_Aggregates_Sl_No', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('transmission_manufacturer', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'transmission_manufacturer';
        $field->column = 'transmission_manufacturer';
        $field->uitype = 2;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Transmission Manufacturer';
        $field->summaryfield = 1;
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(250)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $field->defaultvalue = 0;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- transmission_manufacturer RecommissioningReports --- <br>";
    }
} else {
    echo "Block Does not exits -- Major_Aggregates_Sl_No in RecommissioningReports -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('Shortages_And_Damages', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('sad_line_status', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'sad_line_status';
        $fieldInstance->label = 'sad_line_status';
        $fieldInstance->table = 'vtiger_inventoryproductrel_other';
        $fieldInstance->column = 'sad_line_status';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->helpinfo = 'li_lg';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $blockInstance->addField($fieldInstance);
  //    $fieldInstance->setPicklistValues(array('Damage', 'Malfunctioning','Not Working','Shortage'));
    } else {
        echo "field is already Present --- sad_line_status in RecommissioningReports Module --- <br>";
    }
} else {
    echo "block does not exits --- Shortages_And_Damages   -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('Shortages_And_Damages', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('sad_line_event', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'sad_line_event';
        $fieldInstance->label = 'Event';
        $fieldInstance->table = 'vtiger_inventoryproductrel_other';
        $fieldInstance->column = 'sad_line_event';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->helpinfo = 'li_lg';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $blockInstance->addField($fieldInstance);
  //    $fieldInstance->setPicklistValues(array('During Transit','During Installation/Commissioning','Damage on Customer Account','Missing','Short shipped from division','Theft under BEML custody','Theft under Customer custody'));
    } else {
        echo "field is already Present --- sad_line_event in RecommissioningReports Module --- <br>";
    }
} else {
    echo "block does not exits --- Shortages_And_Damages   -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('Shortages_And_Damages', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('sad_line_dnsoc', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'sad_line_dnsoc';
        $field->column = 'sad_line_dnsoc';
        $field->table = 'vtiger_inventoryproductrel_other';
        $field->label = 'Do not Show on Customer Service report';
        $field->uitype = 56;
        $field->columntype = 'INT(1) DEFAULT 0';
        $field->typeofdata = 'I~O';
        $field->displaytype = 2;
        $field->helpinfo = 'li_lg';
        $blockInstance->addField($field);
    } else {
        echo "field is present -- sad_line_dnsoc In RecommissioningReports Module --- <br>";
    }
} else {
    echo "Block Does not exits -- Shortages_And_Damages in RecommissioningReports -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('Major_Aggregates_Sl_No', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('rear_axle_sl_no', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'rear_axle_sl_no';
        $field->column = 'rear_axle_sl_no';
        $field->uitype = 2;
        $field->table = 'vtiger_recommissioningreports_other';
        $field->label = 'Rear Axle Sl.No';
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(250)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- rear_axle_sl_no RecommissioningReports --- <br>";
    }
} else {
    echo "Block Does not exits -- Major_Aggregates_Sl_No in RecommissioningReports -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('Major_Aggregates_Sl_No', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('rear_axle_manufacturer', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'rear_axle_manufacturer';
        $field->column = 'rear_axle_manufacturer';
        $field->uitype = 2;
        $field->table = 'vtiger_recommissioningreports_other';
        $field->label = 'Rear Axle Manufacturer';
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(250)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- rear_axle_manufacturer RecommissioningReports --- <br>";
    }
} else {
    echo "Block Does not exits -- Major_Aggregates_Sl_No in RecommissioningReports -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;


$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('Major_Aggregates_Sl_No', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('tandem_assembly_sl_no', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'tandem_assembly_sl_no';
        $field->column = 'tandem_assembly_sl_no';
        $field->uitype = 2;
        $field->table = 'vtiger_recommissioningreports_other';
        $field->label = 'Final Drive & Tandem Assembly(Motor Grader) Sl.No';
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(250)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- tandem_assembly_sl_no RecommissioningReports --- <br>";
    }
} else {
    echo "Block Does not exits -- Major_Aggregates_Sl_No in RecommissioningReports -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;



$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('Major_Aggregates_Sl_No', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('tandem_assembly_manufacturer', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'tandem_assembly_manufacturer';
        $field->column = 'tandem_assembly_manufacturer';
        $field->uitype = 2;
        $field->table = 'vtiger_recommissioningreports_other';
        $field->label = 'Final Drive & Tandem Assembly(Motor Grader) Manufacturer';
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(250)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- tandem_assembly_manufacturer RecommissioningReports --- <br>";
    }
} else {
    echo "Block Does not exits -- Major_Aggregates_Sl_No in RecommissioningReports -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('Major_Aggregates_Sl_No', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('rh_final_drive_sl_no', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'rh_final_drive_sl_no';
        $field->column = 'rh_final_drive_sl_no';
        $field->uitype = 2;
        $field->table = 'vtiger_recommissioningreports_other';
        $field->label = 'RH Final Drive(Excavator) Sl.No';
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(250)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- rh_final_drive_sl_no RecommissioningReports --- <br>";
    }
} else {
    echo "Block Does not exits -- Major_Aggregates_Sl_No in RecommissioningReports -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('Major_Aggregates_Sl_No', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('rh_final_drive_manu', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'rh_final_drive_manu';
        $field->column = 'rh_final_drive_manu';
        $field->uitype = 2;
        $field->table = 'vtiger_recommissioningreports_other';
        $field->label = 'RH Final Drive(Excavator) Manufacturer';
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(250)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- rh_final_drive_manu RecommissioningReports --- <br>";
    }
} else {
    echo "Block Does not exits -- Major_Aggregates_Sl_No in RecommissioningReports -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('Major_Aggregates_Sl_No', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('lh_final_drive_sl_no', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'lh_final_drive_sl_no';
        $field->column = 'lh_final_drive_sl_no';
        $field->uitype = 2;
        $field->table = 'vtiger_recommissioningreports_other';
        $field->label = 'LH Final Drive(Excavator) Sl.No';
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(250)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- lh_final_drive_sl_no RecommissioningReports --- <br>";
    }
} else {
    echo "Block Does not exits -- Major_Aggregates_Sl_No in RecommissioningReports -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('Major_Aggregates_Sl_No', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('lh_final_drive_manufacturer', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field = new Vtiger_Field();
        $field->name = 'lh_final_drive_manufacturer';
        $field->column = 'lh_final_drive_manufacturer';
        $field->uitype = 2;
        $field->table = 'vtiger_recommissioningreports_other';
        $field->label = 'LH Final Drive(Excavator) Manufacturer';
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(250)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- lh_final_drive_manufacturer RecommissioningReports --- <br>";
    }
} else {
    echo "Block Does not exits -- Major_Aggregates_Sl_No in RecommissioningReports -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('Major_Aggregates_Sl_No', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('induction_motor_sl_no', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'induction_motor_sl_no';
        $field->column = 'induction_motor_sl_no';
        $field->uitype = 2;
        $field->table = 'vtiger_recommissioningreports_other';
        $field->label = 'Induction Motor(LH & RH) Sl.No';
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(250)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- induction_motorsl_sl_no RecommissioningReports --- <br>";
    }
} else {
    echo "Block Does not exits -- Major_Aggregates_Sl_No in RecommissioningReports -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('Major_Aggregates_Sl_No', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('induction_motor_manuf', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'induction_motor_manuf';
        $field->column = 'induction_motor_manuf';
        $field->uitype = 2;
        $field->table = 'vtiger_recommissioningreports_other';
        $field->label = 'Induction Motor(LH & RH) Manufacturer';
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(250)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- induction_motor_manuf RecommissioningReports --- <br>";
    }
} else {
    echo "Block Does not exits -- Major_Aggregates_Sl_No in RecommissioningReports -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('Major_Aggregates_Sl_No', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('track_drive_sl_no', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'track_drive_sl_no';
        $field->column = 'track_drive_sl_no';
        $field->uitype = 2;
        $field->table = 'vtiger_recommissioningreports_other';
        $field->label = 'Track Drive (LH & RH) Sl.No';
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(250)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- track_drive_sl_no RecommissioningReports --- <br>";
    }
} else {
    echo "Block Does not exits -- Major_Aggregates_Sl_No in RecommissioningReports -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('Major_Aggregates_Sl_No', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('track_drive_manuf', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field = new Vtiger_Field();
        $field->name = 'track_drive_manuf';
        $field->column = 'track_drive_manuf';
        $field->uitype = 2;
        $field->table = 'vtiger_recommissioningreports_other';
        $field->label = 'Track Drive (LH & RH) Manufacturer';
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(250)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- track_drive_manuf RecommissioningReports --- <br>";
    }
} else {
    echo "Block Does not exits -- Major_Aggregates_Sl_No in RecommissioningReports -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('Major_Aggregates_Sl_No', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('front_axle_sl_no', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'front_axle_sl_no';
        $field->column = 'front_axle_sl_no';
        $field->uitype = 2;
        $field->table = 'vtiger_recommissioningreports_other';
        $field->label = 'Front Axle(BD30w) Sl.No';
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(250)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- front_axle_sl_no RecommissioningReports --- <br>";
    }
} else {
    echo "Block Does not exits -- Major_Aggregates_Sl_No in RecommissioningReports -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('Equipment_Commissioning_details', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('ecd_can_be_com', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'ecd_can_be_com';
        $fieldInstance->label = 'Whether Equipment can be Commissioned';
        $fieldInstance->table =  'vtiger_recommissioningreports_other';
        $fieldInstance->column = 'ecd_can_be_com';
        $fieldInstance->uitype = '999';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(50)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
  //    $fieldInstance->setPicklistValues(array('Yes', 'No'));
    } else {
        echo "field is already Present --- ecd_can_be_com in RecommissioningReports Module --- <br>";
    }
} else {
    echo " block does not exits --- Equipment_Commissioning_details -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('LBL_ITEM_DETAILS', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('vendor_item', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'vendor_item';
        $fieldInstance->label = 'Vendor Item';
        $fieldInstance->table = 'vtiger_inventoryproductrel';
        $fieldInstance->column = 'vendor_item';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->helpinfo = 'li_lg';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
  //    $fieldInstance->setPicklistValues(array('AFDSS','Auto Lube','Engine','AC'));
    } else {
        echo "field is already Present --- vendor_item in RecommissioningReports Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_ITEM_DETAILS -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('Shortages_And_Damages', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('sad_war_start_con', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'sad_war_start_con';
        $fieldInstance->label = 'Warranty Start Condition';
        $fieldInstance->table = 'vtiger_inventoryproductrel_other';
        $fieldInstance->column = 'sad_war_start_con';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->helpinfo = 'li_lg';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
  //    $fieldInstance->setPicklistValues(array('Date of Receipt at Customer site', 'Date of commissioning/Fitment','Date of Invoice/Billing'));
    } else {
        echo "field is already Present --- sad_war_start_con in RecommissioningReports Module --- <br>";
    }
} else {
    echo " block does not exits --- Shortages_And_Damages -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('Shortages_And_Damages', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('sad_type_of_sub_ass', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'sad_type_of_sub_ass';
        $fieldInstance->label = 'Type of Sub Assy';
        $fieldInstance->table = 'vtiger_inventoryproductrel_other';
        $fieldInstance->column = 'sad_type_of_sub_ass';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->helpinfo = 'li_lg';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
  //    $fieldInstance->setPicklistValues(array('New','Recon','Repair'));
    } else {
        echo "field is already Present --- sad_type_of_sub_ass in RecommissioningReports Module --- <br>";
    }
} else {
    echo " block does not exits --- Shortages_And_Damages -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('Shortages_And_Damages', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('sad_war_term', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'sad_war_term';
        $fieldInstance->label = 'Warranty Terms';
        $fieldInstance->table = 'vtiger_inventoryproductrel_other';
        $fieldInstance->column = 'sad_war_term';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->helpinfo = 'li_lg';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
  //    $fieldInstance->setPicklistValues(array('Month Or HMR/KM', 'Month And HMR/KM','Only Month','OnlyHMR/KM'));
    } else {
        echo "field is already Present --- sad_war_term in RecommissioningReports Module --- <br>";
    }
} else {
    echo " block does not exits --- Shortages_And_Damages -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('Shortages_And_Damages', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('sad_war_term_app', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'sad_war_term_app';
        $fieldInstance->label = 'Warranty Terms';
        $fieldInstance->table = 'vtiger_inventoryproductrel_other';
        $fieldInstance->column = 'sad_war_term_app';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->helpinfo = 'li_lg';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
  //    $fieldInstance->setPicklistValues(array('YES', 'NO'));
    } else {
        echo "field is already Present --- sad_war_term_app in RecommissioningReports Module --- <br>";
    }
} else {
    echo " block does not exits --- Shortages_And_Damages -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('Shortages_And_Damages', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('sad_date_oracs', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'sad_date_oracs';
        $fieldInstance->label = 'Date of Reciept at Customer Site';
        $fieldInstance->table = 'vtiger_inventoryproductrel_other';
        $fieldInstance->column = 'sad_date_oracs';
        $fieldInstance->uitype = 5;
        $fieldInstance->presence = '0';
        $fieldInstance->helpinfo = 'li_lg';
        $fieldInstance->typeofdata = 'D~O';
        $fieldInstance->columntype = 'DATE';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- sad_date_oracs in RecommissioningReports Module --- <br>";
    }
} else {
    echo "block does not exits --- Shortages_And_Damages -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('Shortages_And_Damages', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('sad_podate', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'sad_podate';
        $fieldInstance->label = 'PO Date';
        $fieldInstance->table = 'vtiger_inventoryproductrel_other';
        $fieldInstance->column = 'sad_podate';
        $fieldInstance->uitype = 5;
        $fieldInstance->presence = '0';
        $fieldInstance->helpinfo = 'li_lg';
        $fieldInstance->typeofdata = 'D~O';
        $fieldInstance->columntype = 'DATE';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- sad_podate in RecommissioningReports Module --- <br>";
    }
} else {
    echo "block does not exits --- Shortages_And_Damages -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('Shortages_And_Damages', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('sad_sub_ass_sl', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'sad_sub_ass_sl';
        $field->column = 'sad_sub_ass_sl';
        $field->uitype = 21;
        $field->table = 'vtiger_inventoryproductrel_other';
        $field->label = 'Sl No';
        $field->presence = 2;
        $field->helpinfo = 'li_lg';
        $field->presence = 2; 
        $field->columntype = 'VARCHAR(250)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- sad_sub_ass_sl In RecommissioningReports Module --- <br>";
    }
} else {
    echo "Block Does not exits -- Shortages_And_Damages -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('Shortages_And_Damages', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('sad_sub_ass_po_det', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'sad_sub_ass_po_det';
        $field->column = 'sad_sub_ass_po_det';
        $field->uitype = 21;
        $field->table = 'vtiger_inventoryproductrel_other';
        $field->label = 'PO Details';
        $field->presence = 2;
        $field->helpinfo = 'li_lg';
        $field->presence = 2; 
        $field->columntype = 'VARCHAR(250)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- sad_sub_ass_po_det In RecommissioningReports Module --- <br>";
    }
} else {
    echo "Block Does not exits -- Shortages_And_Damages -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('Shortages_And_Damages', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('sad_su_ass_srp', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'sad_su_ass_srp';
        $fieldInstance->label = 'Sub Assy';
        $fieldInstance->table = 'vtiger_inventoryproductrel_other';
        $fieldInstance->column = 'sad_su_ass_srp';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->helpinfo = 'li_lg';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
  //    $fieldInstance->setPicklistValues(array('Engine', 'Transmission', 'Final Drive', 'Hydraulic Pump', 'Motor'));
    } else {
        echo "field is already Present --- sad_su_ass_srp in RecommissioningReports Module --- <br>";
    }
} else {
    echo " block does not exits --- Shortages_And_Damages -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('Shortages_And_Damages', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('sad_su_ass_mod_srp', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'sad_su_ass_mod_srp';
        $fieldInstance->label = 'Model';
        $fieldInstance->table = 'vtiger_inventoryproductrel_other';
        $fieldInstance->column = 'sad_su_ass_mod_srp';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->helpinfo = 'li_lg';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
  //    $fieldInstance->setPicklistValues(array('BH100'));
    } else {
        echo "field is already Present --- sad_su_ass_mod_srp in RecommissioningReports Module --- <br>";
    }
} else {
    echo " block does not exits --- Shortages_And_Damages -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('Shortages_And_Damages', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('sad_sub_ass_mon', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'sad_sub_ass_mon';
        $fieldInstance->column = 'sad_sub_ass_mon';
        $fieldInstance->uitype = 7;
        $fieldInstance->table = 'vtiger_inventoryproductrel_other';
        $fieldInstance->label = 'Month';
        $fieldInstance->readonly = 1;
        $fieldInstance->presence = 2;
        $fieldInstance->typeofdata = 'I~O';
        $fieldInstance->columntype = 'INT(10)';
        $fieldInstance->quickcreate = 3;
        $fieldInstance->displaytype = 1;
        $fieldInstance->masseditable = 1;
        $fieldInstance->helpinfo = 'li_lg';
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- sad_sub_ass_mon in RecommissioningReports Module --- <br>";
    }
} else {
    echo " block does not exits --- Shortages_And_Damages in RecommissioningReports -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('Shortages_And_Damages', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('sad_sub_ass_hmr', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'sad_sub_ass_hmr';
        $fieldInstance->column = 'sad_sub_ass_hmr';
        $fieldInstance->uitype = 7;
        $fieldInstance->table = 'vtiger_inventoryproductrel_other';
        $fieldInstance->label = 'HMR';
        $fieldInstance->readonly = 1;
        $fieldInstance->presence = 2;
        $fieldInstance->typeofdata = 'I~O';
        $fieldInstance->columntype = 'INT(10)';
        $fieldInstance->quickcreate = 3;
        $fieldInstance->displaytype = 1;
        $fieldInstance->masseditable = 1;
        $fieldInstance->helpinfo = 'li_lg';
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- sad_sub_ass_hmr in RecommissioningReports Module --- <br>";
    }
} else {
    echo " block does not exits --- Shortages_And_Damages in RecommissioningReports -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('Shortages_And_Damages', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('sad_sub_ass_km', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'sad_sub_ass_km';
        $fieldInstance->column = 'sad_sub_ass_km';
        $fieldInstance->uitype = 7;
        $fieldInstance->table = 'vtiger_inventoryproductrel_other';
        $fieldInstance->label = 'KM';
        $fieldInstance->readonly = 1;
        $fieldInstance->presence = 2;
        $fieldInstance->typeofdata = 'I~O';
        $fieldInstance->columntype = 'INT(10)';
        $fieldInstance->quickcreate = 3;
        $fieldInstance->displaytype = 1;
        $fieldInstance->masseditable = 1;
        $fieldInstance->helpinfo = 'li_lg';
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- sad_sub_ass_km in RecommissioningReports Module --- <br>";
    }
} else {
    echo " block does not exits --- Shortages_And_Damages in RecommissioningReports -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('ACTION_TAKEN', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('at_sais', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'at_sais';
        $fieldInstance->label = 'Sub Assembly Installation Status';
        $fieldInstance->table =  'vtiger_recommissioningreports_other';
        $fieldInstance->column = 'at_sais';
        $fieldInstance->uitype = '999';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(50)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
  //    $fieldInstance->setPicklistValues(array('Completed', 'Not Completed'));
    } else {
        echo "field is already Present --- at_sais in RecommissioningReports Module --- <br>";
    }
} else {
    echo " block does not exits --- ACTION_TAKEN -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('ACTION_TAKEN', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('at_on_account_of', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'at_on_account_of';
        $fieldInstance->label = 'On Account of';
        $fieldInstance->table = 'vtiger_recommissioningreports_other';
        $fieldInstance->column = 'at_on_account_of';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
  //    $fieldInstance->setPicklistValues(array('BEML', 'CUSTOMER'));
    } else {
        echo "field is already Present --- at_on_account_of in RecommissioningReports Module --- <br>";
    }
} else {
    echo "Block does not exits --- ACTION_TAKEN -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('StockTransferOrders');
$blockInstance = Vtiger_Block::getInstance('LBL_ITEM_DETAILS', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('lid_store_locations', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'lid_store_locations';
        $fieldInstance->label = 'Stor. Location';
        $fieldInstance->table = 'vtiger_inventoryproductrel';
        $fieldInstance->column = 'lid_store_locations';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $fieldInstance->helpinfo = 'li_lg';
        $blockInstance->addField($fieldInstance);
  //    $fieldInstance->setPicklistValues(array('To be replaced'));
    } else {
        echo "field is present -- lid_store_locations In StockTransferOrders Module --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_ITEM_DETAILS in StockTransferOrders -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('StockTransferOrders');
$blockInstance = Vtiger_Block::getInstance('LBL_ITEM_DETAILS', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('lid_sto_del_date', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'lid_sto_del_date';
        $fieldInstance->label = 'Delivery date';
        $fieldInstance->table = 'vtiger_inventoryproductrel';
        $fieldInstance->column = 'lid_sto_del_date';
        $fieldInstance->uitype = 5;
        $fieldInstance->presence = '0';
        $fieldInstance->helpinfo = 'li_lg';
        $fieldInstance->typeofdata = 'D~O';
        $fieldInstance->columntype = 'DATE';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- lid_sto_del_date in StockTransferOrders Module --- <br>";
    }
} else {
    echo "block does not exits --- LBL_ITEM_DETAILS -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('Vendors');
$blockInstance = Vtiger_Block::getInstance('LBL_CUSTOM_INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('external_app_num', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'external_app_num';
        $field->column = 'external_app_num';
        $field->uitype = 2;
        $field->table = $invoiceModule->basetable;
        $field->label = 'SAP Reference Number';
        $field->summaryfield = 1;
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(250)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- external_app_num in Vendors --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_CUSTOM_INFORMATION in Vendors -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('HelpDesk');
$blockInstance = Vtiger_Block::getInstance('LBL_CUSTOM_INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('system_pros_mod', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'system_pros_mod';
        $field->column = 'system_pros_mod';
        $field->uitype = 21;
        $field->table = 'vtiger_ticketcf';
        $field->label = 'SYSTEM (PROPOSED MODIFICATION)';
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(500)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- system_pros_mod HelpDesk --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_CUSTOM_INFORMATION in HelpDesk -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('ACTION_TAKEN', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('at_dm_status', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'at_dm_status';
        $fieldInstance->label = 'Design Modification Status';
        $fieldInstance->table =  'vtiger_recommissioningreports_other';
        $fieldInstance->column = 'at_dm_status';
        $fieldInstance->uitype = '999';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(50)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
  //    $fieldInstance->setPicklistValues(array('Yes', 'No'));
    } else {
        echo "field is already Present --- at_dm_status in RecommissioningReports Module --- <br>";
    }
} else {
    echo " block does not exits --- ACTION_TAKEN -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('ACTION_TAKEN', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('reason_for_not_completion', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'reason_for_not_completion';
        $field->column = 'reason_for_not_completion';
        $field->uitype = 21;
        $field->table = 'vtiger_recommissioningreports_other';
        $field->label = 'Reason For Not Completion';
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(250)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- reason_for_not_completion RecommissioningReports --- <br>";
    }
} else {
    echo "Block Does not exits -- ACTION_TAKEN in RecommissioningReports -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('Design_Modification_Details', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('reason_for_modification', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'reason_for_modification';
        $field->column = 'reason_for_modification';
        $field->uitype = 21;
        $field->table = 'vtiger_recommissioningreports_other';
        $field->label = 'Reason For Modification';
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(250)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- reason_for_modification RecommissioningReports --- <br>";
    }
} else {
    echo "Block Does not exits -- Design_Modification_Details in RecommissioningReports -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('Design_Modification_Details', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('refer_for_modif', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'refer_for_modif';
        $field->column = 'refer_for_modif';
        $field->uitype = 21;
        $field->table = 'vtiger_recommissioningreports_other';
        $field->label = 'Reference for Modification';
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(250)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- refer_for_modif RecommissioningReports --- <br>";
    }
} else {
    echo "Block Does not exits -- Design_Modification_Details in RecommissioningReports -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('Design_Modification_Details', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('dmd_system', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'dmd_system';
        $fieldInstance->label = 'System';
        $fieldInstance->table = 'vtiger_recommissioningreports_other';
        $fieldInstance->column = 'dmd_system';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
  //    $fieldInstance->setPicklistValues(array('a', 'b'));
    } else {
        echo "field is already Present --- dmd_system in RecommissioningReports Module --- <br>";
    }
} else {
    echo "Block does not exits --- Design_Modification_Details -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

// $invoiceModule = null;
// $blockInstance = null;
// $fieldInstance = null;
// $invoiceModule = Vtiger_Module::getInstance('RecommissioningReports');
// $blockInstance = Vtiger_Block::getInstance('LBL_ITEM_DETAILS', $invoiceModule);
// if ($blockInstance) {
//     $fieldInstance = Vtiger_Field::getInstance('add_for_cre_so', $invoiceModule);
//     if (!$fieldInstance) {
//         $field = new Vtiger_Field();
//         $field->name = 'add_for_cre_so';
//         $field->column = 'add_for_cre_so';
//         $field->table = 'vtiger_inventoryproductrel';
//         $field->label = 'Add for Creation of Service Order';
//         $field->uitype = 56;
//         $field->columntype = 'INT(1) DEFAULT 0';
//         $field->typeofdata = 'I~O';
//         $field->helpinfo = 'li_lg';
//         $field->displaytype = 2;
//         $blockInstance->addField($field);
//     } else {
//         echo "field is present -- add_for_cre_so In RecommissioningReports Module --- <br>";
//     }
// } else {
//     echo "Block Does not exits -- LBL_ITEM_DETAILS in RecommissioningReports -- <br>";
// }
// $invoiceModule = null;
// $blockInstance = null;
// $fieldInstance = null;

// $invoiceModule = null;
// $blockInstance = null;
// $fieldInstance = null;
// $invoiceModule = Vtiger_Module::getInstance('ServiceOrders');
// $blockInstance = Vtiger_Block::getInstance('LBL_ITEM_DETAILS', $invoiceModule);
// if ($blockInstance) {
//     $fieldInstance = Vtiger_Field::getInstance('add_for_cre_sto', $invoiceModule);
//     if (!$fieldInstance) {
//         $field = new Vtiger_Field();
//         $field->name = 'add_for_cre_sto';
//         $field->column = 'add_for_cre_sto';
//         $field->table = 'vtiger_inventoryproductrel';
//         $field->label = 'Add for Creation of STO';
//         $field->uitype = 56;
//         $field->columntype = 'INT(1) DEFAULT 0';
//         $field->typeofdata = 'I~O';
//         $field->helpinfo = 'li_lg';
//         $field->displaytype = 2;
//         $blockInstance->addField($field);
//     } else {
//         echo "field is present -- add_for_cre_sto In ServiceOrders Module --- <br>";
//     }
// } else {
//     echo "Block Does not exits -- LBL_ITEM_DETAILS in ServiceOrders -- <br>";
// }
// $invoiceModule = null;
// $blockInstance = null;
// $fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('Warrrantable', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('war_warable', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'war_warable';
        $fieldInstance->label = 'Warrrantable';
        $fieldInstance->table =  'vtiger_recommissioningreports_other';
        $fieldInstance->column = 'war_warable';
        $fieldInstance->uitype = '999';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(50)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
  //    $fieldInstance->setPicklistValues(array('Yes', 'No'));
    } else {
        echo "field is already Present --- war_warable in RecommissioningReports Module --- <br>";
    }
} else {
    echo " block does not exits --- Warrrantable -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('Warrrantable', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('eq_last_hmr', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'eq_last_hmr';
        $fieldInstance->column = 'eq_last_hmr';
        $fieldInstance->uitype = 7;
        $fieldInstance->table =  'vtiger_recommissioningreports_other';
        $fieldInstance->label = 'Present HMR';
        $fieldInstance->readonly = 1;
        $fieldInstance->presence = 2;
        $fieldInstance->typeofdata = 'I~O';
        $fieldInstance->columntype = 'INT(15)';
        $fieldInstance->quickcreate = 3;
        $fieldInstance->displaytype = 1;
        $fieldInstance->masseditable = 1;
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- eq_last_hmr in RecommissioningReports Module --- <br>";
    }
} else {
    echo " block does not exits --- Warrrantable in RecommissioningReports -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('ACTION_TAKEN', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('eq_sta_aft_act_t_sub', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'eq_sta_aft_act_t_sub';
        $fieldInstance->label = 'eq_sta_aft_act_t_sub';
        $fieldInstance->table = 'vtiger_recommissioningreports_other';
        $fieldInstance->column = 'eq_sta_aft_act_t_sub';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
  //    $fieldInstance->setPicklistValues(array('Working','Not Working', 'Working with Problem'));
    } else {
        echo "field is already Present --- eq_sta_aft_act_t_sub in RecommissioningReports Module --- <br>";
    }
} else {
    echo "Block does not exits --- ACTION_TAKEN -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('Products');
$blockInstance = Vtiger_Block::getInstance('LBL_PRODUCT_INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('maintain_plant', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'maintain_plant';
        $field->column = 'maintain_plant';
        $field->uitype = 2;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Plant Code';
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(100)';
        $field->displaytype = 1;
        $field->masseditable = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- maintain_plant Products --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_PRODUCT_INFORMATION in Products -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('FailedParts');
$blockInstance = Vtiger_Block::getInstance('LBL_ITEM_DETAILS', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('fail_pa_sb_qty', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'fail_pa_sb_qty';
        $fieldInstance->column = 'fail_pa_sb_qty';
        $fieldInstance->uitype = 7;
        $fieldInstance->table = 'vtiger_inventoryproductrel';
        $fieldInstance->label = 'Submitted Qty.';
        $fieldInstance->readonly = 1;
        $fieldInstance->presence = 2;
        $fieldInstance->typeofdata = 'I~O';
        $fieldInstance->columntype = 'INT(15)';
        $fieldInstance->quickcreate = 3;
        $fieldInstance->displaytype = 1;
        $fieldInstance->masseditable = 1;
        $fieldInstance->helpinfo = 'li_lg';
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- fail_pa_sb_qty in FailedParts Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_ITEM_DETAILS in FailedParts -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('FailedParts');
$blockInstance = Vtiger_Block::getInstance('LBL_ITEM_DETAILS', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('fail_pa_pa_status', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'fail_pa_pa_status';
        $fieldInstance->label = ' Status of Part No.';
        $fieldInstance->table = 'vtiger_inventoryproductrel';
        $fieldInstance->column = 'fail_pa_pa_status';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = 'Open';
        $fieldInstance->helpinfo = 'li_lg';
        $blockInstance->addField($fieldInstance);
  //    $fieldInstance->setPicklistValues(array('Open', 'Closed'));
    } else {
        echo "field is present -- fail_pa_pa_status In FailedParts Module --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_ITEM_DETAILS in FailedParts -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('ACTION_TAKEN', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('at_brkdn_sr_req', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'at_brkdn_sr_req';
        $fieldInstance->label = 'Breakdown?';
        $fieldInstance->table =  'vtiger_recommissioningreports_other';
        $fieldInstance->column = 'at_brkdn_sr_req';
        $fieldInstance->uitype = '999';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(50)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
  //    $fieldInstance->setPicklistValues(array('Yes', 'No'));
    } else {
        echo "field is already Present --- at_brkdn_sr_req in RecommissioningReports Module --- <br>";
    }
} else {
    echo " block does not exits --- ACTION_TAKEN -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('ACTION_TAKEN', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('breack_ticket_id', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'breack_ticket_id';
        $field->column = 'breack_ticket_id';
        $field->uitype = 10;
        $field->table = 'vtiger_recommissioningreports_other';
        $field->label = 'Breakdown Service Request ';
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'I~O';
        $field->columntype = 'INT(10)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $id = $blockInstance->addFieldIgnite($field);
        echo "igggggggggggggggggggg mission created field --- $id ";
        // ------------------ invoga
    } else {
        echo "field is present -- breack_ticket_id  in RecommissioningReports--- <br>";
    }
} else {
    echo "Block Does not exits -- ACTION_TAKEN in RecommissioningReports -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('Warranty / Contract Details', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('sr_final_drive_wt', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'sr_final_drive_wt';
        $field->column = 'sr_final_drive_wt';
        $field->uitype = 2;
        $field->table = 'vtiger_recommissioningreports_other';
        $field->label = 'Final Drive Warranty Terms';
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(400)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- sr_final_drive_wt RecommissioningReports --- <br>";
    }
} else {
    echo "Block Does not exits -- Warranty / Contract Details in RecommissioningReports -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('Warranty / Contract Details', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('sr_engine_wt', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'sr_engine_wt';
        $field->column = 'sr_engine_wt';
        $field->uitype = 2;
        $field->table = 'vtiger_recommissioningreports_other';
        $field->label = 'Engine Warranty Terms';
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(400)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- sr_engine_wt RecommissioningReports --- <br>";
    }
} else {
    echo "Block Does not exits -- Warranty / Contract Details in RecommissioningReports -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('Warranty / Contract Details', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('sr_transmission_wt', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'sr_transmission_wt';
        $field->column = 'sr_transmission_wt';
        $field->uitype = 2;
        $field->table = 'vtiger_recommissioningreports_other';
        $field->label = 'Transmission Warranty Terms';
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(400)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- sr_transmission_wt RecommissioningReports --- <br>";
    }
} else {
    echo "Block Does not exits -- Warranty / Contract Details in RecommissioningReports -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('Warranty / Contract Details', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('sr_rear_axle_wt', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'sr_rear_axle_wt';
        $field->column = 'sr_rear_axle_wt';
        $field->uitype = 2;
        $field->table = 'vtiger_recommissioningreports_other';
        $field->label = 'Rear Axle Warranty Terms';
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(400)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- sr_rear_axle_wt RecommissioningReports --- <br>";
    }
} else {
    echo "Block Does not exits -- Warranty / Contract Details in RecommissioningReports -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('Warranty / Contract Details', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('sr_chassis_wt', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'sr_chassis_wt';
        $field->column = 'sr_chassis_wt';
        $field->uitype = 2;
        $field->table = 'vtiger_recommissioningreports_other';
        $field->label = 'Chassis Warranty Terms';
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(400)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- sr_chassis_wt  RecommissioningReports --- <br>";
    }
} else {
    echo "Block Does not exits -- Warranty / Contract Details in RecommissioningReports -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('LBL_ITEM_DETAILS', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('line_vendor_id', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'line_vendor_id';
        $field->column = 'line_vendor_id';
        $field->uitype = 10;
        $field->table = 'vtiger_inventoryproductrel';
        $field->label = 'Vendor Name';
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'I~O';
        $field->columntype = 'INT(30)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $field->helpinfo = 'li_lg';
        $id = $blockInstance->addFieldIgnite($field);
        // ------------------ invoga
    } else {
        echo "field is present -- line_vendor_id  in RecommissioningReports--- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_ITEM_DETAILS in RecommissioningReports -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('Major_Aggregates_Sl_No', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('front_axle_manufact', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'front_axle_manufact';
        $field->column = 'front_axle_manufact';
        $field->uitype = 2;
        $field->table = 'vtiger_recommissioningreports_other';
        $field->label = 'Front Axle(BD30w) Manufacturer';
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(250)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- front_axle_manufact RecommissioningReports --- <br>";
    }
} else {
    echo "Block Does not exits -- Major_Aggregates_Sl_No in RecommissioningReports -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('GENERAL_CHECKS', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('genchk_oil_pre_tr', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'genchk_oil_pre_tr';
        $fieldInstance->label = 'Oil Pressure';
        $fieldInstance->table = 'vtiger_recommissioningreports_other';
        $fieldInstance->column = 'genchk_oil_pre_tr';
        $fieldInstance->uitype = '999';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
  //    $fieldInstance->setPicklistValues(array('OK', 'NOT OK'));
    } else {
        echo "field is already Present --- genchk_oil_pre_tr in RecommissioningReports Module --- <br>";
    }
} else {
    echo " block does not exits --- GENERAL_CHECKS -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('GENERAL_CHECKS', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('genchk_oil_pre_tr', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'genchk_oil_pre_tr';
        $fieldInstance->label = 'Oil Pressure';
        $fieldInstance->table = 'vtiger_recommissioningreports_other';
        $fieldInstance->column = 'genchk_oil_pre_tr';
        $fieldInstance->uitype = '999';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
  //    $fieldInstance->setPicklistValues(array('OK', 'NOT OK'));
    } else {
        echo "field is already Present --- genchk_oil_pre_tr in RecommissioningReports Module --- <br>";
    }
} else {
    echo " block does not exits --- GENERAL_CHECKS -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('GENERAL_CHECKS', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('genchk_oil_tr_tem', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'genchk_oil_tr_tem';
        $fieldInstance->label = 'Oil Temperature';
        $fieldInstance->table =  'vtiger_recommissioningreports_other';
        $fieldInstance->column = 'genchk_oil_tr_tem';
        $fieldInstance->uitype = '999';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
  //    $fieldInstance->setPicklistValues(array('OK', 'NOT OK'));
    } else {
        echo "field is already Present --- genchk_oil_tr_tem in RecommissioningReports Module --- <br>";
    }
} else {
    echo " block does not exits --- GENERAL_CHECKS -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('GENERAL_CHECKS', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('genchk_brk_oil_tem', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'genchk_brk_oil_tem';
        $fieldInstance->label = 'Oil Temperature';
        $fieldInstance->table =  'vtiger_recommissioningreports_other';
        $fieldInstance->column = 'genchk_brk_oil_tem';
        $fieldInstance->uitype = '999';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
  //    $fieldInstance->setPicklistValues(array('OK', 'NOT OK','NA'));
    } else {
        echo "field is already Present --- genchk_brk_oil_tem in RecommissioningReports Module --- <br>";
    }
} else {
    echo " block does not exits --- GENERAL_CHECKS -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$emm = null;
$emm = new VTEntityMethodManager($adb);
$result = $adb->pquery("SELECT function_name FROM com_vtiger_workflowtasks_entitymethod WHERE module_name=? AND method_name=?", array('HelpDesk', 'SyncToExternalOnStatusChange'));
if ($adb->num_rows($result) == 0) {
    $emm->addEntityMethod("HelpDesk", "SyncToExternalOnStatusChange", "modules/HelpDesk/SyncToExternalOnStatusChange.php", "SyncToExternalOnStatusChange");
} else {
    print_r("already exits --- workflow function -- SyncToExternalOnStatusChange in HelpDesk Module <br> ");
}
$emm = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('ACTION_TAKEN', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('at_copm', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'at_copm';
        $fieldInstance->label = 'Confirmation of Periodical Mantenance';
        $fieldInstance->table = 'vtiger_recommissioningreports_other';
        $fieldInstance->column = 'at_copm';
        $fieldInstance->uitype = '999';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
  //    $fieldInstance->setPicklistValues(array('Completed','Not Completed'));
    } else {
        echo "field is already Present --- at_copm in RecommissioningReports Module --- <br>";
    }
} else {
    echo " block does not exits --- ACTION_TAKEN -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('LBL_ITEM_DETAILS', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('lid_msr', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'lid_msr';
        $fieldInstance->label = 'Maintenance Spares Responsibility';
        $fieldInstance->table = 'vtiger_inventoryproductrel';
        $fieldInstance->column = 'lid_msr';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->helpinfo = 'li_lg';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
  //    $fieldInstance->setPicklistValues(array('Customer', 'BEML'));
    } else {
        echo "field is present -- lid_msr In RecommissioningReports Module --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_ITEM_DETAILS in RecommissioningReports -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('Equipment_Commissioning_details', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('saspd_doc', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'saspd_doc';
        $fieldInstance->label = 'Date of Commissioning';
        $fieldInstance->table = 'vtiger_recommissioningreports_other';
        $fieldInstance->column = 'saspd_doc';
        $fieldInstance->uitype = 5;
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'D~O';
        $fieldInstance->columntype = 'DATE';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- saspd_doc in RecommissioningReports Module --- <br>";
    }
} else {
    echo " block does not exits --- Equipment_Commissioning_details -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('ServiceOrders');
$blockInstance = Vtiger_Block::getInstance('PARTS_FROM_SR', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('add_for_cre_so', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'add_for_cre_so';
        $field->column = 'add_for_cre_so';
        $field->table = 'vtiger_inventoryproductrel_other';
        $field->label = 'Add for Creation of Service Order';
        $field->uitype = 56;
        $field->columntype = 'INT(1) DEFAULT 0';
        $field->typeofdata = 'I~O';
        $field->helpinfo = 'li_lg';
        $field->displaytype = 2;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- add_for_cre_so In ServiceOrders Module --- <br>";
    }
} else {
    echo "Block Does not exits -- PARTS_FROM_SR in ServiceOrders -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('ServiceOrders');
$blockInstance = Vtiger_Block::getInstance('LBL_ITEM_DETAILS', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('lid_remarks', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'lid_remarks';
        $field->column = 'lid_remarks';
        $field->uitype = 2;
        $field->table = 'vtiger_inventoryproductrel';
        $field->label = 'Remarks';
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(250)';
        $field->displaytype = 1;
        $field->helpinfo = 'li_lg';
        $field->masseditable = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- lid_remarks in RecommissioningReports --- <br>";
    }
} else {
    echo "Block Does not exits -- ServiceOrders in RecommissioningReports -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('ServiceOrders');
$blockInstance = Vtiger_Block::getInstance('PARTS_FROM_SR', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('sr_action_two', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'sr_action_two';
        $fieldInstance->label = 'Demand';
        $fieldInstance->table = 'vtiger_inventoryproductrel_other';
        $fieldInstance->column = 'sr_action_two';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->helpinfo = 'li_lg';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
  //    $fieldInstance->setPicklistValues(array('Required', 'Not Required'));
    } else {
        echo "field is present -- sr_action_two In ServiceOrders Module --- <br>";
    }
} else {
    echo "Block Does not exits -- PARTS_FROM_SR in ServiceOrders -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('LBL_ITEM_DETAILS', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('lid_line_event', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'lid_line_event';
        $fieldInstance->label = 'Event';
        $fieldInstance->table = 'vtiger_inventoryproductrel';
        $fieldInstance->column = 'lid_line_event';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->helpinfo = 'li_lg';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $blockInstance->addField($fieldInstance);
  //    $fieldInstance->setPicklistValues(array('Damage in Transit','Damage during Installation/Commissioning','Damage from Customer side','Shortage in Consignment'));
    } else {
        echo "field is already Present --- lid_line_event in RecommissioningReports Module --- <br>";
    }
} else {
    echo "block does not exits --- LBL_ITEM_DETAILS   -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('Sub_Assembly_Commissioning_Fitment_details', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('sacfd_dofcf', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'sacfd_dofcf';
        $fieldInstance->label = 'Date of Commissioning/Fitment';
        $fieldInstance->table = 'vtiger_recommissioningreports_other';
        $fieldInstance->column = 'sacfd_dofcf';
        $fieldInstance->uitype = 5;
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'D~O';
        $fieldInstance->columntype = 'DATE';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- sacfd_dofcf in RecommissioningReports Module --- <br>";
    }
} else {
    echo " block does not exits --- Sub_Assembly_Commissioning_Fitment_details -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('Sub_Assembly_Commissioning_Fitment_details', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('sacfd_eq_sl_no', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'sacfd_eq_sl_no';
        $field->column = 'sacfd_eq_sl_no';
        $field->uitype = 2;
        $field->table = 'vtiger_recommissioningreports_other';
        $field->label = 'Equipment details where Sub Assembly fitted';
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(250)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- sacfd_eq_sl_no in RecommissioningReports --- <br>";
    }
} else {
    echo "Block Does not exits -- Sub_Assembly_Commissioning_Fitment_details in RecommissioningReports -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('Sub_Assembly_Commissioning_Fitment_details', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('sacfd_km_run', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'sacfd_km_run';
        $fieldInstance->column = 'sacfd_km_run';
        $fieldInstance->uitype = 7;
        $fieldInstance->table = 'vtiger_recommissioningreports_other';
        $fieldInstance->label = 'sacfd_km_run';
        $fieldInstance->readonly = 1;
        $fieldInstance->presence = 2;
        $fieldInstance->typeofdata = 'I~O';
        $fieldInstance->columntype = 'INT(15)';
        $fieldInstance->quickcreate = 3;
        $fieldInstance->displaytype = 1;
        $fieldInstance->masseditable = 1;
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- sacfd_km_run in RecommissioningReports Module --- <br>";
    }
} else {
    echo " block does not exits --- Sub_Assembly_Commissioning_Fitment_details in RecommissioningReports -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('Shortages_And_Damages', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('sad_manu_name', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'sad_manu_name';
        $field->column = 'sad_manu_name';
        $field->uitype = 2;
        $field->table = 'vtiger_inventoryproductrel_other';
        $field->label = 'Manufacturer name';
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->helpinfo = 'li_lg';
        $field->columntype = 'VARCHAR(250)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- sad_manu_name RecommissioningReports --- <br>";
    }
} else {
    echo "Block Does not exits -- Shortages_And_Damages in RecommissioningReports -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('Shortages_And_Damages', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('sad_whoa', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'sad_whoa';
        $fieldInstance->column = 'sad_whoa';
        $fieldInstance->uitype = 7;
        $fieldInstance->table = 'vtiger_inventoryproductrel_other';
        $fieldInstance->label = 'Working Hour of Aggregates';
        $fieldInstance->readonly = 1;
        $fieldInstance->presence = 2;
        $fieldInstance->typeofdata = 'I~O';
        $fieldInstance->columntype = 'INT(15)';
        $fieldInstance->quickcreate = 3;
        $fieldInstance->displaytype = 1;
        $fieldInstance->masseditable = 1;
        $fieldInstance->helpinfo = 'li_lg';
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- sad_whoa in RecommissioningReports Module --- <br>";
    }
} else {
    echo " block does not exits --- Shortages_And_Damages in RecommissioningReports -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('Shortages_And_Damages', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('sad_dof', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'sad_dof';
        $fieldInstance->label = 'Date of Fitment';
        $fieldInstance->table = 'vtiger_inventoryproductrel_other';
        $fieldInstance->column = 'sad_dof';
        $fieldInstance->uitype = 5;
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'D~O';
        $fieldInstance->helpinfo = 'li_lg';
        $fieldInstance->columntype = 'DATE';
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- sad_dof in RecommissioningReports Module --- <br>";
    }
} else {
    echo " block does not exits --- Shortages_And_Damages -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('Shortages_And_Damages', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('sad_valid_sl_no', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'sad_valid_sl_no';
        $fieldInstance->label = 'Validation of Sl.No.';
        $fieldInstance->table =  'vtiger_inventoryproductrel_other';
        $fieldInstance->column = 'sad_valid_sl_no';
        $fieldInstance->uitype = '999';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(50)';
        $fieldInstance->helpinfo = 'li_lg';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
   //   $fieldInstance->setPicklistValues(array('Yes', 'No'));
    } else {
        echo "field is already Present --- sad_valid_sl_no in RecommissioningReports Module --- <br>";
    }
} else {
    echo " block does not exits --- Shortages_And_Damages -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('Shortages_And_Damages', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('sad_ag_sl_no', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'sad_ag_sl_no';
        $field->column = 'sad_ag_sl_no';
        $field->uitype = 2;
        $field->table = 'vtiger_inventoryproductrel_other';
        $field->label = 'Sl.No.';
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(250)';
        $field->quickcreate = 3;
        $field->helpinfo = 'li_lg';
        $field->displaytype = 1;
        $field->masseditable = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- sad_ag_sl_no RecommissioningReports --- <br>";
    }
} else {
    echo "Block Does not exits -- Shortages_And_Damages in RecommissioningReports -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('Shortages_And_Damages', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('sad_sel_ag_name', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'sad_sel_ag_name';
        $fieldInstance->label = 'Selected Aggregates-Name';
        $fieldInstance->table =  'vtiger_inventoryproductrel_other';
        $fieldInstance->column = 'sad_sel_ag_name';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(50)';
        $fieldInstance->helpinfo = 'li_lg';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
  //    $fieldInstance->setPicklistValues(array('Engine', 'Transmission', 'Final Drive', 'Differential', 'Motor','Others'));
    } else {
        echo "field is already Present --- sad_sel_ag_name in RecommissioningReports Module --- <br>";
    }
} else {
    echo " block does not exits --- Shortages_And_Damages -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('DeliveryNotes');
$blockInstance = Vtiger_Block::getInstance('LBL_BLOCK_GENERAL_INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('equipment_id', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'equipment_id';
        $field->column = 'equipment_id';
        $field->uitype = 10;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Equipment Number';
        $field->summaryfield = 1;
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'I~O';
        $field->columntype = 'INT(30)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $id = $blockInstance->addFieldIgnite($field);
        echo "igggggggggggggggggggg mission created field --- $id ";
       
        $invogamoduleInstance = Vtiger_Module::getInstance('Equipment');
        $relationLabel  = 'DeliveryNotes';
        $invogamoduleInstance->setRelatedList(
              $invoiceModule, $relationLabel, Array('ADD'), 'get_dependents_list' //you can do select also Array('ADD','SELECT')
        );
        $tom = "INSERT INTO `vtiger_fieldmodulerel` (`fieldid`, `module`, `relmodule`, `status`, `sequence`) VALUES ('$id', 'DeliveryNotes', 'Equipment', NULL, NULL)";
        $adb->pquery($tom);
    } else {
        echo "field is present -- equipment_id  in DeliveryNotes--- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_BLOCK_GENERAL_INFORMATION in DeliveryNotes -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;


$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('DeliveryNotes');
$blockInstance = Vtiger_Block::getInstance('LBL_BLOCK_GENERAL_INFORMATION', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('delivery_date', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'delivery_date';
        $fieldInstance->label = 'Delivery Date';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'delivery_date';
        $fieldInstance->uitype = 5;
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'D~O';
        $fieldInstance->columntype = 'DATE';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- delivery_date in DeliveryNotes Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_BLOCK_GENERAL_INFORMATION -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('DeliveryNotes');
$blockInstance = Vtiger_Block::getInstance('LBL_BLOCK_GENERAL_INFORMATION', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('rec_created_dt', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'rec_created_dt';
        $fieldInstance->label = 'Date On Which Record Was Created';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'rec_created_dt';
        $fieldInstance->uitype = 5;
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'D~O';
        $fieldInstance->columntype = 'DATE';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- rec_created_dt in DeliveryNotes Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_BLOCK_GENERAL_INFORMATION -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('DeliveryNotes');
$blockInstance = Vtiger_Block::getInstance('LBL_BLOCK_GENERAL_INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('account_id', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'account_id';
        $field->column = 'account_id';
        $field->uitype = 10;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Ship-to party';
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'I~O';
        $field->columntype = 'INT(30)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $id = $blockInstance->addFieldIgnite($field);
        echo "igggggggggggggggggggg mission created field --- $id ";
        // ------------------ invoga
       
        $invogamoduleInstance = Vtiger_Module::getInstance('Accounts');
        $relationLabel  = 'DeliveryNotes';
        $invogamoduleInstance->setRelatedList(
              $invoiceModule, $relationLabel, Array('ADD'), 'get_dependents_list' //you can do select also Array('ADD','SELECT')
        );
        // ------------------------invoga
        $tom = "INSERT INTO `vtiger_fieldmodulerel` (`fieldid`, `module`, `relmodule`, `status`, `sequence`) VALUES ('$id', 'DeliveryNotes', 'Accounts', NULL, NULL)";
        $adb->pquery($tom);
       
    } else {
        echo "field is present -- account_id  in DeliveryNotes--- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_BLOCK_GENERAL_INFORMATION in DeliveryNotes -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('DeliveryNotes');
$blockInstance = Vtiger_Block::getInstance('LBL_BLOCK_GENERAL_INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('recieving_plant', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'recieving_plant';
        $field->column = 'recieving_plant';
        $field->uitype = 10;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Reciving Plant';
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'I~O';
        $field->columntype = 'INT(30)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $id = $blockInstance->addFieldIgnite($field);
        echo "igggggggggggggggggggg mission created field --- $id ";
        $invogamoduleInstance = Vtiger_Module::getInstance('MaintenancePlant');
        $relationLabel  = 'DeliveryNotes';
        $invogamoduleInstance->setRelatedList(
              $invoiceModule, $relationLabel, Array('ADD'), 'get_dependents_list' //you can do select also Array('ADD','SELECT')
        );
        $tom = "INSERT INTO `vtiger_fieldmodulerel` (`fieldid`, `module`, `relmodule`, `status`, `sequence`) VALUES ('$id', 'DeliveryNotes', 'MaintenancePlant', NULL, NULL)";
        $adb->pquery($tom);
    } else {
        echo "field is present -- recieving_plant  in DeliveryNotes--- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_BLOCK_GENERAL_INFORMATION in DeliveryNotes -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('DeliveryNotes');
$blockInstance = Vtiger_Block::getInstance('LBL_BLOCK_GENERAL_INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('manual_equ_ser', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'manual_equ_ser';
        $field->column = 'manual_equ_ser';
        $field->uitype = 2;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Manual Equipment Sl.No.';
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(250)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- manual_equ_ser in DeliveryNotes --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_BLOCK_GENERAL_INFORMATION in DeliveryNotes -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('HelpDesk');
$blockInstance = Vtiger_Block::getInstance('LBL_CUSTOM_INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('equip_id_da', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'equip_id_da';
        $field->column = 'equip_id_da';
        $field->uitype = 10;
        $field->table = $invoiceModule->basetable;
        $field->label = 'EQUIPMENT SL NO';
        $field->summaryfield = 1;
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'I~O';
        $field->columntype = 'INT(20)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $field->defaultvalue = 0;
        $id = $blockInstance->addFieldIgnite($field);
       
        $invogamoduleInstance = Vtiger_Module::getInstance('DeliveryNotes');
        $relationLabel  = 'HelpDesk';
        $invogamoduleInstance->setRelatedList(
              $invoiceModule, $relationLabel, Array('ADD'), 'get_dependents_list' //you can do select also Array('ADD','SELECT')
        );
        $tom = "INSERT INTO `vtiger_fieldmodulerel` (`fieldid`, `module`, `relmodule`, `status`, `sequence`) VALUES ('$id', 'HelpDesk', 'DeliveryNotes', NULL, NULL)";
        $adb->pquery($tom);
    } else {
        echo "field is present -- equip_id_da  in HelpDesk--- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_CUSTOM_INFORMATION in HelpDesk -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('Warrrantable', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('eq_present_km', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'eq_present_km';
        $fieldInstance->column = 'eq_present_km';
        $fieldInstance->uitype = 7;
        $fieldInstance->table =  'vtiger_recommissioningreports_other';
        $fieldInstance->label = 'Present HMR';
        $fieldInstance->readonly = 1;
        $fieldInstance->presence = 2;
        $fieldInstance->typeofdata = 'I~O';
        $fieldInstance->columntype = 'INT(15)';
        $fieldInstance->quickcreate = 3;
        $fieldInstance->displaytype = 1;
        $fieldInstance->masseditable = 1;
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- eq_present_km in RecommissioningReports Module --- <br>";
    }
} else {
    echo " block does not exits --- Warrrantable in RecommissioningReports -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('Sub_Assembly_Details', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('sad_dofcf', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'sad_dofcf';
        $fieldInstance->label = 'Date of Commissioning/Fitment';
        $fieldInstance->table = 'vtiger_recommissioningreports_other';
        $fieldInstance->column = 'sad_dofcf';
        $fieldInstance->uitype = 5;
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'D~O';
        $fieldInstance->columntype = 'DATE';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- sad_dofcf in RecommissioningReports Module --- <br>";
    }
} else {
    echo " block does not exits --- Sub_Assembly_Details -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('Sub_Assembly_Details', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('sad_km_run', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'sad_km_run';
        $fieldInstance->column = 'sad_km_run';
        $fieldInstance->uitype = 7;
        $fieldInstance->table = 'vtiger_recommissioningreports_other';
        $fieldInstance->label = 'sad_km_run';
        $fieldInstance->readonly = 1;
        $fieldInstance->presence = 2;
        $fieldInstance->typeofdata = 'I~O';
        $fieldInstance->columntype = 'INT(15)';
        $fieldInstance->quickcreate = 3;
        $fieldInstance->displaytype = 1;
        $fieldInstance->masseditable = 1;
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- sad_km_run in RecommissioningReports Module --- <br>";
    }
} else {
    echo " block does not exits --- Sub_Assembly_Details in RecommissioningReports -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('Equipment Details', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('equip_id_da_sr', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'equip_id_da_sr';
        $field->column = 'equip_id_da_sr';
        $field->uitype = 10;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Equipment Serial No.';
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'I~O';
        $field->columntype = 'INT(20)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $id = $blockInstance->addFieldIgnite($field);
        echo "created field --- $id ";
        $invogamoduleInstance = Vtiger_Module::getInstance('DeliveryNotes');
        $relationLabel  = 'RecommissioningReports';
        $invogamoduleInstance->setRelatedList(
              $invoiceModule, $relationLabel, Array('ADD'), 'get_dependents_list'
        );
        $tom = "INSERT INTO `vtiger_fieldmodulerel` (`fieldid`, `module`, `relmodule`, `status`, `sequence`) VALUES ('$id', 'RecommissioningReports', 'DeliveryNotes', NULL, NULL)";
        $adb->pquery($tom);
    } else {
        echo "field is present -- equip_id_da_sr  in RecommissioningReports--- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_CUSTOM_INFORMATION in RecommissioningReports -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('Equipment');
$blockInstance = Vtiger_Block::getInstance('LBL_BLOCK_SYSTEM_INFORMATION', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('eq_last_km_run', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'eq_last_km_run';
        $fieldInstance->column = 'eq_last_km_run';
        $fieldInstance->uitype = 7;
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->label = 'Kilo Meter Reading';
        $fieldInstance->readonly = 1;
        $fieldInstance->presence = 2;
        $fieldInstance->typeofdata = 'I~O';
        $fieldInstance->columntype = 'INT(15)';
        $fieldInstance->quickcreate = 3;
        $fieldInstance->displaytype = 1;
        $fieldInstance->masseditable = 1;
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- eq_last_km_run in Equipment Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_BLOCK_SYSTEM_INFORMATION in Equipment -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('GENERAL_CHECKS', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('genchk_oil_level_swc', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'genchk_oil_level_swc';
        $fieldInstance->label = 'Oil Level';
        $fieldInstance->table = 'vtiger_recommissioningreports_other';
        $fieldInstance->column = 'genchk_oil_level_swc';
        $fieldInstance->uitype = '999';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
        // $fieldInstance->setPicklistValues(array('OK', 'NOT OK',"NA"));
    } else {
        echo "field is already Present --- genchk_oil_level_swc in RecommissioningReports Module --- <br>";
    }
} else {
    echo " block does not exits --- GENERAL_CHECKS -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('GENERAL_CHECKS', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('genchk_lub_swc', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'genchk_lub_swc';
        $fieldInstance->label = 'Lubrication';
        $fieldInstance->table = 'vtiger_recommissioningreports_other';
        $fieldInstance->column = 'genchk_lub_swc';
        $fieldInstance->uitype = '999';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
        // $fieldInstance->setPicklistValues(array('OK', 'NOT OK',"NA"));
    } else {
        echo "field is already Present --- genchk_lub_swc in RecommissioningReports Module --- <br>";
    }
} else {
    echo " block does not exits --- GENERAL_CHECKS -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('GENERAL_CHECKS', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('genchk_coolant_lvl_swc', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'genchk_coolant_lvl_swc';
        $fieldInstance->label = 'Coolant Level';
        $fieldInstance->table = 'vtiger_recommissioningreports_other';
        $fieldInstance->column = 'genchk_coolant_lvl_swc';
        $fieldInstance->uitype = '999';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
        // $fieldInstance->setPicklistValues(array('OK', 'NOT OK',"NA"));
    } else {
        echo "field is already Present --- genchk_coolant_lvl_swc in RecommissioningReports Module --- <br>";
    }
} else {
    echo " block does not exits --- GENERAL_CHECKS -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('Sub_Assembly_Commissioning_Fitment_details', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('sacfd_wasawbfise', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'sacfd_wasawbfise';
        $fieldInstance->label = 'sacfd_wasawbfise';
        $fieldInstance->table =  'vtiger_recommissioningreports_other';
        $fieldInstance->column = 'sacfd_wasawbfise';
        $fieldInstance->uitype = '999';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(50)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
        // $fieldInstance->setPicklistValues(array('Yes', 'No'));
    } else {
        echo "field is already Present --- sacfd_wasawbfise in RecommissioningReports Module --- <br>";
    }
} else {
    echo " block does not exits --- Equipment_Commissioning_details -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('Major_Aggregates_Sl_No', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('masn_aggrregate', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'masn_aggrregate';
        $fieldInstance->label = 'masn_aggrregate';
        $fieldInstance->table = 'vtiger_inventoryproductrel_other_masn';
        $fieldInstance->column = 'masn_aggrregate';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->helpinfo = 'li_lg';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $blockInstance->addField($fieldInstance);
        // $fieldInstance->setPicklistValues(array('Engine', 'Transmission','Toqrue Converter','Chassis','R.H.S. Track Frame','L.H.S. Track Frame','Auto Lube System','Auto Fire System','Air Conditoner'));
    } else {
        echo "field is already Present --- masn_aggrregate in RecommissioningReports Module --- <br>";
    }
} else {
    echo "block does not exits --- Major_Aggregates_Sl_No   -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('Major_Aggregates_Sl_No', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('masn_aggre_sl', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'masn_aggre_sl';
        $field->column = 'masn_aggre_sl';
        $field->uitype = 2;
        $field->table = 'vtiger_inventoryproductrel_other_masn';
        $field->label = 'Sl.No.';
        $field->readonly = 1;
        $field->presence = 2;
        $field->helpinfo = 'li_lg';
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(250)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- masn_aggre_sl RecommissioningReports --- <br>";
    }
} else {
    echo "Block Does not exits -- Major_Aggregates_Sl_No in RecommissioningReports -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('Major_Aggregates_Sl_No', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('masn_manu', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'masn_manu';
        $field->column = 'masn_manu';
        $field->uitype = '16';
        $field->table = 'vtiger_inventoryproductrel_other_masn';
        $field->label = 'Manufacturer';
        $field->helpinfo = 'li_lg';
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(150)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $blockInstance->addField($field);
        // $field->setPicklistValues(array('BEML', 'BEML H&P', 'BEML MYS','OTHERS'));
    } else {
        // $fieldInstance->setPicklistValues(array("BEML EM","INTELLCAD","SKF","SOUTHERN ELECTRONICS","REDDOT","BEML EM","BEML H&P","GE","MEDITRON","BEML EM","BEML EM","BEML H&P","ASHOK LEYLAND","BEML EM","OTHERS","BEML MYS","OTHERS","GRACO","ANSUL","ARIES","OTHERS","OTHERS","ABB","ELECTROTEKNICA","OTHERS","OTHERS","BEML MYS","CUMMINS","AVTEC","ZF FRIEDRICHSHAFEN","KIRLOSKAR","ZF FRIEDRICHSHAFEN","KIRLOSKAR","ALLISON","OTHERS","Mahindra World City","ZF","MTU","OTHERS","DEUTZ","Grantwood"));
        echo "field is present -- masn_manu RecommissioningReports --- <br>";
    }
} else {
    echo "Block Does not exits -- Major_Aggregates_Sl_No in RecommissioningReports -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('ModelAggregateConfig');
$blockInstance = Vtiger_Block::getInstance('LBL_BLOCK_GENERAL_INFORMATION', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('eq_sr_equip_model', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'eq_sr_equip_model';
        $fieldInstance->label = 'Equipment Model';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'eq_sr_equip_model';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $blockInstance->addField($fieldInstance);
        // $fieldInstance->setPicklistValues(array('BH100', 'BWS70', 'BG825'));
    } else {
        echo "field is already Present --- eq_sr_equip_model in ModelAggregateConfig Module --- <br>";
    }
} else {
    echo " block does not exits LBL_BLOCK_GENERAL_INFORMATION --- ModelAggregateConfig Details -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('ModelAggregateConfig');
$blockInstance = Vtiger_Block::getInstance('LBL_BLOCK_GENERAL_INFORMATION', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('masn_aggrregate', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'masn_aggrregate';
        $fieldInstance->label = 'masn_aggrregate';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'masn_aggrregate';
        $fieldInstance->uitype = '33';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'TEXT';
        $blockInstance->addField($fieldInstance);
        // $fieldInstance->setPicklistValues(array('Engine', 'Transmission','Toqrue Converter','Chassis','R.H.S. Track Frame','L.H.S. Track Frame','Auto Lube System','Auto Fire System','Air Conditoner'));
    } else {
        echo "field is already Present --- masn_aggrregate in ModelAggregateConfig Module --- <br>";
    }
} else {
    echo "block does not exits --- LBL_BLOCK_GENERAL_INFORMATION   -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('HelpDesk');
$blockInstance = Vtiger_Block::getInstance('DETAILS OF EQUIPMENT LOCATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('equip_location', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'equip_location';
        $field->column = 'equip_location';
        $field->uitype = 2;
        $field->table = $invoiceModule->basetable;
        $field->label = 'LOCATION OF EQUIPMENT';
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(300)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- equip_location HelpDesk --- <br>";
    }
} else {
    echo "Block Does not exits -- DETAILS OF EQUIPMENT LOCATION in HelpDesk -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('VISUAL_CHECKS', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('vis_chk_painting', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'vis_chk_painting';
        $field->column = 'vis_chk_painting';
        $field->table = "vtiger_recommissioningreports_other";
        $field->label = 'Painting';
        $field->uitype = '999';
        $field->columntype = 'VARCHAR(100)';
        $field->typeofdata = 'V~O';
        $field->displaytype = 1;
        $blockInstance->addField($field);
        // $field->setPicklistValues(array('Ok', 'Not Ok'));
    } else {
        echo "field is present -- vis_chk_painting In RecommissioningReports Module --- <br>";
    }
} else {
    echo "Block Does not exits -- VISUAL_CHECKS in RecommissioningReports -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('VISUAL_CHECKS', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('vis_chk_painting_rem', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'vis_chk_painting_rem';
        $field->column = 'vis_chk_painting_rem';
        $field->uitype = 21;
        $field->table =  "vtiger_recommissioningreports_other";
        $field->label = 'Remarks';
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(500)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- vis_chk_painting_rem In RecommissioningReports Module --- <br>";
    }
} else {
    echo "Block Does not exits -- VISUAL_CHECKS -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('VISUAL_CHECKS', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('vis_chk_painting_doc', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'vis_chk_painting_doc';
        $field->column = 'vis_chk_painting_doc';
        $field->uitype = 69;
        $field->table = "vtiger_recommissioningreports_other";
        $field->label = 'Upload Image';
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(150)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- vis_chk_painting_doc in RecommissioningReports --- <br>";
    }
} else {
    echo "Block Does not exits -- VISUAL_CHECKS in RecommissioningReports -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('Sub_Assembly_Details', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('sad_ser_no', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'sad_ser_no';
        $field->column = 'sad_ser_no';
        $field->uitype = 2;
        $field->table = "vtiger_recommissioningreports_other";
        $field->label = 'Serial No.';
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(200)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- sad_ser_no in RecommissioningReports --- <br>";
    }
} else {
    echo "Block Does not exits -- Sub_Assembly_Details in RecommissioningReports -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('Sub_Assembly_Details', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('sad_nl_war_term_app', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'sad_nl_war_term_app';
        $fieldInstance->label = 'Warranty Applicable';
        $fieldInstance->table = "vtiger_recommissioningreports_other";
        $fieldInstance->column = 'sad_nl_war_term_app';
        $fieldInstance->uitype = '999';
        $fieldInstance->presence = '0';
        $fieldInstance->helpinfo = 'li_lg';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
        // $fieldInstance->setPicklistValues(array('Applicable', 'Not Applicable'));
    } else {
        echo "field is already Present --- sad_nl_war_term_app in RecommissioningReports Module --- <br>";
    }
} else {
    echo " block does not exits --- Sub_Assembly_Details -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('Sub_Assembly_Details', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('sad_po_detail', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'sad_po_detail';
        $field->column = 'sad_po_detail';
        $field->uitype = 2;
        $field->table = "vtiger_recommissioningreports_other";
        $field->label = 'PO details';
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(250)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- sad_po_detail in RecommissioningReports --- <br>";
    }
} else {
    echo "Block Does not exits -- Sub_Assembly_Details in RecommissioningReports -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('Sub_Assembly_Details', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('sad_po_date', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'sad_po_date';
        $fieldInstance->label = 'PO date';
        $fieldInstance->table = "vtiger_recommissioningreports_other";
        $fieldInstance->column = 'sad_po_date';
        $fieldInstance->uitype = 5;
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'D~O';
        $fieldInstance->columntype = 'DATE';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- sad_po_date in RecommissioningReports Module --- <br>";
    }
} else {
    echo " block does not exits --- Sub_Assembly_Details -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('Major_Aggregates_Sl_No', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('masn_other_manu', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'masn_other_manu';
        $field->column = 'masn_other_manu';
        $field->uitype = '21';
        $field->table = 'vtiger_inventoryproductrel_other_masn';
        $field->label = 'Other Manufacturer Name';
        $field->helpinfo = 'li_lg';
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(200)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- masn_other_manu RecommissioningReports --- <br>";
    }
} else {
    echo "Block Does not exits -- Major_Aggregates_Sl_No in RecommissioningReports -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('FailedParts');
$blockInstance = Vtiger_Block::getInstance('LBL_ITEM_DETAILS', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('excluded_qty', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'excluded_qty';
        $fieldInstance->column = 'excluded_qty';
        $fieldInstance->uitype = 7;
        $fieldInstance->table = 'vtiger_inventoryproductrel';
        $fieldInstance->label = 'Excluded Qty.';
        $fieldInstance->readonly = 1;
        $fieldInstance->presence = 2;
        $fieldInstance->typeofdata = 'I~O';
        $fieldInstance->columntype = 'INT(15)';
        $fieldInstance->quickcreate = 3;
        $fieldInstance->displaytype = 1;
        $fieldInstance->masseditable = 1;
        $fieldInstance->helpinfo = 'li_lg';
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- excluded_qty in FailedParts Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_ITEM_DETAILS in FailedParts -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('FailedParts');
$blockInstance = Vtiger_Block::getInstance('LBL_ITEM_DETAILS', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('excluded_qty_rem', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'excluded_qty_rem';
        $field->column = 'excluded_qty_rem';
        $field->uitype = 21;
        $field->table = 'vtiger_inventoryproductrel';
        $field->label = 'Excluded Qty- Remarks';
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'TEXT';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $field->helpinfo = 'li_lg';
        $blockInstance->addField($field);
    } else {
        echo "field is present -- excluded_qty_rem In FailedParts Module --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_ITEM_DETAILS -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('FailedParts');
$blockInstance = Vtiger_Block::getInstance('LBL_ITEM_DETAILS', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('pending_qty_to_sub', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'pending_qty_to_sub';
        $fieldInstance->column = 'pending_qty_to_sub';
        $fieldInstance->uitype = 7;
        $fieldInstance->table = 'vtiger_inventoryproductrel';
        $fieldInstance->label = 'Pending Qty to be Submitted';
        $fieldInstance->readonly = 1;
        $fieldInstance->presence = 2;
        $fieldInstance->typeofdata = 'I~O';
        $fieldInstance->columntype = 'INT(15)';
        $fieldInstance->quickcreate = 3;
        $fieldInstance->displaytype = 1;
        $fieldInstance->masseditable = 1;
        $fieldInstance->helpinfo = 'li_lg';
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- pending_qty_to_sub in FailedParts Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_ITEM_DETAILS in FailedParts -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('FailedParts');
$blockInstance = Vtiger_Block::getInstance('LBL_ITEM_DETAILS', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('rcvd_qty_tr_validate', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'rcvd_qty_tr_validate';
        $fieldInstance->column = 'rcvd_qty_tr_validate';
        $fieldInstance->uitype = 7;
        $fieldInstance->table = 'vtiger_inventoryproductrel';
        $fieldInstance->label = 'Received Qty';
        $fieldInstance->readonly = 1;
        $fieldInstance->presence = 2;
        $fieldInstance->typeofdata = 'I~O';
        $fieldInstance->columntype = 'INT(15)';
        $fieldInstance->quickcreate = 3;
        $fieldInstance->displaytype = 1;
        $fieldInstance->masseditable = 1;
        $fieldInstance->helpinfo = 'li_lg';
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- rcvd_qty_tr_validate in FailedParts Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_ITEM_DETAILS in FailedParts -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('FailedParts');
$blockInstance = Vtiger_Block::getInstance('LBL_ITEM_DETAILS', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('rcvd_qty_validated', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'rcvd_qty_validated';
        $fieldInstance->column = 'rcvd_qty_validated';
        $fieldInstance->uitype = 7;
        $fieldInstance->table = 'vtiger_inventoryproductrel';
        $fieldInstance->label = 'Validated Recqeived Qty';
        $fieldInstance->readonly = 1;
        $fieldInstance->presence = 2;
        $fieldInstance->typeofdata = 'I~O';
        $fieldInstance->columntype = 'INT(15)';
        $fieldInstance->quickcreate = 3;
        $fieldInstance->displaytype = 1;
        $fieldInstance->masseditable = 1;
        $fieldInstance->helpinfo = 'li_lg';
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- rcvd_qty_validated in FailedParts Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_ITEM_DETAILS in FailedParts -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('Shortages_And_Damages', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('apmd_peridic_maint_type', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'apmd_peridic_maint_type';
        $fieldInstance->label = 'Periodical Maintenance Type';
        $fieldInstance->table =  'vtiger_inventoryproductrel_other';
        $fieldInstance->column = 'apmd_peridic_maint_type';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(50)';
        $fieldInstance->helpinfo = 'li_lg';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
        $fieldInstance->setPicklistValues(array('Every 250 hrs', 'Every 500 Hrs', 'Every 750 Hrs', 'Every 1000 Hrs', 'Every 1250 Hrs','Every 1500 Hrs','Every 2000 Hrs','Every 1000 KM'));
    } else {
        echo "field is already Present --- apmd_peridic_maint_type in RecommissioningReports Module --- <br>";
    }
} else {
    echo " block does not exits --- Shortages_And_Damages -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('SalesOrder');
$blockInstance = Vtiger_Block::getInstance('LBL_SO_INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('ship_to_party', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'ship_to_party';
        $field->column = 'ship_to_party';
        $field->uitype = 10;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Ship to Party';
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'I~O';
        $field->columntype = 'INT(30)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $id = $blockInstance->addFieldIgnite($field);
        echo "igggggggggggggggggggg mission created field --- $id ";
        $invogamoduleInstance = Vtiger_Module::getInstance('Accounts');
        $relationLabel  = 'SaleOrders';
        $invogamoduleInstance->setRelatedList(
              $invoiceModule, $relationLabel, Array('ADD'), 'get_dependents_list' //you can do select also Array('ADD','SELECT')
        );
        $tom = "INSERT INTO `vtiger_fieldmodulerel` (`fieldid`, `module`, `relmodule`, `status`, `sequence`) VALUES ('$id', 'SalesOrder', 'Accounts', NULL, NULL)";
        $adb->pquery($tom);
       
    } else {
        echo "field is present -- ship_to_party  in SalesOrder--- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_SO_INFORMATION in SalesOrder -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('SalesOrder');
$blockInstance = Vtiger_Block::getInstance('LBL_SO_INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('sold_to_party', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'sold_to_party';
        $field->column = 'sold_to_party';
        $field->uitype = 10;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Sold to Party';
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'I~O';
        $field->columntype = 'INT(30)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $id = $blockInstance->addFieldIgnite($field);
        echo "igggggggggggggggggggg mission created field --- $id ";
        $invogamoduleInstance = Vtiger_Module::getInstance('Accounts');
        $relationLabel  = 'SaleOrders';
        $invogamoduleInstance->setRelatedList(
              $invoiceModule, $relationLabel, Array('ADD'), 'get_dependents_list' //you can do select also Array('ADD','SELECT')
        );
        $tom = "INSERT INTO `vtiger_fieldmodulerel` (`fieldid`, `module`, `relmodule`, `status`, `sequence`) VALUES ('$id', 'SalesOrder', 'Accounts', NULL, NULL)";
        $adb->pquery($tom);
       
    } else {
        echo "field is present -- sold_to_party  in SalesOrder--- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_SO_INFORMATION in SalesOrder -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('SalesOrder');
$blockInstance = Vtiger_Block::getInstance('LBL_SO_INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('po_no', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'po_no';
        $field->column = 'po_no';
        $field->uitype = 2;
        $field->table =  $invoiceModule->basetable;
        $field->label = 'PO No.';
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(150)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- po_no in SalesOrder --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_SO_INFORMATION in SalesOrder -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('SalesOrder');
$blockInstance = Vtiger_Block::getInstance('LBL_SO_INFORMATION', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('po_date', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'po_date';
        $fieldInstance->label = 'PO date';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'po_date';
        $fieldInstance->uitype = 5;
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'D~O';
        $fieldInstance->columntype = 'DATE';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- po_date in SalesOrder Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_SO_INFORMATION -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('SalesOrder');
$blockInstance = Vtiger_Block::getInstance('LBL_SO_INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('order_for_reason', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'order_for_reason';
        $field->column = 'order_for_reason';
        $field->uitype = 21;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Order For Reason';
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'TEXT';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- order_for_reason In SalesOrder Module --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_SO_INFORMATION -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('SalesOrder');
$blockInstance = Vtiger_Block::getInstance('LBL_SO_INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('plant_name', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'plant_name';
        $field->column = 'plant_name';
        $field->uitype = 10;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Plant';
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'I~O';
        $field->columntype = 'INT(30)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $id = $blockInstance->addFieldIgnite($field);
        echo "igggggggggggggggggggg mission created field --- $id ";
        $invogamoduleInstance = Vtiger_Module::getInstance('MaintenancePlant');
        $relationLabel  = 'SalesOrders';
        $invogamoduleInstance->setRelatedList(
              $invoiceModule, $relationLabel, Array('ADD'), 'get_dependents_list' //you can do select also Array('ADD','SELECT')
        );
        $tom = "INSERT INTO `vtiger_fieldmodulerel` (`fieldid`, `module`, `relmodule`, `status`, `sequence`) VALUES ('$id', 'SalesOrder', 'MaintenancePlant', NULL, NULL)";
        $adb->pquery($tom);
    } else {
        echo "field is present -- plant_name  in SalesOrder--- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_SO_INFORMATION in Equipment -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

// $moduleInstance = null;
// $blockInstance = null;
// $fieldInstance = null;
// $moduleInstance = Vtiger_Module::getInstance('SalesOrder');
// $blockInstance = Vtiger_Block::getInstance('LBL_ITEM_DETAILS', $moduleInstance);
// if ($blockInstance) {
//     $fieldInstance = Vtiger_Field::getInstance('type_of_parts', $moduleInstance);
//     if (!$fieldInstance) {
//         $fieldInstance = new Vtiger_Field();
//         $fieldInstance->name = 'type_of_parts';
//         $fieldInstance->label = 'Type of Parts';
//         $fieldInstance->table = 'vtiger_inventoryproductrel';
//         $fieldInstance->column = 'type_of_parts';
//         $fieldInstance->uitype = '16';
//         $fieldInstance->presence = '0';
//         $fieldInstance->typeofdata = 'V~O';
//         $fieldInstance->columntype = 'VARCHAR(100)';
//         $fieldInstance->defaultvalue = 'Open';
//         $fieldInstance->helpinfo = 'li_lg';
//         $blockInstance->addField($fieldInstance);
//         $fieldInstance->setPicklistValues(array('FRR', 'FRN'));
//     } else {
//         echo "field is present -- type_of_parts In SalesOrder Module --- <br>";
//     }
// } else {
//     echo "Block Does not exits -- LBL_ITEM_DETAILS in SalesOrder -- <br>";
// }
// $invoiceModule = null;
// $blockInstance = null;
// $fieldInstance = null;

// $moduleInstance = null;
// $blockInstance = null;
// $fieldInstance = null;
// $moduleInstance = Vtiger_Module::getInstance('SalesOrder');
// $blockInstance = Vtiger_Block::getInstance('LBL_ITEM_DETAILS', $moduleInstance);
// if ($blockInstance) {
//     $fieldInstance = Vtiger_Field::getInstance('final_qty', $moduleInstance);
//     if (!$fieldInstance) {
//         $fieldInstance = new Vtiger_Field();
//         $fieldInstance->name = 'final_qty';
//         $fieldInstance->column = 'final_qty';
//         $fieldInstance->uitype = 7;
//         $fieldInstance->table = 'vtiger_inventoryproductrel';
//         $fieldInstance->label = 'Final Qty';
//         $fieldInstance->readonly = 1;
//         $fieldInstance->presence = 2;
//         $fieldInstance->typeofdata = 'I~O';
//         $fieldInstance->columntype = 'INT(15)';
//         $fieldInstance->quickcreate = 3;
//         $fieldInstance->displaytype = 1;
//         $fieldInstance->masseditable = 1;
//         $fieldInstance->helpinfo = 'li_lg';
//         $blockInstance->addField($fieldInstance);
//     } else {
//         echo "field is already Present --- final_qty in SalesOrder Module --- <br>";
//     }
// } else {
//     echo " block does not exits --- LBL_ITEM_DETAILS in SalesOrder -- <br>";
// }
// $moduleInstance = null;
// $blockInstance = null;
// $fieldInstance = null;

// $moduleInstance = null;
// $blockInstance = null;
// $fieldInstance = null;
// $moduleInstance = Vtiger_Module::getInstance('SalesOrder');
// $blockInstance = Vtiger_Block::getInstance('LBL_ITEM_DETAILS', $moduleInstance);
// if ($blockInstance) {
//     $fieldInstance = Vtiger_Field::getInstance('final_amount', $moduleInstance);
//     if (!$fieldInstance) {
//         $fieldInstance = new Vtiger_Field();
//         $fieldInstance->name = 'final_amount';
//         $fieldInstance->column = 'final_amount';
//         $fieldInstance->uitype = 7;
//         $fieldInstance->table = 'vtiger_inventoryproductrel';
//         $fieldInstance->label = 'Amount';
//         $fieldInstance->readonly = 1;
//         $fieldInstance->presence = 2;
//         $fieldInstance->typeofdata = 'I~O';
//         $fieldInstance->columntype = 'decimal(25,8)';
//         $fieldInstance->quickcreate = 3;
//         $fieldInstance->displaytype = 1;
//         $fieldInstance->masseditable = 1;
//         $fieldInstance->helpinfo = 'li_lg';
//         $blockInstance->addField($fieldInstance);
//     } else {
//         echo "field is already Present --- final_amount in SalesOrder Module --- <br>";
//     }
// } else {
//     echo " block does not exits --- LBL_ITEM_DETAILS in SalesOrder -- <br>";
// }
// $moduleInstance = null;
// $blockInstance = null;
// $fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('SalesOrder');
$blockInstance = Vtiger_Block::getInstance('LBL_ITEM_DETAILS', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('validated_part_no', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'validated_part_no';
        $fieldInstance->label = 'Validated Part No.';
        $fieldInstance->table = 'vtiger_inventoryproductrel';
        $fieldInstance->column = 'validated_part_no';
        $fieldInstance->uitype = '21';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(200)';
        $fieldInstance->defaultvalue = 'Open';
        $fieldInstance->helpinfo = 'li_lg';
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is present -- validated_part_no In SalesOrder Module --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_ITEM_DETAILS in SalesOrder -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('SalesOrder');
$blockInstance = Vtiger_Block::getInstance('LBL_ITEM_DETAILS', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('des_from_sr_eng', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'des_from_sr_eng';
        $field->column = 'des_from_sr_eng';
        $field->uitype = 21;
        $field->table = 'vtiger_inventoryproductrel';
        $field->label = 'Description From Service Enginner';
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'TEXT';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $field->helpinfo = 'li_lg';
        $blockInstance->addField($field);
    } else {
        echo "field is present -- des_from_sr_eng In SalesOrder Module --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_ITEM_DETAILS -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('ServiceEngineer');
$blockInstance = Vtiger_Block::getInstance('LBL_USERLOGIN_ROLE', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('eq_sr_equip_model', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'eq_sr_equip_model';
        $fieldInstance->label = 'Experience in Equipment Model';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'eq_sr_equip_model';
        $fieldInstance->uitype = '33';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'TEXT';
        $blockInstance->addField($fieldInstance);
        // $fieldInstance->setPicklistValues(array());
    } else {
        echo "field is already Present --- eq_sr_equip_model in ServiceEngineer Module --- <br>";
    }
} else {
    echo " block does not exits LBL_USERLOGIN_ROLE --- ServiceEngineer Details -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('ServiceEngineer');
$blockInstance = Vtiger_Block::getInstance('LBL_USERLOGIN_ROLE', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('masn_aggrregate', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'masn_aggrregate';
        $fieldInstance->label = 'Experience in Aggregates';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'masn_aggrregate';
        $fieldInstance->uitype = '33';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'TEXT';
        $blockInstance->addField($fieldInstance);
        // $fieldInstance->setPicklistValues(array());
    } else {
        echo "field is already Present --- masn_aggrregate in ServiceEngineer Module --- <br>";
    }
} else {
    echo "block does not exits --- LBL_USERLOGIN_ROLE   -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('Equipment');
$blockInstance = Vtiger_Block::getInstance('LBL_BLOCK_GENERAL_INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('equip_category', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'equip_category';
        $field->column = 'equip_category';
        $field->table = $invoiceModule->basetable;
        $field->label = 'Category';
        $field->uitype = 16;
        $field->columntype = 'VARCHAR(10)';
        $field->typeofdata = 'V~O';
        $field->displaytype = 1;
        $blockInstance->addField($field);
        // $field->setPicklistValues(array('B', 'S'));
    } else {
        echo "field is present -- equip_category In Equipment Module --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_BLOCK_GENERAL_INFORMATION in Sales Order -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

//add frn qty and amount in salesorder lineitem purvesh

// $moduleInstance = null;
// $blockInstance = null;
// $fieldInstance = null;
// $moduleInstance = Vtiger_Module::getInstance('SalesOrder');
// $blockInstance = Vtiger_Block::getInstance('LBL_ITEM_DETAILS', $moduleInstance);
// if ($blockInstance) {
//     $fieldInstance = Vtiger_Field::getInstance('frn_qty', $moduleInstance);
//     if (!$fieldInstance) {
//         $fieldInstance = new Vtiger_Field();
//         $fieldInstance->name = 'frn_qty';
//         $fieldInstance->column = 'frn_qty';
//         $fieldInstance->uitype = 7;
//         $fieldInstance->table = 'vtiger_inventoryproductrel';
//         $fieldInstance->label = 'FRN Qty';
//         $fieldInstance->readonly = 1;
//         $fieldInstance->presence = 2;
//         $fieldInstance->typeofdata = 'I~O';
//         $fieldInstance->columntype = 'INT(15)';
//         $fieldInstance->quickcreate = 3;
//         $fieldInstance->displaytype = 1;
//         $fieldInstance->masseditable = 1;
//         $fieldInstance->helpinfo = 'li_lg';
//         $blockInstance->addField($fieldInstance);
//     } else {
//         echo "field is already Present --- final_qty in SalesOrder Module --- <br>";
//     }
// } else {
//     echo " block does not exits --- LBL_ITEM_DETAILS in SalesOrder -- <br>";
// }
// $moduleInstance = null;
// $blockInstance = null;
// $fieldInstance = null;

// $moduleInstance = Vtiger_Module::getInstance('SalesOrder');
// $blockInstance = Vtiger_Block::getInstance('LBL_ITEM_DETAILS', $moduleInstance);
// if ($blockInstance) {
//     $fieldInstance = Vtiger_Field::getInstance('frn_amount', $moduleInstance);
//     if (!$fieldInstance) {
//         $fieldInstance = new Vtiger_Field();
//         $fieldInstance->name = 'frn_amount';
//         $fieldInstance->column = 'frn_amount';
//         $fieldInstance->uitype = 7;
//         $fieldInstance->table = 'vtiger_inventoryproductrel';
//         $fieldInstance->label = 'FRN Amount';
//         $fieldInstance->readonly = 1;
//         $fieldInstance->presence = 2;
//         $fieldInstance->typeofdata = 'I~O';
//         $fieldInstance->columntype = 'decimal(25,8)';
//         $fieldInstance->quickcreate = 3;
//         $fieldInstance->displaytype = 1;
//         $fieldInstance->masseditable = 1;
//         $fieldInstance->helpinfo = 'li_lg';
//         $blockInstance->addField($fieldInstance);
//     } else {
//         echo "field is already Present --- final_amount in SalesOrder Module --- <br>";
//     }
// } else {
//     echo " block does not exits --- LBL_ITEM_DETAILS in SalesOrder -- <br>";
// }

// $moduleInstance = null;
// $blockInstance = null;
// $fieldInstance = null;
// $moduleInstance = Vtiger_Module::getInstance('SalesOrder');
// $blockInstance = Vtiger_Block::getInstance('LBL_ITEM_DETAILS', $moduleInstance);
// if ($blockInstance) {
//     $fieldInstance = Vtiger_Field::getInstance('frr_qty', $moduleInstance);
//     if (!$fieldInstance) {
//         $fieldInstance = new Vtiger_Field();
//         $fieldInstance->name = 'frr_qty';
//         $fieldInstance->column = 'frr_qty';
//         $fieldInstance->uitype = 7;
//         $fieldInstance->table = 'vtiger_inventoryproductrel';
//         $fieldInstance->label = 'FRR Qty';
//         $fieldInstance->readonly = 1;
//         $fieldInstance->presence = 2;
//         $fieldInstance->typeofdata = 'I~O';
//         $fieldInstance->columntype = 'INT(15)';
//         $fieldInstance->quickcreate = 3;
//         $fieldInstance->displaytype = 1;
//         $fieldInstance->masseditable = 1;
//         $fieldInstance->helpinfo = 'li_lg';
//         $blockInstance->addField($fieldInstance);
//     } else {
//         echo "field is already Present --- frr_qty in SalesOrder Module --- <br>";
//     }
// } else {
//     echo " block does not exits --- LBL_ITEM_DETAILS in SalesOrder -- <br>";
// }
// $moduleInstance = null;
// $blockInstance = null;
// $fieldInstance = null;

// $moduleInstance = Vtiger_Module::getInstance('SalesOrder');
// $blockInstance = Vtiger_Block::getInstance('LBL_ITEM_DETAILS', $moduleInstance);
// if ($blockInstance) {
//     $fieldInstance = Vtiger_Field::getInstance('frr_amount', $moduleInstance);
//     if (!$fieldInstance) {
//         $fieldInstance = new Vtiger_Field();
//         $fieldInstance->name = 'frr_amount';
//         $fieldInstance->column = 'frr_amount';
//         $fieldInstance->uitype = 7;
//         $fieldInstance->table = 'vtiger_inventoryproductrel';
//         $fieldInstance->label = 'FRR Amount';
//         $fieldInstance->readonly = 1;
//         $fieldInstance->presence = 2;
//         $fieldInstance->typeofdata = 'I~O';
//         $fieldInstance->columntype = 'decimal(25,8)';
//         $fieldInstance->quickcreate = 3;
//         $fieldInstance->displaytype = 1;
//         $fieldInstance->masseditable = 1;
//         $fieldInstance->helpinfo = 'li_lg';
//         $blockInstance->addField($fieldInstance);
//     } else {
//         echo "field is already Present --- frr_amount in SalesOrder Module --- <br>";
//     }
// } else {
//     echo " block does not exits --- LBL_ITEM_DETAILS in SalesOrder -- <br>";
// }

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('SalesOrder');
$blockInstance = Vtiger_Block::getInstance('LBL_ITEM_DETAILS', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('part_description', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'part_description';
        $field->column = 'part_description';
        $field->uitype = 21;
        $field->table = 'vtiger_inventoryproductrel';
        $field->label = 'Description';
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'TEXT';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $field->helpinfo = 'li_lg';
        $blockInstance->addField($field);
    } else {
        echo "field is present -- description In SalesOrder Module --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_ITEM_DETAILS -- <br>";
}

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('CallAssistance');
$blockInstance = Vtiger_Block::getInstance('LBL_BLOCK_GENERAL_INFORMATION', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('eq_sr_equip_model', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'eq_sr_equip_model';
        $fieldInstance->label = 'Equipment Model';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'eq_sr_equip_model';
        $fieldInstance->uitype = '33';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'TEXT';
        $blockInstance->addField($fieldInstance);
        // $fieldInstance->setPicklistValues(array());
    } else {
        echo "field is already Present --- eq_sr_equip_model in CallAssistance Module --- <br>";
    }
} else {
    echo " block does not exits LBL_BLOCK_GENERAL_INFORMATION --- CallAssistance Details -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('ServiceOrders');
$blockInstance = Vtiger_Block::getInstance('LBL_SYSTEM_INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('equipment_id', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'equipment_id';
        $field->column = 'equipment_id';
        $field->uitype = 10;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Equipment Serial No.';
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'I~O';
        $field->columntype = 'INT(30)';
        $field->displaytype = 1;
        $id = $blockInstance->addFieldIgnite($field);
       
        $invogamoduleInstance = Vtiger_Module::getInstance('Equipment');
        $relationLabel  = 'ServiceOrders';
        $invogamoduleInstance->setRelatedList(
              $invoiceModule, $relationLabel, Array('ADD'), 'get_dependents_list' //you can do select also Array('ADD','SELECT')
        );
        $tom = "INSERT INTO `vtiger_fieldmodulerel` (`fieldid`, `module`, `relmodule`, `status`, `sequence`) VALUES ('$id', 'ServiceOrders', 'Equipment', NULL, NULL)";
        $adb->pquery($tom);
    } else {
        echo "field is present -- equipment_id  in ServiceOrders--- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_SYSTEM_INFORMATION in ServiceOrders -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('ServiceOrders');
$blockInstance = Vtiger_Block::getInstance('LBL_SYSTEM_INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('project_name', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'project_name';
        $field->column = 'project_name';
        $field->uitype = 2;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Project';
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(250)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- project_name ServiceOrders --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_SYSTEM_INFORMATION in ServiceOrders -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('ServiceOrders');
$blockInstance = Vtiger_Block::getInstance('LBL_SYSTEM_INFORMATION', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('sr_ticket_type', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'sr_ticket_type';
        $fieldInstance->label = 'Notification Type';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'sr_ticket_type';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
        // $fieldInstance->setPicklistValues(array());
    } else {
        echo "field is already Present --- sr_ticket_type in ServiceOrders Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_SYSTEM_INFORMATION -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('ServiceOrders');
$blockInstance = Vtiger_Block::getInstance('LBL_SYSTEM_INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('ext_app_num_noti', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'ext_app_num_noti';
        $field->column = 'ext_app_num_noti';
        $field->uitype = 2;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Notification Number';
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(250)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- ext_app_num_noti in ServiceOrders --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_SYSTEM_INFORMATION in ServiceOrders -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('Equipment');
$blockInstance = Vtiger_Block::getInstance('Contract Details', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('eq_contra_app', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'eq_contra_app';
        $field->column = 'eq_contra_app';
        $field->table = $invoiceModule->basetable;
        $field->label = 'Contract Applicabel';
        $field->uitype = '999';
        $field->columntype = 'VARCHAR(100)';
        $field->typeofdata = 'V~O';
        $field->displaytype = 1;
        $blockInstance->addField($field);
        // $field->setPicklistValues(array('Yes', 'No'));
    } else {
        echo "field is present -- eq_contra_app In Equipment Module --- <br>";
    }
} else {
    echo "Block Does not exits -- Contract Details in Equipment -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('Equipment');
$blockInstance = Vtiger_Block::getInstance('Contract Details', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('total_year_cont', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'total_year_cont';
        $fieldInstance->column = 'total_year_cont';
        $fieldInstance->uitype = 7;
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->label = 'Total Years of Contract';
        $fieldInstance->readonly = 1;
        $fieldInstance->presence = 2;
        $fieldInstance->typeofdata = 'I~O';
        $fieldInstance->columntype = 'INT(10)';
        $fieldInstance->displaytype = 1;
        $fieldInstance->masseditable = 1;
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- total_year_cont in Equipment Module --- <br>";
    }
} else {
    echo " block does not exits --- Contract Details in Equipment -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('Equipment');
$blockInstance = Vtiger_Block::getInstance('Equipment Availability', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('eq_available', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'eq_available';
        $field->column = 'eq_available';
        $field->table = $invoiceModule->basetable;
        $field->label = 'Availability';
        $field->uitype = '999';
        $field->columntype = 'VARCHAR(100)';
        $field->typeofdata = 'V~O';
        $field->displaytype = 1;
        $blockInstance->addField($field);
        // $field->setPicklistValues(array('Aplicable', 'Not Applicable'));
    } else {
        echo "field is present -- eq_available In Equipment Module --- <br>";
    }
} else {
    echo "Block Does not exits -- Equipment Availability in Equipment -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('Equipment');
$blockInstance = Vtiger_Block::getInstance('Equipment Availability', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('eq_available_for', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'eq_available_for';
        $field->column = 'eq_available_for';
        $field->table = $invoiceModule->basetable;
        $field->label = 'Availability Applicable For';
        $field->uitype = '999';
        $field->columntype = 'VARCHAR(100)';
        $field->typeofdata = 'V~O';
        $field->displaytype = 1;
        $blockInstance->addField($field);
        // $field->setPicklistValues(array('Only Warranty Period', 'Both Warranty and Contract Period'));
    } else {
        echo "field is present -- eq_available_for In Equipment Module --- <br>";
    }
} else {
    echo "Block Does not exits -- Equipment Availability in Equipment -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('Equipment');
$blockInstance = Vtiger_Block::getInstance('Equipment Availability', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('maint_h_app_for_ac', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'maint_h_app_for_ac';
        $field->column = 'maint_h_app_for_ac';
        $field->table = $invoiceModule->basetable;
        $field->label = 'maint_h_app_for_ac';
        $field->uitype = '999';
        $field->columntype = 'VARCHAR(100)';
        $field->typeofdata = 'V~O';
        $field->displaytype = 1;
        $blockInstance->addField($field);
        // $field->setPicklistValues(array('Yes', 'No'));
    } else {
        echo "field is present -- maint_h_app_for_ac In Equipment Module --- <br>";
    }
} else {
    echo "Block Does not exits -- Equipment Availability in Equipment -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('Equipment');
$blockInstance = Vtiger_Block::getInstance('Equipment Availability', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('eq_mon_available', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'eq_mon_available';
        $field->column = 'eq_mon_available';
        $field->table = $invoiceModule->basetable;
        $field->label = 'Monthly Availability';
        $field->uitype = '999';
        $field->columntype = 'VARCHAR(100)';
        $field->typeofdata = 'V~O';
        $field->displaytype = 1;
        $blockInstance->addField($field);
        // $field->setPicklistValues(array('Aplicable', 'Not Applicable'));
    } else {
        echo "field is present -- eq_mon_available In Equipment Module --- <br>";
    }
} else {
    echo "Block Does not exits -- Equipment Availability in Equipment -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('Equipment');
$blockInstance = Vtiger_Block::getInstance('Equipment Availability', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('eq_war_app_cp', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'eq_war_app_cp';
        $field->column = 'eq_war_app_cp';
        $field->table = $invoiceModule->basetable;
        $field->label = 'eq_war_app_cp';
        $field->uitype = '999';
        $field->columntype = 'VARCHAR(100)';
        $field->typeofdata = 'V~O';
        $field->displaytype = 1;
        $blockInstance->addField($field);
        // $field->setPicklistValues(array('Yes', 'No'));
    } else {
        echo "field is present -- eq_war_app_cp In Equipment Module --- <br>";
    }
} else {
    echo "Block Does not exits -- Equipment Availability in Equipment -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('Equipment');
$blockInstance = Vtiger_Block::getInstance('Equipment Availability', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('eq_war_app_wp', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'eq_war_app_wp';
        $field->column = 'eq_war_app_wp';
        $field->table = $invoiceModule->basetable;
        $field->label = 'eq_war_app_wp';
        $field->uitype = '999';
        $field->columntype = 'VARCHAR(100)';
        $field->typeofdata = 'V~O';
        $field->displaytype = 1;
        $blockInstance->addField($field);
        // $field->setPicklistValues(array('Yes', 'No'));
    } else {
        echo "field is present -- eq_war_app_wp In Equipment Module --- <br>";
    }
} else {
    echo "Block Does not exits -- Equipment Availability in Equipment -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('Equipment');
$blockInstance = Vtiger_Block::getInstance('Equipment Availability', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('eq_commited_avl', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'eq_commited_avl';
        $fieldInstance->label = 'Committed Availability';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'eq_commited_avl';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
        // $fieldInstance->setPicklistValues(array('Availability for Warranty Period', 'Availability for both Warranty & Contract Period are Same', 'Same availability applicable through out contract period','Different availability applicable during contract period'));
    } else {
        echo "field is already Present --- eq_commited_avl in Equipment Module --- <br>";
    }
} else {
    echo " block does not exits --- Equipment Availability in Equipment -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('StockTransferOrders');
$blockInstance = Vtiger_Block::getInstance('LBL_SYSTEM_INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('equipment_id', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'equipment_id';
        $field->column = 'equipment_id';
        $field->uitype = 10;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Equipment Serial No.';
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'I~O';
        $field->columntype = 'INT(30)';
        $field->displaytype = 1;
        $id = $blockInstance->addFieldIgnite($field);
       
        $invogamoduleInstance = Vtiger_Module::getInstance('Equipment');
        $relationLabel  = 'StockTransferOrders';
        $invogamoduleInstance->setRelatedList(
              $invoiceModule, $relationLabel, Array('ADD'), 'get_dependents_list' //you can do select also Array('ADD','SELECT')
        );
        $tom = "INSERT INTO `vtiger_fieldmodulerel` (`fieldid`, `module`, `relmodule`, `status`, `sequence`) VALUES ('$id', 'StockTransferOrders', 'Equipment', NULL, NULL)";
        $adb->pquery($tom);
    } else {
        echo "field is present -- equipment_id  in StockTransferOrders--- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_SYSTEM_INFORMATION in StockTransferOrders -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('StockTransferOrders');
$blockInstance = Vtiger_Block::getInstance('LBL_SYSTEM_INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('project_name', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'project_name';
        $field->column = 'project_name';
        $field->uitype = 2;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Project';
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(250)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- project_name StockTransferOrders --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_SYSTEM_INFORMATION in StockTransferOrders -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('StockTransferOrders');
$blockInstance = Vtiger_Block::getInstance('LBL_SYSTEM_INFORMATION', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('sr_ticket_type', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'sr_ticket_type';
        $fieldInstance->label = 'Notification Type';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'sr_ticket_type';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
        // $fieldInstance->setPicklistValues(array());
    } else {
        echo "field is already Present --- sr_ticket_type in StockTransferOrders Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_SYSTEM_INFORMATION -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('StockTransferOrders');
$blockInstance = Vtiger_Block::getInstance('LBL_SYSTEM_INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('ext_app_num_so', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'ext_app_num_so';
        $field->column = 'ext_app_num_so';
        $field->uitype = 2;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Service Order No.';
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(250)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- ext_app_num_so in StockTransferOrders --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_SYSTEM_INFORMATION in StockTransferOrders -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('StockTransferOrders');
$blockInstance = Vtiger_Block::getInstance('LBL_SYSTEM_INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('ext_app_num_noti', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'ext_app_num_noti';
        $field->column = 'ext_app_num_noti';
        $field->uitype = 2;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Notification Number';
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(250)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- ext_app_num_noti in StockTransferOrders --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_SYSTEM_INFORMATION in StockTransferOrders -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('SalesOrder');
$blockInstance = Vtiger_Block::getInstance('LBL_SO_INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('equipment_id', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'equipment_id';
        $field->column = 'equipment_id';
        $field->uitype = 10;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Equipment Serial No.';
        $field->summaryfield = 1;
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'I~O';
        $field->columntype = 'INT(30)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $id = $blockInstance->addFieldIgnite($field);
        echo "created field --- $id ";
        $invogamoduleInstance = Vtiger_Module::getInstance('Equipment');
        $relationLabel  = 'SaleOrder';
        $invogamoduleInstance->setRelatedList(
              $invoiceModule, $relationLabel, Array(), 'get_dependents_list' //you can do select also Array('ADD','SELECT')
        );
        $tom = "INSERT INTO `vtiger_fieldmodulerel` (`fieldid`, `module`, `relmodule`, `status`, `sequence`) VALUES ('$id', 'SalesOrder', 'Equipment', NULL, NULL)";
        $adb->pquery($tom);
    } else {
        echo "field is present -- equipment_id  in SalesOrder--- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_GENERAL_INFORMATION in SalesOrder -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = Vtiger_Module::getInstance('SalesOrder');
$blockInstance = Vtiger_Block::getInstance('LBL_SO_INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('ticket_id', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'ticket_id';
        $field->column = 'ticket_id';
        $field->uitype = 10;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Ticket Id';
        $field->summaryfield = 1;
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'I~O';
        $field->columntype = 'INT(30)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $id = $blockInstance->addFieldIgnite($field);
        echo "created field --- $id ";
        $invogamoduleInstance = Vtiger_Module::getInstance('HelpDesk');
        $relationLabel  = 'SalesOrder';
        $invogamoduleInstance->setRelatedList(
              $invoiceModule, $relationLabel, Array('ADD'), 'get_dependents_list' //you can do select also Array('ADD','SELECT')
        );
        $tom = "INSERT INTO `vtiger_fieldmodulerel` (`fieldid`, `module`, `relmodule`, `status`, `sequence`) VALUES ('$id', 'SalesOrder', 'HelpDesk', NULL, NULL)";
        $adb->pquery($tom);
    } else {
        echo "field is present -- ticket_id  in SalesOrder --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_GENERAL_INFORMATION in SalesOrder -- <br>";
}

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('SalesOrder');
$blockInstance = Vtiger_Block::getInstance('LBL_SO_INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('project_name', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'project_name';
        $field->column = 'project_name';
        $field->uitype = 2;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Project';
        $field->summaryfield = 1;
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(250)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $field->defaultvalue = 0;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- project_name SalesOrder --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_GENERAL_INFORMATION in SalesOrder -- <br>";
}

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('ReturnSaleOrders');
$blockInstance = Vtiger_Block::getInstance('LBL_ITEM_DETAILS', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('present_status', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'present_status';
        $fieldInstance->column = 'present_status';
        $fieldInstance->uitype = 16;
        $fieldInstance->table = 'vtiger_inventoryproductrel';
        $fieldInstance->label = 'Present Status';
        $fieldInstance->readonly = 1;
        $fieldInstance->presence = 2;
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(250)';
        $fieldInstance->quickcreate = 3;
        $fieldInstance->displaytype = 1;
        $fieldInstance->masseditable = 1;
        $fieldInstance->helpinfo = 'li_lg';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
        // $fieldInstance->setPicklistValues(array('Under Failure Analysis at Division', 'Analysis Done at Division', 'Sent to Vendor'));

    } else {
        echo "field is already Present --- present_status in ReturnSaleOrders Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_ITEM_DETAILS in ReturnSaleOrders -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('ReturnSaleOrders');
$blockInstance = Vtiger_Block::getInstance('LBL_ITEM_DETAILS', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('action_by_dsm', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'action_by_dsm';
        $fieldInstance->column = 'action_by_dsm';
        $fieldInstance->uitype = 16;
        $fieldInstance->table = 'vtiger_inventoryproductrel';
        $fieldInstance->label = 'Action Taken by DSM';
        $fieldInstance->readonly = 1;
        $fieldInstance->presence = 2;
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(250)';
        $fieldInstance->quickcreate = 3;
        $fieldInstance->displaytype = 1;
        $fieldInstance->masseditable = 1;
        $fieldInstance->helpinfo = 'li_lg';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
        // $fieldInstance->setPicklistValues(array('Under Repair at Division', 'Repaired and Kept as a Float at Division', 'Repaired and Sent to Region','Scrapped at Division'));

    } else {
        echo "field is already Present --- action_by_dsm in ReturnSaleOrders Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_ITEM_DETAILS in ReturnSaleOrders -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
// $fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('ReturnSaleOrders');
$blockInstance = Vtiger_Block::getInstance('LBL_ITEM_DETAILS', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('vendor_response', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'vendor_response';
        $fieldInstance->column = 'vendor_response';
        $fieldInstance->uitype = 16;
        $fieldInstance->table = 'vtiger_inventoryproductrel';
        $fieldInstance->label = 'Vendor Response';
        $fieldInstance->readonly = 1;
        $fieldInstance->presence = 2;
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(250)';
        $fieldInstance->quickcreate = 3;
        $fieldInstance->displaytype = 1;
        $fieldInstance->masseditable = 1;
        $fieldInstance->helpinfo = 'li_lg';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
        // $fieldInstance->setPicklistValues(array('Under assesssment by Vendor', 'Warranty Rejected', 'New Parts Received under warranty','Repaired Parts received under warranty','Repaired on Paid basis','Repaired on Prorata basis'));

    } else {
        echo "field is already Present --- vendor_response in ReturnSaleOrders Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_ITEM_DETAILS in ReturnSaleOrders -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('ReturnSaleOrders');
$blockInstance = Vtiger_Block::getInstance('LBL_ITEM_DETAILS', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('vendor_name', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'vendor_name';
        $fieldInstance->column = 'vendor_name';
        $fieldInstance->uitype = 10;
        $fieldInstance->table = 'vtiger_inventoryproductrel';
        $fieldInstance->label = 'Vendor Name';
        $fieldInstance->readonly = 1;
        $fieldInstance->presence = 2;
        $fieldInstance->typeofdata = 'I~O';
        $fieldInstance->columntype = 'INT(30)';
        $fieldInstance->quickcreate = 3;
        $fieldInstance->displaytype = 1;
        $fieldInstance->masseditable = 1;
        $fieldInstance->helpinfo = 'li_lg';
        $id = $blockInstance->addFieldIgnite($fieldInstance);
        echo "igggggggggggggggggggg mission created field --- $id ";
        $tom = "INSERT INTO `vtiger_fieldmodulerel` (`fieldid`, `module`, `relmodule`, `status`, `sequence`) VALUES ('$id', 'FailedParts', 'Vendors', NULL, NULL)";
        $adb->pquery($tom);
    } else {
        echo "field is already Present --- vendor_name in ReturnSaleOrders Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_ITEM_DETAILS in ReturnSaleOrders -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('ReturnSaleOrders');
$blockInstance = Vtiger_Block::getInstance('LBL_ITEM_DETAILS', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('sending_purpose', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'sending_purpose';
        $fieldInstance->column = 'sending_purpose';
        $fieldInstance->uitype = 16;
        $fieldInstance->table = 'vtiger_inventoryproductrel';
        $fieldInstance->label = 'Sending Purpose';
        $fieldInstance->readonly = 1;
        $fieldInstance->presence = 2;
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(250)';
        $fieldInstance->quickcreate = 3;
        $fieldInstance->displaytype = 1;
        $fieldInstance->masseditable = 1;
        $fieldInstance->helpinfo = 'li_lg';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
        // $fieldInstance->setPicklistValues(array('Sale', 'Warranty Rejected', 'Under warranty Failure','Under Contract Failure','Float'));

    } else {
        echo "field is already Present --- sending_purpose in ReturnSaleOrders Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_ITEM_DETAILS in ReturnSaleOrders -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('ReturnSaleOrders');
$blockInstance = Vtiger_Block::getInstance('LBL_ITEM_DETAILS', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('region_name', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'region_name';
        $fieldInstance->column = 'region_name';
        $fieldInstance->uitype = 16;
        $fieldInstance->table = 'vtiger_inventoryproductrel';
        $fieldInstance->label = 'Region Name';
        $fieldInstance->readonly = 1;
        $fieldInstance->presence = 2;
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(250)';
        $fieldInstance->quickcreate = 3;
        $fieldInstance->displaytype = 1;
        $fieldInstance->masseditable = 1;
        $fieldInstance->helpinfo = 'li_lg';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
        // $fieldInstance->setPicklistValues(array('Neyveli','Sambalpur','Kolkata','Dhanbad','Bangalore','Hyderabad','New Delhi','Nagpur','Ranchi','Singrauli','Bilaspur','Mumbai'));

    } else {
        echo "field is already Present --- region_name in ReturnSaleOrders Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_ITEM_DETAILS in ReturnSaleOrders -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('ServiceOrders');
$blockInstance = Vtiger_Block::getInstance('PARTS_FROM_SR', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('sr_replace_action', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'sr_replace_action';
        $fieldInstance->label = 'Fulfillment';
        $fieldInstance->table = 'vtiger_inventoryproductrel_other';
        $fieldInstance->column = 'sr_replace_action';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->helpinfo = 'li_lg';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
        // $fieldInstance->setPicklistValues(array('Required', 'Not Required'));
    } else {
        echo "field is present -- sr_replace_action In ServiceOrders Module --- <br>";
    }
} else {
    echo "Block Does not exits -- PARTS_FROM_SR in ServiceOrders -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('ServiceOrders');
$blockInstance = Vtiger_Block::getInstance('PARTS_FROM_SR', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('sr_action_one', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'sr_action_one';
        $fieldInstance->label = 'Activity';
        $fieldInstance->table = 'vtiger_inventoryproductrel_other';
        $fieldInstance->column = 'sr_action_one';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->helpinfo = 'li_lg';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
        // $fieldInstance->setPicklistValues(array('Required', 'Not Required'));
    } else {
        echo "field is present -- sr_action_one In ServiceOrders Module --- <br>";
    }
} else {
    echo "Block Does not exits -- PARTS_FROM_SR in ServiceOrders -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

// $moduleInstance = null;
// $blockInstance = null;
// $fieldInstance = null;
// $moduleInstance = Vtiger_Module::getInstance('FailedParts');
// $blockInstance = Vtiger_Block::getInstance('LBL_ITEM_DETAILS', $moduleInstance);
// if ($blockInstance) {
//     $fieldInstance = Vtiger_Field::getInstance('action_taken_by_sm', $moduleInstance);
//     if (!$fieldInstance) {
//         $fieldInstance = new Vtiger_Field();
//         $fieldInstance->name = 'action_taken_by_sm';
//         $fieldInstance->column = 'action_taken_by_sm';
//         $fieldInstance->uitype = 16;
//         $fieldInstance->table = 'vtiger_inventoryproductrel';
//         $fieldInstance->label = '';
//         $fieldInstance->readonly = 1;
//         $fieldInstance->presence = 2;
//         $fieldInstance->typeofdata = 'V~O';
//         $fieldInstance->columntype = 'VARCHAR(250)';
//         $fieldInstance->quickcreate = 3;
//         $fieldInstance->displaytype = 1;
//         $fieldInstance->masseditable = 1;
//         $fieldInstance->helpinfo = 'li_lg';
//         $fieldInstance->defaultvalue = NULL;
//         $blockInstance->addField($fieldInstance);
//         $fieldInstance->setPicklistValues(array('Scrapped at Region', 'Repaired at Region', 'Sent to division to Analysis','Sent to division to Repair','Sent to Service Centre for Repair','Sent to Vendor'));

//     } else {
//         echo "field is already Present --- action_taken_by_sm in FailedParts Module --- <br>";
//     }
// } else {
//     echo " block does not exits --- LBL_ITEM_DETAILS in FailedParts -- <br>";
// }
// $moduleInstance = null;
// $blockInstance = null;
// $fieldInstance = null;

// $moduleInstance = null;
// $blockInstance = null;
// $fieldInstance = null;
// $moduleInstance = Vtiger_Module::getInstance('FailedParts');
// $blockInstance = Vtiger_Block::getInstance('LBL_ITEM_DETAILS', $moduleInstance);
// if ($blockInstance) {
//     $fieldInstance = Vtiger_Field::getInstance('sto_qty', $moduleInstance);
//     if (!$fieldInstance) {
//         $fieldInstance = new Vtiger_Field();
//         $fieldInstance->name = 'sto_qty';
//         $fieldInstance->column = 'sto_qty';
//         $fieldInstance->uitype = 16;
//         $fieldInstance->table = 'vtiger_inventoryproductrel_fp';
//         $fieldInstance->label = 'sto_qty';
//         $fieldInstance->readonly = 1;
//         $fieldInstance->presence = 2;
//         $fieldInstance->typeofdata = 'V~O';
//         $fieldInstance->columntype = 'VARCHAR(250)';
//         $fieldInstance->quickcreate = 3;
//         $fieldInstance->displaytype = 1;
//         $fieldInstance->masseditable = 1;
//         $fieldInstance->helpinfo = 'li_lg';
//         $fieldInstance->defaultvalue = NULL;
//         $blockInstance->addField($fieldInstance);
//         $fieldInstance->setPicklistValues(array('Scrapped at Region', 'Repaired at Region', 'Sent to division to Analysis','Sent to division to Repair','Sent to Service Centre for Repair','Sent to Vendor'));

//     } else {
//         echo "field is already Present --- sto_qty in FailedParts Module --- <br>";
//     }
// } else {
//     echo " block does not exits --- LBL_ITEM_DETAILS in FailedParts -- <br>";
// }
// $moduleInstance = null;
// $blockInstance = null;
// $fieldInstance = null;

$emm = new VTEntityMethodManager($adb);
$result = $adb->pquery("SELECT function_name FROM com_vtiger_workflowtasks_entitymethod WHERE module_name=? AND method_name=?", array('ServiceEngineer', 'RecalculateRoleOnEdit'));
if ($adb->num_rows($result) == 0) {
    $emm->addEntityMethod("ServiceEngineer", "RecalculateRoleOnEdit", "modules/ServiceEngineer/RecalculateRoleOnEdit.php", "RecalculateRoleOnEdit");
} else {
    print_r("already exits --- workflow function -- RecalculateRoleOnEdit <br> ");
}
$emm = null;

$emm = new VTEntityMethodManager($adb);
$result = $adb->pquery("SELECT function_name FROM com_vtiger_workflowtasks_entitymethod WHERE module_name=? AND method_name=?", array('ServiceEngineer', 'SyncSomeFieldsToUser'));
if ($adb->num_rows($result) == 0) {
    $emm->addEntityMethod("ServiceEngineer", "SyncSomeFieldsToUser", "modules/ServiceEngineer/SyncSomeFieldsToUser.php", "SyncSomeFieldsToUser");
} else {
    print_r("already exits --- workflow function -- SyncSomeFieldsToUser <br> ");
}
$emm = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('ReturnSaleOrders');
$blockInstance = Vtiger_Block::getInstance('LBL_ITEM_DETAILS', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('action_taken_by_sm', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'action_taken_by_sm';
        $fieldInstance->column = 'action_taken_by_sm';
        $fieldInstance->uitype = 16;
        $fieldInstance->table = 'vtiger_inventoryproductrel';
        $fieldInstance->label = '';
        $fieldInstance->readonly = 1;
        $fieldInstance->presence = 2;
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(250)';
        $fieldInstance->quickcreate = 3;
        $fieldInstance->displaytype = 1;
        $fieldInstance->masseditable = 1;
        $fieldInstance->helpinfo = 'li_lg';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
        // $fieldInstance->setPicklistValues(array('Scrapped at Region', 'Repaired at Region', 'Sent to division to Analysis','Sent to division to Repair','Sent to Service Centre for Repair','Sent to Vendor'));

    } else {
        echo "field is already Present --- action_taken_by_sm in ReturnSaleOrders Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_ITEM_DETAILS in ReturnSaleOrders -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('ReturnSaleOrders');
$blockInstance = Vtiger_Block::getInstance('LBL_ITEM_DETAILS', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('sto_qty', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'sto_qty';
        $fieldInstance->column = 'sto_qty';
        $fieldInstance->uitype = 7;
        $fieldInstance->table = 'vtiger_inventoryproductrel';
        $fieldInstance->label = 'sto_qty';
        $fieldInstance->readonly = 1;
        $fieldInstance->presence = 2;
        $fieldInstance->typeofdata = 'I~O';
        $fieldInstance->columntype = 'INT(15)';
        $fieldInstance->quickcreate = 3;
        $fieldInstance->displaytype = 1;
        $fieldInstance->masseditable = 1;
        $fieldInstance->helpinfo = 'li_lg';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);

    } else {
        echo "field is already Present --- sto_qty in ReturnSaleOrders Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_ITEM_DETAILS in ReturnSaleOrders -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('ReturnSaleOrders');
$blockInstance = Vtiger_Block::getInstance('LBL_ITEM_DETAILS', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('sto_no', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'sto_no';
        $fieldInstance->column = 'sto_no';
        $fieldInstance->uitype = 7;
        $fieldInstance->table = 'vtiger_inventoryproductrel';
        $fieldInstance->label = 'STO No.';
        $fieldInstance->readonly = 1;
        $fieldInstance->presence = 2;
        $fieldInstance->typeofdata = 'I~O';
        $fieldInstance->columntype = 'VARCHAR(50)';
        $fieldInstance->quickcreate = 3;
        $fieldInstance->displaytype = 1;
        $fieldInstance->masseditable = 1;
        $fieldInstance->helpinfo = 'li_lg';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- sto_qty in ReturnSaleOrders Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_ITEM_DETAILS in ReturnSaleOrders -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('ReturnSaleOrders');
$blockInstance = Vtiger_Block::getInstance('LBL_ITEM_DETAILS', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('rso_part_status', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'rso_part_status';
        $fieldInstance->column = 'rso_part_status';
        $fieldInstance->uitype = 16;
        $fieldInstance->table = 'vtiger_inventoryproductrel';
        $fieldInstance->label = 'Status of Part No.';
        $fieldInstance->readonly = 1;
        $fieldInstance->presence = 2;
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(250)';
        $fieldInstance->quickcreate = 3;
        $fieldInstance->displaytype = 1;
        $fieldInstance->masseditable = 1;
        $fieldInstance->helpinfo = 'li_lg';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
    //     $fieldInstance->setPicklistValues(array('Return Sale Order Created', 'STO Awaited', 'Waiting for Shipment',
    //     'Under Transit','Received at Division',
    //     'Under Failure Analysis at Division',
    //     'Under Repair at Division',
    //     'Repaired and Kept as a Float at Division-Closed',
    //     'Repaired and Sent to Region- Closed',
    //     'Scrapped at Division-Closed',
    //     'Scrapped at Region-Closed',
    //     'Repaired at Region-Closed',
    //     'Dismantling Under Progress at Service Centre',
    //     'Item awaited for Repair at Service Centre',
    //     'Repaired at Service Centre',
    //     'Repaired and Sent back to Region at Service Centre-Closed',
    //     'Beyond Economic Repair by Service Centre-Closed',
    //     'Sent to Region without Repair by Service Centre-Closed',
    //     'Item awaited for Repair at Service Centre',
    //     'Repaired at Service Centre',
    //     'Repaired and Sent back to Region at Service Centre-Closed',
    //     'Beyond Economic Repair by Service Centre-Closed',
    //     'Sent to Region without Repair by Service Centre-Closed',
    //     'Under assesssment by Vendor',
    //     'New Parts Received under warranty-Closed',
    //     'Repaired Parts received under warranty-Closed',
    //     'Repaired on Paid basis-Closed',
    //     'Repaired on Prorata basis-Closed'
    // ));

    } else {
        echo "field is already Present --- rso_part_status in ReturnSaleOrders Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_ITEM_DETAILS in ReturnSaleOrders -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('ReturnSaleOrders');
$blockInstance = Vtiger_Block::getInstance('LBL_ITEM_DETAILS', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('remarks_by_sm', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'remarks_by_sm';
        $fieldInstance->column = 'remarks_by_sm';
        $fieldInstance->uitype = 21;
        $fieldInstance->table = 'vtiger_inventoryproductrel';
        $fieldInstance->label = 'Remarks by Service Manager';
        $fieldInstance->readonly = 1;
        $fieldInstance->presence = 2;
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(500)';
        $fieldInstance->quickcreate = 3;
        $fieldInstance->displaytype = 1;
        $fieldInstance->masseditable = 1;
        $fieldInstance->helpinfo = 'li_lg';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- remarks_by_sm in ReturnSaleOrders Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_ITEM_DETAILS in ReturnSaleOrders -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('ReturnSaleOrders');
$blockInstance = Vtiger_Block::getInstance('LBL_ITEM_DETAILS', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('div_or_ser_center', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'div_or_ser_center';
        $fieldInstance->label = 'Division / Service Centre';
        $fieldInstance->table = 'vtiger_inventoryproductrel';
        $fieldInstance->column = 'div_or_ser_center';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $fieldInstance->helpinfo = 'li_lg';
        $blockInstance->addField($fieldInstance);
        // $fieldInstance->setPicklistValues(array('EM Division', 'H&P Division','Truck Division',
    //     'Engine Division','Bilaspur Service Centre',
    //     'Singrauli Service Centre', 'Delhi Service Centre',
    //     'Hyderabad Service Centre', 'Kolkata service Centre'
    // ));
    } else {
        echo "field is present -- div_or_ser_center In ReturnSaleOrders Module --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_ITEM_DETAILS in ReturnSaleOrders -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('ReturnSaleOrders');
$blockInstance = Vtiger_Block::getInstance('LBL_ITEM_DETAILS', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('vendor_response', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'vendor_response';
        $fieldInstance->column = 'vendor_response';
        $fieldInstance->uitype = 16;
        $fieldInstance->table = 'vtiger_inventoryproductrel';
        $fieldInstance->label = 'Vendor Response';
        $fieldInstance->readonly = 1;
        $fieldInstance->presence = 2;
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(250)';
        $fieldInstance->quickcreate = 3;
        $fieldInstance->displaytype = 1;
        $fieldInstance->masseditable = 1;
        $fieldInstance->helpinfo = 'li_lg';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
        // $fieldInstance->setPicklistValues(array('Under assesssment by Vendor', 'Warranty Rejected',
        //  'New Parts Received under warranty','Repaired Parts received under warranty',
        //  'Repaired on Paid basis','Repaired on Prorata basis'));

    } else {
        echo "field is already Present --- vendor_response in ReturnSaleOrders Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_ITEM_DETAILS in ReturnSaleOrders -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('ReturnSaleOrders');
$blockInstance = Vtiger_Block::getInstance('LBL_ITEM_DETAILS', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('vendor_name', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'vendor_name';
        $fieldInstance->column = 'vendor_name';
        $fieldInstance->uitype = 10;
        $fieldInstance->table = 'vtiger_inventoryproductrel';
        $fieldInstance->label = 'Vendor Name';
        $fieldInstance->readonly = 1;
        $fieldInstance->presence = 2;
        $fieldInstance->typeofdata = 'I~O';
        $fieldInstance->columntype = 'INT(30)';
        $fieldInstance->quickcreate = 3;
        $fieldInstance->displaytype = 1;
        $fieldInstance->masseditable = 1;
        $fieldInstance->helpinfo = 'li_lg';
        $id = $blockInstance->addFieldIgnite($fieldInstance);
        echo "igggggggggggggggggggg mission created field --- $id ";
        $tom = "INSERT INTO `vtiger_fieldmodulerel` (`fieldid`, `module`, `relmodule`, `status`, `sequence`) VALUES ('$id', 'FailedParts', 'Vendors', NULL, NULL)";
        $adb->pquery($tom);
    } else {
        echo "field is already Present --- vendor_name in ReturnSaleOrders Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_ITEM_DETAILS in ReturnSaleOrders -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('StockTransferOrders');
$blockInstance = Vtiger_Block::getInstance('LBL_ITEM_DETAILS', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('lid_remarks', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'lid_remarks';
        $field->column = 'lid_remarks';
        $field->uitype = 2;
        $field->table = 'vtiger_inventoryproductrel';
        $field->label = 'Remarks';
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(250)';
        $field->displaytype = 1;
        $field->helpinfo = 'li_lg';
        $field->masseditable = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- lid_remarks in StockTransferOrders --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_ITEM_DETAILS in StockTransferOrders -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('ServiceOrders');
$blockInstance = Vtiger_Block::getInstance('LBL_ITEM_DETAILS', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('collect_immidiately', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'collect_immidiately';
        $field->column = 'collect_immidiately';
        $field->table = 'vtiger_inventoryproductrel';
        $field->label = 'Mark as Important to Collect immediately';
        $field->uitype = 56;
        $field->columntype = 'INT(1) DEFAULT 0';
        $field->typeofdata = 'I~O';
        $field->displaytype = 2;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- collect_immidiately In ServiceOrders Module --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_ITEM_DETAILS in ServiceOrders -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('ReturnSaleOrders');
$blockInstance = Vtiger_Block::getInstance('LBL_SYSTEM_INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('ext_app_num_rso', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'ext_app_num_rso';
        $field->column = 'ext_app_num_rso';
        $field->uitype = 2;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Return Sale Order Document No.';
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(250)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- ext_app_num_rso in ReturnSaleOrders --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_SYSTEM_INFORMATION in ReturnSaleOrders -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('ReturnSaleOrders');
$blockInstance = Vtiger_Block::getInstance('LBL_ITEM_DETAILS', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('validated_part_no', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'validated_part_no';
        $fieldInstance->label = 'Validated Part No.';
        $fieldInstance->table = 'vtiger_inventoryproductrel';
        $fieldInstance->column = 'validated_part_no';
        $fieldInstance->uitype = '21';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(200)';
        $fieldInstance->defaultvalue = 'Open';
        $fieldInstance->helpinfo = 'li_lg';
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is present -- validated_part_no In ReturnSaleOrders Module --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_ITEM_DETAILS in ReturnSaleOrders -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('ReturnSaleOrders');
$blockInstance = Vtiger_Block::getInstance('LBL_ITEM_DETAILS', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('receivedvd_qty', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'receivedvd_qty';
        $fieldInstance->column = 'receivedvd_qty';
        $fieldInstance->uitype = 7;
        $fieldInstance->table = 'vtiger_inventoryproductrel';
        $fieldInstance->label = 'Received Qty';
        $fieldInstance->readonly = 1;
        $fieldInstance->presence = 2;
        $fieldInstance->typeofdata = 'I~O';
        $fieldInstance->columntype = 'INT(15)';
        $fieldInstance->quickcreate = 3;
        $fieldInstance->displaytype = 1;
        $fieldInstance->masseditable = 1;
        $fieldInstance->helpinfo = 'li_lg';
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- receivedvd_qty in ReturnSaleOrders Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_ITEM_DETAILS in ReturnSaleOrders -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('ReturnSaleOrders');
$blockInstance = Vtiger_Block::getInstance('LBL_ITEM_DETAILS', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('goods_consignment_no', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'goods_consignment_no';
        $fieldInstance->label = 'Goods Consignment No.';
        $fieldInstance->table = 'vtiger_inventoryproductrel';
        $fieldInstance->column = 'goods_consignment_no';
        $fieldInstance->uitype = '21';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(200)';
        $fieldInstance->helpinfo = 'li_lg';
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is present -- goods_consignment_no In ReturnSaleOrders Module --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_ITEM_DETAILS in ReturnSaleOrders -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('ReturnSaleOrders');
$blockInstance = Vtiger_Block::getInstance('LBL_ITEM_DETAILS', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('goods_rcived_dte', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'goods_rcived_dte';
        $fieldInstance->label = 'Goods Received date';
        $fieldInstance->table = 'vtiger_inventoryproductrel';
        $fieldInstance->column = 'goods_rcived_dte';
        $fieldInstance->uitype = 5;
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'D~O';
        $fieldInstance->columntype = 'DATE';
        $fieldInstance->helpinfo = 'li_lg';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- goods_rcived_dte in ReturnSaleOrders Module --- <br>";
    }
} else {
    echo "block does not exits --- LBL_ITEM_DETAILS -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('ReturnSaleOrders');
$blockInstance = Vtiger_Block::getInstance('LBL_ITEM_DETAILS', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('und_fail_ana_div_qty', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'und_fail_ana_div_qty';
        $fieldInstance->column = 'und_fail_ana_div_qty';
        $fieldInstance->uitype = 7;
        $fieldInstance->table = 'vtiger_inventoryproductrel';
        $fieldInstance->label = 'Under Failure Analysis at Division';
        $fieldInstance->readonly = 1;
        $fieldInstance->presence = 2;
        $fieldInstance->typeofdata = 'I~O';
        $fieldInstance->columntype = 'INT(15)';
        $fieldInstance->quickcreate = 3;
        $fieldInstance->displaytype = 1;
        $fieldInstance->masseditable = 1;
        $fieldInstance->helpinfo = 'li_lg';
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- und_fail_ana_div_qty in ReturnSaleOrders Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_ITEM_DETAILS in ReturnSaleOrders -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('ReturnSaleOrders');
$blockInstance = Vtiger_Block::getInstance('LBL_ITEM_DETAILS', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('ana_done_div_qty', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'ana_done_div_qty';
        $fieldInstance->column = 'ana_done_div_qty';
        $fieldInstance->uitype = 7;
        $fieldInstance->table = 'vtiger_inventoryproductrel';
        $fieldInstance->label = 'Analysis Done at Division';
        $fieldInstance->readonly = 1;
        $fieldInstance->presence = 2;
        $fieldInstance->typeofdata = 'I~O';
        $fieldInstance->columntype = 'INT(15)';
        $fieldInstance->quickcreate = 3;
        $fieldInstance->displaytype = 1;
        $fieldInstance->masseditable = 1;
        $fieldInstance->helpinfo = 'li_lg';
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- ana_done_div_qty in ReturnSaleOrders Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_ITEM_DETAILS in ReturnSaleOrders -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('ReturnSaleOrders');
$blockInstance = Vtiger_Block::getInstance('LBL_ITEM_DETAILS', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('asent_to_ven_qty', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'asent_to_ven_qty';
        $fieldInstance->column = 'asent_to_ven_qty';
        $fieldInstance->uitype = 7;
        $fieldInstance->table = 'vtiger_inventoryproductrel';
        $fieldInstance->label = 'Sent to Vendor';
        $fieldInstance->readonly = 1;
        $fieldInstance->presence = 2;
        $fieldInstance->typeofdata = 'I~O';
        $fieldInstance->columntype = 'INT(15)';
        $fieldInstance->quickcreate = 3;
        $fieldInstance->displaytype = 1;
        $fieldInstance->masseditable = 1;
        $fieldInstance->helpinfo = 'li_lg';
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- asent_to_ven_qty in ReturnSaleOrders Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_ITEM_DETAILS in ReturnSaleOrders -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('ReturnSaleOrders');
$blockInstance = Vtiger_Block::getInstance('LBL_ITEM_DETAILS', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('at_under_rep_atdiv', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'at_under_rep_atdiv';
        $fieldInstance->column = 'at_under_rep_atdiv';
        $fieldInstance->uitype = 7;
        $fieldInstance->table = 'vtiger_inventoryproductrel';
        $fieldInstance->label = 'Under Repair at Division';
        $fieldInstance->readonly = 1;
        $fieldInstance->presence = 2;
        $fieldInstance->typeofdata = 'I~O';
        $fieldInstance->columntype = 'INT(15)';
        $fieldInstance->quickcreate = 3;
        $fieldInstance->displaytype = 1;
        $fieldInstance->masseditable = 1;
        $fieldInstance->helpinfo = 'li_lg';
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- at_under_rep_atdiv in ReturnSaleOrders Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_ITEM_DETAILS in ReturnSaleOrders -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('ReturnSaleOrders');
$blockInstance = Vtiger_Block::getInstance('LBL_ITEM_DETAILS', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('at_rep_a_kept_float', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'at_rep_a_kept_float';
        $fieldInstance->column = 'at_rep_a_kept_float';
        $fieldInstance->uitype = 7;
        $fieldInstance->table = 'vtiger_inventoryproductrel';
        $fieldInstance->label = 'Repaired and Kept as a Float at Division';
        $fieldInstance->readonly = 1;
        $fieldInstance->presence = 2;
        $fieldInstance->typeofdata = 'I~O';
        $fieldInstance->columntype = 'INT(15)';
        $fieldInstance->quickcreate = 3;
        $fieldInstance->displaytype = 1;
        $fieldInstance->masseditable = 1;
        $fieldInstance->helpinfo = 'li_lg';
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- at_rep_a_kept_float in ReturnSaleOrders Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_ITEM_DETAILS in ReturnSaleOrders -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('ReturnSaleOrders');
$blockInstance = Vtiger_Block::getInstance('LBL_ITEM_DETAILS', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('at_rep_a_sent_reg', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'at_rep_a_sent_reg';
        $fieldInstance->column = 'at_rep_a_sent_reg';
        $fieldInstance->uitype = 7;
        $fieldInstance->table = 'vtiger_inventoryproductrel';
        $fieldInstance->label = 'Repaired and Sent to Region';
        $fieldInstance->readonly = 1;
        $fieldInstance->presence = 2;
        $fieldInstance->typeofdata = 'I~O';
        $fieldInstance->columntype = 'INT(15)';
        $fieldInstance->quickcreate = 3;
        $fieldInstance->displaytype = 1;
        $fieldInstance->masseditable = 1;
        $fieldInstance->helpinfo = 'li_lg';
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- at_rep_a_sent_reg in ReturnSaleOrders Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_ITEM_DETAILS in ReturnSaleOrders -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('ReturnSaleOrders');
$blockInstance = Vtiger_Block::getInstance('LBL_ITEM_DETAILS', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('at_rep_a_sent_reg', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'at_rep_a_sent_reg';
        $fieldInstance->column = 'at_rep_a_sent_reg';
        $fieldInstance->uitype = 7;
        $fieldInstance->table = 'vtiger_inventoryproductrel';
        $fieldInstance->label = 'Repaired and Sent to Region';
        $fieldInstance->readonly = 1;
        $fieldInstance->presence = 2;
        $fieldInstance->typeofdata = 'I~O';
        $fieldInstance->columntype = 'INT(15)';
        $fieldInstance->quickcreate = 3;
        $fieldInstance->displaytype = 1;
        $fieldInstance->masseditable = 1;
        $fieldInstance->helpinfo = 'li_lg';
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- at_rep_a_sent_reg in ReturnSaleOrders Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_ITEM_DETAILS in ReturnSaleOrders -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('ReturnSaleOrders');
$blockInstance = Vtiger_Block::getInstance('LBL_ITEM_DETAILS', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('at_scraped_at_dev', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'at_scraped_at_dev';
        $fieldInstance->column = 'at_scraped_at_dev';
        $fieldInstance->uitype = 7;
        $fieldInstance->table = 'vtiger_inventoryproductrel';
        $fieldInstance->label = 'Scrapped at Division';
        $fieldInstance->readonly = 1;
        $fieldInstance->presence = 2;
        $fieldInstance->typeofdata = 'I~O';
        $fieldInstance->columntype = 'INT(15)';
        $fieldInstance->quickcreate = 3;
        $fieldInstance->displaytype = 1;
        $fieldInstance->masseditable = 1;
        $fieldInstance->helpinfo = 'li_lg';
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- at_scraped_at_dev in ReturnSaleOrders Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_ITEM_DETAILS in ReturnSaleOrders -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('ReturnSaleOrders');
$blockInstance = Vtiger_Block::getInstance('LBL_ITEM_DETAILS', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('scm_dismant_unprogre', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'scm_dismant_unprogre';
        $fieldInstance->column = 'scm_dismant_unprogre';
        $fieldInstance->uitype = 7;
        $fieldInstance->table = 'vtiger_inventoryproductrel';
        $fieldInstance->label = 'Dismantling Under Progress';
        $fieldInstance->readonly = 1;
        $fieldInstance->presence = 2;
        $fieldInstance->typeofdata = 'I~O';
        $fieldInstance->columntype = 'INT(15)';
        $fieldInstance->quickcreate = 3;
        $fieldInstance->displaytype = 1;
        $fieldInstance->masseditable = 1;
        $fieldInstance->helpinfo = 'li_lg';
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- scm_dismant_unprogre in ReturnSaleOrders Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_ITEM_DETAILS in ReturnSaleOrders -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('ReturnSaleOrders');
$blockInstance = Vtiger_Block::getInstance('LBL_ITEM_DETAILS', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('scm_item_aw_for_rep', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'scm_item_aw_for_rep';
        $fieldInstance->column = 'scm_item_aw_for_rep';
        $fieldInstance->uitype = 7;
        $fieldInstance->table = 'vtiger_inventoryproductrel';
        $fieldInstance->label = 'Item awaited for Repair';
        $fieldInstance->readonly = 1;
        $fieldInstance->presence = 2;
        $fieldInstance->typeofdata = 'I~O';
        $fieldInstance->columntype = 'INT(15)';
        $fieldInstance->quickcreate = 3;
        $fieldInstance->displaytype = 1;
        $fieldInstance->masseditable = 1;
        $fieldInstance->helpinfo = 'li_lg';
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- scm_item_aw_for_rep in ReturnSaleOrders Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_ITEM_DETAILS in ReturnSaleOrders -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('ReturnSaleOrders');
$blockInstance = Vtiger_Block::getInstance('LBL_ITEM_DETAILS', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('scm_repaired_qty', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'scm_repaired_qty';
        $fieldInstance->column = 'scm_repaired_qty';
        $fieldInstance->uitype = 7;
        $fieldInstance->table = 'vtiger_inventoryproductrel';
        $fieldInstance->label = 'Repaired';
        $fieldInstance->readonly = 1;
        $fieldInstance->presence = 2;
        $fieldInstance->typeofdata = 'I~O';
        $fieldInstance->columntype = 'INT(15)';
        $fieldInstance->quickcreate = 3;
        $fieldInstance->displaytype = 1;
        $fieldInstance->masseditable = 1;
        $fieldInstance->helpinfo = 'li_lg';
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- scm_repaired_qty in ReturnSaleOrders Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_ITEM_DETAILS in ReturnSaleOrders -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('ReturnSaleOrders');
$blockInstance = Vtiger_Block::getInstance('LBL_ITEM_DETAILS', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('scm_rep_and_sent_back_qty', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'scm_rep_and_sent_back_qty';
        $fieldInstance->column = 'scm_rep_and_sent_back_qty';
        $fieldInstance->uitype = 7;
        $fieldInstance->table = 'vtiger_inventoryproductrel';
        $fieldInstance->label = 'Repaired and Sent back to Region';
        $fieldInstance->readonly = 1;
        $fieldInstance->presence = 2;
        $fieldInstance->typeofdata = 'I~O';
        $fieldInstance->columntype = 'INT(15)';
        $fieldInstance->quickcreate = 3;
        $fieldInstance->displaytype = 1;
        $fieldInstance->masseditable = 1;
        $fieldInstance->helpinfo = 'li_lg';
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- scm_rep_and_sent_back_qty in ReturnSaleOrders Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_ITEM_DETAILS in ReturnSaleOrders -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('ReturnSaleOrders');
$blockInstance = Vtiger_Block::getInstance('LBL_ITEM_DETAILS', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('scm_beyond_eco_rep_qty', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'scm_beyond_eco_rep_qty';
        $fieldInstance->column = 'scm_beyond_eco_rep_qty';
        $fieldInstance->uitype = 7;
        $fieldInstance->table = 'vtiger_inventoryproductrel';
        $fieldInstance->label = 'Beyond Economic Repair';
        $fieldInstance->readonly = 1;
        $fieldInstance->presence = 2;
        $fieldInstance->typeofdata = 'I~O';
        $fieldInstance->columntype = 'INT(15)';
        $fieldInstance->quickcreate = 3;
        $fieldInstance->displaytype = 1;
        $fieldInstance->masseditable = 1;
        $fieldInstance->helpinfo = 'li_lg';
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- scm_beyond_eco_rep_qty in ReturnSaleOrders Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_ITEM_DETAILS in ReturnSaleOrders -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('ReturnSaleOrders');
$blockInstance = Vtiger_Block::getInstance('LBL_ITEM_DETAILS', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('scm_senttoreg_worep', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'scm_senttoreg_worep';
        $fieldInstance->column = 'scm_senttoreg_worep';
        $fieldInstance->uitype = 7;
        $fieldInstance->table = 'vtiger_inventoryproductrel';
        $fieldInstance->label = 'Sent to Region without Repair';
        $fieldInstance->readonly = 1;
        $fieldInstance->presence = 2;
        $fieldInstance->typeofdata = 'I~O';
        $fieldInstance->columntype = 'INT(15)';
        $fieldInstance->quickcreate = 3;
        $fieldInstance->displaytype = 1;
        $fieldInstance->masseditable = 1;
        $fieldInstance->helpinfo = 'li_lg';
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- scm_senttoreg_worep in ReturnSaleOrders Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_ITEM_DETAILS in ReturnSaleOrders -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;


$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('ReturnSaleOrders');
$blockInstance = Vtiger_Block::getInstance('LBL_SYSTEM_INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('equipment_id', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'equipment_id';
        $field->column = 'equipment_id';
        $field->uitype = 10;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Equipment Serial No.';
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'I~O';
        $field->columntype = 'INT(30)';
        $field->displaytype = 1;
        $id = $blockInstance->addFieldIgnite($field);
       
        $invogamoduleInstance = Vtiger_Module::getInstance('Equipment');
        $relationLabel  = 'ReturnSaleOrders';
        $invogamoduleInstance->setRelatedList(
              $invoiceModule, $relationLabel, Array('ADD'), 'get_dependents_list' //you can do select also Array('ADD','SELECT')
        );
        $tom = "INSERT INTO `vtiger_fieldmodulerel` (`fieldid`, `module`, `relmodule`, `status`, `sequence`) VALUES ('$id', 'ReturnSaleOrders', 'Equipment', NULL, NULL)";
        $adb->pquery($tom);
    } else {
        echo "field is present -- equipment_id  in ReturnSaleOrders--- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_SYSTEM_INFORMATION in ReturnSaleOrders -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('ReturnSaleOrders');
$blockInstance = Vtiger_Block::getInstance('LBL_SYSTEM_INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('ticket_id', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'ticket_id';
        $field->column = 'ticket_id';
        $field->uitype = 10;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Ticket Id';
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'I~O';
        $field->columntype = 'INT(30)';
        $field->displaytype = 1;
        $id = $blockInstance->addFieldIgnite($field);
        echo "created field --- $id ";
        $invogamoduleInstance = Vtiger_Module::getInstance('HelpDesk');
        $relationLabel  = 'ReturnSaleOrders';
        $invogamoduleInstance->setRelatedList(
              $invoiceModule, $relationLabel, Array('ADD'), 'get_dependents_list' //you can do select also Array('ADD','SELECT')
        );
        $tom = "INSERT INTO `vtiger_fieldmodulerel` (`fieldid`, `module`, `relmodule`, `status`, `sequence`) VALUES ('$id', 'ReturnSaleOrders', 'HelpDesk', NULL, NULL)";
        $adb->pquery($tom);
    } else {
        echo "field is present -- ticket_id  in ReturnSaleOrders--- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_SYSTEM_INFORMATION in ReturnSaleOrders -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('ReturnSaleOrders');
$blockInstance = Vtiger_Block::getInstance('LBL_SYSTEM_INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('ext_app_num_noti', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'ext_app_num_noti';
        $field->column = 'ext_app_num_noti';
        $field->uitype = 2;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Notification Number';
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(250)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- ext_app_num_noti in ReturnSaleOrders --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_SYSTEM_INFORMATION in ReturnSaleOrders -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('ReturnSaleOrders');
$blockInstance = Vtiger_Block::getInstance('LBL_SYSTEM_INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('project_name', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'project_name';
        $field->column = 'project_name';
        $field->uitype = 2;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Project';
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(250)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- project_name ReturnSaleOrders --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_SYSTEM_INFORMATION in ReturnSaleOrders -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('SalesOrder');
$blockInstance = Vtiger_Block::getInstance('LBL_ITEM_DETAILS', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('rso_created_qty', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'rso_created_qty';
        $fieldInstance->column = 'rso_created_qty';
        $fieldInstance->uitype = 7;
        $fieldInstance->table = 'vtiger_inventoryproductrel';
        $fieldInstance->label = 'Return SaleOrder Created Qty';
        $fieldInstance->readonly = 1;
        $fieldInstance->presence = 2;
        $fieldInstance->typeofdata = 'I~O';
        $fieldInstance->columntype = 'INT(15)';
        $fieldInstance->quickcreate = 3;
        $fieldInstance->displaytype = 1;
        $fieldInstance->masseditable = 1;
        $fieldInstance->helpinfo = 'li_lg';
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- rso_created_qty in SalesOrder Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_ITEM_DETAILS in SalesOrder -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('ReturnSaleOrders');
$blockInstance = Vtiger_Block::getInstance('LBL_SYSTEM_INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('sale_order_id', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'sale_order_id';
        $field->column = 'sale_order_id';
        $field->uitype = 10;
        $field->table = $invoiceModule->basetable;
        $field->label = 'SaleOrder No.';
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'I~O';
        $field->columntype = 'INT(30)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $id = $blockInstance->addFieldIgnite($field);
        $invogamoduleInstance = Vtiger_Module::getInstance('SalesOrder');
        $relationLabel  = 'ReturnSaleOrders';
        $invogamoduleInstance->setRelatedList(
              $invoiceModule, $relationLabel, Array('ADD'), 'get_dependents_list'
        );
        $tom = "INSERT INTO `vtiger_fieldmodulerel` (`fieldid`, `module`, `relmodule`, `status`, `sequence`) VALUES ('$id', 'ReturnSaleOrders', 'SalesOrder', NULL, NULL)";
        $adb->pquery($tom);
    } else {
        echo "field is present -- sale_order_id  in ReturnSaleOrders--- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_SYSTEM_INFORMATION in ReturnSaleOrders -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('ReturnSaleOrders');
$blockInstance = Vtiger_Block::getInstance('LBL_SYSTEM_INFORMATION', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('parent_line_itemid', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'parent_line_itemid';
        $fieldInstance->column = 'parent_line_itemid';
        $fieldInstance->uitype = 7;
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->label = 'Parent Line Item Id';
        $fieldInstance->readonly = 1;
        $fieldInstance->presence = 2;
        $fieldInstance->typeofdata = 'I~O';
        $fieldInstance->columntype = 'INT(30)';
        $fieldInstance->quickcreate = 3;
        $fieldInstance->displaytype = 1;
        $fieldInstance->masseditable = 1;
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- parent_line_itemid in ReturnSaleOrders Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_SYSTEM_INFORMATION in ReturnSaleOrders -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$emm = new VTEntityMethodManager($adb);
$result = $adb->pquery("SELECT function_name FROM com_vtiger_workflowtasks_entitymethod WHERE module_name=? AND method_name=?", array('ReturnSaleOrders', 'calculateRSOCreatedQty'));
if ($adb->num_rows($result) == 0) {
    $emm->addEntityMethod("ReturnSaleOrders", "calculateRSOCreatedQty", "modules/ReturnSaleOrders/calculateRSOCreatedQty.php", "calculateRSOCreatedQty");
} else {
    print_r("already exits --- workflow function -- calculateRSOCreatedQty <br> ");
}
$emm = null;

$emm = new VTEntityMethodManager($adb);
$result = $adb->pquery("SELECT function_name FROM com_vtiger_workflowtasks_entitymethod WHERE module_name=? AND method_name=?", array('SalesOrder', 'SyncToSAPOnSaleOrderCreate'));
if ($adb->num_rows($result) == 0) {
    $emm->addEntityMethod("SalesOrder", "SyncToSAPOnSaleOrderCreate", "modules/SalesOrder/SyncToSAPOnSaleOrderCreate.php", "SyncToSAPOnSaleOrderCreate");
} else {
    print_r("already exits --- workflow function -- SyncToSAPOnSaleOrderCreate <br> ");
}
$emm = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('BankGuarantee');
$blockInstance = Vtiger_Block::getInstance('LBL_BLOCK_GENERAL_INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('manual_equ_ser', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'manual_equ_ser';
        $field->column = 'manual_equ_ser';
        $field->uitype = 2;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Manual Equipment Sl.No.';
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(250)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- manual_equ_ser in BankGuarantee --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_BLOCK_GENERAL_INFORMATION in BankGuarantee -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('FailedParts');
$blockInstance = Vtiger_Block::getInstance('LBL_ITEM_DETAILS', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('pending_days', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'pending_days';
        $fieldInstance->column = 'pending_days';
        $fieldInstance->uitype = 7;
        $fieldInstance->table = 'vtiger_inventoryproductrel';
        $fieldInstance->label = 'Pending days';
        $fieldInstance->readonly = 1;
        $fieldInstance->presence = 2;
        $fieldInstance->typeofdata = 'I~O';
        $fieldInstance->columntype = 'INT(15)';
        $fieldInstance->quickcreate = 3;
        $fieldInstance->displaytype = 1;
        $fieldInstance->masseditable = 1;
        $fieldInstance->helpinfo = 'li_lg';
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- pending_days in FailedParts Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_ITEM_DETAILS in FailedParts -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('FailedParts');
$blockInstance = Vtiger_Block::getInstance('LBL_GENERAL_INFORMATION', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('replaced_date', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'replaced_date';
        $fieldInstance->label = 'Replaced date';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'replaced_date';
        $fieldInstance->uitype = 5;
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'D~O';
        $fieldInstance->columntype = 'DATE';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- replaced_date in FailedParts Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_GENERAL_INFORMATION -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('SalesOrder');
$blockInstance = Vtiger_Block::getInstance('LBL_SO_INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('external_app_num', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'external_app_num';
        $field->column = 'external_app_num';
        $field->uitype = 2;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Sale Order Document No';
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'V~O';
        $field->columntype = 'VARCHAR(250)';
        $field->displaytype = 1;
        $field->masseditable = 1;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- external_app_num in SalesOrder --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_SO_INFORMATION in SalesOrder -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('SalesOrder');
$blockInstance = Vtiger_Block::getInstance('LBL_SO_INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('failed_part_id', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'failed_part_id';
        $field->column = 'failed_part_id';
        $field->uitype = 10;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Failed Part Id';
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'I~O';
        $field->columntype = 'INT(30)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $id = $blockInstance->addFieldIgnite($field);
        $invogamoduleInstance = Vtiger_Module::getInstance('FailedParts');
        $relationLabel  = 'SaleOrders';
        $invogamoduleInstance->setRelatedList(
              $invoiceModule, $relationLabel, Array('ADD'), 'get_dependents_list'
        );
        $tom = "INSERT INTO `vtiger_fieldmodulerel` (`fieldid`, `module`, `relmodule`, `status`, `sequence`) VALUES ('$id', 'SalesOrder', 'FailedParts', NULL, NULL)";
        $adb->pquery($tom);
       
    } else {
        echo "field is present -- failed_part_id  in SalesOrder--- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_SO_INFORMATION in SalesOrder -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('SalesOrder');
$blockInstance = Vtiger_Block::getInstance('LBL_ITEM_DETAILS', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('failedpart_lineid', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'failedpart_lineid';
        $fieldInstance->column = 'failedpart_lineid';
        $fieldInstance->uitype = 7;
        $fieldInstance->table = 'vtiger_inventoryproductrel';
        $fieldInstance->label = 'Failed Part LineItem Id';
        $fieldInstance->readonly = 1;
        $fieldInstance->presence = 2;
        $fieldInstance->typeofdata = 'I~O';
        $fieldInstance->columntype = 'INT(30)';
        $fieldInstance->quickcreate = 3;
        $fieldInstance->displaytype = 1;
        $fieldInstance->masseditable = 1;
        $fieldInstance->helpinfo = 'li_lg';
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- failedpart_lineid in SalesOrder Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_ITEM_DETAILS in SalesOrder -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('FailedParts');
$blockInstance = Vtiger_Block::getInstance('LBL_ITEM_DETAILS', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('salesorder_cr_qty', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'salesorder_cr_qty';
        $fieldInstance->column = 'salesorder_cr_qty';
        $fieldInstance->uitype = 7;
        $fieldInstance->table = 'vtiger_inventoryproductrel';
        $fieldInstance->label = 'Sales Order Created Qty';
        $fieldInstance->readonly = 1;
        $fieldInstance->presence = 2;
        $fieldInstance->typeofdata = 'I~O';
        $fieldInstance->columntype = 'INT(10)';
        $fieldInstance->quickcreate = 3;
        $fieldInstance->displaytype = 1;
        $fieldInstance->masseditable = 1;
        $fieldInstance->helpinfo = 'li_lg';
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- salesorder_cr_qty in FailedParts Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_ITEM_DETAILS in FailedParts -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

$emm = new VTEntityMethodManager($adb);
$result = $adb->pquery("SELECT function_name FROM com_vtiger_workflowtasks_entitymethod WHERE module_name=? AND method_name=?", array('SalesOrder', 'calculateSOCreatedQty'));
if ($adb->num_rows($result) == 0) {
    $emm->addEntityMethod("SalesOrder", "calculateSOCreatedQty", "modules/SalesOrder/calculateSOCreatedQty.php", "calculateSOCreatedQty");
} else {
    print_r("already exits --- workflow function -- calculateSOCreatedQty <br> ");
}
$emm = null;

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('StockTransferOrders');
$blockInstance = Vtiger_Block::getInstance('LBL_ITEM_DETAILS', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('collect_immidiately', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'collect_immidiately';
        $field->column = 'collect_immidiately';
        $field->table = 'vtiger_inventoryproductrel';
        $field->label = 'Mark as Important to Collect immediately';
        $field->uitype = 56;
        $field->columntype = 'INT(1) DEFAULT 0';
        $field->typeofdata = 'I~O';
        $field->displaytype = 2;
        $field->helpinfo = 'li_lg';
        $blockInstance->addField($field);
    } else {
        echo "field is present -- collect_immidiately In StockTransferOrders Module --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_ITEM_DETAILS in StockTransferOrders -- <br>";
}
$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('RecommissioningReports');
$blockInstance = Vtiger_Block::getInstance('SYSTEM INFORMATION', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('ticketstatus', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'ticketstatus';
        $fieldInstance->label = 'Ticket Status';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'ticketstatus';
        $fieldInstance->uitype = '15';
        $fieldInstance->presence = '2';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
        // $fieldInstance->setPicklistValues(array('Open', 'In Progress', 'Engineer Assigned','Closed'));
    } else {
        echo "field is already Present --- ticketstatus in RecommissioningReports Module --- <br>";
    }
} else {
    echo "Block does not exits --- SYSTEM INFORMATION -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;