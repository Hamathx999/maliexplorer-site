<?php
/**
 * MaliExplorer - Point d'entrée vitrine statique & WordPress
 */
if (file_exists(__DIR__ . '/index.html')) {
    include __DIR__ . '/index.html';
    exit;
}

define('WP_USE_THEMES', true);
require __DIR__ . '/wp-blog-header.php';
