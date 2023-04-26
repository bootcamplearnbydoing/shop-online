<?php

declare(strict_types=1);

// Define que o código utilizará estritamente o modo de tipos definidos, garantindo assim maior segurança na tipagem.
namespace Pet\Store\User\Models;

use DateTime;
use Pet\Store\Shared\Models\Model;

// Define o namespace da classe
class UserModel extends Model
{
    public function __construct(
        private readonly string $firstName,
        public  readonly string $lastName,
        private readonly string $email,
        private readonly string $password,
        private readonly DateTime $birthDate,
        private readonly bool $newsletter
    ) {
        parent::__construct();
    }

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

    public function setBirthDate(DateTime $birthDate): void
    {
        $this->birthDate = $birthDate->format('Y-m-d');
    }

    public function getNewsletter(): bool
    {
        return $this->newsletter;
    }

    public function setNewsletter(bool $newsletter): void
    {
        $this->newsletter = $newsletter;
    }

    public function getBirthDate(): string
    {
        return $this->birthDate->format('Y-m-d');
    }
}
