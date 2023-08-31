<aside class="sidebar">
    <nav class="nav-side">
        <h3 class="sidebar-header">SQl Tutorial</h3>
            <a href="{{url('/belajar/sql')}}" class="{{ request()->is('belajar/sql') ? 'active' : '' }}">SQL Pengenalan</a>
            <a href="{{url('/belajar/sql/where-to')}}" class="{{ request()->is('belajar/sql/syntax') ? 'active' : '' }}">SQL Syntax</a>
    </nav>
</aside>
