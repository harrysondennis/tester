<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ route('home') }}" class="brand-link">
        {{-- <img src="img/chair.svg"
             alt="PwDRS Logo"
             class="brand-image img-circle elevation-3"> --}}
        <span class="brand-text font-weight-light"><strong>PwDRS</strong></span>
    </a>

    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                @include('layouts.menu')
            </ul>
        </nav>
    </div>

</aside>
