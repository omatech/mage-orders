<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/

Route::namespace('Omatech\MageOrders\App\Http\Controllers')
     ->prefix(config('mage.prefix'))
     ->middleware('web')
     ->name('mage-plugin-laravel-orders.')
     ->group(function ($route) {
         //routes
         $route->middleware(['mageRedirectIfNotAuthenticated', 'checkForPermissions:mage-access'])->group(function ($logged) {
            $logged->get('carts', 'CartsController@index')->name('carts.list');
            $logged->get('carts/{id}', 'CartsController@show')->name('carts.detail');
            
            $logged->get('customers', 'CustomersController@index')->name('customers.list');
            $logged->get('customers/{id}', 'CustomersController@show')->name('customers.detail');
            
            $logged->get('orders', 'OrdersController@index')->name('orders.list');
            $logged->get('orders/{id}', 'OrdersController@show')->name('orders.detail');
            
        });
     });
