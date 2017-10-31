--TEST--
Bug #75449 (Ignored return type for abstract methods, defined in traits)
--CREDIT--
KCPHPUG TestFest 2017 - Eric Poe
--FILE--
<?php

trait T {
    abstract static function values() : array;
}

class A {
    use T;
    static function values() : string {
        return "I'm a string, not an array!";
    }
}

echo A::values() . PHP_EOL;

abstract class B {
    use T;
}

class C extends B {
    static function values() : string {
        return "I'm a string, not an array!";
    }
}

echo C::values();
?>
--XFAIL--
Bug 75449 - Currently classes that use an abstract function in a trait do not pay attention to return types (neither strict nor non-strict)
--EXPECTF--
Fatal error: Declaration of A::values(): string must be compatible with T::values(): array in %s on line %d
Fatal error: Declaration of C::values(): string must be compatible with B::values(): array in %s on line %d
