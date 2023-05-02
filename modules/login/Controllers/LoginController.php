<?php

namespace Pet\Store\Login\Controllers;

use Exception;
use Pet\Store\Login\Models\LoginModel;
use Pet\Store\Login\Repositories\LoginInMemoryRepository;
use Pet\Store\Login\Repositories\LoginPgSqlRepository;
use Pet\Store\Login\Services\LoginService;

class LoginController
{
    public function viewLogin()
    {
        $data = [
            'errors' => form_errors()
        ];

        view("login", $data);
    }

    public function postLogin()
    {
        try {
            $loginModel = new LoginModel(
                filter_input(INPUT_POST, "email"),
                filter_input(INPUT_POST, "password")
            );

            //$loginRepository = new LoginInMemoryRepository();
            $loginRepository = new LoginPgSqlRepository($loginModel);

            $loginService = new LoginService($loginRepository);

            $errors = $loginService->validate();

            set_session("form_data", $_POST);

            if (!empty($errors)) {
                set_session('form_errors', $errors);
                throw new Exception('Something went wrong', 400);
            }
            
        } catch (Exception $e) {
            //set_session("form_errors", $e->getMessage());
            url_redirect(['route' => 'login']);
        }
    }
}
