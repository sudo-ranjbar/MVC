<?php

namespace App\Controllers;

class TodoController
{
    public function list(): void
    {

        $data = [
            'tasks' => ['task 1', 'task 2', 'task 3', 'task 4', 'task 5'],
            'num' => 7,

        ];

        view('todo.list', $data);
    }
}