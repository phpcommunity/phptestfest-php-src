--TEST--
json_decode() - test invalid depth error
--CREDITS--
Milwaukee PHP User Group
#PHPTestFest2017
--SKIPIF--
<?php if (!extension_loaded("json")) { print "skip"; die(); } ?>
--FILE--
<?php
var_dump(json_decode('"test"', false, 0));
var_dump(json_decode('"test"', false, -1));
?>
--EXPECTF--
Warning: json_decode(): Depth must be greater than zero in %s on line %d
NULL

Warning: json_decode(): Depth must be greater than zero in %s on line %d
NULL