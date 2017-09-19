--TEST--
mb_language() - invalid language error case
--CREDITS--
Chicago PHP UG
# TestFest 2017-09-18
--SKIPIF--
<?php if (!extension_loaded('mbstring')) die('skip ext/mbstring required'); ?>
--FILE--
<?php
var_dump(mb_language('Foo'));
?>
--EXPECTF--
Warning: mb_language(): Unknown language "Foo" in %s on line %d
bool(false)
