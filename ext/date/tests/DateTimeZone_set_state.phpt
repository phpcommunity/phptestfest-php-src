--TEST--
Test __set_state magic method for recreating a DateTimeZone object
--FILE--
<?php

$datetimezoneObject = new DateTimezone('UTC');

$datetimezoneState = var_export($datetimezoneObject, true);

eval("\$datetimezoneObjectNew = {$datetimezoneState};");

var_dump($datetimezoneObjectNew);

?>
--EXPECTF--
object(DateTimeZone)#%d (2) {
  ["timezone_type"]=>
  int(3)
  ["timezone"]=>
  string(3) "UTC"
}
