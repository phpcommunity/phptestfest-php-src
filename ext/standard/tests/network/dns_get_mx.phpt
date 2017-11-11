--TEST--
bool dns_get_mx ( string $hostname , array &$mxhosts [, array &$weight ] );
--CREDITS--
marcosptf - <marcosptf@yahoo.com.br> - @phpsp - sao paulo - br
lucasf - <lucasferreira241@gmail.com> - @phpsp - sao paulo - br
 --SKIPIF--
<?php
if (getenv("SKIP_SLOW_TESTS"))
    die("skip slow test");
if (getenv("SKIP_ONLINE_TESTS"))
    die("skip test requiring internet connection");
if (substr(PHP_OS, 0, 3) == 'WIN') {
    die('skip: no Windows support');
}
?>
--FILE--
<?php
$domains = array('php.net', 'doc.php.net', 'secure.php.net');
foreach ($domains as $domain) {
    if (getmxrr($domain, $hosts, $weights)) {
        echo "Domain: ".$domain.", Hosts: " . count($hosts) . ", weights: " . count($weights) . "\n";
    }
}
?>
--EXPECTF--
Domain: %s, Hosts: %i, weights: %i
Domain: %s, Hosts: %i, weights: %i
Domain: %s, Hosts: %i, weights: %i
