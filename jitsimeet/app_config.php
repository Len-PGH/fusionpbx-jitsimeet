<?php
	//application details
		$apps[$x]['name'] = 'JitsiMeet';
		$apps[$x]['uuid'] = '0e436409-1f0c-4e03-9af8-b8dcc4d1a0c0';
		$apps[$x]['category'] = '';
		$apps[$x]['subcategory'] = '';
		$apps[$x]['version'] = '1.0';
		$apps[$x]['license'] = 'Mozilla Public License 1.1';
		$apps[$x]['url'] = 'http://www.fusionpbx.com';
		$apps[$x]['description']['en-us'] = 'Create a room on your Jitsi-Meet server then set the domain and room name here.';

	//permission details
		$y = 0;
		$apps[$x]['permissions'][$y]['name'] = 'jitsimeet_view';
		$apps[$x]['permissions'][$y]['groups'][] = 'superadmin';
		//$apps[$x]['permissions'][$y]['groups'][] = 'user';
		//$apps[$x]['permissions'][$y]['groups'][] = 'admin';
		$y++;

	//schema details
	//	$y = 0; //table array index
	//	$z = 0; //field array index
	//	$apps[$x]['db'][$y]['table'] = 'v_jitsimeet';
	//	$apps[$x]['db'][$y]['fields'][$z]['name'] = 'domain_uuid';
	//	$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = 'uuid';
	//	$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = 'text';
	//	$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = 'char(36)';
	//	$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = 'foreign';
	//	$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['table'] = 'v_domains';
	//	$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['field'] = 'domain_uuid';
	//	$z++;
		

	//default settings
		$y=0;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "32da4a78-ea1e-41dc-9bf7-562acb0efbbc";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "jitsimeet";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "jitsimeet_name";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "test";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Enter the room name.";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "606fd2b5-26fb-46ca-9751-9c33ae89641e";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "jitsimeet";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "jitsimeet_domain";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "sub.domain.tld";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Enter the domain name of the Jitsi-meet server.";
		$y++;


?>
