<?php

declare(strict_types=1);

namespace Pet\Store\Login\Models;

use Pet\Store\Shared\Models\Model;

class LoginModel extends Model
{
    public function __construct(
        private readonly string $email,
        private readonly string $password
    ) {
        parent::__construct();// inicia conexão a bd
    } 

    public function getEmail(): string 
    {
        return trim($this->email);
    } 

    public function getPassword(): string
    {
        return trim($this->password);
    } 

} 

