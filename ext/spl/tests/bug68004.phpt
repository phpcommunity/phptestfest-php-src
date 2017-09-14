--TEST--
Bug #68004 (SplTempFileObject and LimitIterator don't come along)
--CREDITS--
KCPHPUG TestFest 2017 - Eric Poe
--FILE--
<?php

$content = <<<'EOF'
Line 1
Line 2
Line 3
Line 4
EOF;

$tmpCsvFile = new SplTempFileObject();
$tmpCsvFile->fwrite($content);

$iterator = new CallbackFilterIterator($tmpCsvFile, function ($row) {
    return true;
});

echo 'Limit 1: ', iterator_count(new LimitIterator($iterator, 1)), ' ', iterator_count(new LimitIterator($tmpCsvFile, 1)), "\n";
echo 'Limit 2: ', iterator_count(new LimitIterator($iterator, 2)), ' ', iterator_count(new LimitIterator($tmpCsvFile, 2)), "\n";
echo 'Limit 3: ', iterator_count(new LimitIterator($iterator, 3)), ' ', iterator_count(new LimitIterator($tmpCsvFile, 3)), "\n";
?>
--XFAIL--
Bug #68004 - this will pass when LimitIterator shows the same count for both SplTempFileObject (an outer iterator) and CallbackFilterIterator 
--EXPECT--
Limit 1: 3 3
Limit 2: 2 2
Limit 3: 1 1