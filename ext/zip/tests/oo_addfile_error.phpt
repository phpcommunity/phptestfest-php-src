--TEST--
ziparchive::addFile() failure test
--CREDITS--
Ward Cappelle <wardcappelle@gmail.com>
User Group: PHP-WVL & PHPGent #PHPTestFest
--SKIPIF--
<?php
/* $Id$ */
if(!extension_loaded('zip')) die('skip');
?>
--FILE--
<?php

$dirname = dirname(__FILE__) . '/';
$file = $dirname . '__tmp_oo_addfile.zip';

copy($dirname . 'test.zip', $file);

$zip = new ZipArchive;
if (!$zip->open($file)) {
	exit('could not open ZIP-file');
}

echo "Test case 1 - adding of non-existing file to existing ZIP:", PHP_EOL;
$addFileResult = $zip->addFile($dirname . 'non-existent-file.boo', 'test.php');

var_dump($addFileResult);

@unlink($file);
?>
--EXPECTF--
Test case 1 - adding of non-existing file to existing ZIP:
bool(false)