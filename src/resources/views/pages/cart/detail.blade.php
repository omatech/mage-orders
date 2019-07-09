@extends('mage::layout.page')
@section('web-title', __('mage-plugin-laravel-orders.cart.view.web-title'))
@section('page-title', __('mage-plugin-laravel-orders.cart.view.page-title'))
@section('breadcrumbs')
<li class="breadcrumb-item active">@lang('mage-plugin-laravel-orders.cart.view.breadcrumb.title')</li>
@endsection

@section('page')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">@lang('mage-plugin-laravel-orders.cart.view.title'): {{$cart->getId()}}</h3>
        <div class="card-tools"></div>
    </div>
    <div class="card-body">
        <div class="row">
            @if($deliveryAddress!=null)
            <div class="col-md-6 col-xs-12">
                <table id="mage-cartDeliveryAddress-datatable" class="table table-bordered table-hover display" style="width:100%">
                    <tbody>
                        <tr>
                            <th>@lang('mage-plugin-laravel-orders.cart.DeliveryAddress.customer_id')</th>
                            <td>{{$deliveryAddress->getCustomerId()}}</td>
                        </tr>
                        <tr>
                            <th>@lang('mage-plugin-laravel-orders.cart.DeliveryAddress.first_name')</th>
                            <td>{{$deliveryAddress->getFirstName()}}</td>
                        </tr>
                        <tr>
                            <th>@lang('mage-plugin-laravel-orders.cart.DeliveryAddress.last_name')</th>
                            <td>{{$deliveryAddress->getLastName()}}</td>
                        </tr>
                        <tr>
                            <th>@lang('mage-plugin-laravel-orders.cart.DeliveryAddress.first_line')</th>
                            <td>{{$deliveryAddress->getFirstLine()}}</td>
                        </tr>
                        <tr>
                            <th>@lang('mage-plugin-laravel-orders.cart.DeliveryAddress.second_line')</th>
                            <td>{{$deliveryAddress->getSecondLine()}}</td>
                        </tr>
                        <tr>
                            <th>@lang('mage-plugin-laravel-orders.cart.DeliveryAddress.postal_code')</th>
                            <td>{{$deliveryAddress->getPostalCode()}}</td>
                        </tr>
                        <tr>
                            <th>@lang('mage-plugin-laravel-orders.cart.DeliveryAddress.city')</th>
                            <td>{{$deliveryAddress->getCity()}}</td>
                        </tr>
                        <tr>
                            <th>@lang('mage-plugin-laravel-orders.cart.DeliveryAddress.country')</th>
                            <td>{{$deliveryAddress->getCountry()}}</td>
                        </tr>
                        <tr>
                            <th>@lang('mage-plugin-laravel-orders.cart.DeliveryAddress.region')</th>
                            <td>{{$deliveryAddress->getRegion()}}</td>
                        </tr>
                        @if($deliveryAddress->getIsACompany())
                        <tr>
                            <th>@lang('mage-plugin-laravel-orders.cart.DeliveryAddress.company_name')</th>
                            <td>{{$deliveryAddress->getCompanyName()}}</td>
                        </tr>
                        <tr>
                            <th>@lang('mage-plugin-laravel-orders.cart.DeliveryAddress.phone_number')</th>
                            <td>{{$deliveryAddress->getPhoneNumber()}}</td>
                        </tr>
                        <tr>
                            <th>@lang('mage-plugin-laravel-orders.cart.DeliveryAddress.email')</th>
                            <td>{{$deliveryAddress->getEmail()}}</td>
                        </tr>
                        @endif

                    </tbody>
                </table>
            </div>
            @endif
            @if($billingData!=null)
            <div class="col-md-6 col-xs-12">
                <table id="mage-cartBillingData-datatable" class="table table-bordered table-hover display" style="width:100%">
                    <tbody>
                        <tr>
                            <th>@lang('mage-plugin-laravel-orders.cart.BillingData.customer_id')</th>
                            <td>{{$billingData->getCustomerId()}}</td>
                        </tr>
                        <tr>
                            <th>@lang('mage-plugin-laravel-orders.cart.BillingData.address_first_name')</th>
                            <td>{{$billingData->getAddressFirstName()}}</td>
                        </tr>
                        <tr>
                            <th>@lang('mage-plugin-laravel-orders.cart.BillingData.address_last_name')</th>
                            <td>{{$billingData->getAddressLastName()}}</td>
                        </tr>
                        <tr>
                            <th>@lang('mage-plugin-laravel-orders.cart.BillingData.address_first_line')</th>
                            <td>{{$billingData->getAddressFirstLine()}}</td>
                        </tr>
                        <tr>
                            <th>@lang('mage-plugin-laravel-orders.cart.BillingData.address_second_line')</th>
                            <td>{{$billingData->getAddressSecondLine()}}</td>
                        </tr>
                        <tr>
                            <th>@lang('mage-plugin-laravel-orders.cart.BillingData.address_postal_code')</th>
                            <td>{{$billingData->getAddressPostalCode()}}</td>
                        </tr>
                        <tr>
                            <th>@lang('mage-plugin-laravel-orders.cart.BillingData.address_city')</th>
                            <td>{{$billingData->getAddressCity()}}</td>
                        </tr>
                        <tr>
                            <th>@lang('mage-plugin-laravel-orders.cart.BillingData.address_region')</th>
                            <td>{{$billingData->getAddressRegion()}}</td>
                        </tr>
                        <tr>
                            <th>@lang('mage-plugin-laravel-orders.cart.BillingData.address_country')</th>
                            <td>{{$billingData->getAddressCountry()}}</td>
                        </tr>
                        <tr>
                            <th>@lang('mage-plugin-laravel-orders.cart.BillingData.company_name')</th>
                            <td>{{$billingData->getCompanyName()}}</td>
                        </tr>
                        <tr>
                            <th>@lang('mage-plugin-laravel-orders.cart.BillingData.cif')</th>
                            <td>{{$billingData->getCif()}}</td>
                        </tr>
                        <tr>
                            <th>@lang('mage-plugin-laravel-orders.cart.BillingData.phone_number')</th>
                            <td>{{$billingData->getPhoneNumber()}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            @endif
        </div>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <h3 class="card-title">@lang('mage-plugin-laravel-orders.cart.view.cartLines')</h3>
        <div class="card-tools"></div>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-6 col-xs-12">
                <table id="mage-cartLine-datatable" class="table table-bordered table-hover display" style="width:100%">
                    <thead>
                        <tr>
                            <th>@lang('mage-plugin-laravel-orders.cart.cartLine.productId')</th>
                            <th>@lang('mage-plugin-laravel-orders.cart.cartLine.productName')</th>
                            <th>@lang('mage-plugin-laravel-orders.cart.cartLine.quantity')</th>
                            <th>@lang('mage-plugin-laravel-orders.cart.cartLine.unitPrice')</th>
                            <th>@lang('mage-plugin-laravel-orders.cart.cartLine.totalPrice')</th>
                        </tr>
                        @if($cartLines!=null)
                        @foreach($cartLines as $line)
                        @php($product = $line->getProduct())
                        <tr>
                            <td>{{$line->getProductId()}}</td>
                            <td>{{$product->getName()}}</td>
                            <td>{{$line->getQuantity()}}</td>
                            <td>{{$product->getUnitPrice()}} €</td>
                            <td>{{$line->getTotalPrice()}} €</td>
                        </tr>
                        @endforeach
                        @endif
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
                <div class="col-md-6 col-xs-12">
                    <table id="mage-cartDeliveryResume-datatable" class="table table-bordered table-hover display" style="width:100%">
                        <tbody>
                            <tr>
                                <th>@lang('mage-plugin-laravel-orders.cart.total-price')</th>
                                <td>{{$cart->getTotalPrice()}} €</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
    </div>
</div>
@endsection