<?php

// Função responsável por renderizar uma view
function view($viewName, $viewData = [], $templateName = 'frontoffice')
{
    // Inclui o cabeçalho do template
    require_once BASE_DIR . DS . 'templates' . DS . $templateName . DS . 'head.php';
    // Extrai as variáveis do array $viewData, tornando-as acessíveis dentro da view
    extract($viewData);
    // Inclui a view correspondente
    require_once MODULE_BASE_DIR . DS . 'Views' . DS . $viewName . '.php';
    // Inclui o rodapé do template
    require_once BASE_DIR . DS . 'templates' . DS . $templateName . DS . 'foot.php';
}
