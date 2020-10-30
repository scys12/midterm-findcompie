<?php

namespace App\Http\Controllers;

use App\Contracts\Service\ItemServiceInterface;
use App\Contracts\Service\TransactionServiceInterface;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    private $transactionService;

    public function __construct(TransactionServiceInterface $transactionService) {
        $this->transactionService = $transactionService;
    }

    public function createTransaction(Request $request)
    {
        $userId = $request->user()->id;
        $itemId = $request->item_id;
        $price = $request->price;
        $data = array('price' => $userId, 'item_id' => $itemId, 'user_id' => $userId);
        $deletedItem = $this->transactionService->createTransaction($data);
        return redirect()->route('dashboard');
    }
}