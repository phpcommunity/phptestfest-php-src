--TEST--
stream_socket_pair should raise a warning and return false on invalid arguments.
--FILE--
<?php
var_dump(stream_socket_pair(-2, 8, -13));
?>
--EXPECTF--
Warning: stream_socket_pair(): failed to create sockets: [%d]: %s in %s on line %d
bool(false)