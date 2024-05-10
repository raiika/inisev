<?php

namespace App\Providers;

use App\Events\PostCreated;
use App\Listeners\SendEmailNotification;
use App\Services\Domain;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    protected $listen = [
        PostCreated::class => [
            SendEmailNotification::class,
        ],
    ];

    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(Domain::class, function (Application $app) {
            return new Domain(request()->host());
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
