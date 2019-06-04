<?php
/**
 * Created by PhpStorm.
 * User: vanth
 * Date: 6/4/2019
 * Time: 10:13 AM
 */

namespace App\Providers;


use App\Repositories\Eloquent\CrawlerRepository;
use App\Repositories\Interfaces\MainInterface;
use Illuminate\Support\ServiceProvider;

class CrawlServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->bind(MainInterface::class,CrawlerRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
