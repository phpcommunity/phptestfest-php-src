--TEST--
Check for breaking regex - see bug 70110
--XFAIL--
Fails during execution of regex
--FILE--
<?php

var_dump(preg_match('/^(A{1,2}B)+$/',str_repeat('AB',8192)));

?>
--EXPECT--
int(1)

