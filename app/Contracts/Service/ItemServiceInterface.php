<?php

namespace App\Contracts\Service;

interface ItemServiceInterface{
    public function createItem(array $data);
    public function updateItem(array $data, int $id);
    public function removeItem(int $id);
    public function getItem(int $id);
    public function getAllItems();
}