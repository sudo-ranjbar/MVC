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


        $all_users = $userModel->getAll();

        $user10 = $userModel->get(['id', 'name', 'email'], ['email' => 'ali@mail.com']);
        # find user with id==2
        $user2 = (array)$userModel->find(2);

        # number of records with email==ali@mail.com
        $ali_count = $userModel->record_Count(['email' => 'ali@mail.com']);

        view('users.index', ['user10' => $user10, 'user2' => $user2, 'ali_count' => $ali_count, 'all_users' => $all_users]);

    }
}