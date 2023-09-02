<aside class="sidebar">
    <nav class="nav-side">
        <h3 class="sidebar-header">SQL Select</h3>
            <a href="{{url('/latihan/sql/select-1')}}" class="{{ request()->is('latihan/sql/select-1') ? 'active' : '' }}{{ request()->is('latihan/sql') ? 'active' : '' }}">Latihan 1</a>
            <a href="{{url('/latihan/sql/select-2')}}" class="{{ request()->is('latihan/sql/select-2') ? 'active' : '' }}">Latihan 2</a>
            <a href="{{url('/latihan/sql/select-3')}}" class="{{ request()->is('latihan/sql/select-3') ? 'active' : '' }}">Latihan 3</a>
    </nav>
</aside>
