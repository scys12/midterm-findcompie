<?php

namespace App\Services;

use App\Contracts\Repository\ItemRepositoryInterface;
use App\Contracts\Service\ItemServiceInterface;

class ItemService implements ItemServiceInterface
{
    private $itemRepository;
    public function __construct(ItemRepositoryInterface $itemRepository) {
        $this->itemRepository = $itemRepository;
    }
    
    public function createItem(array $data)
    {
        return $this->itemRepository->create($data);
    }

    public function updateItem(array $data)
    {
        return $this->itemRepository->update($data, $data['user_id']);
    }

    public function removeItem(int $id)
    {
        return $this->itemRepository->delete($id);
    }

    public function getUserItems(array $data)
    {
        $items = $this->itemRepository->where($data);
        return $this->itemRepository->paginate($items);
    }

    public function getItem(int $id)
    {
        return $this->itemRepository->findOrFail($id);
    }

    public function getAllItems()
    {
        $data = $this->itemRepository->getAll();
        return $this->itemRepository->paginate($data);        
    }
}