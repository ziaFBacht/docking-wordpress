<?php
/**
 * Redis Object Cache Configuration
 * File ini di-mount ke container WordPress untuk mengaktifkan Redis cache
 * 
 * Setelah mount file ini, tambahkan baris berikut di wp-config.php:
 * require_once('/var/www/html/wp-config-extra.php');
 * 
 * Atau konfigurasi ini bisa langsung ditambahkan di wp-config.php
 */

// Redis Object Cache - Host & Port
define('WP_REDIS_HOST', 'redis');
define('WP_REDIS_PORT', 6379);

// Prefix cache key supaya tidak bentrok jika ada beberapa WordPress di Redis
define('WP_REDIS_PREFIX', 'wp_cache_');

// Timeout koneksi Redis (dalam detik)
define('WP_REDIS_TIMEOUT', 1);
define('WP_REDIS_READ_TIMEOUT', 1);

// Database Redis yang dipakai (0-15, default 0)
define('WP_REDIS_DATABASE', 0);
