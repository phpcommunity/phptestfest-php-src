--TEST--
Test UConverter::transcode() function : basic functionality 
--CREDITS--
Rodrigo Prado de Jesus <royopa [at] gmail [dot] com>
User Group: PHPSP #phptestfestbrasil
--SKIPIF--
<?php 
	if (!extension_loaded('intl')) die('skip - INTL extension not loaded'); 
?>
--FILE--
<?php 

$latin1string = "Lingüiça assada não mata a fome";

$utf8string = UConverter::transcode($latin1string, 'utf-8', 'latin1');

var_dump($utf8string);

$utf8string = "LingÃ¼iÃ§a assada nÃ£o mata a fome";

$latin1string = UConverter::transcode($utf8string, 'latin1', 'utf-8');

var_dump($latin1string);

?>
--EXPECT--
string(40) "LingÃ¼iÃ§a assada nÃ£o mata a fome"
string(34) "Lingüiça assada não mata a fome"
