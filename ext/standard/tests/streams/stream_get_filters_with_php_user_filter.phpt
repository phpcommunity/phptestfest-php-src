--TEST--
stream_get_filters() - Basic behaviour using a user defined stream filter
--CREDITS--
José Carlos Soares de Souza <josecarlos@globtec.com.br>
# TestFest 2017 - PHPRS PHP UG 2017-10-31 
--FILE--
<?php
class foo_filter extends php_user_filter 
{
}

stream_filter_register('foo', 'foo_filter') or die('Failed to register filter');

var_dump(in_array('foo', stream_get_filters()));
?>
--EXPECT--
bool(true)