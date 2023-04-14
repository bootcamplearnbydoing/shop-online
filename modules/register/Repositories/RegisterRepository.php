<?php

// Declaração do namespace e uso de classes e interfaces
declare(strict_types=1);

namespace Pet\Store\Register\Repositories;

use Pet\Store\Register\Models\RegisterModel;

// Interface que define os métodos que devem ser implementados por um repositório de registros
interface RegisterRepository
{
    // Método que retorna todos os registros do repositório
    public function findAll(): array;
    
    // Método que busca um registro pelo email
    public function findByEmail(string $email): ?RegisterModel;
}
