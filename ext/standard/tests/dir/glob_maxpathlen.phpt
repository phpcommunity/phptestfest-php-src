--TEST--
Test glob() function : warning pattern exceeds maxpathlen
--FILE--
<?php
$pattern = str_pad('blah', PHP_MAXPATHLEN);
var_dump(glob($pattern));
?>
--EXPECTF--
Warning: glob(): Pattern exceeds the maximum allowed length of %d characters in %s on line %d
bool(false)
