<?php

declare(strict_types=1);

namespace Pet\Store\Register\Repositories;

use DateTime;
use Exception;
use PDO;
use Pet\Store\Register\Models\RegisterModel;
use Pet\Store\Register\Repositories\RegisterRepository;
use Pet\Store\User\Models\UserModel;

class RegisterPgSqlRepository implements RegisterRepository
{

    public function __construct(readonly RegisterModel $registerModel)
    {}

    public function getModel() : RegisterModel
    {
        return $this->registerModel;
    }

    public function findAll(): array
    {
        return [];
    }

    public function findByEmail(string $email): ?UserModel
    {
        $db = $this->registerModel->database();
        $query = 'select * from users u where u.email = ?';
        $sth = $db->prepare($query);
        if (!$sth->execute([$email])) {
            throw new Exception('Operation couldn\'t be completed', 500);
        }

        $user = $sth->fetch(PDO::FETCH_ASSOC);

        if (empty($user)) {
            return null;
        }

        return new UserModel(
            $user['first_name'],
            $user['last_name'],
            $user['email'],
            $user['password'],
            new DateTime('1991-08-05'),
            true
        );
    }

    public function save(): string
    {
        $userModel = $this->getModel()->getUser();
        $db = $this->getModel()->database();
        $query = ''.
        'insert into users (role_id, first_name, last_name, email, "password") ' .
        'values (?, ?, ?, ?, ?) RETURNING id';
        $sth = $db->prepare($query);
        if (!$sth->execute([
            '1941253a-4315-49f8-a929-1562dc9cb45f',
            $userModel->getFirstName(),
            $userModel->getLastName(),
            $userModel->getEmail(),
            password_hash($userModel->getPassword(), PASSWORD_DEFAULT)
        ])) {
            throw new Exception('Operation couldn\'t be completed', 500);
        }

        $user = $sth->fetch(PDO::FETCH_ASSOC);
        return $user['id'];
    }
}