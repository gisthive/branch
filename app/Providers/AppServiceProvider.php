<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

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
        Schema::defaultStringLength(191);

        $meddb = new \App\Ph_sub_categories;
        $med = $meddb->where('oid', 3)->get();
        $cat = \App\Ph_categories::all();
        view()->share('med', $med);
        view()->share('cat', $cat);
    }
}
