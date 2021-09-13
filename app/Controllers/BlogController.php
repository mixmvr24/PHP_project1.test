<?php


namespace App\Controllers;


use App\Core\DB;
use App\Models\Page;

class BlogController
{
    public function showPage($id)
    {
        $page = Page::finById($id);

        if (!$page) {
            echo "404";
        } else {
            render('blog/page', ['page' => $page]);
        }
    }

    public function addPage()
    {
        render('blog/add_page');
    }

    public function savePage()
    {
        $sql = "INSERT INTO pages (`name`, `content`)
                    VALUES('{$_POST['name']}', '{$_POST['content']}')";
        DB::getConnection()->query($sql);
    }
}