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

function objectsHaveReferenceCountOf1()
{
    $y = new Bar();
    $x = new Foo($y);
    $z = $x;
}

objectsHaveReferenceCountOf1();
?>
--EXPECT--
Foo::__destruct
Bar::__destruct
