--TEST--
Test function var_dump() by calling it with its expected arguments
--CREDITS--
Guaracy A Lima <guaracyaraujolima@gmail.com>
PHP TestFest 2017 - PHPDF - #1
PHPTestFestBrasil
04/11/2017
--FILE--
<?php


echo "*** Test by calling method or function with its expected arguments ***\n";

$vars = array(1, 2, array("a", "b", "c"));



var_dump( $vars );


?>
--EXPECT--
*** Test by calling method or function with its expected arguments ***
array(3) {
  [0]=>
  int(1)
  [1]=>
  int(2)
  [2]=>
  array(3) {
    [0]=>
    string(1) "a"
    [1]=>
    string(1) "b"
    [2]=>
    string(1) "c"
  }
}
