<?php

namespace Omatech\MageOrders\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Omatech\LaravelOrders\Contracts\Order;

class OrdersController extends Controller
{
 //index view (list orders) - detail view
    protected $customer;

    public function __construct(Order $order){
        $this->order = $order;
    }

    public function index(){
        dd('hi');
    }

    public function show($id){
        
        $order = $this->order::find($id);

        if($order==null){
            return view('mage::errors.404');
        }

        $this->viewData['order'] = $order;
        $this->viewData['deliveryAddress'] = $order->getDeliveryAddress();
        $this->viewData['billingData'] = $order->getBillingData();
        //$this->viewData['cartLines'] = $order->getOrderLines();


        
        return view('mage-plugin-laravel-orders::pages.order.detail', $this->viewData);
    }

    
}
