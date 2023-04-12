<?php

function set_flash_message($message = '')
{
    $_SESSION['flash_message'] = $message;
    $timestampNowPlus1Sec = strtotime('now + 1 sec');
    $_SESSION['flash_message_timestamp'] = $timestampNowPlus1Sec;
}

function get_flash_message()
{
    if (empty($_SESSION['flash_message'])) {
        return null;
    }

    $flashMessage = $_SESSION['flash_message'];
    $timeStampNow =  strtotime('now');
    $timeStampFlashMessage =  $_SESSION['flash_message_timestamp'];

    if ($timeStampNow > $timeStampFlashMessage) {
        unset($_SESSION['flash_message']);
        unset($_SESSION['flash_message_timestamp']);
        return null;
    } else {
        return $flashMessage;
    }
}
