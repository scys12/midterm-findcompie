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
}