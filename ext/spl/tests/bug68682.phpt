--TEST--
Bug #68682 (RecursiveIteratorIterator does not recurse)
--CREDIT--
KCPHPUG TestFest 2017 - Eric Poe
--FILE--
<?php
abstract class X implements IteratorAggregate {
  /** @var array */
  private $data;

  public function getIterator() {
    return new RecursiveArrayIterator($this->data);
  }

  public function __construct(array $data = []) {
    $this->data = empty($data) ? ['X', 'X', 'X'] : $data;
  }
}

class PrivX extends X {
}

class ProtX extends X {
  /** @var array */
  protected $data;
}

class PubX extends X {
  /** @var array */
  public $data;
}

$privX = new PrivX([1, 2, new PrivX(), 4]);
$it = new RecursiveIteratorIterator($privX);
$privXes = [];
foreach($it as $v) {
  $privXes[] = $v;
}

$protX = new ProtX([1, 2, new ProtX(), 4]);
$it = new RecursiveIteratorIterator($protX);
$protXes = [];
foreach($it as $v) {
  $protXes[] = $v;
}

$pubX = new PubX([1, 2, new PubX(), 4]);
$it = new RecursiveIteratorIterator($pubX);
$pubXes = [];
foreach($it as $v) {
  $pubXes[] = $v;
}

echo $privXes == $pubXes ? "same" : "different" . PHP_EOL;

echo sizeof($privXes);
echo PHP_EOL;
echo sizeof($protXes);
echo PHP_EOL;
echo sizeof($pubXes);
?>
--XFAIL--
Fails because RecursiveArrayIterator does not read non-public properties (via Bug #68682)
--EXPECT--
same
4
4
4
