<?php

namespace App\Services;

use App\Contracts\Repository\ItemRepositoryInterface;
use Illuminate\Support\Facades\Hash;

class ItemService
{
    private $itemRepository;
    public function __construct(ItemRepositoryInterface $itemRepository) {
        $this->itemRepository = $itemRepository;
    }
    
    public function createItem(array $data)
    {
        return $this->itemRepository->create($data);
    }

    public function updateItem(array $data, $id)
    {
        return $this->itemRepository->update($data, $id);
    }

    public function removeItem($id)
    {
        return $this->itemRepository->delete($id);
    }

    public function getItem(int $id)
    {
        return $this->itemRepository->findOrFail($id);
    }

    public function getAllItems()
    {
        return $this->itemRepository->getAll();
    }
}