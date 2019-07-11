@extends('mage::layout.page')
@section('web-title', __('mage-plugin-laravel-orders.customer.view.web-title'))
@section('page-title', __('mage-plugin-laravel-orders.customer.view.page-title'))
@section('breadcrumbs')
<li class="breadcrumb-item"><a href="{{route('mage-plugin-laravel-orders.customers.list')}}">@lang('mage-plugin-laravel-orders.customers.list.breadcrumb.title')</a></li>
<li class="breadcrumb-item active">@lang('mage-plugin-laravel-orders.customer.view.breadcrumb.title') : {{$customer->getId()}}</li>
@endsection

@section('page')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">@lang('mage-plugin-laravel-orders.customer.view.title'): {{$customer->getId()}}</h3>
        <div class="card-tools"></div>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-6 col-xs-12">
                <table id="mage-cartDeliveryAddress-datatable" class="table table-bordered table-hover display" style="width:100%">
                    <tbody>
                        <tr>
                            <th>@lang('mage-plugin-laravel-orders.customer.id')</th>
                            <td>{{$customer->getId()}}</td>
                        </tr>
                        <tr>
                            <th>@lang('mage-plugin-laravel-orders.customer.first_name')</th>
                            <td>{{$customer->getFirstName()}}</td>
                        </tr>
                        <tr>
                            <th>@lang('mage-plugin-laravel-orders.customer.last_name')</th>
                            <td>{{$customer->getLastName()}}</td>
                        </tr>
                        <tr>
                            <th>@lang('mage-plugin-laravel-orders.customer.birthday')</th>
                            <td>{{$customer->getBirthday()}}</td>
                        </tr>
                        <tr>
                            <th>@lang('mage-plugin-laravel-orders.customer.phone_number')</th>
                            <td>{{$customer->getPhoneNumber()}}</td>
                        </tr>
                        <tr>
                            <th>@lang('mage-plugin-laravel-orders.customer.gender')</th>
                            <td>{{$customer->getGender()}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h3 class="card-title">@lang('mage-plugin-laravel-orders.customer.orders')</h3>
        <div class="card-tools"></div>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-6 col-xs-12">
                <table id="mage-cartOrders-datatable" class="table table-bordered table-hover display" style="width:100%">
                    <tbody>
                        <thead>
                            <tr>
                                <th>@lang('mage-plugin-laravel-orders.customer.orderLine.id')</th>
                                <th>@lang('mage-plugin-laravel-orders.customer.orderLine.code')</th>
                                <th>@lang('mage-plugin-laravel-orders.cacustomerrt.orderLine.totalPrice')</th>
                                <th>@lang('mage-plugin-laravel-orders.customer.orderLine.status')</th>
                            </tr>
                            @if($orders!=null)
                            @foreach($orders as $item)
                            <tr>
                                <td><a href="{{route('mage-plugin-laravel-orders.orders.detail', ['id'=>$item->getId()])}}">{{$item->getId()}}</a></td>
                                <td>{{$item->getCode()}}</td>
                                <td>{{--$item->getTotalPrice()--}} €</td>
                                <td>{{$item->getStatus()}}</td>
                            </tr>
                            @endforeach
                            @endif
                        </thead>
                        <tbody>
                        </tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection