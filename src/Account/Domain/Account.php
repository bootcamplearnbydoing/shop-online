<?php

declare(strict_types=1);

namespace Pet\Store\Account\Domain;

final class Account 
{
    public function __construct(
        private readonly AccountEmail $email,
        private readonly AccountPassword $password,
    )
    {}

    public function email(): AccountEmail
    {
        return $this->email;
    }

    public function password(): AccountPassword
    {
        return $this->password;
    }
}