@extends('mage::layout.page')
@section('web-title', __('mage-plugin-laravel-orders.carts.list.web-title'))
@section('page-title', __('mage-plugin-laravel-orders.carts.list.page-title'))
@section('breadcrumbs')
<li class="breadcrumb-item active">@lang('mage-plugin-laravel-orders.carts.list.breadcrumb.title')</li>
@endsection

@section('page')
<div class="card">
        <div class="card-header">
            <h3 class="card-title">@lang('mage-plugin-laravel-orders.carts.list.title')</h3>
            <div class="card-tools"></div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6 col-xs-12">
                    <table id="mage-carts-datatable" class="table table-bordered table-hover display" style="width:100%">
                        <thead>
                            <tr>
                                <th>@lang('mage-plugin-laravel-orders.carts.list.table.id')</th>
                                <th>@lang('mage-plugin-laravel-orders.carts.list.table.totalPrice')</th>
                            </tr>
                            @if($carts!=null)
                            @foreach($carts as $cart)
                            <tr>
                                <td><a href="{{route('mage-plugin-laravel-orders.carts.detail', ['id'=>$cart->getId()])}}">{{$cart->getId()}}</a></td>
                                <td>{{$cart->getTotalPrice()}} €</td>
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