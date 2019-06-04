<?php

namespace App\Providers;

use App\Repositories\Eloquent\PageRepository;
use App\Repositories\Interfaces\Page\PageInterface;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->singleton(PageInterface::class, PageRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Schema::defaultStringLength(191);
        DB::listen(function ($query) {
            Log::info($query->sql, $query->bindings, $query->time);
        });
    }
}
