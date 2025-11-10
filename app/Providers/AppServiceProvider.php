<?php

namespace App\Providers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
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
        // Define gates for role-based access
        Gate::define('admin', function ($user) {
            return Auth::guard('admin')->check();
        });
        
        Gate::define('pimpinan', function ($user) {
            return Auth::guard('pimpinan')->check();
        });
        
        Gate::define('pegawai', function ($user) {
            return Auth::guard('pegawai')->check();
        });
        
        Gate::define('katim', function ($user) {
            return Auth::guard('katim')->check();
        });
    }
}
