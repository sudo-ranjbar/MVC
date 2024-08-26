<?php

namespace App\Models\Contracts;

interface CrudInterface
{

    # Create (INSERT)
    public function create(array $data) : int;



    # Read (SELECT)
    public function find(int $id) : object;
    public function get(array $columns, array $where) : array;



    # Update (UPDATE)
    public function update(array $data, array $where) : int;



    # Delete (DELETE)
    public function delete(array $where) : int;

}