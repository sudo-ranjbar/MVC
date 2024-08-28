<?php

namespace App\Models\Contracts;

use Medoo\Medoo;

class MysqlBaseModel extends BaseModel
{

    protected function __construct()
    {
//        try {
//            $this->connection = new \PDO("mysql:host={$_ENV['DB_HOST']};dbname={$_ENV['DB_NAME']}", $_ENV['DB_USER'], $_ENV['DB_PASS']);
//            $this->connection->exec("set names utf8");
//        } catch (\PDOException $e) {
//            echo "Connection Failed ..." . $e->getMessage();
//        }

        try {
            $this->connection = new Medoo([
                'type' => 'mysql',
                'host' => $_ENV['DB_HOST'],
                'database' => $_ENV['DB_NAME'],
                'username' => $_ENV['DB_USER'],
                'password' => $_ENV['DB_PASS'],
            ]);
        } catch (\Exception $e) {
            echo "Connection Failed ..." . $e->getMessage();
        }

    }


    public function create(array $data): int
    {
        $this->connection->insert($this->table, $data);
        return 1 ?? 0;
    }


    public function find(int $id): object|null
    {

        return null;
    }


    public function get(array $columns, array $where): array
    {
        $this->connection->select($this->table, $columns, $where);

        return $this->connection->select($this->table, $columns, $where);
    }


    public function getAll(): array
    {
        return [];
    }


    public function update(array $where, array $data): int
    {
        $this->connection->update($this->table, $data, $where);
        return 1 ?? 0;
    }


    public function delete(array $where): int
    {
        $this->connection->delete($this->table, $where);
        return 1 ?? 0;
    }

}