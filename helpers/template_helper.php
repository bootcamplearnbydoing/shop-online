<?php

function view($viewName, $viewData = [], $templateName = 'frontoffice')
{
    require_once BASE_DIR . DS . 'templates' . DS . $templateName . DS . 'head.php';
    extract($viewData);
    require_once MODULE_BASE_DIR . DS . 'Views' . DS . $viewName . '.php';
    require_once BASE_DIR . DS . 'templates' . DS . $templateName . DS . 'foot.php';
}