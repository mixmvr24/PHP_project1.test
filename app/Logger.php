<?php

namespace App;

interface Logger
{
    public function writeToLog($wlog,$a);
    public function readFromLog($rlog,$b);
}