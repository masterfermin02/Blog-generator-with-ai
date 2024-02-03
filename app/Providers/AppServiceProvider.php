<?php

namespace App\Providers;

use OpenAI;
use  OpenAI\Client as OpenAIClient;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }

    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(OpenAIClient::class, fn ($pp) => OpenAI::client(config('openai.key')));
    }
}
