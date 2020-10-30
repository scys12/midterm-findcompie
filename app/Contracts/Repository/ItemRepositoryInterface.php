<?php

namespace App\Contracts\Repository;

interface ItemRepositoryInterface {
    public function create(array $data);
    public function updateIsBought($id);
    public function update(array $data, int $id);
}