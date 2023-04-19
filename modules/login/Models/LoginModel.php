<?php

namespace Pet\Store\Login\Models;

class LoginModel 
{
    public function __construct(
        private readonly string $email,
        private readonly string $password
    ) {} 

    public function getEmail(): string 
    {
        return trim($this->email);
    } 

    public function getPassword(): string
    {
        return trim($this->password);
    } 

} 

