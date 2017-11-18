--TEST--
Testing dns_get_mx
--CREDITS--
Alessandro Manno <alessandromanno96 [at] gmail [dot] com>
#phptestfest2017
--FILE--
<?php
$hostname = 'gmail.com';
$return1 = getmxrr($hostname, $mxhosts1, $weight1);
$return2 = dns_get_mx($hostname, $mxhosts2, $weight2);

var_dump( $return1 === $return2 );
var_dump( $mxhosts1 === $mxhosts2 );
var_dump( $weight1 === $weight2 );

?>
--EXPECT--
bool(true)
bool(true)
bool(true)
