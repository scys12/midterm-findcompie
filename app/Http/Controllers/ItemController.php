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

    public function displayAllItems()
    {
        return view('products.index', [
            'items' => $this->itemService->getAllItems()
        ]);
    }

    public function displayUserItem($id)
    {
        return view('product.show', [
            'item' => $this->itemService->getItem($id)
        ]);
    }

    public function displayGlobalProduct($id)
    {
        return view('products.show', [
            'item' => $this->itemService->getItem($id)
        ]);
    }

    public function displayUserItems(Request $request)
    {
        $user_data = array('user_id' => $request->user()->id);
        return view('dashboard', [
            'items' => $this->itemService->getUserItems($user_data)
        ]);
    }

    public function displayOtherUserItems($id)
    {
        $user_data = array('user_id' => $id, 'is_bought' => false);
        $result = $this->itemService->getOtherItems($user_data);
        return view('products.sellers', [
            'items' => $result['paginate'],
            'user' => $result['user'],
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
        return redirect()->route('dashboard')->with('status', 'Item successfully created');
    }

    public function updateItem(ItemRequest $request, $id)
    {
        $data = $request->validated();
        $data['user_id'] = $id;
        $updatedItem = $this->itemService->updateItem($data);
        return redirect()->route('dashboard')->with('status', 'Item successfully updated');
    }

    public function removeItem(Request $request)
    {
        $id = $request->id;
        $deletedItem = $this->itemService->removeItem($id);
        return redirect()->route('dashboard')->with('status', 'Item successfully deleted');
    }

    public function searchItems(Request $request)
    {
        $search = $request->search;
        return view('products.search', [
            'items' => $this->itemService->searchItems($search)
        ]);
    }
}
