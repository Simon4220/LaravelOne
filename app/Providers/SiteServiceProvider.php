<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class SiteServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->Nav();
    }

    public function Nav(){
        view::composer('user.home', function ($view){
            $view->with('pages', \App\Models\Page::where('parent_id', 0)->where('active', 1)->get());
            
        });
    }
}
