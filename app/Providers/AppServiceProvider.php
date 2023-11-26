<?php

namespace App\Providers;

use App\Models\Menu;
use Illuminate\Support\Str;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\View;

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

        $menus=Menu::all();

        Paginator::useBootstrap();
        Blade::directive('truncate', function ($expression) {
            list($string, $length) = explode(',', $expression);
            return "<?php echo e(Str::limit($string, $length, '...')); ?>";
        });

        View::composer('*', function ($view) {
            $view->with('commonVariable', 'menus');
        });
        
    }
}
