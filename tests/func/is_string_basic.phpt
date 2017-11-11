--TEST--
Test function is_string() by calling it with its expected arguments
--FILE--
<?php


$var = 'Hello World';
var_dump(is_string($var));



?>
--EXPECTF--
bool(true)