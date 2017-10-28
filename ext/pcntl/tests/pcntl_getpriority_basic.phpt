--TEST--
pcntl_getpriority() - Basic behaviour
--CREDITS--
Er Galvão Abbott galvao@galvao.eti.br
# TestFest 2017 PHPRS PHP UG 2017-10-28
--SKIPIF--
<?php if (!extension_loaded('pcntl')) die('skip - ext/pcntl not loaded'); ?>
--FILE--
<?php
var_dump(pcntl_getpriority());
?>
--EXPECTF--
%s:%d:
int(%d)
