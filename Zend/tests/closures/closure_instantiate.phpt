--TEST--
Closures cannot be instantiated
--FILE--
<?php

try {
    $x = new Closure();
} catch (Exception $e) {
    echo 'EXCEPTION: ', $e->getMessage();
} catch (Throwable $e) {
    echo 'ERROR: ', $e->getMessage();
}

?>
--EXPECTF--
ERROR: Instantiation of 'Closure' is not allowed
