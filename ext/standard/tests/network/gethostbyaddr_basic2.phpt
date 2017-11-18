--TEST--
Test gethostbyaddr() with private IP address
--FILE--
<?php

echo gethostbyaddr("10.0.0.50");

?>
--EXPECTF--
10.0.0.50
