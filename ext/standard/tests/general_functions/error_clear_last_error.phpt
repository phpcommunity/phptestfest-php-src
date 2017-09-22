--TEST--
error_clear_last() - with args
--CREDIT--
Marcos Minond minond.marcos@gmail.com UPHPU TestFest 2017
--FILE--
<?php

error_clear_last("with arguments");

?>
--EXPECTF--	
Warning: error_clear_last() expects exactly 0 parameters, 1 given in %s on line %d
