--TEST--
Test fnmatch() function : warning filename or pattern exceeds maxpathlen
--FILE--
<?php
$longstring = str_pad('blah', PHP_MAXPATHLEN);
var_dump(fnmatch('blah', $longstring));
var_dump(fnmatch($longstring, 'blah'));
?>
--EXPECTF--
Warning: fnmatch(): Filename exceeds the maximum allowed length of %d characters in %s on line %d
bool(false)

Warning: fnmatch(): Pattern exceeds the maximum allowed length of %d characters in %s on line %d
bool(false)