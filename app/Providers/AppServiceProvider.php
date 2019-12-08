<?php

namespace StudentsForum\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\view;
use StudentsForum\Channel;

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
        View::share('channels',Channel::all());
    }
}
