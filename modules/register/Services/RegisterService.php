<?php

declare(strict_types=1);

namespace Pet\Store\Register\Services;

use Pet\Store\Register\Models\RegisterModel;
use Pet\Store\Register\Repositories\RegisterRepository;

class RegisterService
{
    public function __construct(private RegisterRepository $registerRepository)
    {}

    public function validate(RegisterModel $registerModel)
    {

    }

    public function findByEmail(string $email)
    {
        return $this->registerRepository->findByEmail($email);
    }
}

