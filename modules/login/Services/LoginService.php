<?php

declare(strict_types=1);

namespace Pet\Store\Login\Services;

use Pet\Store\Login\Models\LoginModel;
use Pet\Store\Login\Repositories\LoginRepository;

class LoginService
{
    public function __construct(private LoginRepository $loginRepository)
    {
    }

    public function validate(LoginModel $loginModel): array
    {
        $errors = [];

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

        $emailUser = $loginModel->getEmail();
        $user = $this->findByEmail($emailUser);

        if (empty($user)) {
            $errors[] = [
                "field" => "email",
                "message" => 'Email address is not registered'
            ];
        }

        if ($user && $user->getPassword() != $loginModel->getPassword())
        {
            $errors[] = [
                "field" => "password",
                "message" => 'Password doesn\'t match'
            ];
        }

        return $errors;
    }
    public function findByEmail(string $email): LoginModel
    {
        return $this->loginRepository->findByEmail($email);
    }
}
