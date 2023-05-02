<?php

declare(strict_types=1);

namespace Pet\Store\Login\Services;

use Pet\Store\Login\Repositories\LoginRepository;

class LoginService
{
    public function __construct(private readonly LoginRepository $loginRepository)
    {
    }

    public function validate(): array
    {
        $errors = [];
        $loginModel = $this->loginRepository->getModel();

        if (empty($loginModel->getEmail())) {
            $errors[] = [
                "field" => "email",
                "message" => "Email adress is required"
            ];
        }

        if (empty($loginModel->getPassword())) {
            $errors[] = [
                "field" => "password",
                "message" => "Password is required"
            ];
        }
        
        $user = $this->loginRepository->findByEmail();
        $password = $this->encryptedPassword();

        if (empty($user)) {
            $errors[] = [
                "field" => "email",
                "message" => 'Email address is not registered'
            ];
        }

        if ($user && $user->getPassword() != $password)
        {
            $errors[] = [
                "field" => "password",
                "message" => 'Password doesn\'t match'
            ];
        }

        return $errors;
    }

    public function encryptedPassword(): string
    {    
        $password = $this->loginRepository->getModel()->getPassword();
        return password_hash($password, PASSWORD_DEFAULT);
    }

}
