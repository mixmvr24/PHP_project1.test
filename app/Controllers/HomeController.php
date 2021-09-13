<?php


namespace App\Controllers;


use App\Models\Page;

class HomeController
{
    public function index()
    {
        $pages = Page::search();
        render('home/index', [
            'templatePages' => $pages
        ]);
    }

    public function contacts()
    {
        echo "contacts home";
    }
}