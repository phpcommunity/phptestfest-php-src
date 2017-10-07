--TEST--
SplDoublyLinkedList Iterating a DLL by reference shouldn't be permitted
--FILE--
<?php

$dll = new SplDoublyLinkedList();

$dll->push(2);
$dll->push(3);

try {
    foreach($dll as $key => &$value) {
        // We should never see this output, because the "by reference" exception should be thrown in the previous line
        echo $value, PHP_EOL;
        $value *= $value;
        echo $value, PHP_EOL;
    }
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}

?>
--EXPECT--
An iterator cannot be used with foreach by reference
