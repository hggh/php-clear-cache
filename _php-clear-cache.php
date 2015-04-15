<?php

if (extension_loaded('apc')) {
	echo "APC-User Cache:   " . apc_clear_cache('user') . "\n";
	echo "APC-System Cache: " . apc_clear_cache() . "\n";
}
if (extension_loaded('apcu')) {
	echo "APC-User Cache:   " . apc_clear_cache('user') . "\n";
}
if (extension_loaded('apcu')) {
	echo "APC-User Cache:   " . apc_clear_cache('user') . "\n";
}

/*
  Opcode Cache since PHP 5.5 default clear it twice
  Because sometimes we had problems to get a fresh cache.
*/
if (function_exists('opcache_reset')) {
	opcache_reset();
	opcache_reset();
}
?>
