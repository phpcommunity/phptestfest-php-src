--TEST--
readline() function - with input
--CREDITS--
Jonathan Stevens <info at jonathanstevens dot be>
User Group: PHP-WVL & PHPGent #PHPTestFest
--SKIPIF--
<?php if (!extension_loaded("readline") || !function_exists('readline') || die("skip"); ?>
--STDIN--
dummy text
dummy text
true
false
--FILE--
<?php
var_dump(readline());
var_dump(readline('Prompt:'));
var_dump(readline());
var_dump(readline());
?>
--EXPECT--
string(10) "dummy text"
string(10) "dummy text"
string(4) "true"
string(5) "false"
