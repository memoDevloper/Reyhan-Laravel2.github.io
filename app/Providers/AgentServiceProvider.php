<?php

namespace App\Providers;

use View;
use Jenssegers\Agent\Agent;
use Illuminate\Support\ServiceProvider;

class AgentServiceProvider extends ServiceProvider
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
        $agent = new Agent();

        View::share('agent', $agent);
    }
}
