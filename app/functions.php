<?php

function render($template, $variables = [])
{
    foreach ($variables as $key => $value) {
        ${$key} = $value;
    }
    include $_SERVER['DOCUMENT_ROOT'] . '/../app/views/' . $template . ".php";
}