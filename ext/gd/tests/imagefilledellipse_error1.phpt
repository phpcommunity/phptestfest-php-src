--TEST--
Testing imagefilledellipse() number of parameters
--SKIPIF--
<?php
if (!extension_loaded("gd")) die("skip GD not present");
?>
--FILE--
<?php

$image = fopen('php://memory', 'w');

var_dump(imagefilledellipse($image));
var_dump(imagefilledellipse($image, 9));
var_dump(imagefilledellipse($image, 9 , 10));
var_dump(imagefilledellipse($image, 9 , 10, 7));
var_dump(imagefilledellipse($image, 9 , 10, 7, 42));
?>
--EXPECTF--
Warning: imagefilledellipse() expects exactly 6 parameters, %d given in %s on line %d
NULL

Warning: imagefilledellipse() expects exactly 6 parameters, %d given in %s on line %d
NULL

Warning: imagefilledellipse() expects exactly 6 parameters, %d given in %s on line %d
NULL

Warning: imagefilledellipse() expects exactly 6 parameters, %d given in %s on line %d
NULL

Warning: imagefilledellipse() expects exactly 6 parameters, %d given in %s on line %d
NULL