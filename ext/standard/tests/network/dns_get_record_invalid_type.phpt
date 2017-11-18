--TEST--
Test dns_get_record() with invalid type
--FILE--
<?php
var_dump(dns_get_record("google.com", 4));
?>
--EXPECTF--
Warning: dns_get_record(): Type '4' not supported in %s on line %d
bool(false)