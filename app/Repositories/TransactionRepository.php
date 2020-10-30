<?php

namespace App\Repositories;

use App\Contracts\Repository\TransactionRepositoryInterface;
use App\Models\Transaction;
use App\Repositories\BaseRepository;

class TransactionRepository extends BaseRepository implements TransactionRepositoryInterface {
    public function __construct(Transaction $model)
    {
        parent::__construct($model);
    }

    public function create(array $data){
        $this->model->price = $data['price'];
        $this->model->user_id = $data['user_id'];
        $this->model->item_id = $data['item_id'];
        return $this->model->save();
    }
}