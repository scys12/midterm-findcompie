<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Contracts\Repository\ItemRepositoryInterface;
use App\Repositories\ItemRepository;
use App\Contracts\Repository\BaseRepositoryInterface;
use App\Repositories\BaseRepository;
use App\Contracts\Repository\CategoryRepositoryInterface;
use App\Repositories\CategoryRepository;
use App\Contracts\Repository\TransactionRepositoryInterface;
use App\Repositories\TransactionRepository;
use App\Contracts\Repository\UserRepositoryInterface;
use App\Repositories\UserRepository;

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
        $this->app->bind(TransactionRepositoryInterface::class, TransactionRepository::class);
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
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
