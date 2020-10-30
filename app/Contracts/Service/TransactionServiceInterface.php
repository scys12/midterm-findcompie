<?php

namespace App\Contracts\Service;

interface TransactionServiceInterface{
    public function createTransaction(array $data);
}