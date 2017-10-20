--TEST--
readline_info(): Basic test
--CREDITS--
Burak Çakırel @burakcakirel - Istanbul PHP UG - PHP Testfest 2017
--SKIPIF--
<?php if (!extension_loaded("readline")) die("skip");
if (READLINE_LIB == "libedit") die("skip readline only");
?>
--FILE--
<?php

var_dump(readline_info('line_buffer', 1, 'error'));

?>
--EXPECTF--
Warning: readline_info() expects at most 2 parameters, 3 given in %s on line %d
NULL
