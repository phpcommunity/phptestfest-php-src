--TEST--
Test addcslashes() function : basic functionality using "\a" and "\b"
--CREDITS--
Rodrigo Prado de Jesus <royopa [at] gmail [dot] com>
User Group: PHPSP #PHPTestFestBrasil
--FILE--
<?php
$string = "string to be escaped is \a";
var_dump(addcslashes($string, '\a'));

$string = "string to be escaped is \b";
var_dump(addcslashes($string, '\b'));
?>
--EXPECTF--
string(29) "string to be esc\aped is \\\a"
string(29) "string to \be escaped is \\\b"
