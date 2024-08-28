<?php

namespace App\Models;
use App\Models\Contracts\MysqlBaseModel;

class User extends MysqlBaseModel
{
    protected $table = 'users';

    public function __construct()
    {
        parent::__construct();
    }

}