<?php
session_start();

include_once __DIR__.'/core/db.php';
include_once __DIR__.'/core/functions.php';


$url = $_SERVER['REQUEST_URI'];
$url = explode('?', $url);
$url = $url[0];
$admin = [
    'login' => 'admin',
    'password' => '123456'
];


switch ($url) {
    case '/':
        require_once __DIR__ . '/views/front/main.php';
        break;
    case '/logout':
        unset($_SESSION['name']);
        header("Location: /");
        break;

    case '/login':
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            if ($_POST['login'] === $admin['login'] && $_POST['password'] === $admin['password']) {
                $_SESSION['name'] = $admin['login'];
                header("Location: /");
            } else {
                echo "INVALID LOGIN OR PASSWORD";
            }


        } else {
            require_once __DIR__ . '/views/front/login.php';

        }
        break;

    case '/blog':
        require_once __DIR__ . '/views/front/blog.php';
        break;
    case '/product':
        require_once __DIR__ . '/views/front/product.php';
        break;
    case '/catalog':
        require_once __DIR__ . '/views/front/catalog.php';
        break;
    default:
        echo 'not found';
}





