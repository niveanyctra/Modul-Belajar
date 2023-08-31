<aside class="sidebar">
    <nav class="nav-side">
        <h3 class="sidebar-header">CSS Selector</h3>
            <a href="{{url('/latihan/css/selector-1')}}" class="{{ request()->is('latihan/css/selector-1') ? 'active' : '' }}{{ request()->is('latihan/css') ? 'active' : '' }}">Latihan 1</a>
            <a href="{{url('/latihan/css/selector-2')}}" class="{{ request()->is('latihan/css/selector-2') ? 'active' : '' }}">Latihan 2</a>
            <a href="{{url('/latihan/css/selector-3')}}" class="{{ request()->is('latihan/css/selector-3') ? 'active' : '' }}">Latihan 3</a>
            <a href="{{ url('/belajar/css/selector') }}">Pergi ke CSS Selector Tutorial</a>
    </nav>
</aside>
