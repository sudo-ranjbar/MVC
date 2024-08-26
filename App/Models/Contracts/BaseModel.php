<?php

namespace App\Models\Contracts;

abstract class BaseModel implements CrudInterface
{
    protected $connection;
    protected $table;
    protected string $primaryKey = 'id';
    protected int $pageSize = 10;
    protected array $attributes = [];

    protected function __construct() {
        # if db is mysql => set mysql connection
    }

//    $user = new UserModel()->find(5);
//    $user->getAttribute('name');
    protected function getAttribute($attr_name) {
        if (!array_key_exists($attr_name, $this->attributes) || $this->attributes[$attr_name] === null) {
            return null;
        }
        return $this->attributes['$attr_name'];
    }


}