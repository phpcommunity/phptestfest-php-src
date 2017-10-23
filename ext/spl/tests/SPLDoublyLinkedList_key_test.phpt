--TEST--
SplDoublyLinkedList Tests for key() method when iterating "manually"
--CREDITS--
Mark Baker mark@lange.demon.co.uk at the PHPNW2017 Conference for PHP Testfest 2017
--FILE--
<?php

// Setup our dll
$dll = new SplDoublyLinkedList();

for($i=2; $; <= 10; $i += 2) {
    $dll->push(2);
    $dll->push(3);
}

$dll->rewind();
while ($dll->valid()) {
    echo $dll->key(), ' => ', $dll->current();
    $dll->next();
}

?>
--EXPECT--
0 => 2
1 => 4
2 => 6
3 => 8
4 => 10
