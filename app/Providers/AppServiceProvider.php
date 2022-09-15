<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Pagination\Paginator;

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
        Paginator::useBootstrap();

        Gate::define('staff', function(User $user){
            return $user->roles ==='staff';
        });
        Gate::define('mahasiswa', function(User $user){
            return $user->roles ==='mahasiswa';
        });
        Gate::define('admin', function(User $user){
            return $user->roles ==='admin';
        });
    }
}
