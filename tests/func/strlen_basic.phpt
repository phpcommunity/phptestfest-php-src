--TEST--
Test function strlen() by calling it with its expected arguments
--CREDITS--
Leonam Pereira Dias
--FILE--
<?php

$str = 'Manoel';
var_dump(strlen( $str ) );

?>
--EXPECTF--
int(6)
