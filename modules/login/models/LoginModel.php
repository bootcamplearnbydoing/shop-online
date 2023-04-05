<?php

namespace Pet\Store\Login\Models;

class LoginModel 
{
    public function __construct(
        readonly string $email,
        readonly string $password
    ) {} 

} 