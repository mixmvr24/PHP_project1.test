<?php

include_once __DIR__ . "/../vendor/autoload.php";
include_once __DIR__ . "/../app/functions.php";


use App\Controllers\BlogController;
use App\Controllers\CatalogController;
use App\Controllers\HomeController;
use App\Controllers\ProductController;

$routes = [
    '/catalog/(?P<id>.+)' => [ProductController::class, 'showProduct'],
    '/catalog' => [CatalogController::class, 'index'],
    '/add_product' => [ProductController::class, 'addProduct'],
    '/save_product' => [ProductController::class, 'saveProduct'],
    '/page/(?P<id>.+)' => [BlogController::class, 'showPage'],
    '/add_page' => [BlogController::class, 'addPage'],
    '/save_page' => [BlogController::class, 'savePage'],
    '/contacts' => [HomeController::class, 'contacts'],
    '/' => [HomeController::class, 'index'],
];

$url = (explode('?', $_SERVER['REQUEST_URI']))[0];


foreach ($routes as $route => $item) {
    $route = str_replace('/', '\/', $route);
    preg_match('/^' . $route . '$/', $url, $matches);

    if (!empty($matches)) {
        $args = array_filter($matches, 'is_string', ARRAY_FILTER_USE_KEY);
        $controller = new $item[0];
        call_user_func_array([$controller, $item[1]], $args);
        break;
    }
}

if (empty($matches)) {
    echo "404";
}