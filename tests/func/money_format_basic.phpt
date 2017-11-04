--TEST--
Test function money_format() by calling it with its expected arguments
--CREDITS--
Raniery Ribeiro <raniery.rrr@gmail.com>
PHP TestFest 2017 - PHPDF - #1
PHPTestFestBrasil
--FILE--
<?php


// setlocale(LC_MONETARY, 'en_US.UTF-8');
setlocale(LC_ALL, 'en_US', 'en', 'en', 'en');


$format = '%i';
$value = 1234.56;



echo money_format( $format, $value );


?>
--EXPECT--
USD 1,234.56
