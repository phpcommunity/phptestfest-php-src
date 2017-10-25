--TEST--
SoapHeader allows an invalid URL as the actor string, 'invalid actor' warning should be raised.
--SKIPIF--
<?php require_once('skipif.inc'); ?>
--FILE--
<?php
/*
 * As per the spec,the SoapHeader actor attribute/parameter should be an URI/URL.
 *
 * https://www.w3.org/TR/2000/NOTE-SOAP-20000508/#_Toc478383499
 *
 * There is no validation to ensure this is the case.
 */
$namespace = 'urn:Foo-BAR';
$soapVarHeader = "value";
$invalidURL = "http://127_0_0_1/next";
var_dump(filter_var($invalidURL, FILTER_VALIDATE_URL));
$soapHeader = new SoapHeader($namespace, "name", $soapVarHeader, false, $invalidURL);
var_dump ($soapHeader); // shouldn't get this far.
?>
--CREDITS--
PHP TestFest 2017 - PHPDublin - Ken Guest <kguest@php.net>
--XFAIL--
Actor param is not validated yet.
--EXPECTF--
bool(false)
Warning: SoapHeader::SoapHeader(): Invalid actor in %s on line %d
