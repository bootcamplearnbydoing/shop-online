<?php

function url_generate($values)
{

    $urlQueryString = array_merge($_GET, $values);

    return '?' . http_build_query($urlQueryString);
}

function url_redirect($values = [])
{
   
    echo " <script> window.location.href=' " . PAGE_URL . url_generate($values)."';</script>";
    exit;  
}