<?php


namespace App\Models;


use App\Core\Model;

class Page extends Model
{
    protected static $tablename = 'pages';

    public $content;
    public $name;


    public function getIntroText(){
        return mb_substr($this->content, 0,50)."...";
    }

}