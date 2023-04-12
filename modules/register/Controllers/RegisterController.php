<?php

declare(strict_types=1);

namespace Pet\Store\Register\Controllers;

use Exception;
use Pet\Store\Register\Models\RegisterModel;
use Pet\Store\Register\Repositories\RegisterInMemoryRepository;
use Pet\Store\Register\Repositories\RegisterPgSqlRepository;
use Pet\Store\Register\Services\RegisterService;

class RegisterController
{
    public function viewRegister()
    {
        view('register');
    }

    public function postRegister()
    {
        try {
            $userFormData = new RegisterModel(
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
    
            $registerRepository = new RegisterInMemoryRepository();
            $regiserService = new RegisterService($registerRepository);
            $errors = $regiserService->validate($userFormData);
    
            if (!empty($errors)) {
                throw new Exception(json_encode($errors), 400);
            }
    
            $emailUser = $userFormData->getEmail();
            $user = $regiserService->findByEmail($emailUser);
    
            if (!empty($user)) {
                $errors[] = [
                    'field' => 'user',
                    'message' => 'User already exist'
                ];
                throw new Exception(json_encode($errors), 400);
            }

        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}