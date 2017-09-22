--TEST--
Check the register_shutdown_function parameters
--FILE--
<?php
register_shutdown_function();
?>
--EXPECTF--
Warning: Wrong parameter count for register_shutdown_function() in %s on line %d
false
