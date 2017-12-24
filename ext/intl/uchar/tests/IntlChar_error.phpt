--TEST--
IntlChar errors for incorrect codepoints
--SKIPIF--
<?php if (!extension_loaded('intl')) die("skip requires ext/intl") ?>
--FILE--
<?php
$codepoints = array(
    IntlChar::CODEPOINT_MIN - 1,
    IntlChar::CODEPOINT_MAX + 1,
    'long string',
    array(),
);
foreach($codepoints as $cp) {
  $chr = IntlChar::chr($cp);
  echo intl_get_error_message()."\n";
}
--EXPECT--
Codepoint out of range: U_ILLEGAL_ARGUMENT_ERROR
Codepoint out of range: U_ILLEGAL_ARGUMENT_ERROR
Passing a UTF-8 character for codepoint requires a string which is exactly one UTF-8 codepoint long.: U_ILLEGAL_ARGUMENT_ERROR
Invalid parameter for unicode point.  Must be either integer or UTF-8 sequence.: U_ILLEGAL_ARGUMENT_ERROR
