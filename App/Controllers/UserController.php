<?php

namespace App\Controllers;

use App\Models\User;

class UserController
{

    public function index() : void{

        $userModel =  new User();
        $user1 = (array) $userModel->find(1);
        view('users.index', $user1);


    }
}