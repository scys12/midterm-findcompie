<?php

namespace App\Repositories;

use App\Contracts\Repository\BaseRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

abstract class BaseRepository implements BaseRepositoryInterface{

    protected $model;
    
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function create(array $data){
        return $this->model->create($data);
    }

    public function getAll($columns = array('*'), string $orderBy = 'id', string $sortBy = 'asc')
    {
        return $this->model->orderBy($orderBy, $sortBy)->get($columns);
    }

    public function update(array $data, int $id)
    {
        return $this->model->find($id)->update($data);
    }

    public function find(int $id)
    {
        return $this->model->find($id);
    }

    public function findOrFail(int $id)
    {
        return $this->model->findOrFail($id);
    }

    public function delete(int $id)
    {
        return $this->find($id)->delete();
    }
}