<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('vtlib/Vtiger/PackageExport.php');
require_once('vtlib/Vtiger/Module.php');
require_once('includes/Loader.php');

$package = new Vtiger_Package();
$Moudle =Vtiger_Module::getInstance('Products');
echo '<pre>';
print_r($Moudle);
echo '</pre>';

echo 'starting...';
$package->export(Vtiger_Module::getInstance('Products'),'/test/vtlib','Products1.zip',true);
echo 'sucess';





// AddLinks('servicerequest');
// function AddLinks($modulename) {
//     require_once('vtlib/Vtiger/Module.php');
//     $link_module = Vtiger_Module::getInstance($modulename);
//     //$link_module->addLink('DETAILVIEWWIDGET', 'PDFMaker', 'module=PDFMaker&action=PDFMakerAjax&file=getPDFActions&record=$RECORD$');
//     $link_module->addLink('DETAILVIEWSIDEBARWIDGET', 'PDFMaker', 'module=PDFMaker&view=GetPDFActions&record=$RECORD$');
//     if ($modulename != "Events") $link_module->addLink('LISTVIEWMASSACTION', 'PDF Export', 'javascript:PDFMaker_Actions_Js.getPDFListViewPopup2(this,\'$MODULE$\');');
//     // remove non-standardly created links (difference in linkicon column makes the links twice when updating from previous version)
//     global $adb;
//     $tabid = getTabId($modulename);
//     $res = $adb->pquery("SELECT * FROM vtiger_links WHERE tabid=? AND linktype=? AND linklabel=? AND linkurl=? ORDER BY linkid DESC", array($tabid, 'DETAILVIEWWIDGET', 'PDFMaker', 'module=PDFMaker&action=PDFMakerAjax&file=getPDFActions&record=$RECORD$'));
//     $i = 0;
//     while ($row = $adb->fetchByAssoc($res)) {
//         $i++;
//         if ($i > 1)
//             $adb->pquery("DELETE FROM vtiger_links WHERE linkid=?", array($row['linkid']));
//     }
//     $res = $adb->pquery("SELECT * FROM vtiger_links WHERE tabid=? AND linktype=? AND linklabel=? AND linkurl=? ORDER BY linkid DESC", array($tabid, 'LISTVIEWMASSACTION', 'PDF Export', 'javascript:getPDFListViewPopup2(this,\'$MODULE$\');'));
//     $i = 0;
//     while ($row = $adb->fetchByAssoc($res)) {
//         $i++;
//         if ($i > 1)
//             $adb->pquery("DELETE FROM vtiger_links WHERE linkid=?", array($row['linkid']));
//     }
//     echo 'sucess';
//     // if ($modulename == "Calendar") $this->AddLinks('Events');

// }

// require_once('includes/Loader.php');
// require_once "modules/PDFMaker/PDFMaker.php";
// $pdf = new PDFMaker();
// $pdf->vtlib_handler('servicerequest','module.postupdate');
// echo 'sucess2';