<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Contracts\Service\ItemServiceInterface;
use App\Services\ItemService;
use App\Contracts\Service\CategoryServiceInterface;
use App\Services\CategoryService;

class UsecaseServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ItemServiceInterface::class, ItemService::class);
        $this->app->bind(CategoryServiceInterface::class, CategoryService::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
