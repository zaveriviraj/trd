<?php

namespace App\Providers;

use App\Favoritelist;
use App\Layout;
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
        Schema::defaultStringLength(191);
        View::composer('companies.index', function($view) {
            $layouts = Layout::latest()->get();
            $favoritelists = Favoritelist::where('user_id', auth()->id())->latest()->get();
            $view->with('layouts', $layouts);
            $view->with('favoritelists', $favoritelists);
            
            if (request()->has('layout')) {
                $layout = Layout::find(request('layout'));
                $view->with('layout', $layout);
            }
        });
    }
}
