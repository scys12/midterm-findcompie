<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contracts\Service\ItemServiceInterface;
use App\Http\Requests\ItemRequest;

class ItemController extends Controller
{
    private $itemService;

    public function __construct(ItemServiceInterface $itemService) {
        $this->itemService = $itemService;
    }

    public function createItem(ItemRequest $request)
    {
        $auth_user = $request->user();
        $data = array_merge($auth_user, $request->validated());
        $newItem = $this->itemService->createItem($data);
    }

    public function updateItem(ItemRequest $request, $id)
    {
        $updatedItem = $this->itemService->updateItem($request->validated(), $id);
    }

    public function removeItem($id)
    {
        $deletedItem = $this->itemService->removeItem($id);
    }
}
