<?php

declare(strict_types=1);

// Define que o código utilizará estritamente o modo de tipos definidos, garantindo assim maior segurança na tipagem.
namespace Pet\Store\Register\Models;

// Define o namespace da classe
class RegisterModel
{
    // Método construtor da classe, responsável por receber e atribuir os valores às propriedades da classe
    public function __construct(
        private readonly string $firstName,
        public  readonly string $lastName,
        private readonly string $email,
        private readonly string $password,
        public readonly ?string $passwordConfirm,
        public readonly ?string $birthDate,
        public readonly ?string $address,
        public readonly ?string $city,
        public readonly ?string $postalCode,
        public readonly ?string $billingAddress,
        public readonly ?string $newsletter
    ) {}

    // Método responsável por retornar o valor da propriedade $firstName, removendo possíveis espaços em branco
    public function getFirstName(): string
    {
        return trim($this->firstName);
    }

    // Método responsável por retornar o valor da propriedade $lastName, removendo possíveis espaços em branco
    public function getLastName(): string
    {
        return trim($this->lastName);
    }

    // Método responsável por retornar o valor da propriedade $email, removendo possíveis espaços em branco
    public function getEmail(): string
    {
        return trim($this->email);
    }

    // Método responsável por retornar o valor da propriedade $password, removendo possíveis espaços em branco
    public function getPassword(): string
    {
        return trim($this->password);
    }

    // Método responsável por retornar o valor da propriedade $passwordConfirm, removendo possíveis espaços em branco
    public function getPasswordConfirm(): string
    {
        return trim($this->passwordConfirm);
    }
}
