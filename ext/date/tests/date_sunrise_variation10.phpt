--TEST--
Test date_sunrise() function : function returns false when the sun don't rise
--FILE--
<?php

echo "*** The sun is all day up at 26 Jul 2017 at the North Pole ***\n";
var_dump(date_sunrise(mktime(0, 0, 0, 7, 26, 2017), SUNFUNCS_RET_STRING, 84.430519, 4.218750));

echo "*** The sun don't rise at 26 Jul 2017 at the South Pole ***\n";
var_dump(date_sunrise(mktime(0, 0, 0, 7, 26, 2017), SUNFUNCS_RET_STRING, -80.605880, -1.757813));

echo "===DONE===";
--EXPECTF--
*** The sun is all day up at 26 Jul 2017 at the North Pole ***
bool(false)
*** The sun don't rise at 26 Jul 2017 at the South Pole ***
bool(false)
===DONE===