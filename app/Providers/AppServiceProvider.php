<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
// 1. ESTA LÍNEA ES OBLIGATORIA (La que faltaba en el log)
use Illuminate\Support\Facades\URL; 

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
        // 2. LA LÓGICA DEBE IR AQUÍ EN EL MÉTODO BOOT
        if (config('app.env') === 'production') { 
            URL::forceScheme('https');
        }
    }
}
