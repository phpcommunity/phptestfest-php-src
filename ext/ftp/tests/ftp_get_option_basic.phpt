--TEST--
Test function ftp_get_option() by calling it with its expected arguments
--SKIPIF--
<?php
require 'skipif.inc';
?>
--FILE--
<?php
require 'server.inc';

$ftp = ftp_connect('127.0.0.1', $port);
if (!$ftp) die("Couldn't connect to the server");
ftp_login($ftp, 'user', 'pass');

echo "*** Test by calling method or function with required arguments ***\n";

var_dump(ftp_get_option( $ftp, FTP_USEPASVADDRESS ) );

var_dump(ftp_get_option( $ftp, FTP_AUTOSEEK ) );

var_dump(ftp_get_option( $ftp, FTP_TIMEOUT_SEC ) );

?>
--EXPECTF--
*** Test by calling method or function with required arguments ***
bool(true)
bool(true)
int(90)
