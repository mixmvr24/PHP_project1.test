<?php


namespace App\Controllers;


use App\Core\DB;
use App\Models\Product;

class ProductController
{
    public function showProduct($id)
    {
        $product = Product::finById($id);
        if (!$product) {
            echo '404';
        } else {
            render('catalog/product', ['product' => $product]);
        }

    }

    public function addProduct()
    {
        render('catalog/add_product');
    }

    public function saveProduct()
    {
        $sql = "INSERT INTO products(`name`,`price`,`image`)
                VALUES ('{$_POST['name']}','{$_POST['price']}','{$_POST['image']}')";
        DB::getConnection()->query($sql);
    }
}