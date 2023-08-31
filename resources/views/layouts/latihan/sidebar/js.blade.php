<aside class="sidebar">
    <nav class="nav-side">
        <h3 class="sidebar-header">JS Variable</h3>
            <a href="{{url('/latihan/js/variable-1')}}" class="{{ request()->is('latihan/js/variable-1') ? 'active' : '' }}{{ request()->is('latihan/js') ? 'active' : '' }}">Latihan 1</a>
            <a href="{{url('/latihan/js/variable-2')}}" class="{{ request()->is('latihan/js/variable-2') ? 'active' : '' }}">Latihan 2</a>
            <a href="{{url('/latihan/js/variable-3')}}" class="{{ request()->is('latihan/js/variable-3') ? 'active' : '' }}">Latihan 3</a>
            <a href="{{ url('/belajar/js/variable') }}">Pergi ke JS Variable Tutorial</a>
    </nav>
</aside>
