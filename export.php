<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('vtlib/Vtiger/PackageExport.php');
require_once('vtlib/Vtiger/Module.php');


$package = new Vtiger_Package();
$Moudle =Vtiger_Module::getInstance('Invoice');
echo '<pre>';
print_r($Moudle);
echo '</pre>';

echo 'starting...';
$package->export(
Vtiger_Module::getInstance('Invoice'),'/test/vtlib',
'Invoice.zip',
true
);
echo 'sucess';