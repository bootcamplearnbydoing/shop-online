<?php

declare(strict_types=1);

namespace Pet\Store\Register\Models;

class RegisterModel
{
    public function __construct(
        private readonly string $firstName,
        public  readonly string $lastName,
        private readonly string $email,
        private readonly string $password,
        public readonly ?string $passwordConfirm,
        public readonly ?string $birthDate,
        public readonly ?string $address,
        public readonly ?string $city,
        public readonly ?string $postalCode,
        public readonly ?string $billingAddress,
        public readonly ?string $newsletter
    ) {}

    public function getFirstName()
    {
        return trim($this->firstName);
    }

    public function getEmail()
    {
        return trim($this->email);
    }

    public function getPassword()
    {
        return trim($this->password);
    }
}

