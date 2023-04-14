<?php

// Função responsável por definir uma mensagem de alerta na sessão
function set_flash_message($message = '')
{
    // Define a mensagem na sessão 'flash_message'
    $_SESSION['flash_message'] = $message;
    // Define um timestamp de expiração da mensagem na sessão 'flash_message_timestamp'
    $timestampNowPlus1Sec = strtotime('now + 1 sec');
    $_SESSION['flash_message_timestamp'] = $timestampNowPlus1Sec;
}

// Função responsável por retornar a mensagem de alerta da sessão, se existir
function get_flash_message()
{
    // Verifica se a sessão 'flash_message' está vazia
    if (empty($_SESSION['flash_message'])) {
        return null;
    }

    // Obtém a mensagem da sessão 'flash_message' e o timestamp atual
    $flashMessage = $_SESSION['flash_message'];
    $timeStampNow =  strtotime('now');
    $timeStampFlashMessage =  $_SESSION['flash_message_timestamp'];

    // Verifica se o timestamp da mensagem de alerta expirou
    if ($timeStampNow > $timeStampFlashMessage) {
        // Remove a mensagem e o timestamp da sessão
        unset($_SESSION['flash_message']);
        unset($_SESSION['flash_message_timestamp']);
        // Retorna nulo, indicando que não há mensagem de alerta
        return null;
    } else {
        // Retorna a mensagem de alerta
        return $flashMessage;
    }
}

// Função responsável por definir uma variável de sessão
function set_session($name, $value)
{
    // Define a variável de sessão
    $_SESSION[$name] = $value;
}

// Função responsável por remover uma variável de sessão
function unset_session($name)
{
    // Remove a variável de sessão
    unset($_SESSION[$name]);
}

// Função responsável por retornar o valor de uma variável de sessão, se existir
function get_session($name)
{
    if(!empty($_SESSION[$name])) {
        // Retorna o valor da variável de sessão
        return $_SESSION[$name];
    }
}
