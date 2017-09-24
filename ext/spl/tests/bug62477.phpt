--TEST--
Bug #62477 (Problem LimitIterator, argument Offset only Integers)
--CREDIT--
KCPHPUG TestFest 2017 - Eric Poe
--FILE--
<?php
declare(strict_types=1);

class Combinator implements SeekableIterator 
{
    /** @var float */
    private $_n = 0.0;
    
    public function next()
    {
        $this->_n++;
    }
    
    public function rewind()
    {
        $this->_n = 0;
    }
    
    public function current() : float
    {
        return $this->_n;
    }
    
    public function key() {}
    
    public function valid() : bool
    {
        return $this->_n < 10000000000000000000;
    }
    
    public function seek($pos)
    {
        $this->_n = $pos;
    }
}
$comb = new Combinator();
$float = 10000000000;

$limitIteratorFloatSeek = [];
foreach (new limitIterator($comb, $float, 3) as $current) {
    $limitIteratorFloatSeek[] = $current;
}

$controlGroup = [];
for ($comb->seek($float); $comb->current() < ($float + 3) && $comb->valid(); $comb->next()) {
    $controlGroup[] = $comb->current();
}

foreach ($limitIteratorFloatSeek as $item) {
    echo in_array($item, $controlGroup) ? "same" : "not same";
    echo PHP_EOL;
}
?>
--EXPECT--
same
same
same