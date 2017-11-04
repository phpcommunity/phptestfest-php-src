--TEST--
Test function is_array() by calling it with its expected arguments
--CREDITS--
Adriano Vieira <adriano.svieira at gmail.com>
PHP TestFest 2017 - PHPDF - #1
PHPTestFestBrasil
PHPDF 
DevOpsDF
Meetup November 04
--FILE--
<?php


echo "*** Test by calling method or function with its expected arguments ***\n";

$var = [1, 2];

var_dump(is_array( $var ) );

?>
--EXPECT--
*** Test by calling method or function with its expected arguments ***
bool(true)
