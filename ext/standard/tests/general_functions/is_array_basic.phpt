--TEST--
Test function is_array() by calling it with its expected arguments
--FILE--
<?php
$array = [];
$var = is_array($array);

var_dumb($var);
?>
--EXPECTF--
bool(true)
