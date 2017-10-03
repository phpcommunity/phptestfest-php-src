--TEST--
realpath_cache_size() do not accept parameters
--CREDITS--
David Stockton dave@davidstockton.com i3logix PHP Testfest 2017
--SKIPIF--
<?php
if (substr(PHP_OS, 0, 3) == 'WIN') {
    die('skip not on Windows');
}
?>
--FILE--
<?php
var_dump(realpath_cache_size('foo'));

echo "Done\n";
?>
--EXPECTF--	
Warning: realpath_cache_size() expects exactly 0 parameters, 1 given in %s on line %d
NULL
Done