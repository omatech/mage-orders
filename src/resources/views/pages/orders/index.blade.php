@extends('mage::layout.page')
@section('web-title', __('mage-plugin-laravel-orders.order.list.web-title'))
@section('page-title', __('mage-plugin-laravel-orders.order.list.page-title'))
@section('breadcrumbs')
<li class="breadcrumb-item active">@lang('mage-plugin-laravel-orders.order.list.breadcrumb.title')</li>
@endsection

@section('page')
<div class="card">
        <div class="card-header">
            <h3 class="card-title">@lang('mage-plugin-laravel-orders.order.list.title')</h3>
            <div class="card-tools"></div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6 col-xs-12">
                    <table id="mage-orders-datatable" class="table table-bordered table-hover display" style="width:100%">
                        <thead>
                            <tr>
                                <th>@lang('mage-plugin-laravel-orders.order.list.table.id')</th>
                                <th>@lang('mage-plugin-laravel-orders.order.list.table.customerId')</th>
                                <th>@lang('mage-plugin-laravel-orders.order.list.table.totalPrice')</th>
                                <th>@lang('mage-plugin-laravel-orders.order.list.table.status')</th>
                            </tr>
                            @if($orders!=null)
                            @foreach($orders as $order)
                            <tr>
                                <td><a href="{{route('mage-plugin-laravel-orders.orders.detail', ['id'=>$order->getId()])}}">{{$order->getId()}}</a></td>
                                <td><a href="{{route('mage-plugin-laravel-orders.customers.detail', ['id'=>$order->getCustomerId()])}}">{{$order->getCustomerId()}}</a></td>
                                <td>{{--$order->getTotalPrice()--}}</td>
                                <td>{{$order->getStatus()}}</td>
                            </tr>
                            @endforeach
                            @endif
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection