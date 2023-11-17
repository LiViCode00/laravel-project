<?php

namespace App\Providers;

use Illuminate\Support\Str;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

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
        Blade::directive('truncate', function ($expression) {
            list($string, $length) = explode(',', $expression);
            return "<?php echo e(Str::limit($string, $length, '...')); ?>";
        });
        
    }
}
