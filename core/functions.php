<?php

function debug($var){
    echo "<pre>";
    print_r($var);
    echo "</pre>";
}

function addGetParameterToUrl($url, $key, $value): string
{
    $query = parse_url($url, PHP_URL_QUERY);
    if ($query) {
        parse_str($query, $queryParams);
        $queryParams[$key] = $value;
        $url = str_replace("?$query", '?' . http_build_query($queryParams), $url);
    } else {
        $url .= '?' . urlencode($key) . '=' . urlencode($value);
    }
     return $url;
}
