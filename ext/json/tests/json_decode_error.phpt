--TEST--
Test json_decode() function : error conditions
--SKIPIF--
<?php if (!extension_loaded("json")) print "skip"; ?>
--FILE--
<?php
echo "*** Testing json_decode() : error conditions ***\n";

echo "\n-- Testing json_decode() function with no arguments --\n";
var_dump(json_decode());

echo "\n-- Testing json_decode() function with more than expected no. of arguments --\n";
$extra_arg = 10;
var_dump(json_decode('"abc"', true, 512, 0, $extra_arg));

echo "*** Testing json_decode() : error depth is zero ***\n";
var_dump(json_decode('{}', false, 0));

echo "*** Testing json_decode() : error depth is lower than zero ***\n";
var_dump(json_decode('{}', false, -1));
?>
===Done===
--EXPECTF--
*** Testing json_decode() : error conditions ***

-- Testing json_decode() function with no arguments --

Warning: json_decode() expects at least 1 parameter, 0 given in %s on line %d
NULL

-- Testing json_decode() function with more than expected no. of arguments --

Warning: json_decode() expects at most 4 parameters, 5 given in %s on line %d
NULL
*** Testing json_decode() : error depth is zero ***

Warning: json_decode(): Depth must be greater than zero in %s on line %s
NULL
*** Testing json_decode() : error depth is lower than zero ***

Warning: json_decode(): Depth must be greater than zero in %s on line %s
NULL
===Done===
