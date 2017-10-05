--TEST--
XMLReader: libxml2 XML Reader, Move cursor to a named attribute within a namespace, with invalid arguments
--SKIPIF--
<?php if (!extension_loaded("xmlreader")) print "skip"; ?>
--FILE--
<?php
// Set up test data in a new file
$xmlstring = '<?xml version="1.0" encoding="UTF-8"?>
<books xmlns:ns1="http://www.ns1.namespace.org/" xmlns:ns2="http://www.ns2.namespace.org/"><book ns1:num="1" ns2:idx="2" ns1:idx="3" ns2:isbn="4">book1</book></books>';
$filename = dirname(__FILE__) . '/_014.xml';
file_put_contents($filename, $xmlstring);

// Load test data into a new XML Reader
$reader = new XMLReader();
if (!$reader->open($filename)) {
    exit('XML could not be read');
}

// Parse the data
while ($reader->read()) {
    if ($reader->nodeType != XMLREADER::END_ELEMENT) {
        // Find the book node
        if ($reader->nodeType == XMLREADER::ELEMENT && $reader->name == 'book') {
            $attr = $reader->moveToNextAttribute();

            // Test for call without arguments
            $attr = $reader->getAttributeNs();
            var_dump($attr);
            echo $reader->name . ": ";
            echo $reader->value . "\n";

            // Test for missing namespace argument
            $attr = $reader->getAttributeNs('idx', null);
            var_dump($attr);
            echo $reader->name . ": ";
            echo $reader->value . "\n";
        }
    }
}

// clean up
$reader->close();
unlink($filename);
?>
===DONE===
--EXPECTF--
Warning: XMLReader::getAttributeNs() expects exactly 2 parameters, 0 given in %s on line %d
NULL
ns1:num: 1

Warning: XMLReader::getAttributeNs(): Attribute Name and Namespace URI cannot be empty in %s on line %d
bool(false)
ns1:num: 1
===DONE===
