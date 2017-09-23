--TEST--
php ini scan files returns false when --with-config-file-scan-dir is not set
and the PHP_INI_SCAN_DIR also not set
--FILE--
<?php
   $results = php_ini_scanned_files();
   var_dump($results);
?>
--EXPECT--
bool(false)

