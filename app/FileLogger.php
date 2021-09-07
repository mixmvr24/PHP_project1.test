<?php

namespace App;

use App\Logger;

class FileLogger implements Logger
{
    public $firstFile = "Hello";
    public $secondFile = "World";
}