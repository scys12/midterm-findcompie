<?php

namespace App\Contracts\Service;

interface ItemServiceInterface{
    public function createItem(array $data);
    public function updateItem(array $data);
    public function removeItem(int $id);
    public function getItem(int $id);
    public function getAllItems();
    public function getUserItems(array $data);
}