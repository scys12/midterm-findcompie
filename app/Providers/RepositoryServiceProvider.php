<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Contracts\Repository\ItemRepositoryInterface;
use App\Repositories\ItemRepository;
use App\Contracts\Repository\BaseRepositoryInterface;
use App\Repositories\BaseRepository;
use App\Contracts\Repository\CategoryRepositoryInterface;
use App\Repositories\CategoryRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ItemRepositoryInterface::class, ItemRepository::class);
        $this->app->bind(BaseRepositoryInterface::class, BaseRepository::class);
        $this->app->bind(CategoryRepositoryInterface::class, CategoryRepository::class);
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
