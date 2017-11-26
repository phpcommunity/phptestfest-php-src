--TEST--
BUG #34834 (array_merge_recursive() merges arrays with objects with arrays)
--DESCRIPTION--
https://bugs.php.net/bug.php?id=34834
--CREDITS--
Rogerio Prado de Jesus <rogeriopradoj@gmail.com>
Ronaldo Ferreira de Oliveira <rfdeoliveira.pmsp@gmail.com>
User Group: PHPDF
            PHPSP
Hangout presented by #PHPTestFestBrasil on 2017-11-25
https://www.youtube.com/channel/UCZDace9Yohbdbncpj9Wf_mQ
--FILE--
<?php
$old = ['created' => new \DateTime()];
$new = ['created' => new \DateTime('+1 minute')];

$changeset = array_merge_recursive($old, $new);

var_dump($changeset);
--XFAIL--
This test will fail until Bug #34834 is fixed
--EXPECT--
array(1) {
  ["created"]=>
  array(2) {
    [0] => object(DateTime)#1 (3) {
      ["date"]=>
        string(26) "%s"
      ["timezone_type"]=>
        int(3)
      ["timezone"]=>
        string(%d) "%s"
    },
    [1] => object(DateTime)#1 (3) {
      ["date"]=>
        string(26) "%s"
      ["timezone_type"]=>
        int(3)
      ["timezone"]=>
        string(%d) "%s"
    }
  }
}
