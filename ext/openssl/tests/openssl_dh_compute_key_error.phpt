--TEST--
openssl_dh_compute_key() tests
--SKIPIF--
<?php if (!extension_loaded("openssl")) print "skip"; ?>
--FILE--
<?php
$p = 'de9b707d 4c5a4633 c0290c95 ff30a605 aeb7ae86 4ff48370 f13cf01c 49adb9f2 3d19a439 f743ee77 03cf342d 87f43110 5c843c78 ca4df639 931f3458 fae8a94d 1687e99a 76ed99d0 ba87189f 42fd31ad 8262c54a 8cf5914a e6c28c54 0d714a5f 6087a172 fb74f481 4c6f968d 72386ef3 45a05180 c3b3c7dd d5ef6fe7 6b0531c3';
$z = '56c03667 f3b50335 ad532d0a dcaa2897 a02c0878 099d8e3a ab9d80b2 b5c83e2f 14c78cee 664bce7d 209e0fd8 b73f7f68 22fcdf6f fade5af2 ddbb38ff 3d2270ce bbed172d 7c399f47 ee9f1067 f1b85ccb ec8f43b7 21b4f980 2f3ea51a 8acd1f6f b526ecf4 a45ad62b 0ac17551 727b6a7c 7aadb936 2394b410 611a21a7 711dcde2';

var_dump(openssl_dh_compute_key($p, $z));
?>
--EXPECTF--
Warning: openssl_dh_compute_key() expects parameter 2 to be resource, string given in %s on line %d
NULL
