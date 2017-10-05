--TEST--
Closures cannot be instantiated
--FILE--
<?php

try {
    $x = new Closure();
} catch (Throwable $e) {
    echo $e->getMessage();
}

?>
--EXPECTF--
Instantiation of 'Closure' is not allowed
