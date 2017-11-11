--TEST--
Test function is_array() by calling it with its expected arguments
--FILE--
<?php
$array = [];

$var = (is_array($array)) ? 1 : 0;

print_r($var);
?>
--EXPECTF--
1
