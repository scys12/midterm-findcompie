<?php

namespace App\Services;

use App\Contracts\Repository\CategoryRepositoryInterface;
use Illuminate\Support\Facades\Hash;

class CategoryService
{
    private $categoryRepository;
    public function __construct(CategoryRepositoryInterface $categoryRepository) {
        $this->categoryRepository = $categoryRepository;
    }
    
    public function getAllCategories()
    {
        return $this->categoryRepository->getAll();
    }
}