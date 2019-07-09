<?php

namespace Omatech\MageOrders\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Omatech\LaravelOrders\Contracts\Customer;

class CustomersController extends Controller
{
 //index view (list customers) - detail view
    protected $customer;

    public function __construct(Customer $customer){
        $this->customer = $customer;
    }

    public function index(){
        dd('hi');
    }

    public function show($id){
        
        $customer = $this->customer::find($id);

        if($customer==null){
            return view('mage::errors.404');
        }

        $this->viewData['customer'] = $customer;
        
        return view('mage-plugin-laravel-orders::pages.customer.detail', $this->viewData);
    }

    
}
