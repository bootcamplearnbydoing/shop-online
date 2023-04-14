<?php

// Declaração do namespace e uso de classes e interfaces
declare(strict_types=1);

namespace Pet\Store\Register\Repositories;

use Pet\Store\Register\Models\RegisterModel;
use Pet\Store\Register\Repositories\RegisterRepository;

// Classe que implementa a interface RegisterRepository e representa um repositório de registros em memória
class RegisterInMemoryRepository implements RegisterRepository
{
    // Constante que representa os usuários armazenados em memória
    const USERS = [
        [
            'id' => 1,
            'email' => 'maria.aparecida@gmail.com',
            'password' => '123',
            'first_name' => 'Maria',
            'last_name' => 'Aparecida',
            'password_confirm' => '',
            'birth_date' => '',
            'address' => '',
            'city' => '',
            'postal_code' => '',
            'billing_address' => '',
            'newsletter' => ''
        ],
        [
            'id' => 2,
            'email' => 'roberto.chagas@gmail.com',
            'password' => '456',
            'first_name' => 'Roberto',
            'last_name' => 'Chagas',
            'password_confirm' => '',
            'birth_date' => '',
            'address' => '',
            'city' => '',
            'postal_code' => '',
            'billing_address' => '',
            'newsletter' => ''
        ],
        [
            'id' => 3,
            'email' => 'joao.americo@gmail.com',
            'password' => '789',
            'first_name' => 'João',
            'last_name' => 'Américo',
            'password_confirm' => '',
            'birth_date' => '',
            'address' => '',
            'city' => '',
            'postal_code' => '',
            'billing_address' => '',
            'newsletter' => ''
        ],
    ];

    // Método que retorna todos os registros armazenados no repositório
    public function findAll(): array
    {
        return self::USERS;
    }

    // Método que busca um registro pelo email
    public function findByEmail(string $email): ?RegisterModel
    {
        // Inicializa a variável $user
        $user = null;

        // Percorre o array de usuários
        foreach (self::USERS as $userItem) {
            // Verifica se o email do usuário atual é igual ao email procurado
            if ($userItem['email'] === $email) {
                // Cria um novo modelo de registro com os dados do usuário encontrado
                $user = new RegisterModel(
                    $userItem['first_name'],
                    $userItem['last_name'],
                    $userItem['email'],
                    $userItem['password'],
                    $userItem['password_confirm'],
                    $userItem['birth_date'],
                    $userItem['address'],
                    $userItem['city'],
                    $userItem['postal_code'],
                    $userItem['billing_address'],
                    $userItem['newsletter'],
                );
            }
        }

        // Retorna o usuário encontrado, ou nulo se não houver um usuário com o email procurado
        return $user;
    }
}
