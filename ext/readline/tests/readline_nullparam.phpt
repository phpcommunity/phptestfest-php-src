--TEST--
Test the function readline with null parameter (wrong because the function expects a string parameter).
--CREDITS--
Rodrigo Prado de Jesus <royopa [at] gmail [dot] com>
User Group: PHPSP #phptestfestbrasil
http://phpsp.org.br/
--SKIPIF--
<?php if (!extension_loaded("readline") die("skip"); ?>
--FILE--
<?php
$line = readline(null);
?>
--EXPECTF--
