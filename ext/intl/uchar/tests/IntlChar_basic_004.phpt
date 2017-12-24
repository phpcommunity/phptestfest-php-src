--TEST--
IntlChar properties
--SKIPIF--
<?php if (!extension_loaded("intl")) die('skip requires ext/intl') ?>
--FILE--
<?php
var_dump(IntlChar::getIntPropertyValue("a", IntlChar::PROPERTY_ALPHABETIC));
var_dump(IntlChar::getIntPropertyMinValue(IntlChar::PROPERTY_BIDI_CLASS));
var_dump(IntlChar::getIntPropertyMaxValue(IntlChar::PROPERTY_BIDI_CLASS));
var_dump(IntlChar::getPropertyEnum("Bidi_Class") === IntlChar::PROPERTY_BIDI_CLASS);
var_dump(IntlChar::getPropertyValueName(IntlChar::PROPERTY_BLOCK, IntlChar::BLOCK_CODE_GREEK));
var_dump(IntlChar::getPropertyValueName(IntlChar::PROPERTY_BLOCK, IntlChar::BLOCK_CODE_GREEK, IntlChar::LONG_PROPERTY_NAME + 1));
var_dump(IntlChar::getPropertyValueEnum(IntlChar::PROPERTY_BLOCK, "greek") === IntlChar::BLOCK_CODE_GREEK);
var_dump(IntlChar::getPropertyValueEnum(IntlChar::PROPERTY_BIDI_CLASS, "some made-up string") === IntlChar::PROPERTY_INVALID_CODE);
var_dump(IntlChar::getPropertyValueEnum(123456789, "RIGHT_TO_LEFT") === IntlChar::PROPERTY_INVALID_CODE);
--EXPECT--
int(1)
int(0)
int(22)
bool(true)
string(16) "Greek_And_Coptic"
bool(false)
bool(true)
bool(true)
bool(true)
