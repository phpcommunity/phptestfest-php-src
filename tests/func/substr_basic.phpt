--TEST--
Test function substr() by calling it with its expected arguments
--CREDITS--
Rogerio Prado de Jesus <rogeriopradoj@php.net>
PHP TestFest 2017 - PHPDF - #1
PHPTestFestBrasil
--FILE--
<?php


echo "*** Test by calling method or function with its expected arguments ***\n";

$str = 'phptestfest2017';
$start = 0;
$length = 11;



var_dump(substr( $str, $start ) );

var_dump(substr( $str, $start, $length ) );


?>
--EXPECT--
*** Test by calling method or function with its expected arguments ***
string(15) "phptestfest2017"
string(11) "phptestfest"
