<?php

namespace App\Providers;

use App\Repositories\CssCourseServiceInterface;
use App\Repositories\CssFormRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(CssCourseServiceInterface::class, CssFormRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
