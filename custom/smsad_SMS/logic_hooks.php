<?php

// Do not store anything in this file that is not part of the array or the hook version.  This file will	
// be automatically rebuilt in the future. 
$hook_version = 1;
$module_name = 'smsad_SMS';
$hook_array = Array();
// position, file, function 
$hook_array['before_save'] = Array();
$hook_array['before_save'][] = Array(1, 'sendSMS', 'modules/'.$module_name.'/smsaddonLogicHook.php', 'smsad_smsLogicHook', 'beforeSendSMS');
$hook_array['after_save'] = Array();
$hook_array['after_save'][] = Array(1, 'sendSMS', 'modules/'.$module_name.'/smsaddonLogicHook.php', 'smsad_smsLogicHook', 'sendSMS');
//$hook_array['after_relationship_add'] = Array(); 
//$hook_array['after_relationship_add'][] = Array(77, 'addRelationship', 'modules/Project/ProjectJjwg_MapsLogicHook.php','ProjectJjwg_MapsLogicHook', 'addRelationship'); 
//$hook_array['after_relationship_delete'] = Array(); 
//$hook_array['after_relationship_delete'][] = Array(77, 'deleteRelationship', 'modules/Project/ProjectJjwg_MapsLogicHook.php','ProjectJjwg_MapsLogicHook', 'deleteRelationship'); 
?>
