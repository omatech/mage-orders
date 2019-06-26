@can('mage-plugin-skeleton-configuration-zone', 'mage')
<li class="nav-item">
    <a href="#" class="nav-link {{ !isRoute(['mage-plugin-skeleton.configuration']) ?: 'active' }}">
        <span class="nav-icon">
            <i data-feather="settings"></i>
        </span>
        <span class="nav-text">@lang('mage-plugin-skeleton.sidebar.plugins.configuration')</span>
    </a>
</li>
@endcan