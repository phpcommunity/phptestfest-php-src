--TEST--
php://output wrapper: basic test
--FILE--
<?php
$f = fopen("php://output", "w");
fwrite($f, "hi!");

echo "\nDone.\n";
?>
--EXPECT--
hi!
Done.
