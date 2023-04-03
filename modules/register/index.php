<?php

use Pet\Store\Register\Controllers\RegisterController;

$registerController = new RegisterController();

switch ($_SERVER['REQUEST_METHOD']) {
    case 'POST':
        $registerController->postRegister();
        break;
    
    default:
        $registerController->viewRegister();
        break;
}
