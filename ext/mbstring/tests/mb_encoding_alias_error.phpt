--TEST--
mb_encoding_aliases - error
--SKIPIF--
<?php extension_loaded('mbstring') or die('skip mbstring not available'); ?>
--FILE--
<?php
    $result = mb_encoding_aliases(null);

    var_dump($result);
?>
--EXPECTF--
Warning: mb_encoding_aliases(): Unknown encoding "" in %s on line %d
bool(false)
