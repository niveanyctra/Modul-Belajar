<aside class="sidebar">
    <nav class="nav-side">
        <h3 class="sidebar-header">HTML Tutorial</h3>
            <a href="{{url('/belajar/html')}}" class="{{ request()->is('belajar/html') ? 'active' : '' }}">HTML Pengenalan</a>
            <a href="{{url('/belajar/html/dasar')}}" class="{{ request()->is('belajar/html/dasar') ? 'active' : '' }}">HTML Dasar</a>
            <a href="{{url('/belajar/html/element')}}" class="{{ request()->is('belajar/html/element') ? 'active' : '' }}">HTML Element</a>
            <a href="{{url('/belajar/html/atribut')}}" class="{{ request()->is('belajar/html/atribut') ? 'active' : '' }}">HTML Atribut</a>
            <a href="{{url('/belajar/html/styling')}}" class="{{ request()->is('belajar/html/styling') ? 'active' : '' }}">HTML Style</a>
            <a href="{{url('/belajar/html/formatting')}}" class="{{ request()->is('belajar/html/formatting') ? 'active' : '' }}">HTML Formatting</a>
            <a href="{{url('/belajar/html/comment')}}" class="{{ request()->is('belajar/html/comment') ? 'active' : '' }}">HTML Komentar</a>
            <a href="{{url('/belajar/html/favicon')}}" class="{{ request()->is('belajar/html/favicon') ? 'active' : '' }}">HTML Favicon</a>
            <a href="{{url('/belajar/html/block-inline')}}" class="{{ request()->is('belajar/html/block-inline') ? 'active' : '' }}">HTML Block & Inline</a>
            <a href="{{url('/belajar/html/class')}}" class="{{ request()->is('belajar/html/class') ? 'active' : '' }}">HTML Class</a>
            <a href="{{url('/belajar/html/id')}}" class="{{ request()->is('belajar/html/id') ? 'active' : '' }}">HTML Id</a>
        <h3 class="sidebar-header">HTML Table</h3>
            <a href="{{url('/belajar/html/table')}}" class="{{ request()->is('belajar/html/table') ? 'active' : '' }}">Table</a>
            <a href="{{url('/belajar/html/table-border')}}" class="{{ request()->is('belajar/html/table-border') ? 'active' : '' }}">Table Border</a>
            <a href="{{url('/belajar/html/table-size')}}" class="{{ request()->is('belajar/html/table-size') ? 'active' : '' }}">Table Size</a>
            <a href="{{url('/belajar/html/table-padding-spacing')}}" class="{{ request()->is('belajar/html/table-padding-spacing') ? 'active' : '' }}">Padding & Spacing</a>
            <a href="{{url('/belajar/html/table-colspan-rowspan')}}" class="{{ request()->is('belajar/html/table-colspan-rowspan') ? 'active' : '' }}">Colspan & Rowspan</a>
        <h3 class="sidebar-header">HTML List</h3>
            <a href="{{url('/belajar/html/list')}}" class="{{ request()->is('belajar/html/list') ? 'active' : '' }}">List</a>
            <a href="{{url('/belajar/html/unordered-list')}}" class="{{ request()->is('belajar/html/unordered-list') ? 'active' : '' }}">Unordered List</a>
            <a href="{{url('/belajar/html/ordered-list')}}" class="{{ request()->is('belajar/html/ordered-list') ? 'active' : '' }}">Ordered List</a>
        <h3 class="sidebar-header">HTML Form</h3>
            <a href="{{ url('/belajar/html/form') }}" class="{{ request()->is('belajar/html/form') ? 'active' : '' }}">Form</a>
            <a href="{{ url('/belajar/html/form-atribut') }}" class="{{ request()->is('belajar/html/form-atribut') ? 'active' : '' }}">Form Atribut</a>
            <a href="{{ url('/belajar/html/form-element') }}" class="{{ request()->is('belajar/html/form-element') ? 'active' : '' }}">Form Element</a>
            <a href="{{ url('/belajar/html/input-type') }}" class="{{ request()->is('belajar/html/input-type') ? 'active' : '' }}">Input Tipe</a>
            <a href="{{ url('/belajar/html/input-atribut') }}" class="{{ request()->is('belajar/html/input-atribut') ? 'active' : '' }}">Input Atribut</a>
            <a href="{{ url('/belajar/html/input-form-atribut') }}" class="{{ request()->is('belajar/html/input-form-atribut') ? 'active' : '' }}">Input Form Atribut</a>
    </nav>
</aside>
