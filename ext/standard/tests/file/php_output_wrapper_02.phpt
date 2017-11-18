--TEST--
php://output wrapper: read test
--FILE--
<?php
$f = fopen("php://output", "r+");
var_dump(fread($f, 42));
var_dump(feof($f));
?>
--EXPECT--
string(0) ""
bool(true)