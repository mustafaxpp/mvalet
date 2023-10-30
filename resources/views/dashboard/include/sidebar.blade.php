<div class="main-menu-content">
    <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
        <li class=" navigation-header"><span data-i18n="Apps &amp; Pages"> Pages </span><i
                data-feather="more-horizontal"></i>
        </li>
        {{-- home --}}
        <li class=" {{ Route::is('home') ? 'active' : ''}} nav-item">
            <a class="d-flex align-items-center" href="{{ route('home') }}">
                <i data-feather="home"></i>
                <span class="menu-title text-truncate" data-i18n="Email">Dashboard</span>
            </a>
        </li>
    </ul>
</div>
