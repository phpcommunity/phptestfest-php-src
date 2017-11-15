--TEST--
Test for function posix_getgrnam() basic functionality
--CREDITS--
Rodrigo Prado de Jesus <royopa [at] gmail [dot] com>
User Group: PHPSP #PHPTestFestBrasil
--SKIPIF--
<?php 
    if(!extension_loaded("posix")) die("skip - POSIX extension not loaded");
?>
--FILE--
<?php
$group_ids = posix_getgroups();

if (is_null($group_ids) || (count($group_ids) == 0)) {
    $group_ids[0] = false;
}

$group = posix_getgrgid($group_ids[0]);

$group_name = $group['name'];

$info_group = posix_getgrnam($group_name);

var_dump($group_name == $info_group['name']);
?>
--EXPECT--
bool(true)
