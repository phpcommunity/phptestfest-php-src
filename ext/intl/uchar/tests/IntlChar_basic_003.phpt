--TEST--
IntlChar character types
--SKIPIF--
<?php if (!extension_loaded('intl')) die("skip requires ext/intl") ?>
--FILE--
<?php
echo "Character types for U+0000-U+007F:\n";
IntlChar::enumCharTypes(function($start, $end, $name) {
  // Limit the codepoints up to U+007F so that there is less output in the EXPECT section
  if ($end <= 0x7F) {
    printf("U+%04x U+%04x %d\n", $start, $end, $name);
  }
});
--EXPECT--
Character types for U+0000-U+007F:
U+0000 U+0020 15
U+0020 U+0021 12
U+0021 U+0024 23
U+0024 U+0025 25
U+0025 U+0028 23
U+0028 U+0029 20
U+0029 U+002a 21
U+002a U+002b 23
U+002b U+002c 24
U+002c U+002d 23
U+002d U+002e 19
U+002e U+0030 23
U+0030 U+003a 9
U+003a U+003c 23
U+003c U+003f 24
U+003f U+0041 23
U+0041 U+005b 1
U+005b U+005c 20
U+005c U+005d 23
U+005d U+005e 21
U+005e U+005f 26
U+005f U+0060 22
U+0060 U+0061 26
U+0061 U+007b 2
U+007b U+007c 20
U+007c U+007d 24
U+007d U+007e 21
U+007e U+007f 24
