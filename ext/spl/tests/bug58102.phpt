--TEST--
Bug #58102 (Cannot pass COUNT_RECURSIVE to Countable)
--CREDITS--
KCPHPUG TestFest 2017 - Eric Poe
--FILE--
<?php
class MyCountableIterator implements RecursiveIterator, Countable
{
    protected $toIterate;
    protected $pointer;

    public function __construct(array $thingToIterate = [])
    {
        $this->toIterate = $thingToIterate;
        $this->pointer = 0;
    }

    public function current()
    {
        return $this->toIterate[$this->pointer];
    }

    public function next()
    {
        $this->pointer++;
    }

    public function key()
    {
        return $this->pointer;
    }

    public function valid()
    {
        return $this->pointer < $this->count();
    }

    public function rewind()
    {
        $this->pointer = 0;
    }

    /**
     * @return bool
     */
    public function hasChildren()
    {
        return (count($this->getChildren()) > 0);
    }

    /**
     * @return MyCountableIterator
     */
    public function getChildren()
    {
        return new MyCountableIterator($this->toIterate[$this->key()]);
    }

    public function count()
    {
        // count first level of the multidimensional array
        return count($this->toIterate);
    }
}

$multiObject = [];
$multiObject[] = range(1, 5);
$multiObject[] = range(6, 10);
$multiObject[] = range(11, 15);

printf(
    "%s\n%s",
    count(new MyCountableIterator($multiObject), COUNT_RECURSIVE),
    count(iterator_to_array(new MyCountableIterator($multiObject)), COUNT_RECURSIVE)
);
--EXPECT--
3
18