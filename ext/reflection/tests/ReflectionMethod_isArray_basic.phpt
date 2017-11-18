--TEST--
ReflectionMethod->isArray()
--CREDITS--
Claudio Marcandalli
--FILE--
<?php
class TestClass {

    public function test_function(array $values) 
    {
        $rm = new ReflectionMethod(__METHOD__);
        $parameters = $rm->getParameters();
        var_dump($parameters[0]->isArray());
    }
}
$testClass = new TestClass();
$testClass->test_function(array());
?>
--EXPECT--
bool(true)
