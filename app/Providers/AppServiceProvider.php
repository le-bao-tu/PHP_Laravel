<?php

namespace App\Providers;
use App\Helper\Cart;
use Illuminate\Support\ServiceProvider;
use App\Models\Product;

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
        view()->composer('*',function($view){

            $view->with([
                'cart'=>new Cart(),
                'demo'=>'giatri',
            ]);
        });
    }
}
