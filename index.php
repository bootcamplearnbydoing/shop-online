<?php

ini_set('display_errors', '1');

$route = filter_input(INPUT_GET, 'route');

if (empty($route)) {
    $module = '404';
} else {
    $module = $route;
}

require_once __DIR__ . '/constants.php';
require_once __DIR__ . '/helpers/template_helper.php';

if (file_exists(MODULE_BASE_DIR . DS . 'index.php')) {
    include MODULE_BASE_DIR . DS . 'index.php';
} else {
    include MODULE_404_DIR  . DS . 'index.php';
}