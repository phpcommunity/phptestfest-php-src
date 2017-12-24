--TEST--
IntlChar character names
--SKIPIF--
<?php if (!extension_loaded('intl')) die("skip requires ext/intl") ?>
--FILE--
<?php
echo "Sample range of codepoints: U+2600-U+260F\n";
IntlChar::enumCharNames(0x2600, 0x2610, function($cp, $nc, $name) {
  printf("U+%04x %s\n", $cp, $name);
});
echo "RECYCLING SYMBOL FOR TYPE-1 PLASTICS => ";
var_dump(IntlChar::charFromName("RECYCLING SYMBOL FOR TYPE-1 PLASTICS"));
--EXPECT--
Sample range of codepoints: U+2600-U+260F
U+2600 BLACK SUN WITH RAYS
U+2601 CLOUD
U+2602 UMBRELLA
U+2603 SNOWMAN
U+2604 COMET
U+2605 BLACK STAR
U+2606 WHITE STAR
U+2607 LIGHTNING
U+2608 THUNDERSTORM
U+2609 SUN
U+260a ASCENDING NODE
U+260b DESCENDING NODE
U+260c CONJUNCTION
U+260d OPPOSITION
U+260e BLACK TELEPHONE
U+260f WHITE TELEPHONE
RECYCLING SYMBOL FOR TYPE-1 PLASTICS => int(9843)