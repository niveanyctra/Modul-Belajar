<header>
    <div class="container-fluid">
        <a href="#" class="toggle-menu fontawesome-reorder"></a>
        <nav class="sub-nav">
            <a href="{{ url('/latihan/html') }}" class="{{ request()->is('latihan/html*') ? 'active' : '' }}">
                <span>LATIHAN HTML</span>
            </a>
            <a href="{{ url('/latihan/css') }}" class="{{ request()->is('latihan/css*') ? 'active' : '' }}">
                <span>LATIHAN CSS</span>
            </a>
            <a href="{{ url('/latihan/php') }}" class="{{ request()->is('latihan/php*') ? 'active' : '' }}">
                <span>LATIHAN PHP</span>
            </a>
            <a href="{{ url('/latihan/js') }}" class="{{ request()->is('latihan/js*') ? 'active' : '' }}">
                <span>LATIHAN JAVASCRIPT</span>
            </a>
            <a href="{{ url('/latihan/sql') }}" class="{{ request()->is('latihan/sql*') ? 'active' : '' }}">
                <span>LATIHAN SQL</span>
            </a>
        </nav>
    </div>
</header>
