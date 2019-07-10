@extends('mage::layout.page')
@section('web-title', __('mage-plugin-laravel-orders.order.view.web-title'))
@section('page-title', __('mage-plugin-laravel-orders.order.view.page-title'))
@section('breadcrumbs')
<li class="breadcrumb-item active">@lang('mage-plugin-laravel-orders.order.view.breadcrumb.title')</li>
@endsection

@section('page')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">@lang('mage-plugin-laravel-orders.order.view.title'): {{$order->getId()}}</h3>
        <div class="card-tools"></div>
    </div>
    <div class="card-body">
        <div class="row">
            @if($deliveryAddress!=null)
            <div class="col-md-6 col-xs-12">
                <table id="mage-cartDeliveryAddress-datatable" class="table table-bordered table-hover display" style="width:100%">
                    <tbody>
                        <tr>
                            <th>@lang('mage-plugin-laravel-orders.order.DeliveryAddress.customer')</th>
                            <td><a href="{{route('mage-plugin-laravel-orders.customer.detail', ['id'=>$order->getCustomerId()])}}">{{$order->getCustomerId()}}</a></td>
                        </tr>
                        <tr>
                            <th>@lang('mage-plugin-laravel-orders.order.DeliveryAddress.first_name')</th>
                            <td>{{$deliveryAddress->getFirstName()}}</td>
                        </tr>
                        <tr>
                            <th>@lang('mage-plugin-laravel-orders.order.DeliveryAddress.last_name')</th>
                            <td>{{$deliveryAddress->getLastName()}}</td>
                        </tr>
                        <tr>
                            <th>@lang('mage-plugin-laravel-orders.order.DeliveryAddress.first_line')</th>
                            <td>{{$deliveryAddress->getFirstLine()}}</td>
                        </tr>
                        <tr>
                            <th>@lang('mage-plugin-laravel-orders.order.DeliveryAddress.second_line')</th>
                            <td>{{$deliveryAddress->getSecondLine()}}</td>
                        </tr>
                        <tr>
                            <th>@lang('mage-plugin-laravel-orders.order.DeliveryAddress.postal_code')</th>
                            <td>{{$deliveryAddress->getPostalCode()}}</td>
                        </tr>
                        <tr>
                            <th>@lang('mage-plugin-laravel-orders.order.DeliveryAddress.city')</th>
                            <td>{{$deliveryAddress->getCity()}}</td>
                        </tr>
                        <tr>
                            <th>@lang('mage-plugin-laravel-orders.order.DeliveryAddress.country')</th>
                            <td>{{$deliveryAddress->getCountry()}}</td>
                        </tr>
                        <tr>
                            <th>@lang('mage-plugin-laravel-orders.order.DeliveryAddress.region')</th>
                            <td>{{$deliveryAddress->getRegion()}}</td>
                        </tr>
                        @if($deliveryAddress->getIsACompany())
                        <tr>
                            <th>@lang('mage-plugin-laravel-orders.order.DeliveryAddress.company_name')</th>
                            <td>{{$deliveryAddress->getCompanyName()}}</td>
                        </tr>
                        <tr>
                            <th>@lang('mage-plugin-laravel-orders.order.DeliveryAddress.phone_number')</th>
                            <td>{{$deliveryAddress->getPhoneNumber()}}</td>
                        </tr>
                        <tr>
                            <th>@lang('mage-plugin-laravel-orders.order.DeliveryAddress.email')</th>
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
                            <th>@lang('mage-plugin-laravel-orders.order.BillingData.company')</th>
                        </tr>
                        <tr>
                            <th>@lang('mage-plugin-laravel-orders.order.BillingData.address_first_name')</th>
                            <td>{{$billingData->getAddressFirstName()}}</td>
                        </tr>
                        <tr>
                            <th>@lang('mage-plugin-laravel-orders.order.BillingData.address_last_name')</th>
                            <td>{{$billingData->getAddressLastName()}}</td>
                        </tr>
                        <tr>
                            <th>@lang('mage-plugin-laravel-orders.order.BillingData.address_first_line')</th>
                            <td>{{$billingData->getAddressFirstLine()}}</td>
                        </tr>
                        <tr>
                            <th>@lang('mage-plugin-laravel-orders.order.BillingData.address_second_line')</th>
                            <td>{{$billingData->getAddressSecondLine()}}</td>
                        </tr>
                        <tr>
                            <th>@lang('mage-plugin-laravel-orders.order.BillingData.address_postal_code')</th>
                            <td>{{$billingData->getAddressPostalCode()}}</td>
                        </tr>
                        <tr>
                            <th>@lang('mage-plugin-laravel-orders.order.BillingData.address_city')</th>
                            <td>{{$billingData->getAddressCity()}}</td>
                        </tr>
                        <tr>
                            <th>@lang('mage-plugin-laravel-orders.order.BillingData.address_region')</th>
                            <td>{{$billingData->getAddressRegion()}}</td>
                        </tr>
                        <tr>
                            <th>@lang('mage-plugin-laravel-orders.order.BillingData.address_country')</th>
                            <td>{{$billingData->getAddressCountry()}}</td>
                        </tr>
                        <tr>
                            <th>@lang('mage-plugin-laravel-orders.order.BillingData.company_name')</th>
                            <td>{{$billingData->getCompanyName()}}</td>
                        </tr>
                        <tr>
                            <th>@lang('mage-plugin-laravel-orders.order.BillingData.cif')</th>
                            <td>{{$billingData->getCif()}}</td>
                        </tr>
                        <tr>
                            <th>@lang('mage-plugin-laravel-orders.order.BillingData.phone_number')</th>
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
            <h3 class="card-title">@lang('mage-plugin-laravel-orders.order.view.orderLines')</h3>
            <div class="card-tools"></div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6 col-xs-12">
                    <table id="mage-orderLine-datatable" class="table table-bordered table-hover display" style="width:100%">
                        <thead>
                            <tr>
                                <th>@lang('mage-plugin-laravel-orders.order.orderLine.id')</th>
                                <th>@lang('mage-plugin-laravel-orders.order.ordertLine.quantity')</th>
                            </tr>
                            @if($orderLines!=null)
                            @foreach($orderLines as $line)
                            <tr>
                                <td>{{$line->getId()}}</td>
                                <td>{{$line->getQuantity()}}</td>
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
                        <table id="mage-orderDeliveryResume-datatable" class="table table-bordered table-hover display" style="width:100%">
                            <tbody>
                                <tr>
                                    <th>@lang('mage-plugin-laravel-orders.order.total-price')</th>
                                    {{-- <td>{{$cart->getTotalPrice()}} €</td> --}}
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
        </div>
    </div>
@endsection