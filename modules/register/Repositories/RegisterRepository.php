<?php

declare(strict_types=1);

namespace Pet\Store\Register\Repositories;

use Pet\Store\Register\Models\RegisterModel;

interface RegisterRepository
{
    public function findAll(): array;
    
    public function findByEmail(string $email): ?RegisterModel;
}
