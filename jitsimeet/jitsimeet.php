<?php
/*
	FusionPBX
	Version: MPL 1.1

	The contents of this file are subject to the Mozilla Public License Version
	1.1 (the "License"); you may not use this file except in compliance with
	the License. You may obtain a copy of the License at
	http://www.mozilla.org/MPL/

	Software distributed under the License is distributed on an "AS IS" basis,
	WITHOUT WARRANTY OF ANY KIND, either express or implied. See the License
	for the specific language governing rights and limitations under the
	License.

	The Original Code is FusionPBX

	The Initial Developer of the Original Code is
	Mark J Crane <markjcrane@fusionpbx.com>
	Portions created by the Initial Developer are Copyright (C) 2018 - 2020
	the Initial Developer. All Rights Reserved.

	Contributor(s):
	Len Graham <len@fusionpbx.com>
  	Mark J Crane <markjcrane@fusionpbx.com>
*/

//includes
	require_once "root.php";
	require_once "resources/require.php";
	require_once "resources/check_auth.php";


//check permissions
	if (permission_exists('jitsimeet_view')) {
		//access granted
	}
	else {
		echo "access denied";
		exit;
	}

//add multi-lingual support
	$language = new text;
	$text = $language->get();

//set the variables

	$jitsimeet_domain = $_SESSION['jitsimeet']['jitsimeet_domain']['text'];
	$jitsimeet_name = $_SESSION['jitsimeet']['jitsimeet_name']['text'];

//create token
//	$object = new token;
//	$token = $object->create($_SERVER['PHP_SELF']);

//include the header
//	$document['title'] = $text['title-jitsimeet'];
//	require_once "resources/header.php";

//show the content
//	echo "<div class='action_bar' id='action_bar'>\n";
//	echo "	<div class='heading'><b>".$text['title-jitsimeet']." (".$num_rows.")</b></div>\n";
 

//	echo "</table>\n";
//	echo "<br />\n";
//	echo "<div align='center'>".$paging_controls."</div>\n";
//	echo "<input type='hidden' name='".$token['name']."' value='".$token['hash']."'>\n";
//	echo "</form>\n";

//include the footer

 	echo '<iframe allow="camera; microphone; fullscreen; display-capture" src="https://'.$jitsimeet_domain.'/'.$jitsimeet_name.'" style="height: 800px; width: 100%; border: 0px;"></iframe>';
	require_once "resources/footer.php";
?>
