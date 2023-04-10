<?php

declare(strict_types=1);

namespace Pet\Store\Register\Repositories;

use Pet\Store\Register\Models\RegisterModel;
use Pet\Store\Register\Repositories\RegisterRepository;

class RegisterPgSqlRepository implements RegisterRepository
{
    public function findAll(): array
    {
        // SELECT * FROM .....
        return [];
    }

    public function findByEmail(string $email): RegisterModel
    {
        return new RegisterModel('', '', '', '', '', '', '', '', '', '', '');
    }
}