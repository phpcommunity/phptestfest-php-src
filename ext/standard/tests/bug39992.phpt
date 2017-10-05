--TEST--
Bug 39992 (proc_terminate() leaves children of child running)
--CREDITS--
KC PHP User Group - Eric Poe
--FILE--
<?php
$cmd='php -r "while(1){}" 2>&1';
$proc = proc_open($cmd, array(), $pipes);
var_dump(proc_terminate($proc));
?>
--EXPECT--
bool(true)