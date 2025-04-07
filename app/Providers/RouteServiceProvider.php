<?php

namespace App\Providers;

use App\Http\Middleware\AdminMiddleware; // Ensure this is correctly imported
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        // Register any custom services if needed
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // Register the custom 'admin' middleware here
        Route::aliasMiddleware('isadmin', AdminMiddleware::class);

        // Load your routes as usual
        $this->mapWebRoutes();
    }

    /**
     * Define the "web" routes for the application.
     */
    protected function mapWebRoutes(): void
    {
        Route::middleware('web')
            ->group(base_path('routes/web.php')); // Removed $this->namespace as it's no longer needed
    }
}
