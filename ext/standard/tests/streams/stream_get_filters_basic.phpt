--TEST--
stream_get_filters() basic functionality
--CREDITS--
Rodrigo Prado de Jesus <royopa [at] gmail [dot] com>
User Group: PHPSP #phptestfestbrasil
--FILE--
<?php
/* Open a test file for reading and writing */
$fp = fopen('stream_test.txt', 'w+');

/* Apply the ROT13 filter to the
 * write filter chain, but not the
 * read filter chain */
$filter = 'string.rot13';
stream_filter_append($fp, $filter, STREAM_FILTER_WRITE);

/* Get a array with all registered filters */
$streamlist = stream_get_filters();

/* print the type from return of function stream_get_filters() */
echo gettype($streamlist) . "\n";

/* Check if the filter "string.rot13" appended earlier is included */
var_dump(in_array($filter, $streamlist));
?>
--EXPECT--
array
bool(true)
