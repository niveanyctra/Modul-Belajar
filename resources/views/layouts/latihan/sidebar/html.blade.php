<aside class="sidebar">
    <nav class="nav-side">
        <h3 class="sidebar-header">HTML Atribut</h3>
            <a href="{{url('/latihan/html/atribut-1')}}" class="{{ request()->is('latihan/html') ? 'active' : '' }}{{ request()->is('latihan/html/atribut-1') ? 'active' : '' }}">Latihan 1</a>
            <a href="{{url('/latihan/html/atribut-2')}}" class="{{ request()->is('latihan/html/atribut-2') ? 'active' : '' }}">Latihan 2</a>
            <a href="{{url('/latihan/html/atribut-3')}}" class="{{ request()->is('latihan/html/atribut-3') ? 'active' : '' }}">Latihan 3</a>
            <a href="{{ url('/belajar/html/atribut') }}"><span>Pergi ke HTML Atribut Tutorial</span></a>
    </nav>
</aside>
