<?php

declare(strict_types=1);

namespace Pet\Store\Register\Repositories;

use Exception;
use PDO;
use Pet\Store\Register\Models\RegisterModel;
use Pet\Store\Register\Repositories\RegisterRepository;

class RegisterPgSqlRepository implements RegisterRepository
{

    public function __construct(readonly RegisterModel $registerModel)
    {}

    public function findAll(): array
    {
        // SELECT * FROM .....
        return [];
    }

    public function findByEmail(string $email): RegisterModel
    {
        $db = $this->registerModel->database();
        $query = 'select * from users u where u.email = ?';
        $sth = $db->prepare($query);
        if (!$sth->execute([$email])) {
            throw new Exception('Operation couldn\'t be completed', 500);
        }

        $user = $sth->fetch(PDO::FETCH_ASSOC);

        return new RegisterModel(
            $user['first_name'] ?? '',
            $user['last_name'] ?? '',
            $user['email'] ?? '',
            $user['password'] ?? '',
            '',// password_confirm
            '',//birth_date',
            '',//address',
            '',//city',
            '',//postal_code',
            '',//billing_address',
            $user['newsletter'] ? true : false
        );
    }
}