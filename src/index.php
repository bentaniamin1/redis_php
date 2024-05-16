<?php
require 'Cache.php';
// Initialize the cache
$cache = new Cache();
// Define a cache key
$key = 'my_cached_data';
// Check if the data is in the cache
$data = $cache->get($key);
if ($data === null) {
    // Data not found in the cache, simulate a database query
    $data = 'This is your data from the database.';
    // Store the data in the cache with a TTL of 1 hour
    $cache->set($key, $data, 3600);
}
// Display the data
echo "Cached Data: $data";
?>