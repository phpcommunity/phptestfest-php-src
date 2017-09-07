--TEST--
Bug #75135 (Elements of DirectoryIterator is the iterator itself)
--CREDITS--
KCPHPUG Testfest 2017 - Everybody
--FILE--
<?php
    $targetDir = __DIR__.DIRECTORY_SEPARATOR.md5('aDirectory');
    mkdir($targetDir);
    touch($targetDir.DIRECTORY_SEPARATOR.'getBasename_test.txt');
    
    $it = new DirectoryIterator($targetDir);
    $array = iterator_to_array($it);

    foreach ($array as $fileInfo) {
        if (false === strstr($fileInfo->getRealPath(), __DIR__)) {
            echo "Not Found" . PHP_EOL;
        } else {
            echo "Found" . PHP_EOL;
        }
    }
?>
--CLEAN--
<?php
   $targetDir = __DIR__.DIRECTORY_SEPARATOR.md5('aDirectory');
   unlink($targetDir.DIRECTORY_SEPARATOR.'getBasename_test.txt');
   rmdir($targetDir);
?>
--XFAIL--
This test will fail while bug #75135 is open.
--EXPECT--
Found
Found
Found