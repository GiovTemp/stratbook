<?php

namespace App\Providers;

use App\Models\Map;
use App\Models\Primary;
use App\Models\Secondary;
use App\Models\Ability;
use App\Models\Gadget;
use App\Models\Operator;
use Illuminate\Support\Facades\View;
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

        if(Schema::hasTable('abilities')) {
            View::share('abilities',Ability::all());
        }

        if(Schema::hasTable('gadgets')) {
            View::share('gadgets',Gadget::all());
        }

        if(Schema::hasTable('primaries')) {
            View::share('primaries',Primary::all());
        }

        if(Schema::hasTable('secondaries')) {
            View::share('secondaries',Secondary::all());
        }
    }
}
