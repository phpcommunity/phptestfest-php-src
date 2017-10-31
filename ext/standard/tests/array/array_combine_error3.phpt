--TEST--
Throws E_WARNING if the number of elements in keys and values does not match.

--CREDITS--
Yulia Kostrikova <yuliakostrikova@gmail.com>
# TestFest 2017 - Kharkiv PHP UG 2017-10-30

--FILE--
<?php
$cities = ['Kharkiv', 'V?xj?', 'Kramatorsk'];
$countries = ['Ukraine', 'Sweden'];
array_combine($cities, $countries);
?>
--EXPECTF--
Warning: array_combine(): Both parameters should have an equal number of elements in %s on line %d