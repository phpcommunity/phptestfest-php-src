--TEST--
Bug #60161 (Implementing an interface extending Traversable is order dependent)
--CREDIT--
KCPHPUG TestFest 2017 - Eric Poe
--FILE--
<?php
interface Foo extends \Traversable {}
interface Bar {}

Class A implements \IteratorAggregate, Foo, Bar
{
  public function getIterator()
  {
    return new \ArrayIterator([]);
  }
}

class B implements Foo, \IteratorAggregate, Bar
{
  public function getIterator()
  {
    return new \ArrayIterator([]);
  }
}

class C implements Foo, Bar, \IteratorAggregate
{
  public function getIterator()
  {
    return new \ArrayIterator([]);
  }
}

echo "OK";
?>
--XFAIL--
This will fail until the interface-order Bug #60161 is no longer a problem
--EXPECT--
OK
