<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

use App\Models\Facility;
use Illuminate\Support\Facades\View;
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
        Model::unguard();
        Paginator::useBootstrapFive();

        View::composer('*', function ($view) {
            $facilities = Facility::all(); // Mengambil semua data fasilitas
            $view->with('facilities', $facilities); // Menyertakan data fasilitas ke setiap view
        });
    }
}
