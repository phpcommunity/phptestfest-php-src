--TEST--
Testing imagefilledellipse() of GD library
--SKIPIF--
<?php 
if (!extension_loaded("gd")) die("skip GD not present");
?>
--FILE--
<?php

$image = fopen(__FILE__, 'r');

var_dump(imagefilledellipse($image, 10, 10 , 20, 20, 340));

?>
--EXPECTF--
Warning: imagefilledellipse(): supplied resource is not a valid Image resource in %s on line %d
bool(false)
