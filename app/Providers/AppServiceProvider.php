<?php

namespace App\Providers;

use App\Models\Map;
use App\Models\Operator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;

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
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if(Schema::hasTable('maps')) {
            View::share('maps',Map::all());
        }

        if(Schema::hasTable('operators')) {
            View::share('operators',Operator::all());
        }
    }
}
