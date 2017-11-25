--TEST--
Test function strripos() - Gets a warning when the offset is greater than the length of haystack string
--CREDITS--
Rodrigo Prado de Jesus <royopa [at] gmail [dot] com>
User Group: PHPSP #PHPTestFestBrasil
--FILE--
<?php
$haystack = 'ababcd';
$needle   = 'aB';
$offset = 7;

var_dump(strripos($haystack, $needle, $offset));
?>
--EXPECTF--
Warning: strripos(): Offset is greater than the length of haystack string in %s on line %d
bool(false)
