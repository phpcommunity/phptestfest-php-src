--TEST--
SoapHeader emits specific warnings depending on invalid parameters passed to constructor.
--SKIPIF--
<?php require_once('skipif.inc'); ?>
--FILE--
<?php
$namespace = 'urn:Foo-BAR';
/* FROM soap.c
   proto object SoapHeader::SoapHeader ( string namespace, string name [, mixed data [, bool mustUnderstand [, mixed actor]]])
   SoapHeader constructor */
$soapVarHeader = "value";
$soapVar = new SoapHeader("", "urn", $soapVarHeader); // Invalid - namespace can't be an empty string
$soapVar = new SoapHeader($namespace, "", $soapVarHeader); // Invalid - header name can't be an empty string
$soapVar = new SoapHeader($namespace, "name", $soapVarHeader, false, SOAP_ACTOR_NEXT);
$soapVar = new SoapHeader($namespace, "name", $soapVarHeader, false, SOAP_ACTOR_NONE);
$soapVar = new SoapHeader($namespace, "name", $soapVarHeader, false, SOAP_ACTOR_UNLIMATERECEIVER);
$soapVar = new SoapHeader($namespace, "name", $soapVarHeader, false, 4); // Invalid - actor value, if an integer must be one of the three SOAP_* constants above
$soapVar = new SoapHeader($namespace, "name", $soapVarHeader, false, NULL); // Invalid - actor value can't be null
$soapVar = new SoapHeader($namespace, "name", $soapVarHeader, false, "http://svc.example.com/soapService"); // Valid
$soapVar = new SoapHeader($namespace, "name", $soapVarHeader, false, ""); // Invalid - if it's a string, then it can't be empty
?>
--CREDITS--
PHP TestFest 2017 - PHPDublin - Ken Guest <kguest@php.net>
--EXPECTF--
Warning: SoapHeader::SoapHeader(): Invalid namespace in %s on line %d

Warning: SoapHeader::SoapHeader(): Invalid header name in %s on line %d

Warning: SoapHeader::SoapHeader(): Invalid actor in %s on line %d

Warning: SoapHeader::SoapHeader(): Invalid actor in %s on line %d

Warning: SoapHeader::SoapHeader(): Invalid actor in %s on line %d
