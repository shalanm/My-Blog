<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
Use View;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view::composer(['Pages1.profile' ,'Pages1.settings'] ,'App\Http\ViewComposers\ProfileComposer');
        
        /*
        view::composer('Pages1.profile' ,'App\Http\ViewComposers\ProfileComposer');
        view::composer('Pages1.settings' ,'App\Http\ViewComposers\ProfileComposer');
         * 
         */
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    
    public function register()
    {
        //
    }
}
