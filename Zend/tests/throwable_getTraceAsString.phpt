--TEST--
Test Throwable getTraceAsString special char escaping
--CREDITS--
Robrecht Plaisier <php@mcq8.be>
User Group: PHP-WVL & PHPGent #PHPTestFest
--FILE--
<?php
function test($string) {
    try {
        throw new Exception();
    } catch (Throwable $e) {
        echo $e->getTraceAsString(), PHP_EOL, PHP_EOL;
    }
}

test("foo\nbar");
test("foo\rbar");
test("foo\tbar");
test("foo\fbar");
test("foo\vbar");
test("foo\\bar");
test("foo\x1Bbar");
test("foo\xF0\x9F\x91\xBBbar");
?>
--EXPECTF--
#0 %s(%d): test('foo\nbar')
#1 {main}

#0 %s(%d): test('foo\rbar')
#1 {main}

#0 %s(%d): test('foo\tbar')
#1 {main}

#0 %s(%d): test('foo\fbar')
#1 {main}

#0 %s(%d): test('foo\vbar')
#1 {main}

#0 %s(%d): test('foo\\bar')
#1 {main}

#0 %s(%d): test('foo\ebar')
#1 {main}

#0 %s(%d): test('foo\xF0\x9F\x91\xBBbar')
#1 {main}
