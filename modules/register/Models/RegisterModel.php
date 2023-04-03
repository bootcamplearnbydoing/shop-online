<?php

declare(strict_types=1);

namespace Pet\Store\Register\Models;

class RegisterModel
{
    public function __construct(
        readonly string $name,
        readonly string $email,
        readonly string $password
    ) {}
}

