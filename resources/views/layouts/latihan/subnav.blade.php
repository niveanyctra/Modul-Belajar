<div class="sub-navbar bg-dark">
    <div class="h-100">
        <a href="#" class="toggle-menu fontawesome-reorder"><i class="fa-solid fa-bars fa-fw" style="color: #ffffff; width:20px;"></i></a>
        <nav class="sub-nav">
            <a href="{{ url('/latihan/html/basic') }}" class="{{ request()->is('latihan/html*') ? 'active' : '' }} {{ request()->is('hasil/html*') ? 'active' : '' }}">
                <span>LATIHAN HTML</span>
            </a>
            <a href="{{ url('/latihan/css/basic') }}" class="{{ request()->is('latihan/css*') ? 'active' : '' }} {{ request()->is('hasil/css*') ? 'active' : '' }}">
                <span>LATIHAN CSS</span>
            </a>
            <a href="{{ url('/latihan/php/basic') }}" class="{{ request()->is('latihan/php*') ? 'active' : '' }} {{ request()->is('hasil/php*') ? 'active' : '' }}">
                <span>LATIHAN PHP</span>
            </a>
            <a href="{{ url('/latihan/js/basic') }}" class="{{ request()->is('latihan/js*') ? 'active' : '' }} {{ request()->is('hasil/js*') ? 'active' : '' }}">
                <span>LATIHAN JAVASCRIPT</span>
            </a>
            <a href="{{ url('/latihan/sql/basic') }}" class="{{ request()->is('latihan/sql*') ? 'active' : '' }} {{ request()->is('hasil/sql*') ? 'active' : '' }}">
                <span>LATIHAN SQL</span>
            </a>
        </nav>
    </div>
</div>
