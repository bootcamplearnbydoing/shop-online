<?php

declare(strict_types=1);

// Define que o código utilizará estritamente o modo de tipos definidos, garantindo assim maior segurança na tipagem.
namespace Pet\Store\Register\Models;

use DateTime;
use Pet\Store\Address\Models\AddressModel;
use Pet\Store\Shared\Models\Model;
use Pet\Store\User\Models\UserModel;

// Define o namespace da classe
class RegisterModel extends Model
{
    // Método construtor da classe, responsável por receber e atribuir os valores às propriedades da classe
    public function __construct(
        private readonly UserModel $user,
        private readonly AddressModel $address,
        private readonly string $passwordConfirm,
    ) {
        parent::__construct();
    }

    // Método responsável por retornar o valor da propriedade $passwordConfirm, removendo possíveis espaços em branco
    public function getPasswordConfirm(): string
    {
        return trim($this->passwordConfirm);
    }

    // Método responsável por retornar o valor da propriedade $passwordConfirm, removendo possíveis espaços em branco
    public function getUser(): UserModel
    {
        return $this->user;
    }

    // Método responsável por retornar o valor da propriedade $passwordConfirm, removendo possíveis espaços em branco
    public function getAdress(): AddressModel
    {
        return $this->address;
    }
}
