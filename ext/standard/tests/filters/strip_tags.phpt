--TEST--
strip_tags filter - ctor and dtor
--CREDIT--
H Hatfield hatfieldje@gmail.com UPHPU Test Fest
--FILE--
<?php
# vim600:syn=php:

$fp = fopen('php://output', 'w');
stream_filter_append($fp, 'string.strip_tags', STREAM_FILTER_WRITE, "<b><i><u>");
fwrite($fp, "<b>bolded text</b> enlarged to a <h1>level 1 heading</h1>\n");
fclose($fp);
?>
--EXPECTF--
<b>bolded text</b> enlarged to a level 1 heading
