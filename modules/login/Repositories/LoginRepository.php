<?php

declare(strict_types=1);

namespace Pet\Store\Login\Repositories;

use Pet\Store\Login\Models\LoginModel;

interface LoginRepository
{
    public function findAll(): array;

    public function findByEmail(string $email): ?LoginModel;

}

