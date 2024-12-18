<?php

namespace App\Providers;

use Filament\Facades\Filament;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public $singletons = [
        \Filament\Http\Responses\Auth\Contracts\LoginResponse::class => \App\Http\Responses\CustomLoginResponse::class,
        \Filament\Http\Responses\Auth\Contracts\LogoutResponse::class => \App\Http\Responses\CustomLogoutResponse::class,
    ];
    
    public function register(): void
    {
        // Daftarkan layanan lainnya jika diperlukan
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //parent::boot();

    }
}
