<?php
include_once __DIR__.'/../core/functions.php';
include_once __DIR__.'/../core/db.php';

if (isset($_GET['type'])) {
    $type = $_GET['type'];
} else {
    $type = 'dashboard';
}

include_once __DIR__ . "/../views/admin/layout.php";
