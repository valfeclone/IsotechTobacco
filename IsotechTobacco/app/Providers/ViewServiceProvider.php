<?php
 
namespace App\Providers;
 
// use App\View\Composers\ProfileComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Models\Profil;

 
class ViewServiceProvider extends ServiceProvider
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
        // View::composer('layouts.usernew.base', ProfileComposer::class);

        View::composer(['layouts.usernew.base', 'layouts.usernew.auth-base', 'layouts.adminnew.base', 'usernew.index'], function ($view) {
            $view->with('profiles', Profil::all()->first());
        });

    }
}