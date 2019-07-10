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
            // $logged->get('carts', 'CartsController@index')->name('cart.list');
            $logged->get('cart/{id}', 'CartsController@show')->name('cart.detail');
            
            // $logged->get('customers', 'CustomersController@index')->name('customer.list');
            $logged->get('customer/{id}', 'CustomersController@show')->name('customer.detail');
            
            // $logged->get('orders', 'OrdersController@index')->name('order.list');
            $logged->get('order/{id}', 'OrdersController@show')->name('order.detail');
            
        });
     });
