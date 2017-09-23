--TEST--
Bug #60762 (IteratorIterator doesn't iterate over DomNodeList)
--CREDIT--
KCPHPUG TestFest 2017 - Eric Poe
--FILE--
<?php
$XML = <<< XML
<root>
  <item>1</item>
  <item>2</item>
  <item>3</item>
</root>
XML;

$dom = new DomDocument();
$dom->loadXml($XML);

/** @var DOMNodeList $items */
$items = $dom->getElementsByTagName('item');
printf(
  "DOMNodeList %s instance of \Traversable\n\n", 
  $items instanceof \Traversable ? "is" : "is not"
);

foreach ($items as $k => $item) {
	print "Key: ".$k."  Item: ".$item->nodeName. " Value: ".$item->nodeValue. PHP_EOL;
}

print "----" . PHP_EOL;
$it = new IteratorIterator($items);
foreach ($it as $k => $item) {
	print "Key: ".$k."  Item: ".$item->nodeName. " Value: ".$item->nodeValue. PHP_EOL;
}
?>
--XFAIL--
This will fail while IteratorIterator does not allow iteration over the Traversable DOMNodeList
--EXPECT--
DOMNodeList is instance of \Traversable

Key: 0  Item: item Value: 1
Key: 1  Item: item Value: 2
Key: 2  Item: item Value: 3
----
Key: 0  Item: item Value: 1
Key: 1  Item: item Value: 2
Key: 2  Item: item Value: 3