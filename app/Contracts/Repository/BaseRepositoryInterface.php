<?php

namespace App\Contracts\Repository;

interface BaseRepositoryInterface{
    public function create(array $data);
    public function update(array $data, int $id);
    public function delete(int $id);
    public function getAll();
    public function find(int $id);
    public function findOrFail(int $id);
}