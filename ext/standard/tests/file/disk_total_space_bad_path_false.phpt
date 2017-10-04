--TEST--
Ensures disk_total_space returns a false php_check_open_basedir is false
--CREDITS--
David Stockton - <dave@davidstockton.com> - i3logix PHP Testfest 2017
--FILE--
<?php
// Need very large path to cause false return from php_check_open_basedir
$tmp = '/' . str_repeat('a', 4096);
ini_set('open_basedir', $tmp);
var_dump(disk_total_space($tmp . '/non-existent-path'));
?>
--EXPECTF--
Warning: disk_total_space(): File name is longer than the maximum allowed path length on this platform %s
bool(false)
