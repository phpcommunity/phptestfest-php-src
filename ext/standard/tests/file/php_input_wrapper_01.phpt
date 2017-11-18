--TEST--
php://input basic functionality
--FILE--
<?php
    $file = fopen('php://input', 'r');
    var_dump(fread($file, 1917));
?>
--POST_RAW--
pace belloque fidelis
--EXPECT--
string(21) "pace belloque fidelis"
