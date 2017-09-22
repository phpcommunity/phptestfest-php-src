--TEST--
register_shutdown_function - invalid arguments
--CREDITS--
Matthew Hill mahelious@gmail.com UPHPU TestFest 2017
--FILE--
<?php
register_shutdown_function();
?>
--EXPECTF--
Warning: Wrong parameter count for register_shutdown_function() in %s on line %d
