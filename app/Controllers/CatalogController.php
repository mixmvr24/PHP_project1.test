<?php


namespace App\Controllers;


use App\Models\Product;

class CatalogController
{
    public function index()
    {
        $products = Product::search();
        render('catalog/index', [
            'templatePages' => $products
        ]);
    }

}