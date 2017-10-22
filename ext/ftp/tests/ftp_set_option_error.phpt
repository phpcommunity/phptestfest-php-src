--TEST--
Test function ftp_set_option() error handling by calling it with some bad arguments
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

echo "*** Test by calling method or function width bad arguments ***\n";

var_dump(ftp_set_option( $ftp, FTP_USEPASVADDRESS, 'phpugms' ) );

var_dump(ftp_set_option( $ftp, FTP_AUTOSEEK, 'phpugms' ) );

var_dump(ftp_set_option( $ftp, FTP_TIMEOUT_SEC, 'phpugms' ) );

var_dump(ftp_set_option( $ftp, FTP_TIMEOUT_SEC, -12 ) );

?>
--EXPECTF--
*** Test by calling method or function width bad arguments ***

Warning: ftp_set_option(): Option USEPASVADDRESS expects value of type boolean, string given in %s
bool(false)

Warning: ftp_set_option(): Option AUTOSEEK expects value of type boolean, string given in %s
bool(false)

Warning: ftp_set_option(): Option TIMEOUT_SEC expects value of type long, string given in %s
bool(false)

Warning: ftp_set_option(): Timeout has to be greater than 0 in %s
bool(false)

