--TEST--
datefmt_format_code()
--CREDITS--
Hannes Van De Vreken <vandevreken.hannes@gmail.com>
User Group: PHP-WVL & PHPGent #PHPTestFest
--SKIPIF--
<?php
if( !extension_loaded( 'intl' ) ) print 'skip';
?>
--FILE--
<?php

$formatter = IntlDateFormatter::create(
    'en_US',
    IntlDateFormatter::FULL,
    IntlDateFormatter::FULL,
    'America/Los_Angeles',
    IntlDateFormatter::GREGORIAN
);

$formatter->format(0);
echo $formatter->getErrorCode() . "\n";
echo $formatter->getErrorMessage();

?>
--EXPECT--
0
U_ZERO_ERROR