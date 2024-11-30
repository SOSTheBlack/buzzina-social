<?php

namespace App\Providers;

use App\Repositories\Contracts\RaffleCategoryRepository;
use App\Repositories\RaffleCategoryRepositoryEloquent;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(RaffleCategoryRepository::class, RaffleCategoryRepositoryEloquent::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
