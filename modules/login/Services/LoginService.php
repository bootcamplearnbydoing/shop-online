<?php

declare(strict_types=1);

namespace Pet\Store\Login\Services;

use Pet\Store\Login\Models\LoginModel;
use Pet\Store\Login\Repositories\LoginRepository;

class LoginService
{
    public function __construct(private readonly LoginRepository $loginRepository)
    {
    }

    public function validate(): array
    {
        $errors = [];

        if (empty($this->loginRepository->getModel()->getEmail())) {
            $errors[] = [
                "field" => "email",
                "message" => "Email adress is required"
            ];
        }

        if (empty($this->loginRepository->getModel()->getPassword())) {
            $errors[] = [
                "field" => "password",
                "message" => "Password is required"
            ];
        }
        
        $user = $this->loginRepository->findByEmail();

        if (empty($user)) {
            $errors[] = [
                "field" => "email",
                "message" => 'Email address is not registered'
            ];
        }

        if ($user && $user->getPassword() != $this->loginRepository->getModel()->getPassword())
        {
            $errors[] = [
                "field" => "password",
                "message" => 'Password doesn\'t match'
            ];
        }

        return $errors;
    }
}
