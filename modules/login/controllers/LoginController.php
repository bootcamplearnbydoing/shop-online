<?php

namespace Pet\Store\Login\Controllers;

use Pet\Store\Login\Models\LoginModel;

class LoginController 
{
    public function viewLogin()
    {
      view("login");
    }
    
    public function postLogin()
    {
        $loginModel = new LoginModel (
            filter_input(INPUT_POST, "email"),
            filter_input(INPUT_POST, "password")
        );
        var_dump($loginModel->password);
    }
}

