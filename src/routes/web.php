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
            $logged->get('cart/{id}', 'CartsController@show')->name('cart.detail');
            
            
            $logged->get('customer/{id}', 'CustomersController@show')->name('customer.detail');
            
        });
     });
