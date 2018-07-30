--TEST--
SoapVar should emit a warning if the type id is invalid (e.g. "Invalid")
--SKIPIF--
<?php require_once('skipif.inc'); ?>
--FILE--
<?php
$a = 1;
$soapVar = new SoapVar($a, "Invalid");
?>
--CREDITS--
PHP TestFest 2017 - PHPDublin - Ken Guest <kguest@php.net>
--EXPECTF--
Warning: SoapVar::SoapVar(): Invalid type ID in %s on line %d
