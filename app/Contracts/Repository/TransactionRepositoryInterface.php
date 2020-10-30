<?php

namespace App\Contracts\Repository;

interface TransactionRepositoryInterface {
    public function create(array $data);
}