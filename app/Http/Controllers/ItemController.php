<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contracts\Service\ItemServiceInterface;
use App\Contracts\Service\CategoryServiceInterface;
use App\Http\Requests\ItemRequest;

class ItemController extends Controller
{
    private $itemService;
    private $categoryService;

    public function __construct(ItemServiceInterface $itemService, CategoryServiceInterface $categoryService) {
        $this->itemService = $itemService;
        $this->categoryService = $categoryService;
    }

    public function displayUserItem($id)
    {
        return view('product.show', [
            'item' => $this->itemService->getItem($id)
        ]);
    }

    public function displayUserItems()
    {
        return view('dashboard', [
            'items' => $this->itemService->getAllItems()
        ]);
    }

    public function displayCreateItemPage()
    {
        return view('product.create',[
            'categories' => $this->categoryService->getAllCategories(),
        ]);
    }

    public function displayUpdateItemPage($id)
    {
        $displayedItem = $this->itemService->getItem($id);
        return view('product.edit',[
            'item' => $displayedItem,
            'categories' => $this->categoryService->getAllCategories(),
        ]);
    }

    public function createItem(ItemRequest $request)
    {
        $auth_user = $request->user();
        $data = $request->validated();
        $data['user_id'] = $auth_user->id;
        $newItem = $this->itemService->createItem($data);
        return view('dashboard');
    }

    public function updateItem(ItemRequest $request, $id)
    {
        $data = $request->validated();
        $data['user_id'] = $id;
        $updatedItem = $this->itemService->updateItem($data);
        return view('dashboard');
    }

    public function removeItem($id)
    {
        $deletedItem = $this->itemService->removeItem($id);
    }
}
