<?php

namespace App\Models;

use App\Models\Contracts\JsonBaseModel;

class User extends JsonBaseModel
{
    protected $table = 'users';
    protected $user_data;

    public function __construct()
    {
        parent::__construct();
        $this->user_data = $this->read_table();

    }

    public function get_name_email_pair(): void
    {
        $names = array_column($this->user_data, 'email', 'name');
        nice_dump($names);

    }

    public function get_names(): array
    {
        $names = [];
        foreach ($this->user_data as $user) {
            $names[] = $user->{'name'};
        }
        nice_dump($names);
        return $names;
    }


}