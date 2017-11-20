--TEST--
Checks if the correct warning is thrown when the attribute name of the node is of length 0
--CREDITS--
Niels Vermaut <nielsvermaut@gmail.com>
User Group: PHP-WVL & PHPGent #PHPTestFest
--FILE--
<?php

$doc = new DOMDocument("1.0");
$node = $doc->createElement("para");
$newnode = $doc->appendChild($node);
$newnode->setAttribute("", "left");

?>
--EXPECTF--
Warning: DOMElement::setAttribute(): Attribute Name is required in %s on line %d