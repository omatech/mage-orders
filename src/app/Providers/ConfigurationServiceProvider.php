<?php

namespace Omatech\MageOrders\App\Providers;

use Illuminate\Support\ServiceProvider;

class ConfigurationServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->configurations();
    }

    /**
     * Register configurations.
     *
     * @return void
     */
    private function configurations()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../../config/mage-plugin-laravel-orders.php',
            'mage-plugin-laravel-orders'
        );
    }
}
