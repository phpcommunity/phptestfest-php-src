--TEST--
Test function substr() by calling it with its expected arguments
--FILE--
<?php

$str = 'Olá Mundo!'; 
$start = 4;
$length = 5;



var_dump(substr( $str, $start ) );

var_dump(substr( $str, $start, $length ) );


?>
--EXPECTF--
string(7) " Mundo!"
string(5) " Mund"
