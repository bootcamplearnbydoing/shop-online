<?php

// Função responsável por gerar uma URL a partir de um array de valores
function url_generate($values)
{
    // Mescla o array $values com o array $_GET
    $urlQueryString = array_merge($_GET, $values);
    // Retorna a URL gerada a partir do array mesclado, no formato de uma string de consulta
    return '?' . http_build_query($urlQueryString);
}

// Função responsável por redirecionar para uma determinada URL
function url_redirect($values = [])
{
    // Monta a URL a partir do array de valores, utilizando a função url_generate
    $url = PAGE_URL . url_generate($values);
    // Executa um redirecionamento para a URL gerada, utilizando JavaScript
    echo " <script> window.location.href='{$url}';</script>";
    // Encerra a execução do script
    exit;  
}
