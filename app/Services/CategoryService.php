<?php

namespace App\Services;

use App\Contracts\Repository\CategoryRepositoryInterface;
use App\Contracts\Service\CategoryServiceInterface;
use Illuminate\Support\Facades\Hash;

class CategoryService implements CategoryServiceInterface
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