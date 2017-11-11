--TEST--
Test function strlen() by calling it with its expected arguments
--FILE--
<?php

$str = 'Teste'; 
var_dump(strlen($str));

?>
--EXPECTF--
int(5)
