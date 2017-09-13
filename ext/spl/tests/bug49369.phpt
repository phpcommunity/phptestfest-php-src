--TEST--
Bug #49369 (Change current(), key(), next(), etc. to check for Iterator)
--CREDITS--
KCPHPUG TestFest 2017 - Eric Poe
--FILE--
<?php

class iterator_array implements Iterator
{
	protected $arr;
	
	public function __construct(array $array = [])
	{
		$this->arr = $array;
	}
		
	public function key()
	{
		return key($this->arr);
	}
		
	public function current()
	{
		return current($this->arr);
	}
		
	public function valid()
	{
		return current($this->arr) !== FALSE;
	}
		
	public function next()
	{
		next($this->arr);
	}
		
	public function rewind()
	{
		reset($this->arr);
	}
}

$i = new iterator_array([1,2]);
var_dump(current($i));
var_dump(key($i));
next($i);
var_dump(current($i));
var_dump(key($i));
--XFAIL--
Bug #49369 - This will fail until current(), key(), next() & other \Iterator methods-as-functions are able to take advantage, properly, of the \Iterator methods.
--EXPECT--
int(1)
int(0)
int(2)
int(1)