<?php

namespace Omatech\MageOrders\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Omatech\LaravelOrders\Contracts\Cart;

class CartsController extends Controller
{
 
    protected $cart;

    public function __construct(Cart $cart){
        $this->cart = $cart;
    }

    public function show($id){
        
        $cart = $this->cart::find($id);

        if($cart==null){
            return view('mage::errors.404');
        }

        $this->viewData['cart'] = $cart;
        $this->viewData['deliveryAddress'] = $cart->getDeliveryAddress();
        $this->viewData['billingData'] = $cart->getBillingData();
        $this->viewData['cartLines'] = $cart->getCartLines();
        
        return view('mage-plugin-laravel-orders::pages.cart.detail', $this->viewData);
    }

    
}
