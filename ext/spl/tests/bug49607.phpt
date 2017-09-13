--TEST--
Bug #49607 (CachingIterator & DirectoryIterator incorrect behaviour)
--CREDITS--
KCPHPUG TestFest 2017 - Eric Poe
--FILE--
<?php
$targetDir = __DIR__.DIRECTORY_SEPARATOR.md5('aDirectory');
mkdir($targetDir);
touch($targetDir.DIRECTORY_SEPARATOR.'test.txt');

// w/o CachingIterator
$dir = new DirectoryIterator($targetDir);
foreach ($dir as $val) {
	printf("%s\n", $val);
}

// with CachingIterator
$iterator = new CachingIterator($dir, CachingIterator::FULL_CACHE);
foreach ($iterator as $val) {
	printf("%s\n", $val);
}
?>
--CLEAN--
<?php
$targetDir = __DIR__.DIRECTORY_SEPARATOR.md5('aDirectory');
unlink($targetDir.DIRECTORY_SEPARATOR.'test.txt');
rmdir($targetDir);
?>
--XFAIL--
This test will fail while bug #49607 is open
--EXPECT--
.
..
test.txt

.
..
test.txt