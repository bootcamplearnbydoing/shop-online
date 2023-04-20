<?php

namespace Pet\Store\Shared\Models;

use PDO;

abstract class Model 
{
    private PDO $db;

    public function __construct()
    {
        $dsn = 'pgsql:dbname=petstore;host=database;port=5432';
        $user = 'petstore';
        $password = 'petstore';
        
        $this->db = new PDO($dsn, $user, $password);
    }

    public function database(): PDO
    {
        return $this->db;
    }
} 

