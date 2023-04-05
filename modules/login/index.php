<?php

use Pet\Store\Login\Controllers\LoginController;

$loginController = new LoginController();

switch ($_SERVER['REQUEST_METHOD']) {
    case 'POST':
        $loginController->postLogin();
        break;
    
    default:
        $loginController->viewLogin();
        break;
}
