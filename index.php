<?php

session_start();

$route = filter_input(INPUT_GET, 'route');

if (empty($route)) {
    $module = '404';
} else {
    $module = $route;
}

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/constants.php';
require_once __DIR__ . '/helpers/template_helper.php';
require_once __DIR__ . '/helpers/url_helper.php';
require_once __DIR__ . '/helpers/session_helper.php';
require_once __DIR__ . '/helpers/message_helper.php';

if (ENV == 'dev') {
    ini_set('display_errors', '1');
}

if (file_exists(MODULE_BASE_DIR . DS . 'index.php')) {
    include MODULE_BASE_DIR . DS . 'index.php';
} else {
    include MODULE_404_DIR  . DS . 'index.php';
}