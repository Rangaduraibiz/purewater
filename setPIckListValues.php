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

// Set Category Picklist Values In HelpDesk Module
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('HelpDesk');
$blockInstance = Vtiger_Block::getInstance('LBL_CUSTOM_INFORMATION', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('ticket_type', $moduleInstance);
    if ($fieldInstance) {
        $newPickListValues = array("AC Units", "Civil Works", "Drinking Water Fountain", "Electrical Works", "Emergency Electrical Shock", "Emergency Fire", "Emergency Water Overflowing", "Horticulture", "Housekeeping", "LIFTS", "Telephones", "Watersupply");
        $existPicklistValues = array();
        if ($fieldInstance->uitype == '16') {
            $existPicklistValues = getEditablePicklistValues($fieldInstance->name, array(), $adb);
        }

        $finalPicklistValues = array();
        if( count($newPickListValues) !== count($existPicklistValues) ) {
            $finalPicklistValues = array_diff($newPickListValues, $existPicklistValues);
        }
        $fieldInstance->setPicklistValues($finalPicklistValues);
    } else {
        echo "field is not Present --- ticket_type in HelpDesk Module --- <br>";
    }
} else {
    echo "Block does not exits --- LBL_CUSTOM_INFORMATION -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;

// Set Sub Category Picklist Values In HelpDesk Module
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('HelpDesk');
$blockInstance = Vtiger_Block::getInstance('LBL_CUSTOM_INFORMATION', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('sub_category', $moduleInstance);
    if ($fieldInstance) {
        $newPickListValues = array("AC - Need Servicing", "AC Duct Not Cleaned", "AC No Cooling", "AC Noisy", "AC Not Working", "AC Smell", "AC Water Leak", "Aldrop/Tower Bolt/Handle/Hinges Repair - A", "Aldrop/Tower Bolt/Handle/Hinges Repair - B", "Aldrop/Tower Bolt/Handle/Hinges Repair - C", "Aldrop/Tower Bolt/Handle/Hinges Repair - D", "Aldrop/Tower Bolt/Handle/Hinges Repair - E", "Anti Cockroach Treatment - A", "Anti Cockroach Treatment - B", "Auto Flush Not Working", "Ball/Floating Valve Repair", "Black Board/White Board/Name Board Fixing", "Blockage From Manholes At Outside", "Blockage Removal Outside The Building-A", "Blockage Removal Outside The Building-B", "Blockage Removal Outside The Building-C", "Boards / Signage Not Cleaned", "Cabins / Partitions Not Cleaned", "Calling Bell Faulty", "Carbon Block To Be Replaced", "Change Of Damaged W.C Seat-A", "Change Of Damaged W.C Seat-B", "Change Of Damaged W.C Seat-C", "Change Of Damaged W.C Seat-D", "Change Of Damaged W.C Seat-E", "Change Of Damaged Water Closet-A", "Change Of Damaged Water Closet-B", "Change Of Damaged Water Closet-C", "Class Room / Common Room Not Cleaned", "Cleaning Schedule/Checklist Not Fixed/updated In The Rest Room", "Concrete Spalling / Patch Work - A", "Concrete Spalling / Patch Work - B", "Concrete Spalling / Patch Work - C", "Corridor / Staircase Not Cleaned", "Cupboard Repair-A", "Cupboard Repair-B", "Curtain rod/vertical blinds replacement", "Cutting The Tree Branches", "Debris Removal - A", "Debris Removal - B", "Debris Removal - C", "Deep Cleaning Not Done", "Delivery Line Leakage / Broken", "Display Unit Not Working", "Door Closer/floor Spring - A", "Door Closer/floor Spring - B", "Door Closer/floor Spring - C", "Door Frame Repair/change - A", "Door Frame Repair/change - B", "Door Frame Repair/change - C", "Door Need To Be Changed - A", "Door Need To Be Changed - B", "Door Need To Be Changed - C", "Door Need To Be Changed - D", "Door Need To Be Changed - E", "Door Repair - A", "Door Repair - B", "Door Repair - C", "Door Repair - D", "Door Repair - E", "Door Stopper - A", "Door Stopper - B", "Door Stopper - C", "Drain Blocked (Inside House) - A", "Drain Blocked (Inside House) - B", "Drain Blocked (Inside House) - C", "Drain Blocked (outside House) - A", "Drain Blocked (outside House) - B", "Drain Blocked (outside House) - C", "During Cleaning Safety Signs Not Used", "Electrical Shock", "Emergency Fire", "Exhaust fan faulty", "Exhaust Fan Not Cleaned", "Extra Cleaning Required For Seminar/conference/special Function", "Extra Cleaning Required On Holiday - Only For AZ Area Fn CLT SAC ", "Faculty Room Not Cleaned", "False Alarm/Indication", "False Ceiling Damaged", "Fence Repair", "Filter Bag To Be Replaced / Washed", "Fittings/Installation Has Been Damaged By Housekeeping Staff", "Floor Tiles Not Cleaned", "Flooring Repair - A", "Flooring Repair - B", "Flooring Repair - C", "Flush Not Working - A", "Flush Not Working - B", "Flush Not Working - C", "Flush Not Working - D", "Flush Not Working - E", "Flush Overflow - A", "Flush Overflow - B", "Flush Overflow - C", "Foot Pedal Leakage / Replacement", "Foul-smelling", "Furniture Not Cleaned", "Garbage Not Handed Over To 0wzone", "Garbage Not Removed From Litter Bin", "Geyser not working", "Glass Pane Broken - A", "Glass Pane Broken - B", "Glass Pane Broken - C", "Glass Pane Broken - D", "Glass Pane Broken - E", "Glass Pane Not Cleaned", "Glass shelf broken", "Handrails Not Cleaned", "Health Faucet Repair - A", "Health Faucet Repair - B", "Health Faucet Repair - C", "Health Faucet Repair - D", "Health Faucet Repair - E", "Holes Closing / Packing", "Housekeeping Head Of Operative (supervisor) Not Deployed ", "Housekeeping Operative (labours) Not Deployed", "Housekeeping Operative Arrived Late", "Housekeeping Operatives Not Wore Uniform / Identity Card", "Keyboard Drawer Repair / Replacement", "Keyboard Drawer Wheel Broken", "Lab / Workshop Area Not Cleaned", "Leakage From The Water-purifier", "Leakage In Drain Pipe - A", "Leakage In Drain Pipe - B", "Leakage In Drain Pipe - C", "Leakage In Drain Pipe - D", "Leakage In Drain Pipe - E", "Leakage in Hydrant", "Leakage In Water Line Inside Building - A", "Leakage In Water Line Inside Building - B", "Leakage In Water Line Inside Building - C", "Leakage In Water Line Outside Building - A", "Leakage In Water Line Outside Building - B", "Leakage In Water Line Outside Building - C", "Leakage of Current", "Leaking Roof - A", "Leaking Roof - B", "Leaking Roof - C", "Library/Conference/Seminar/Meeting/Utility Room Not Cleaned", "Lift Fan Not Working", "Lift Light Not Working", "Lift Not Working", "Lift Struck Up", "Light not working", "Litter Bins Not Provided", "Litter To Be Removed", "Lobby / Corridor light not working", "Lock Opening", "Lock/Latch Fixing - A", "Lock/Latch Fixing - B", "Lock/Latch Fixing - C", "Lock/Latch Fixing - D", "Lock/Latch Fixing - E", "Manhole Cover Missing - A", "Manhole Cover Missing - B", "Manhole Overflow - A", "Manhole Overflow - B", "Manhole Overflow - C", "Manual call point glass broken", "MCB tripping", "Mirror Replacement - A", "Mirror Replacement - B", "Mirror Replacement - C", "Miscellaneous - A", "Miscellaneous - B", "Miscellaneous - C", "Miscellaneous - D", "Miscellaneous - E", "Mopping Not Done", "Mosquito menace", "Nails Fixing / Holes Drilling", "Naphthalene Balls Not Provided", "No dial tone", "No power", "No Water", "No Water In The Over Head Tank", "No Water In Toilet - A", "No Water In Toilet - B", "No Water In Toilet - C", "Noise Related Problem", "Odour From Water", "Office Room Not Cleaned", "Overflow From Over Head Tank", "Phone line is Dead", "Phone Not Working Properly", "Pipe Broken - A", "Pipe Broken - B", "Pipe Broken - C", "Pipe Broken - D", "Pipe Broken - E", "Pipe Leaking (Inside House) - A", "Pipe Leaking (Inside House) - B", "Pipe Leaking (Inside House) - C", "Pipe Leaking (Inside House) - D", "Pipe Leaking (Inside House) - E", "Providing New Pipe Line Based On The Floor", "Provision For AC Fixing", "Pump not working", "Removal Of Fallen Tree / Dead Tree", "Removal of thorny plants", "Repair of Cot for Hostel & Guest House only", "Repair of Furniture for Academic/Hostel & Guest House only", "Repairing of Black/White Board", "Repairing of Cot side table for Hostel & Guest House only", "Repairing of Curtains (Old) for Academic Zone only", "Repairing of Dressing table for Guest House only", "Repairing Of Lock - A", "Repairing Of Lock - B", "Repairing Of Lock - C", "Repairing of Pelmet for Academic/Hostel & Guest House only", "Repairs Of Water Supply Fittings - A", "Repairs Of Water Supply Fittings - B", "Repairs Of Water Supply Fittings - C", "Replacing Chamber Cover - A", "Replacing Chamber Cover - B", "Replacing Chamber Cover - C", "Research Scholar Room Not Cleaned", "Rest Room / Toilet Not Cleaned", "Rolling Shutter Repair / Service", "Scheduled Maintenance Not Done", "Screens / Blinds Not Cleaned", "Seepage - A", "Seepage - B", "Seepage - C", "Service Not Done Properly", "Shifting Of Telephone", "Shower Leakage - A", "Shower Leakage - B", "Shower Leakage - C", "Sink/wash Basin Waste Pipe Broken - B", "Sink/wash Basin Waste Pipe Broken - C", "Sink/wash Basin Waste Pipe Broken - A", "Sink/wash Basin Waste Pipe Broken - D", "Sink/wash Basin Waste Pipe Broken - E", "Sink/Washbasin Broken - A", "Sink/Washbasin Broken - B", "Sink/Washbasin Broken - C", "Sink/Washbasin Leakage - A", "Sink/Washbasin Leakage - B", "Sink/Washbasin Leakage - C", "Sliding Door Repair - A", "Sliding Door Repair - B", "Soap Dispenser Not Refilled", "Solar Line Leakage/broken - A", "Solar Line Leakage/broken - B", "Sparking or short circuit / Smell", "Spill Over To Be Cleaned", "Spun Filter To Be Replaced", "Staircase light not working", "Streetlight not working", "Sub Category Not Selected", "Supply of potted plants for Conferences", "Suspended Particle / Turbid Water", "Sweeping Not Done", "switch/socket/regulator faulty", "Table Top Glass To Be Provided", "Tables / Benches / Desks / Chairs Not Cleaned", "Tap Faulty - A", "Tap Faulty - B", "Tap Faulty - C", "Tap Faulty - D", "Tap Faulty - E", "Termite treatment", "Terrace Not Cleaned", "Tiles Damaged", "Tiles Repair - A", "Tiles Repair - B", "Tiles Repair - C", "Toilet Blockage / Urinal Blockage", "Touch Up Painting", "Towel Rod To Be Replaced - A", "Towel Rod To Be Replaced - B", "Towel Rod To Be Replaced - C", "Trapped In Lift", "Tubelight fault/Flickering", "Urinal Basin/drainage Not Cleaned", "Urinal Cubes Not Provided", "Urinal Leakage", "UV Lamp To Be Replaced", "Vegetation To Be Removed From Roof/Building - A", "Vegetation To Be Removed From Roof/Building - B", "Vegetation To Be Removed From Roof/Building - C", "Vegetation To Be Removed From Roof/Building - D", "Vegetation To Be Removed From Roof/Building - E", "W.C. Blocked (Inside House) - A", "W.C. Blocked (Inside House) - B", "W.C. Blocked (Inside House) - C", "W.C. Blocked (Inside House) - D", "W.C. Blocked (Inside House) - E", "Wall Cracks - A", "Wall Cracks - B", "Wall Cracks - C", "Wall Tiles Not Cleaned", "Wall Tiles Repair - A", "Wall Tiles Repair - B", "Wall Tiles Repair - C", "Washbasin Not Cleaned", "Water Closet Not Cleaned", "Water Overflow", "Water Overflowing From Kitchen/Bathroom Tank - A", "Water Overflowing From Kitchen/Bathroom Tank - B", "Water Overflowing From Kitchen/Bathroom Tank - C", "Water Stagnation - A", "Water Stagnation - B", "Water Stagnation - C", "Water Tank Cleaning", "Water-purifier Not Working", "Window Need To Be Changed - A", "Window Need To Be Changed - B", "Window Need To Be Changed - C", "Window Repair - A", "Window Repair - B", "Window Repair - C", "Wiremesh Broken - A", "Wiremesh Broken - B", "Wiremesh Broken - C");
        $existPicklistValues = array();
        if ($fieldInstance->uitype == '16') {
            $existPicklistValues = getEditablePicklistValues($fieldInstance->name, array(), $adb);
        }

        $finalPicklistValues = array();
        if( count($newPickListValues) !== count($existPicklistValues) ) {
            $finalPicklistValues = array_diff($newPickListValues, $existPicklistValues);
        }
        $fieldInstance->setPicklistValues($finalPicklistValues);
    } else {
        echo "field is not Present --- sub_category in HelpDesk Module --- <br>";
    }
} else {
    echo "Block does not exits --- LBL_CUSTOM_INFORMATION -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
