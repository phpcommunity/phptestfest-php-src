--TEST--
exec() should return false and raise a warning on blank command.
--FILE--
<?php
var_dump(exec(''));
?>
--EXPECTF--
Warning: exec(): Cannot execute a blank command in %s on line %d
bool(false)
