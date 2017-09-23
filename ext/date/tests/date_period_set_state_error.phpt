--TEST--
Testing passing integer to DateInterval::__set_state should fail.
--CREDITS--
Oscar Merida <oscar@musketeers.me>
#phptestfest2017
--FILE--
<?php
$dp = new \DatePeriod('R4/2012-07-01T00:00:00Z/P7D');
$dp->__set_state(1);
?>
--EXPECTF--
Warning: DatePeriod::__set_state() expects parameter 1 to be array, %s given in %s on line %d

