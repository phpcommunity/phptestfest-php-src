--TEST--
http_response_code - basic tests
--CREDITS--
Mark Niebergall mbniebergall@gmail.com UPHPU TestFest 2017
--FILE--
<?php
var_dump(http_response_code());
var_dump(http_response_code(200));
var_dump(http_response_code(404));
var_dump(http_response_code(404));
var_dump(http_response_code());
?>
--EXPECTF--
bool(false)
bool(true)
int(200)
int(404)
int(404)
