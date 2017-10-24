--TEST--
readline() - Basic behaviour, receiving one parameter as a string
--CREDITS--
Er Galvão Abbott galvao@galvao.eti.br
# TestFest 2017 PHPRS PHP UG 2017-10-24
--STDIN--
foo
--FILE--
<?php
$result = readline('bar');
echo $result;
?>
--EXPECT--
foo
