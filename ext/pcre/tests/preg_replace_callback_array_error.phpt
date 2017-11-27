--TEST--
 Test preg_replace_callback() function : error
"Delimiter must not be alphanumeric or backslash"
--CREDITS--
Arno Lamber <arno.lambert@gmail.com>
User Group: PHP-WVL & PHPGent #PHPTestFest
--FILE--
<?php
/*
* testing if error message  "Delimiter must not be alphanumeric or backslash" is given when delimiters are alphanumeric
* AND if return value is NULL in that case
* 
* basic code to test is taken from the php documentaion for this function
*/

//string to test the regex
$subject = 'Aaaaaa Bbb';

//alphanumeric delimiter 'I'
$callbackArrayWrongAlphanumeric = array(
    'I[a]+Ii' => function ($match) { 
        echo strlen($match[0]), ' matches for "a" found', PHP_EOL; 
        return true;
    }, 
    'I[b]+Ii' => function ($match) { 
        echo strlen($match[0]), ' matches for "b" found', PHP_EOL; 
        return true;
    } 
);

//correct array
$callbackArrayRight = array(
    '/[a]+/i' => function ($match) { 
        echo strlen($match[0]), ' matches for "a" found', PHP_EOL; 
        return true;
    }, 
    '/[b]+/i' => function ($match) { 
        echo strlen($match[0]), ' matches for "b" found', PHP_EOL; 
        return true;
    } 
);

var_dump(
    preg_replace_callback_array(
        $callbackArrayWrongAlphanumeric,
        $subject
    )
); 

var_dump(
    preg_replace_callback_array(
        $callbackArrayRight,
        $subject
    )
); 
?>
--EXPECTF--
Warning: preg_replace_callback_array(): Delimiter must not be alphanumeric or backslash in %s on line %d

Warning: preg_replace_callback_array(): Delimiter must not be alphanumeric or backslash in %s on line %d
NULL
6 matches for "a" found
3 matches for "b" found
string(3) "1 1"
