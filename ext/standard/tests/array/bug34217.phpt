--TEST--
Bug #34217
--CREDITS--
Yulia Kostrikova yuliakostrikova@gmail.com
# TestFest Kharkiv PHP UG 29-10-17
--FILE--
<?php
$array = array (1 => [1, 2, 3],
                2 => array[1, 2],
                3 => array[1, 3, 4],
                4 => array[1, 2],
                5 => array[1, 3, 4]
               );
$array = array_unique($array);
print_r($array);
?>
--XFAIL--
array_unique() function doesn't work correctly with multi-dimensional arrays. (via Bug #34217)
--EXPECT--
Array
(
    [1] => Array
        (
            [0] => 1
            [1] => 2
            [2] => 3
        )

    [4] => Array
        (
            [0] => 1
            [1] => 2
        )

    [5] => Array
        (
            [0] => 1
            [1] => 3
            [2] => 4
        )

)