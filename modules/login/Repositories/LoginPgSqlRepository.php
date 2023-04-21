<?php

declare(strict_types=1);

namespace Pet\Store\Login\Repositories;

use Exception;
use PDO;
use Pet\Store\Login\Models\LoginModel;
use Pet\Store\Login\Repositories\LoginRepository;


class LoginPgSqlRepository implements LoginRepository
{
    public function __construct(private readonly LoginModel $loginModel)
    {}

    public function getModel(): LoginModel
    {
        return $this->loginModel;
    }

    public function findAll(): array
    {
        return [];
    }

    public function findByEmail(): ?LoginModel
    {    
        $db = $this->getModel()->database();
        $query = 'select * from users u where u.email = ?';
        $sth = $db->prepare($query);
        if (!$sth->execute([$this->getModel()->getEmail()])) {
            throw new Exception('Operation couldn\'t be completed', 500);
        }

        $user = $sth->fetch(PDO::FETCH_ASSOC);

        if (empty($user)) {
            return null;
        }

        return new LoginModel(
            $user['email'],
            $user['password']
        );
    }
}
