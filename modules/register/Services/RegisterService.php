<?php

// Declaração do namespace e uso de classes e interfaces
declare(strict_types=1);

namespace Pet\Store\Register\Services;

use Pet\Store\Register\Models\RegisterModel;
use Pet\Store\Register\Repositories\RegisterRepository;

// Classe que representa o serviço de registro de usuários
class RegisterService
{
    // Construtor da classe que recebe um repositório de registros
    public function __construct(private RegisterRepository $registerRepository)
    {}

    // Método que valida os dados do modelo de registro e retorna os erros encontrados
    public function validate(RegisterModel $registerModel): array
    {
        // Inicializa a variável $errors
        $errors = [];

        // Verifica se o primeiro nome está vazio e adiciona o erro correspondente na variável $errors, caso esteja
        if (empty($registerModel->getFirstName())) {
            $errors[] = [
                'field' => 'first_name',
                'message' => 'First name is required'
            ];
        }

        // Verifica se o último nome está vazio e adiciona o erro correspondente na variável $errors, caso esteja
        if (empty($registerModel->getLastName())) {
            $errors[] = [
                'field' => 'last_name',
                'message' => 'Last name is required'
            ];
        }

        // Verifica se o email está vazio e adiciona o erro correspondente na variável $errors, caso esteja
        if (empty($registerModel->getEmail())) {
            $errors[] = [
                'field' => 'email',
                'message' => 'Email is required'
            ];
        }

        // Verifica se o email é válido e adiciona o erro correspondente na variável $errors, caso não seja
        if (!filter_var($registerModel->getEmail(), FILTER_VALIDATE_EMAIL)) {
            $errors[] = [
                'field' => 'email',
                'message' => 'Email must be valid'
            ];
        }

        // Verifica se a senha está vazia e adiciona o erro correspondente na variável $errors, caso esteja
        if (empty($registerModel->getPassword())) {
            $errors[] = [
                'field' => 'password',
                'message' => 'Password is required'
            ];
        }

        // Verifica se a senha tem menos de 4 caracteres e adiciona o erro correspondente na variável $errors, caso tenha
        if (strlen($registerModel->getPassword()) < 4) {
            $errors[] = [
                'field' => 'password',
                'message' => 'Password must be greater than 3 characters'
            ];
        }

        // Define uma expressão regular para validar a força da senha e adiciona o erro correspondente na variável $errors, caso a senha não atenda a expressão
        $pattern = '/(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/';
        
        if (!preg_match($pattern, $registerModel->getPassword())) {
            $errors[] = [
                'field' => 'password',
                'message' => 'Password must contains letters, numbers and special characters'
            ];
        }

        // Verifica se a senha e sua confirmação são iguais e adiciona o erro correspondente na variável $errors, caso não sejam iguais
        if ($registerModel->getPassword() != $registerModel->getPasswordConfirm()) {
            $errors[] = [
                'field' => 'password_confirm',
                'message' => 'Passwords don\'t match'
            ];
        }
    
         // Verifica se o email já foi registrado e adiciona o erro correspondente na variável $errors, caso já tenha sido
        $emailUser = $registerModel->getEmail();
        $user = $this->findByEmail($emailUser);

        if (!empty($user)) {
            $errors[] = [
                'field' => 'user',
                'message' => 'User already exist'
            ];
        }

        // retorna o conteúdo da variável $errors
        return $errors;
    }

    public function findByEmail(string $email)
    {
        // procura um user pelo email
        return $this->registerRepository->findByEmail($email);
    }
}

