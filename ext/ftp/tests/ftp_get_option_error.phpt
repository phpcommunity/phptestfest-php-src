--TEST--
Test function ftp_get_option() error handling by calling it with some bad arguments
--SKIPIF--
<?php
require 'skipif.inc';
?>
--FILE--
<?php
require 'server.inc';

define("FOO_BAR", 12);

$ftp = ftp_connect('127.0.0.1', $port);
if (!$ftp) die("Couldn't connect to the server");
ftp_login($ftp, 'user', 'pass');

echo "*** Test by calling method or function width bad arguments ***\n";

var_dump(ftp_get_option( $ftp, FOO_BAR ) );
?>
--EXPECTF--
*** Test by calling method or function width bad arguments ***

Warning: ftp_get_option(): Unknown option '12' in %s
bool(false)
