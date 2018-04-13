<?php

namespace Sfkazmi\Priema;

use Illuminate\Support\ServiceProvider;

class PriemaServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }

    public function registerAuthentication()
    {
        $this->app->bind('priema', function(){
            return new ApiAuthentication();
        });
    }

}