--TEST--
date_sub - invalid arguments
--CREDITS--
Derek Caswell derek.caswell@gmail.com UPHPU TestFest 2017
--FILE--
<?php
var_dump(date_sub('asdf', 'asdf'));
?>
--EXPECTF--
Warning: date_sub() expects parameter 1 to be DateTime, string given in %s on line %d
bool(false)