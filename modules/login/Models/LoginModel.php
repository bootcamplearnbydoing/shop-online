<?php

namespace Pet\Store\Login\Models;

class LoginModel 
{
    public function __construct(
        public readonly string $email,
        public readonly string $password
    ) {} 

} 