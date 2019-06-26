<?php

namespace Omatech\MageOrders;

use Illuminate\Support\ServiceProvider;
use Omatech\MageOrders\App\Providers\ViewServiceProvider;
use Omatech\MageOrders\App\Providers\HelperServiceProvider;
use Omatech\MageOrders\App\Providers\CommandServiceProvider;
use Omatech\MageOrders\App\Providers\RoutingServiceProvider;
use Omatech\MageOrders\App\Providers\MigrationServiceProvider;
use Omatech\MageOrders\App\Providers\MiddlewareServiceProvider;
use Omatech\MageOrders\App\Providers\ConfigurationServiceProvider;

class MageOrdersServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        //if (in_array('mage-orders', config('mage.plugins'))) {
            $this->app->register(CommandServiceProvider::class);
            $this->app->register(ConfigurationServiceProvider::class);
            $this->app->register(HelperServiceProvider::class);
            $this->app->register(MiddlewareServiceProvider::class);
            $this->app->register(MigrationServiceProvider::class);
            $this->app->register(RoutingServiceProvider::class);
            $this->app->register(ViewServiceProvider::class);
        //}
    }
}
