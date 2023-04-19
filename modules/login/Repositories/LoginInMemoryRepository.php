<?php
//{ } [ ]

declare(strict_types=1);

namespace  Pet\Store\Login\Repositories;

use Pet\Store\Login\Models\LoginModel;
use Pet\Store\Login\Repositories\LoginRepository;


class LoginInMemoryRepository implements LoginRepository
{
    const USERS = [
        [
            "id" =>  1,
            "email" => "maria.aparecida@gmail.com",
            'password' => "123",
        ],
        [
            'id' => 2,
            'email' => 'roberto.chagas@gmail.com',
            'password' => "456",
        ],
        [
            'id' => 3,
            'email' => 'joao.americo@gmail.com',
            'password' => "789",
        ],
    ];

    public function findAll(): array
    {
        return self::USERS;
    }

    public function findByEmail(string $email): ?LoginModel
    {
        $user = null;

        foreach (self::USERS as $userItem) {

            if ($userItem["email"] === $email) {
                $user = new LoginModel(
                    $userItem["email"],
                    $userItem["password"]
                );
            }
        }

        return $user;
    }
}
