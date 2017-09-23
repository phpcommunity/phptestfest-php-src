--TEST--
readline - test passing too many args returns false
--SKIPIF--
<?php if (!extension_loaded("readline")) die("skip"); ?>
--FILE--
<?php
var_dump(readline("test", "test"));
?>
--EXPECTF--
Warning: readline() expects at most 1 parameter, 2 given in %s on line %d
bool(false)
