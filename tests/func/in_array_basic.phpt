--TEST--
Test function in_array() by calling it with its expected arguments
--CREDITS--
Rogerio Prado de Jesus <rogeriopradoj@php.net>
PHP TestFest 2017 - PHPDF - #1
PHPTestFestBrasil
--FILE--
<?php


echo "*** Test by calling method or function with its expected arguments ***\n";

$needle = 1;
$haystack = ["1", 2, 3];
$strict = true;



var_dump(in_array( $needle, $haystack ) );

var_dump(in_array( $needle, $haystack, $strict ) );


?>
--EXPECT--
*** Test by calling method or function with its expected arguments ***
bool(true)
bool(false)
