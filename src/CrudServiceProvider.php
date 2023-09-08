<?php

namespace Nahid\Crud;

use Illuminate\Support\ServiceProvider;

class CrudServiceProvider extends ServiceProvider{
    public function register()
    {
        $this->app->make('Nahid\Crud\BrandController');
    }
    public function boot(){
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->loadRoutesFrom(__DIR__.'../routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/resources/views/product','product');
    }
}
