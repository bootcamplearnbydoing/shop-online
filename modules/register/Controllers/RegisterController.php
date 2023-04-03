<?php

declare(strict_types=1);

namespace Pet\Store\Register\Controllers;

use Pet\Store\Register\Models\RegisterModel;

class RegisterController
{
    public function viewRegister()
    {
        view('register');
    }

    public function postRegister()
    {
        $registerModel = new RegisterModel(
            filter_input(INPUT_POST, 'name'),
            filter_input(INPUT_POST, 'email'),
            filter_input(INPUT_POST, 'password'),
        );

        var_dump($registerModel->password);
    }
}

