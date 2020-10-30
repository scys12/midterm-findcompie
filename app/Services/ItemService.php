<?php

namespace App\Services;

use App\Contracts\Repository\ItemRepositoryInterface;
use App\Contracts\Repository\UserRepositoryInterface;
use App\Contracts\Service\ItemServiceInterface;

class ItemService implements ItemServiceInterface
{
    private $itemRepository;
    private $userRepository;
    public function __construct(ItemRepositoryInterface $itemRepository, UserRepositoryInterface $userRepository) {
        $this->itemRepository = $itemRepository;
        $this->userRepository = $userRepository;
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

    public function getOtherItems(array $data)
    {
        $items = $this->itemRepository->where($data);
        $user = $this->userRepository->findOrFail($data['user_id']);
        return array( 'paginate' => $this->itemRepository->paginate($items), 'user' => $user);
    }

    public function getItem(int $id)
    {
        return $this->itemRepository->findOrFail($id);
    }

    public function getAllItems()
    {
        $filter = array('is_bought' => false);
        $data = $this->itemRepository->where($filter);
        return $this->itemRepository->paginate($data);
    }

    public function searchItems($data)
    {
        $column = 'name';
        $operator = 'like';
        $target = '%'.$data.'%';
        $searched_data = $this->itemRepository->search($column, $operator, $target);
        return $this->itemRepository->paginate($searched_data);
    }
}