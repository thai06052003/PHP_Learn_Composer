<?php

namespace App\Controllers;

use App\Models\User;

class HomeController
{
    public function index()
    {
        $userModel = new User;
        $users = $userModel->getUsers();
        /* echo '<pre>';
        print_r($users);
        echo '</pre>'; */
        echo getenv('DB_HOST');
        echo $_ENV['DB_HOST'];
        

        return view('index', compact('users'));
    }
}
