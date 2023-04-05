<?php

declare(strict_types=1);

namespace Pet\Store\Register\Models;

class RegisterModel
{
    public function __construct(
        public readonly string $firstName,
        public readonly string $lastName,
        public readonly string $email,
        public readonly string $password,
        public readonly ?string $passwordConfirm,
        public readonly ?string $birthDate,
        public readonly ?string $address,
        public readonly ?string $city,
        public readonly ?string $postalCode,
        public readonly ?string $billingAddress,
        public readonly ?string $newsletter
    ) {}
}

