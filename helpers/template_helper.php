<?php

function view($viewName, $templateName = 'frontoffice')
{
    require_once BASE_DIR . DS . 'templates' . DS . $templateName . DS . 'head.php';
    require_once MODULE_BASE_DIR . DS . 'views' . DS . $viewName . '.php';
    require_once BASE_DIR . DS . 'templates' . DS . $templateName . DS . 'foot.php';
}