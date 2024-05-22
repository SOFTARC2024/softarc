<?php

namespace App\Providers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        view()->composer('sistema.admin', function($view){
            $view->with('users', Auth::user());
        });
        view()->composer('sistema.adminList', function($view){
            $view->with('users', Auth::user());
        });
        view()->composer('sistema.adminSearch', function($view){
            $view->with('users', Auth::user());
        });
        view()->composer('sistema.book', function($view){
            $view->with('users', Auth::user());
        });
        view()->composer('sistema.bookConfig', function($view){
            $view->with('users', Auth::user());
        });
        view()->composer('sistema.bookInfo', function($view){
            $view->with('users', Auth::user());
        });
        view()->composer('sistema.catalog', function($view){
            $view->with('users', Auth::user());
        });
        view()->composer('sistema.category', function($view){
            $view->with('users', Auth::user());
        });
        view()->composer('sistema.categoryList', function($view){
            $view->with('users', Auth::user());
        });
        view()->composer('sistema.client', function($view){
            $view->with('users', Auth::user());
        });
        view()->composer('sistema.clientList', function($view){
            $view->with('users', Auth::user());
        });
        view()->composer('sistema.clientSearch', function($view){
            $view->with('users', Auth::user());
        });
        view()->composer('sistema.company', function($view){
            $view->with('users', Auth::user());
        });
        view()->composer('sistema.companyList', function($view){
            $view->with('users', Auth::user());
        });
        view()->composer('sistema.home', function($view){
            $view->with('users', Auth::user());
        });
        view()->composer('sistema.index', function($view){
            $view->with('users', Auth::user());
        });
        view()->composer('sistema.myAccount', function($view){
            $view->with('users', Auth::user());
        });
        view()->composer('sistema.myData', function($view){
            $view->with('users', Auth::user());
        });
        view()->composer('sistema.provider', function($view){
            $view->with('users', Auth::user());
        });
        view()->composer('sistema.providerList', function($view){
            $view->with('users', Auth::user());
        });
        view()->composer('sistema.search', function($view){
            $view->with('users', Auth::user());
        });
        view()->composer('dashboard', function($view){
            $view->with('users', Auth::user());
        });
    }
}
