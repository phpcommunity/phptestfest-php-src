--TEST--
Bug #65601 (SplFileObject->valid() should not return false when it reached EOF)
--CREDITS--
KCPHPUG TestFest 2017 - Eric Poe
--FILE--
<?php
$f = new SplTempFileObject();
var_dump($f instanceof Iterator);
var_dump($f instanceof SplFileObject);

$f->fwrite("line 1");

echo "Begin iteration" . PHP_EOL;
$f->rewind();
var_dump($f->valid());
var_dump($f->eof());
var_dump($f->current());
var_dump($f->valid());
var_dump($f->eof());

echo "Show that problem is with 'current' and not 'valid'" . PHP_EOL;
$f->rewind();
var_dump($f->valid());
var_dump($f->eof());
var_dump($f->current());
var_dump($f->eof());
?>
--XFAIL--
Fails according to bug #65601 -- it appears that SplFileObject::current() advances the iterator, too.
--EXPECT--
bool(true)
bool(true)
Begin iteration
bool(true)
bool(false)
string(6) "line 1"
bool(true)
bool(false)
Show that problem is with 'current' and not 'valid'
bool(true)
bool(false)
string(6) "line 1"
bool(false)
