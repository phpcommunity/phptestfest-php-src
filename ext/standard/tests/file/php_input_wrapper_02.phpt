--TEST--
php://input - write
--FILE--
<?php
    $file = fopen('php://input', 'r+');
    var_dump(fwrite($file, 'senatus populusque reggianorum'));
?>
--EXPECT--
int(0)
