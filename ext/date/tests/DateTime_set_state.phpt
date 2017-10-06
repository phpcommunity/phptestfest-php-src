--TEST--
Test __set_state magic method for recreating a DateTime object
--FILE--
<?php

$datettimeObject = new DateTime('2017-10-06 23:30:00', new DateTimezone('UTC'));

$datetimeState = var_export($datettimeObject, true);

eval("\$datetimeObjectNew = {$datetimeState};");

var_dump($datetimeObjectNew);

?>
--EXPECTF--
object(DateTime)#%d (3) {
  ["date"]=>
  string(26) "2017-10-06 23:30:00.000000"
  ["timezone_type"]=>
  int(3)
  ["timezone"]=>
  string(3) "UTC"
}
