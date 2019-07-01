@can('mage-plugin-laravel-orders-configuration-zone', 'mage')
<li class="nav-item">
    <a href="#" class="nav-link {{ !isRoute(['mage-plugin-laravel-orders.configuration']) ?: 'active' }}">
        <span class="nav-icon">
            <i data-feather="settings"></i>
        </span>
        <span class="nav-text">@lang('mage-plugin-laravel-orders.sidebar.plugins.configuration')</span>
    </a>
</li>
@endcan