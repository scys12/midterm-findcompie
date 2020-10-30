<?php

namespace App\Repositories;

use App\Contracts\Repository\BaseRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;

abstract class BaseRepository implements BaseRepositoryInterface{

    protected $model;
    
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function create(array $data){
        return $this->model->create($data);
    }

    public function where(array $data)
    {
        return $this->model->where($data)->get();
    }

    public function findOneBy(array $data)
    {
        return $this->model->where($data)->first();
    }

    public function paginate($data, $perPage = 9)
    {
        $page = request()->get('page', 1);
        $offset = ($page * $perPage) - $perPage;
        $lengthPaginator = new LengthAwarePaginator(
            array_slice($data->all(), $offset, $perPage, false),
            count($data->all()),
            $perPage,
            $page,
            [
                'path' => request()->url(),
                'query' => request()->query()
            ]
        );
        return $lengthPaginator;
    }

    public function getAll($columns = array('*'), string $orderBy = 'id', string $sortBy = 'asc')
    {
        return $this->model->orderBy($orderBy, $sortBy)->get($columns);
    }

    public function update(array $data, int $id)
    {
        return $this->find($id)->update($data);
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