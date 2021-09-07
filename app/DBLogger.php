<?php

namespace App;

use App\Logger;

class DBLogger implements Logger
{
    public $firstText = "Hello";
    public $secondText = "World";

    public function writeToLog($wlog,$a)
    {
        echo "afafa";
    }

    public function readFromLog($rlog,$b)
    {
        echo "qwewer";
    }
}