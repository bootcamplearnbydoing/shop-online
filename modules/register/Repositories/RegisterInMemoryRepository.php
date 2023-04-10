<?php

declare(strict_types=1);

namespace Pet\Store\Register\Repositories;

use Pet\Store\Register\Models\RegisterModel;
use Pet\Store\Register\Repositories\RegisterRepository;

class RegisterInMemoryRepository implements RegisterRepository
{
    const USERS = [
        [
            'id' => 1,
            'email' => 'vanesssabonfim@gmail.com',
            'password' => '123',
            'first_name' => 'Vanessa',
            'last_name' => 'Bomfim',
            'password_confirm' => '',
            'birth_date' => '',
            'address' => '',
            'city' => '',
            'postal_code' => '',
            'billing_address' => '',
            'newsletter' => ''
        ],
        [
            'id' => 2,
            'email' => 'vagner.cantuares@gmail.com',
            'password' => '456',
            'first_name' => 'Vagner',
            'last_name' => 'Cantuares',
            'password_confirm' => '',
            'birth_date' => '',
            'address' => '',
            'city' => '',
            'postal_code' => '',
            'billing_address' => '',
            'newsletter' => ''
        ],
        [
            'id' => 3,
            'email' => 'carvalho.bianca@gmail.com',
            'password' => '789',
            'first_name' => 'Bianca',
            'last_name' => 'Carvalho',
            'password_confirm' => '',
            'birth_date' => '',
            'address' => '',
            'city' => '',
            'postal_code' => '',
            'billing_address' => '',
            'newsletter' => ''
        ],
    ];

    public function findAll(): array
    {
        return self::USERS;
    }

    public function findByEmail(string $email): ?RegisterModel
    {
        $user = null;

        foreach (self::USERS as $userItem) {
            if ($userItem['email'] === $email) {
                $user = new RegisterModel(
                    $userItem['first_name'],
                    $userItem['last_name'],
                    $userItem['email'],
                    $userItem['password'],
                    $userItem['password_confirm'],
                    $userItem['birth_date'],
                    $userItem['address'],
                    $userItem['city'],
                    $userItem['postal_code'],
                    $userItem['billing_address'],
                    $userItem['newsletter'],
                );
            }
        }

        return $user;
    }
}