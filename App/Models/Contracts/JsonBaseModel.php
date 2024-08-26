<?php

namespace App\Models\Contracts;

class JsonBaseModel extends BaseModel
{

    public function create(array $data): int
    {
        // TODO: Implement create() method.
    }

    public function find(int $id): object
    {
        // TODO: Implement find() method.
    }

    public function get(array $columns, array $where): array
    {
        // TODO: Implement get() method.
    }

    public function update(array $data, array $where): int
    {
        // TODO: Implement update() method.
    }

    public function delete(array $where): int
    {
        // TODO: Implement delete() method.
    }
}