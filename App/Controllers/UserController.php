<?php

namespace App\Controllers;

use App\Models\User;

class UserController
{

    public function index(): void
    {

        $userInfo = [
            'name' => 'ali',
            'email' => 'ali@mail.com',
            'password' => '123456'
        ];

        $userModel = new User();
//        $userModel->create($userInfo);
//        $userModel->update(['id' => 2], ['name' => 'asghar']);

        $usr10 = $userModel->get(['id', 'name', 'email'], ['email' => 'ali@mail.com']);

        view('users.index', ['user10' => $usr10]);

    }
}