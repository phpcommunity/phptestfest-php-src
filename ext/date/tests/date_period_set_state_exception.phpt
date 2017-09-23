--TEST--
Testing passing integer to DatePeriod::__set_state should fail.
--CREDITS--
Oscar Merida <oscar@musketeers.me>
#phptestfest2017
--FILE--
<?php
$dp = new \DatePeriod('R4/2012-07-01T00:00:00Z/P7D');
$dp->__set_state([]);
?>
--EXPECTF--
Fatal error: Uncaught Error: Invalid serialization data for DatePeriod object in %s:%d
Stack trace:
#0 %s(3): DatePeriod::__set_state(Array)
#1 {main}
  thrown in %s on line %d

