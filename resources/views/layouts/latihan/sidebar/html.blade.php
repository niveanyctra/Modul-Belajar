<aside class="sidebar">
    <nav class="nav-side">
        <h3 class="sidebar-header">Latihan HTML</h3>
            <a href="{{url('/latihan/html/basic')}}" class="{{ request()->is('latihan/html/basic') ? 'active' : '' }}">HTML Basic</a>
            <a href="{{url('/latihan/html/basic')}}" class="{{ request()->is('latihan/html/basic') ? 'active' : '' }}">HTML Basic</a>
            <a href="{{url('/latihan/html/lanjuttan')}}" class="{{ request()->is('latihan/html/lanjuttan') ? 'active' : '' }}">HTML Basic</a>
            <a href="{{ url('/belajar/html/atribut') }}"><span>Pergi ke HTML Atribut Tutorial</span></a>
    </nav>
</aside>
