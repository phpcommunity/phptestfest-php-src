--TEST--
Test for function extract() using a invalid prefix
--CREDITS--
Rodrigo Prado de Jesus <royopa [at] gmail [dot] com>
User Group: PHPSP #PHPTestFestBrasil
--FILE--
<?php
$size = "large";

$var_array = array("color" => "blue",
                   "size"  => "medium",
                   "shape" => "sphere");

$valid_prefix = "wddx";
extract($var_array, EXTR_PREFIX_SAME, $valid_prefix);
echo "$color, $size, $shape, $wddx_size";

$invalid_prefix = 1;
extract($var_array, EXTR_PREFIX_SAME, $invalid_prefix);
?>
--EXPECTF--
blue, large, sphere, medium
Warning: extract(): prefix is not a valid identifier in %s on line %d
