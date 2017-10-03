--TEST--
Link function with non-existent target
--FILE--
<?php
    var_dump(link(uniqid('bogus') . '/' . uniqid('path'), 'thing'));
?>
--EXPECTF--
Warning: link(): No such file or directory in %s on line %d
bool(false)