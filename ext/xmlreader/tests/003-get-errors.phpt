--TEST--
XMLReader: libxml2 XML Reader, Get an attribute, with invalid arguments
--SKIPIF--
<?php if (!extension_loaded("xmlreader")) print "skip"; ?>
--FILE--
<?php
// Set up test data in a new file
$xmlstring = '<?xml version="1.0" encoding="UTF-8"?>
<books><book num="1" idx="2">book1</book></books>';
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
            echo $reader->name . "\n";

            $attr = $reader->moveToNextAttribute();
            var_dump($attr);
            echo $reader->name . ": ";
            echo $reader->value . "\n";

            // Test for call without arguments
            $attr = $reader->getAttribute();
            var_dump($attr);        // NULL for failure without args
            // Ensure that node pointer has not changed position
            echo $reader->name . ": ";
            echo $reader->value . "\n";

            // Test for call with an empty string argument
            $attr = $reader->getAttribute('');
            var_dump($attr);
            // Ensure that node pointer has not changed position
            echo $reader->name . ": ";
            echo $reader->value . "\n";

            // Test for call by name for an attribute that doesn't exist
            $attr = $reader->getAttribute('isbn');
            var_dump($attr);        // NULL expected
            // Ensure that node pointer has not changed position
            echo $reader->name . ": ";
            echo $reader->value . "\n";

            // Test for call by number without arguments
            $attr = $reader->getAttributeNo();
            var_dump($attr);        // NULL for failure without args
            // Ensure that node pointer has not changed position
            echo $reader->name . ": ";
            echo $reader->value . "\n";

            // Test for call by number for an attribute that doesn't exist
            $attr = $reader->getAttributeNo(911);
            var_dump($attr);        // NULL expected
            // Ensure that node pointer has not changed position
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
book
bool(true)
num: 1

Warning: XMLReader::getAttribute() expects exactly 1 parameter, 0 given in %s on line %d
NULL
num: 1

Warning: XMLReader::getAttribute(): Argument cannot be an empty string in %s on line %d
bool(false)
num: 1
NULL
num: 1

Warning: XMLReader::getAttributeNo() expects exactly 1 parameter, 0 given in %s on line %d
NULL
num: 1
NULL
num: 1
===DONE===
