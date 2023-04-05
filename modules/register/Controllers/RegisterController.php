<?php

declare(strict_types=1);

namespace Pet\Store\Register\Controllers;

use Pet\Store\Register\Models\RegisterModel;
use Pet\Store\Register\Services\RegisterService;

class RegisterController
{
    public function viewRegister()
    {
        view('register');
    }

    public function postRegister()
    {
        $registerModel = new RegisterModel(
            filter_input(INPUT_POST, 'first_name'),
            filter_input(INPUT_POST, 'last_name'),
            filter_input(INPUT_POST, 'email'),
            filter_input(INPUT_POST, 'password'),
            filter_input(INPUT_POST, 'password_confirm'),
            filter_input(INPUT_POST, 'birth_date'),
            filter_input(INPUT_POST, 'address'),
            filter_input(INPUT_POST, 'city'),
            filter_input(INPUT_POST, 'postal_code'),
            filter_input(INPUT_POST, 'billing_address'),
            filter_input(INPUT_POST, 'newsletter')
        );

        $regiserService = new RegisterService($registerModel);
        $regiserService->mostrarMeuNome();
    }
}