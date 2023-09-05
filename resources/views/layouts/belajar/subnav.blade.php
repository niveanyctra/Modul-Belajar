<div class="sub-navbar bg-dark">
    <div class="h-100">
        <a href="#" class="toggle-menu fontawesome-reorder"><i class="fa-solid fa-bars fa-fw" style="color: #ffffff; width:20px;"></i></a>
        <nav class="sub-nav">
            <a href="{{ url('/belajar/html') }}" class="{{ request()->is('belajar/html*') ? 'active' : '' }}">
                <span>BELAJAR HTML</span>
            </a>
            <a href="{{ url('/belajar/css') }}" class="{{ request()->is('belajar/css*') ? 'active' : '' }}">
                <span>BELAJAR CSS</span>
            </a>
            <a href="{{ url('/belajar/php') }}" class="{{ request()->is('belajar/php*') ? 'active' : '' }}">
                <span>BELAJAR PHP</span>
            </a>
            <a href="{{ url('/belajar/js') }}" class="{{ request()->is('belajar/js*') ? 'active' : '' }}">
                <span>BELAJAR JAVASCRIPT</span>
            </a>
            <a href="{{ url('/belajar/sql') }}" class="{{ request()->is('belajar/sql*') ? 'active' : '' }}">
                <span>BELAJAR SQL</span>
            </a>
        </nav>
    </div>
</div>
