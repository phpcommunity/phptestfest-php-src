--TEST--
Test for function posix_getpwnam() basic functionality
--CREDITS--
Rodrigo Prado de Jesus <royopa [at] gmail [dot] com>
User Group: PHPSP #PHPTestFestBrasil
--SKIPIF--
<?php 
    if(!extension_loaded("posix")) die("skip - POSIX extension not loaded");
?>
--FILE--
<?php
$username = posix_getpwuid(posix_geteuid())['name'];

if (posix_getlogin() == false) {
    $username = false;
}

$user_info = posix_getpwnam($username);

var_dump($username == $user_info['name']);
?>
--EXPECT--
bool(true)
