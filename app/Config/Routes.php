<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->group('news', function ($routes) {
    // Rute untuk menampilkan daftar berita
    $routes->get('/news', 'News::index');
    // Rute untuk menampilkan detail berita berdasarkan ID
    $routes->get('/news/detail/(:num)', 'News::detail/$1');
    // Rute tambahan (opsional)
    // - Pencarian berita
    $routes->get('/news/search', 'News::search');
    // - Filter berita berdasarkan kategori (jika ada)
    $routes->get('/news/kategori/(:any)', 'News::getByCategory/$1');
});
