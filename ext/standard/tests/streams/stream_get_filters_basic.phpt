--TEST--
stream_get_filters() - Basic behaviour
--CREDITS--
José Carlos Soares de Souza <josecarlos@globtec.com.br>
# TestFest 2017 - PHPRS PHP UG 2017-10-28 
--FILE--
<?php
var_dump(is_array(stream_get_filters()));
?>
--EXPECT--
bool(true)