<?php
 
namespace App\Providers;
 
// use App\View\Composers\ProfileComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Models\ShippingFee;

 
class ShippingServiceProvider extends ServiceProvider
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
        // // Using class based composers...

        View::composer(['usernew.register', 'usernew.update-profile', 'usernew.checkout-shop'], function ($view) {
            $view->with('cities', ShippingFee::all());
        });

    }
}