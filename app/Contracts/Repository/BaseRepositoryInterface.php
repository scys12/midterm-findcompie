<?php

namespace App\Contracts\Repository;

interface BaseRepositoryInterface{
    public function create(array $data);
    public function where(array $data);
    public function findOneBy(array $data);
    public function update(array $data, int $id);
    public function paginate($data,$perPage);
    public function delete(int $id);
    public function getAll();
    public function find(int $id);
    public function findOrFail(int $id);
    public function search($column, $operator, $target);
}