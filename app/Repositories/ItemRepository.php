<?php

namespace App\Repositories;

use App\Contracts\Repository\ItemRepositoryInterface;
use App\Models\Item;
use App\Repositories\BaseRepository;

class ItemRepository extends BaseRepository implements ItemRepositoryInterface {
    public function __construct(Item $model)
    {
        parent::__construct($model);
    }
    
    public function create(array $data){
        $this->model->name = $data['name'];
        $this->model->price = $data['price'];
        $this->model->description = $data['description'];
        $this->model->category_id = $data['category_id'];
        $this->model->user_id = $data['user_id'];
        return $this->model->save();
    }

    public function update(array $data, int $id)
    {
        $item = $this->find($id);
        $item->name = $data['name'];
        $item->price = $data['price'];
        $item->description = $data['description'];
        $item->category_id = $data['category_id'];
        return $item->save();
    }
}