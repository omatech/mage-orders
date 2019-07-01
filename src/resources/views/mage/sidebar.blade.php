<li class="nav-header">@lang('mage-plugin-laravel-orders.sidebar.title')</li>

@can('mage-orders-zone', 'mage')
<li class="nav-item">
    <a href="#" class="nav-link {{ !isRoute(['mage-plugin-laravel-orders.carts']) ?: 'active' }}">
        <span class="nav-icon">
            <i data-feather="message-circle"></i>
        </span>
        <span class="nav-text">@lang('mage-plugin-laravel-orders.sidebar.carts')</span>
    </a>
</li>
@endcan