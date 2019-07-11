@extends('mage::layout.page')
@section('web-title', __('mage-plugin-laravel-orders.customers.list.web-title'))
@section('page-title', __('mage-plugin-laravel-orders.customers.list.page-title'))
@section('breadcrumbs')
<li class="breadcrumb-item active">@lang('mage-plugin-laravel-orders.customers.list.breadcrumb.title')</li>
@endsection

@section('page')
<div class="card">
        <div class="card-header">
            <h3 class="card-title">@lang('mage-plugin-laravel-orders.customers.list.title')</h3>
            <div class="card-tools"></div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6 col-xs-12">
                    <table id="mage-customers-datatable" class="table table-bordered table-hover display" style="width:100%">
                        <thead>
                            <tr>
                                <th>@lang('mage-plugin-laravel-orders.customers.list.table.id')</th>
                                <th>@lang('mage-plugin-laravel-orders.customers.list.table.email')</th>
                                <th>@lang('mage-plugin-laravel-orders.order.customers.table.firstName')</th>
                                <th>@lang('mage-plugin-laravel-orders.order.customers.table.lastName')</th>
                                <th>@lang('mage-plugin-laravel-orders.order.customers.table.phoneNumber')</th>
                            </tr>
                            @if($customers!=null)
                            @foreach($customers as $customer)
                            <tr>
                                <td><a href="{{route('mage-plugin-laravel-orders.customers.detail', ['id'=>$customer->getId()])}}">{{$customer->getId()}}</a></td>
                                <td>{{$customer->getEmail()}}</td>
                                <td>{{$customer->getFirstName()}}</td>
                                <td>{{$customer->getLastName()}}</td>
                                <td>{{$customer->getPhoneNumber()}}</td>
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