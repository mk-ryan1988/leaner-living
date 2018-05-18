<?php

namespace App\Providers;

use App\Setting;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
      // $freshSettings = Setting::displayable();
      //
      // view()->composer('*', function($view) use($freshSettings) {
      //    $view->with('freshSettings', $freshSettings);
      // });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
