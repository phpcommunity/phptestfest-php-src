--TEST--
Testing bug 63663 to have a possible fix created at one point in time
--FILE--
<?php

setlocale(LC_ALL, 'ru_RU');

print str_word_count("PHP function str_word_count does not properly handle non-latin characters") . "\n";

// returns 11

print str_word_count("Хабилло житель Яванского района. Ему 70 лет. Он женат. У него четверо детей. Хабилло филолог. Он более двадцати лет работает по профессии. Также Хабилло занимается виноградарством. У него имеется небольшой виноградник. Этим видом деятельности Хабилло занимается 15 лет.") . "\n";

print str_word_count('täst für die Üsergröup') . "\n";

print str_word_count('😇😂🤡');
?>
--EXPECTF--
11
38
4
1
--XFAIL--
At the moment the function returns 0 for non-ascii-characters and should probably be changed. Non-ASCII characteres seem to be treated as Word-separators
