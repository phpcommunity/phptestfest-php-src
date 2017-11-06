--TEST--
xml_get_error_code - Test returns error code
--CREDIT--
Mark Niebergall <mbniebergall@gmail.com>
PHP TestFest 2017 - UPHPU
--SKIPIF--
<?php 
if (!extension_loaded("xml")) {
    print "skip - XML extension not loaded";
}
?>
--FILE--
<?php

$xmlParser = xml_parser_create();
$xmlData = '<data><fruit>apple</fruit></data>';

$isSuccess = xml_parse($xmlParser, $xmlData, true);

var_dump(xml_get_error_code($xmlParser) == XML_ERROR_NONE);

?>
--EXPECT--
bool(true)
