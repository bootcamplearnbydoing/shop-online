<?php

declare(strict_types=1);

namespace Pet\Store\Register\Services;

use Pet\Store\Register\Models\RegisterModel;
use Pet\Store\Register\Repositories\RegisterRepository;

class RegisterService
{
    public function __construct(private RegisterRepository $registerRepository)
    {}

    public function validate(RegisterModel $registerModel): array
    {
        $errors = [];

        if (empty($registerModel->getFirstName())) {
            $errors[] = [
                'field' => 'first_name',
                'message' => 'First name is required'
            ];
        }

        if (empty($registerModel->getLastName())) {
            $errors[] = [
                'field' => 'last_name',
                'message' => 'Last name is required'
            ];
        }

        if (empty($registerModel->getEmail())) {
            $errors[] = [
                'field' => 'email',
                'message' => 'Email is required'
            ];
        }

        if (!filter_var($registerModel->getEmail(), FILTER_VALIDATE_EMAIL)) {
            $errors[] = [
                'field' => 'email',
                'message' => 'Must be valid'
            ];
        }

        if (empty($registerModel->getPassword())) {
            $errors[] = [
                'field' => 'password',
                'message' => 'Password is required'
            ];
        }

        if (strlen($registerModel->getPassword()) < 4) {
            $errors[] = [
                'field' => 'password',
                'message' => 'Password must be greater than 3 characters'
            ];
        }

        $pattern = '/(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/';
        
        if (!preg_match($pattern, $registerModel->getPassword())) {
            $errors[] = [
                'field' => 'password',
                'message' => 'Password must contains letters, numbers and special characters'
            ];
        }

        if ($registerModel->getPassword() != $registerModel->getPasswordConfirm()) {
            $errors[] = [
                'field' => 'password_confirm',
                'message' => 'Passwords don\'t match'
            ];
        }

        return $errors;
    }

    public function findByEmail(string $email)
    {
        return $this->registerRepository->findByEmail($email);
    }
}

