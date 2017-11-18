--TEST--
Test gethostbynamel() with invalid hostname
--FILE--
<?php
var_dump(gethostbynamel("string"));
?>
--EXPECT--
bool(false)