<?php

// Função responsável por retornar os erros do formulário
function form_errors() {
    // Obtém os erros da sessão 'form_errors'
    $errors = get_session('form_errors');
    // Decodifica o JSON retornado, ou retorna um array vazio caso não hajam erros
    $errors = json_decode($errors ?? '[]', true);
    // Remove a sessão 'form_errors'
    unset_session('form_errors');
    // Retorna o array de erros
    return $errors;
}

// Função responsável por retornar o erro de um campo específico
function form_error($errors, $name) {
    // Inicializa a variável $field
    $field = null;
    
    // Percorre o array de erros
    foreach ($errors as $error) {
        // Verifica se o campo atual é o campo desejado ($name)
        if ($error['field'] === $name) {
            // Atribui o erro à variável $field
            $field = $error;
        }
    }

    // Retorna o erro do campo desejado
    return $field;
}
