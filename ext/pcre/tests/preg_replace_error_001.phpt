--TEST--
preg_replace_callback_array() - delimiter error
--CREDITS--
Maggie Shemayev mshemayev at gmail dot com
#TestFest Madison WI MadisonPHP 2017-09-22
--FILE--
<?php
$subject = 'Aaaaaa';

preg_replace_callback_array(
    [
        'a~[a]+~ia' => function($match)
        {
	    echo strlen($match[0]), ' matches for "a" found', PHP_EOL;
	}
     ], 
     $subject
);
?>
--EXPECTF--
Warning: preg_replace_callback_array(): Delimiter must not be alphanumeric or backslash in %s on line %d
