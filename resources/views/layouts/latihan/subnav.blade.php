<div class="sub-navbar bg-dark">
    <div class="h-100">
        <a href="#" class="toggle-menu fontawesome-reorder"><i class="fa-solid fa-bars fa-fw" style="color: #ffffff; width:20px;"></i></a>
        <nav class="sub-nav">
            <a href="{{ url('/latihan/html/basic') }}" class="{{ request()->is('latihan/html*') ? 'active' : '' }}">
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
</div>
