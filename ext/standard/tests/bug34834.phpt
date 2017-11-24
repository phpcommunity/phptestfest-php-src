--TEST--
BUG #34834 (array_merge_recursive() merges arrays with objects with arrays)
--CREDITS--
Rodrigo Prado de Jesus <royopa [at] gmail [dot] com>
User Group: PHPSP #PHPTestFestBrasil
--FILE--
<?php
class A 
{ 
  var $field = array(1);
}

$a = new A;
$x = array("a" => $a);

$y = array("a" => array("field" => array(2)));

var_dump(array_merge_recursive($x,$y));
?>
--XFAIL--
This test will fail until Bug #34834 is fixed
--EXPECT--
array(1) {
  ["a"]=>
  array(2) {
    [0]=>
    object(A)#1 (1) {
      ["field"]=>
      array(1) {
        [0]=>
        int(1)
      }
    }
    ["field"]=>
    array(1) {
      [0]=>
      int(2)
    }
  }
}
