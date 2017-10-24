--TEST--
readline() - Basic behaviour
--CREDITS--
Er Galvão Abbott galvao@galvao.eti.br
# TestFest 2017 PHPRS PHP UG 2017-10-24
--STDIN--
foo
--FILE--
<?php
$result = readline();
echo $result;
?>
--EXPECT--
foo
