<?php

declare(strict_types=1);

// Define que o código utilizará estritamente o modo de tipos definidos, garantindo assim maior segurança na tipagem.
namespace Pet\Store\Register\Controllers;

// Define o namespace da classe
use Exception;
use Pet\Store\Register\Models\RegisterModel;
use Pet\Store\Register\Repositories\RegisterInMemoryRepository;
use Pet\Store\Register\Repositories\RegisterPgSqlRepository;
use Pet\Store\Register\Services\RegisterService;

// Importa as classes que serão utilizadas dentro desta classe
class RegisterController
{
    // Método responsável por exibir o formulário de registro
    public function viewRegister()
    {
        // Cria um array com os possíveis erros do formulário
        $data = [
            'errors' => form_errors()
        ];

        // Exibe a view do formulário, passando os possíveis erros em $data
        view('register', $data);
    }

    // Método responsável por receber e validar os dados do formulário de registro
    public function postRegister()
    {
        try {
            // Cria uma instância da classe RegisterModel, que representa os dados submetidos pelo formulário
            $userFormData = new RegisterModel(
                filter_input(INPUT_POST, 'first_name'),
                filter_input(INPUT_POST, 'last_name'),
                filter_input(INPUT_POST, 'email'),
                filter_input(INPUT_POST, 'password'),
                filter_input(INPUT_POST, 'password_confirm'),
                filter_input(INPUT_POST, 'birth_date'),
                filter_input(INPUT_POST, 'address'),
                filter_input(INPUT_POST, 'city'),
                filter_input(INPUT_POST, 'postal_code'),
                filter_input(INPUT_POST, 'billing_address'),
                filter_input(INPUT_POST, 'newsletter')
            );

            // Cria uma instância do repositório RegisterInMemoryRepository, que armazena temporariamente os dados do formulário
            //$registerRepository = new RegisterInMemoryRepository();
            $registerRepository = new RegisterPgSqlRepository($userFormData);
            // Cria uma instância do serviço RegisterService, que contém as regras de negócio do registro
            $regiserService = new RegisterService($registerRepository);
            // Valida os dados submetidos pelo formulário, e retorna os erros encontrados
            $errors = $regiserService->validate($userFormData);
            // Define a sessão 'form_data' com os dados submetidos pelo formulário
            set_session('form_data', $userFormData);

            // Se houverem erros na validação, lança uma exceção
            if (!empty($errors)) {
                throw new Exception(json_encode($errors), 400);
            }

        } catch (Exception $e) {
            // Define a sessão 'form_errors' com a mensagem de erro
            set_session('form_errors', $e->getMessage());
            // Redireciona o usuário para a rota 'register'
            url_redirect(['route' => 'register']);
        }
    }
}
