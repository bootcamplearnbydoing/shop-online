<?php


define('ENV', 'dev');

define('PAGE_TITLE', 'PetShop');


define('PAGE_URL', 'http://localhost');

define('DB_HOST', 'database');
define('DB_NAME', 'petstore');
define('DB_USER', 'petstore');
define('DB_PASS', 'petstore');
define('DB_PORT', '5432');

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

date_default_timezone_set('Europe/London');