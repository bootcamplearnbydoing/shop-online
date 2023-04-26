<?php

declare(strict_types=1);

// Define que o código utilizará estritamente o modo de tipos definidos, garantindo assim maior segurança na tipagem.
namespace Pet\Store\Address\Models;

use Pet\Store\Shared\Models\Model;

// Define o namespace da classe
class AddressModel extends Model
{
    private string $userId;
    private string $cityId;

    // Método construtor da classe, responsável por receber e atribuir os valores às propriedades da classe
    public function __construct(
        private readonly string $content,
        private readonly string $postalCode
    ) {
        parent::__construct();
    }

    public function setUserId(string $userId)
    {
        $this->userId = $userId;
    }

    public function getUserId() : string
    {
        return $this->userId;
    }

    public function setCityId(string $cityId)
    {
        $this->cityId = $cityId;
    }

    public function getCityId() : string
    {
        return $this->cityId;
    }
}
