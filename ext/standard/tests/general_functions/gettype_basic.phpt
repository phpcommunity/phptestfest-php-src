--TEST--
Check for "unknown type"
--CREDITS--
Yulia Kostrikova <yuliakostrikova@gmail.com>
# TestFest 2017 -  Kharkiv PHP UG 2017-10-28
--FILE--
<?php
$fileName = dirname(__FILE__)."/test.txt";
$r = fopen($fileName,'w');
fclose($r);
echo gettype($r);
?>

--CLEAN--
<?php
  $fileName = dirname(__FILE__)."/test.txt";
  unlink($fileName);
?>

--EXPECTF--
unknown type