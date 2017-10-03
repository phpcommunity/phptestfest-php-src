--TEST--
tmpfile expecting no parameters error
--FILE--
<?php
var_dump(tmpfile('blah'));
?>
--EXPECTF--
Warning: tmpfile() expects exactly 0 parameters, 1 given in %s on line %d
NULL