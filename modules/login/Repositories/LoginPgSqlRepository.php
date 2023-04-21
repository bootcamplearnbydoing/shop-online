<?php

declare(strict_types=1);

namespace Pet\Store\Login\Repositories;

use Exception;
use PDO;
use Pet\Store\Login\Models\LoginModel;
use Pet\Store\Login\Repositories\LoginRepository;


class LoginPgSqlRepostory implements LoginRepository
{
    public function __construct(readonly LoginModel $loginModel)
    {}

    public function findAll(): array
    {
        return [];
    }

    public function findByEmail(string $email): LoginModel
    {    
        $db = $this->loginModel->database();
        $query = 'select * from users u where u.email = ?';
        $sth = $db->prepare($query);
        if (!$sth->execute([$email])) {
            throw new Exception('Operation couldn\'t be completed', 500);
        }

        $user = $sth->fetch(PDO::FETCH_ASSOC);

        return new LoginModel(
            $user['email'] ?? '',
            $user['password'] ?? ''
        );
    }
}
