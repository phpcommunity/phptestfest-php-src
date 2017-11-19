--TEST--
imagecolorclosestalpha test wrong params
--SKIPIF--
<?php
        if (!function_exists('imagecolorclosestalpha')) die("skip gd extension not available\n");
?>
--FILE--
<?php

$im = imagecreatetruecolor(5,5);

var_dump(imagecolorclosestalpha());
var_dump(imagecolorclosestalpha($im));
var_dump(imagecolorclosestalpha($im, 1));
var_dump(imagecolorclosestalpha($im, 1, 2));
var_dump(imagecolorclosestalpha($im, 1, 2, 3));


?>
--EXPECTF--
Warning: imagecolorclosestalpha() expects exactly 5 parameters, %d given in %s on line %d
NULL

Warning: imagecolorclosestalpha() expects exactly 5 parameters, %d given in %s on line %d
NULL

Warning: imagecolorclosestalpha() expects exactly 5 parameters, %d given in %s on line %d
NULL

Warning: imagecolorclosestalpha() expects exactly 5 parameters, %d given in %s on line %d
NULL

Warning: imagecolorclosestalpha() expects exactly 5 parameters, %d given in %s on line %d
NULL