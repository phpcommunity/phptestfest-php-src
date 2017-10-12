--TEST--
SoapParam should emit a warning if the parameter name is an empty string
--SKIPIF--
<?php require_once('skipif.inc'); ?>
--FILE--
<?php
$a = 1;
$fault = new SoapParam($a, "");
$fault = new SoapParam($a, "Name");
var_dump ($fault);
?>
--CREDITS--
PHP TestFest 2017 - PHPDublin - Ken Guest <kguest@php.net>
--EXPECTF--
Warning: SoapParam::SoapParam(): Invalid parameter name in %s on line %d
object(SoapParam)#%d (%d) {
  ["param_name"]=>
  string(4) "Name"
  ["param_data"]=>
  int(1)
}
