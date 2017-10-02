--TEST--
Bug #36759 (Objects destructors are invoked in wrong order when script is finished)
--CREDIT--
KCPHPUG TestFest 2017 - Eric Poe
--FILE--
<?php
class Foo 
{
    private $bar;

    function __construct($bar) 
    {
      $this->bar = $bar;
    }

    function __destruct()
    {
      echo __METHOD__,"\n";
      unset($this->bar);
    }
}
  
class Bar 
{
    function __destruct()
    {
      echo __METHOD__,"\n";
      unset($this->bar);
    }
}

function objectsNotInGlobalTable()
{
    static $x, $y;
    $y = new Bar();
    $x = new Foo($y);
}

objectsNotInGlobalTable();
?>
--XFAIL--
As explained by tstarling (2011-03-21 03:04 UTC) in Bug #36759, the destructors are called in the wrong order when the objects are not in the global symbol table
--EXPECT--
Foo::__destruct
Bar::__destruct
