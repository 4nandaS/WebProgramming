<?php

namespace App\Providers;

use App\Settings\ContactSettings;
use App\Settings\HomeSettings;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            $contactSettings = app()->make(ContactSettings::class);
            $homeSettings = app()->make(HomeSettings::class);
            $view->with('contactSettings', $contactSettings->toCollection());
            $view->with('homeSettings', $homeSettings->toCollection());
        });
    }
}
