<?php

declare(strict_types=1);

// Define que o código utilizará estritamente o modo de tipos definidos, garantindo assim maior segurança na tipagem.
namespace Pet\Store\Register\Controllers;

// Define o namespace da classe

use DateTime;
use Exception;
use Pet\Store\Address\Models\AddressModel;
use Pet\Store\Register\Models\RegisterModel;
use Pet\Store\Register\Repositories\RegisterPgSqlRepository;
use Pet\Store\Register\Services\RegisterService;
use Pet\Store\User\Models\UserModel;

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
            $userModel = new UserModel(
                filter_input(INPUT_POST, 'first_name'),
                filter_input(INPUT_POST, 'last_name'),
                filter_input(INPUT_POST, 'email'),
                filter_input(INPUT_POST, 'password'),
                new DateTime('1991-08-05'),
                true
            );
            
            $addressModel = new AddressModel(
                'Rua dos marinheiros 72',
                '8547-256',
                'Lisboa'
            );

            // Cria uma instância da classe RegisterModel, que representa os dados submetidos pelo formulário
            $registerModel = new RegisterModel(
                $userModel,
                $addressModel,
                filter_input(INPUT_POST, 'password_confirm')
            );
            
            // Cria uma instância do repositório RegisterInMemoryRepository, que armazena temporariamente os dados do formulário
            //$registerRepository = new RegisterInMemoryRepository();
            $registerRepository = new RegisterPgSqlRepository($registerModel);
            // Cria uma instância do serviço RegisterService, que contém as regras de negócio do registro
            $regiserService = new RegisterService($registerRepository);
            // Valida os dados submetidos pelo formulário, e retorna os erros encontrados
            $errors = $regiserService->validate();
            // Define a sessão 'form_data' com os dados submetidos pelo formulário
            
            // Se houverem erros na validação, lança uma exceção
            if (!empty($errors)) {
                throw new Exception(json_encode($errors), 400);
            }

            // regista o cliente na base de dados 
            $userId = $regiserService->save();

            $addressModel->setUserId($userId);
            $addressModel->setCityId('eedd8325-a566-4cd1-8c91-41fd6fd5389c');

            // Define a sessão 'form_errors' com a mensagem de erro
            set_flash_message('Register created succesfully');
            // Redireciona o usuário para a rota 'register'
            url_redirect(['route' => 'login']);

        } catch (Exception $e) {
            // Define a sessão 'form_errors' com a mensagem de erro
            set_session('form_errors', $e->getMessage());
            // Redireciona o usuário para a rota 'register'
            url_redirect(['route' => 'register']);
        }
    }
}
