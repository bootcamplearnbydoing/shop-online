<?php

declare(strict_types=1);

namespace Pet\Store\Login\Repositories;

use Pet\Store\Login\Models\LoginModel;
use Pet\Store\Login\Repositories\LoginRepository;

class LoginPgSqlRepostory implements LoginRepository {
      
 public function findAll(): array 
{
    return [];
}

 public function findByEmail(string $email): LoginModel
{
    return new LoginModel('', '');
}

}