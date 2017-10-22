--TEST--
Test date_sunset() function : function returns false when the sun don't set
--FILE--
<?php
date_default_timezone_set('UTC');

echo "*** The sun don't rise at 24 Dec 2017 at the North Pole ***\n";
var_dump(date_sunset(mktime(0, 0, 0, 12, 24, 2017), SUNFUNCS_RET_STRING, 84.430519, 4.218750));

echo "*** The sun is all day up at 24 Dec 2017 at the South Pole ***\n";
var_dump(date_sunset(mktime(0, 0, 0, 12, 24, 2017), SUNFUNCS_RET_STRING, -80.605880, -1.757813));

echo "===DONE===";
--EXPECTF--
*** The sun don't rise at 24 Dec 2017 at the North Pole ***
bool(false)
*** The sun is all day up at 24 Dec 2017 at the South Pole ***
bool(false)
===DONE===