<?php

namespace App\Services;

use App\Contracts\Repository\TransactionRepositoryInterface;
use App\Contracts\Repository\ItemRepositoryInterface;
use App\Contracts\Service\TransactionServiceInterface;
use Illuminate\Support\Facades\Hash;

class TransactionService implements TransactionServiceInterface
{
    private $transactionRepository;
    private $itemRepository;
    public function __construct(TransactionRepositoryInterface $transactionRepository, ItemRepositoryInterface $itemRepository) {
        $this->transactionRepository = $transactionRepository;
        $this->itemRepository = $itemRepository;
    }
    
    public function createTransaction(array $data)
    {
        $item = $this->itemRepository->updateIsBought($data['item_id']);
        return $this->transactionRepository->create($data);
    }
}