--TEST--
Test ftp_ssl_connect() function : timeout condition
--SKIPIF--
<?php
$ssl = 1;
require 'skipif.inc';
if (!function_exists("ftp_ssl_connect")) die("skip ftp_ssl is disabled");
?>
--FILE--
<?php
echo "*** Testing ftp_ssl_connect() function : timeout condition ***\n";
echo "\n-- Testing ftp_ssl_connect() function timeout warning for value 0 --\n";
var_dump(ftp_ssl_connect('phpug.ms', 22, 0));
var_dump(ftp_ssl_connect('phpug.ms', 22, -42));
var_dump(ftp_ssl_connect('phpug.ms', 22, null));
var_dump(ftp_ssl_connect('phpug.ms', 22, '0'));

echo "===DONE===\n";

--EXPECTF--
*** Testing ftp_ssl_connect() function : timeout condition ***

-- Testing ftp_ssl_connect() function timeout warning for value 0 --

Warning: ftp_ssl_connect(): Timeout has to be greater than 0 in %s on line %d
bool(false)

Warning: ftp_ssl_connect(): Timeout has to be greater than 0 in %s on line %d
bool(false)

Warning: ftp_ssl_connect(): Timeout has to be greater than 0 in %s on line %d
bool(false)

Warning: ftp_ssl_connect(): Timeout has to be greater than 0 in %s on line %d
bool(false)
===DONE===
