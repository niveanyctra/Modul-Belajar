<aside class="sidebar">
    <nav class="nav-side">
        <h3 class="sidebar-header">PHP Syntax</h3>
            <a href="{{url('/latihan/php/syntax-1')}}" class="{{ request()->is('latihan/php/syntax-1') ? 'active' : '' }}{{ request()->is('latihan/php') ? 'active' : '' }}">Latihan 1</a>
            <a href="{{url('/latihan/php/syntax-2')}}" class="{{ request()->is('latihan/php/syntax-2') ? 'active' : '' }}">Latihan 2</a>
            <a href="{{url('/latihan/php/syntax-3')}}" class="{{ request()->is('latihan/php/syntax-3') ? 'active' : '' }}">Latihan 3</a>
            <a href="{{ url('/belajar/php/syntax') }}"><span>Pergi ke PHP Syntax Tutorial</span></a>
    </nav>
</aside>
