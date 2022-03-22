<?php
 
namespace App\Providers;
 
// use App\View\Composers\ProfileComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
// use App\Models\Profil;

 
class UserServiceProvider extends ServiceProvider
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

        View::composer(['layouts.usernew.base'], function ($view) {
            $view->with('user', $user = Auth::user());
        });

    }
}