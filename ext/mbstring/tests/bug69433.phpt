--TEST--
Bug #69433 (mb_split incorrectly handles expression '\B')
--CREDITS--
James Ginns <starvagrant@yahoo.com>
2017 PHP TEST FEST (Kansas City PHP Users Group)
--SKIPIF--
<?php extension_loaded('mbstring') or die('skip mbstring not available'); ?>
--FILE--
<?php

mb_regex_encoding('UTF-8');
mb_internal_encoding('UTF-8');

print_r(mb_split('\B', 'James Ginns'));
print_r(preg_split('/\B/u', 'James Ginns'));

print_r(mb_split('\B', '隨著劇情的推進'));
print_r(preg_split('/\B/u', '隨著劇情的推進'));

print_r(mb_split('\B', '隨著劇 情的推進'));
print_r(preg_split('/\B/u', '隨著劇 情的推進'));


?>
--EXPECTF--
Array
(
    [0] => J
    [1] => ames G
    [2] => inns
)
Array
(
    [0] => J
    [1] => a
    [2] => m
    [3] => e
    [4] => s G
    [5] => i
    [6] => n
    [7] => n
    [8] => s
)
Array
(
    [0] => 隨
    [1] => �
    [2] => �劇
    [3] => �
    [4] => �的
    [5] => �
    [6] => �進
)
Array
(
    [0] => 隨
    [1] => 著
    [2] => 劇
    [3] => 情
    [4] => 的
    [5] => 推
    [6] => 進
)
Array
(
    [0] => 隨
    [1] => �
    [2] => �劇 情
    [3] => �
    [4] => �推
    [5] => 進
)
Array
(
    [0] => 隨
    [1] => 著
    [2] => 劇 情
    [3] => 的
    [4] => 推
    [5] => 進
)
