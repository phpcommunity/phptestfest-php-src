--TEST--
readline - test passing EOF returns false
--SKIPIF--
<?php if (!extension_loaded("readline")) die("skip"); ?>
--FILE--
<?php
var_dump(readline("Test Ctrl+D:"));
?>
--STDIN--
--EXPECT--
Test Ctrl+D:bool(false)
