<aside id="sidebar-wrapper" >
    <div class="sidebar-brand">
        <img class="navbar-brand-full app-header-logo" src="{{ asset('img/senescyt_logo.png') }}" width="150"
             alt="Infyom Logo">
        <a href="{{ url('/') }}"></a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
        <a href="{{ url('/home') }}" class="small-sidebar-text">
            <img class="navbar-brand-full" src="{{ asset('img/senescyt.png') }}" width="45px" alt=""/>
        </a>
    </div>
    <ul class="sidebar-menu">
        @include('layouts.menu')
    </ul>
</aside>
