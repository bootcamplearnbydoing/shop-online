<?php

// Importa a classe RegisterController do namespace Pet\Store\Register\Controllers.
use Pet\Store\Register\Controllers\RegisterController;

// Instancia um novo objeto da classe RegisterController e o armazena em $registerController.
$registerController = new RegisterController();

// Inicia um switch statement que verifica o valor do método HTTP utilizado na requisição.
switch ($_SERVER['REQUEST_METHOD']) {

    // Verifica se o método é POST.
    case 'POST':

        // Chama o método postRegister() do objeto $registerController.
        $registerController->postRegister();

        // Encerra o case 'POST'.
        break;
    
    // Caso o método HTTP não seja POST, o código executa o seguinte case default:
    default:

        // Chama o método viewRegister() do objeto $registerController.
        $registerController->viewRegister();

        // Encerra o default case.
        break;
}
?>