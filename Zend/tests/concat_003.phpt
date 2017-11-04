--TEST--
Concatenating many small strings should not slowdown allocations
--SKIPIF--
<?php if ( ! PHP_DEBUG) die('skip requires debug build'); ?>
--FILE--
<?php

$time = microtime(TRUE);

/* This might vary on Linux/Windows, so the worst case and also count in slow machines.
   in travis machine the test is very slow, so the parameter $t_max was incresead to 10.0*/
$t_max = 10.0;

$datas = array_fill(0, 220000, [
    '000.000.000.000',
    '000.255.255.255',
    '保留地址',
    '保留地址',
    '保留地址',
    '保留地址',
    '保留地址',
    '保留地址',
]);

$time = microtime(TRUE);
$texts = '';
foreach ($datas AS $data)
{
    $texts .= implode("\t", $data) . "\r\n";
}

$t = microtime(TRUE) - $time;
var_dump($t < $t_max);

?>
+++DONE+++
--EXPECT--
bool(true)
+++DONE+++
