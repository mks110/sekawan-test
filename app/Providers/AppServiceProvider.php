<?php

namespace App\Providers;

use App\Models\RekapKendaraan;
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
        // $chart = RekapKendaraan::distinct()->get(['kendaraan']);
        $chart = RekapKendaraan::groupBy('kendaraan')->selectRaw('count(*) as count, kendaraan')->get();
        
        // view()->share('chart', $chart);
        view()->share('chart', $chart);
    }
}
