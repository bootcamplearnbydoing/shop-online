<?php

ini_set('display_errors', '1');

require_once __DIR__ . '/vendor/autoload.php';

use Pet\Store\Account\Domain\Account;
use Pet\Store\Account\Domain\AccountEmail;
use Pet\Store\Account\Domain\AccountPassword;

$accountEmail = new AccountEmail("fulano@email.com");
$accountPassword = new AccountPassword("123");

$account = new Account($accountEmail, $accountPassword);
var_dump($account->email()->value());
var_dump($account->password()->value());



$email = 4587878778;
$password = "123";

$account = new Account();
$account->register($email, $password);
