<?php

namespace IntVent\TransIPLaravel;

use Illuminate\Support\ServiceProvider;
use Transip\Api\Library\TransipAPI;

class TransIPServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/transip.php' => config_path('transip.php'),
        ], 'config');
    }

    /**
     * Register any package services.
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/transip.php', 'transip'
        );

        $config = $this->app['config']->get('transip');
        $this->app->instance('transip', new TransipAPI(
            $config['login'],
            $config['privateKey'],
            $config['generateWhitelistOnlyTokens']
        ));
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['transip'];
    }
}