@can('mage-plugin-laravel-orders-zone', 'mage')
<li class="nav-item">
    <a href="{{route('mage-plugin-laravel-orders.customers.list')}}" class="nav-link {{ !isRoute(['mage-plugin-laravel-orders.customers.list']) ?: 'active' }}">
        <span class="nav-icon">
            <i data-feather="users"></i>
        </span>
        <span class="nav-text">@lang('mage-plugin-laravel-orders.sidebar.customers')</span>
    </a>
</li>
<li class="nav-item">
    <a href="{{route('mage-plugin-laravel-orders.orders.list')}}" class="nav-link {{ !isRoute(['mage-plugin-laravel-orders.orders.list']) ?: 'active' }}">
        <span class="nav-icon">
            <i data-feather="box"></i>
        </span>
        <span class="nav-text">@lang('mage-plugin-laravel-orders.sidebar.orders')</span>
    </a>
</li>
<li class="nav-item">
    <a href="{{route('mage-plugin-laravel-orders.carts.list')}}" class="nav-link {{ !isRoute(['mage-plugin-laravel-orders.carts.list']) ?: 'active' }}">
        <span class="nav-icon">
            <i data-feather="shopping-cart"></i>
        </span>
        <span class="nav-text">@lang('mage-plugin-laravel-orders.sidebar.carts')</span>
    </a>
</li>
@endcan