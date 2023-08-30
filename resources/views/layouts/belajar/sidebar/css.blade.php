<aside class="sidebar">
    <nav class="nav-side">
        <h3 class="sidebar-header">CSS Tutorial</h3>
            <a href="{{url('/belajar/css')}}" class="{{ request()->is('belajar/css') ? 'active' : '' }}">CSS Pengenalan</a>
            <a href="{{url('/belajar/css/syntax')}}" class="{{ request()->is('belajar/css/dasar') ? 'active' : '' }}">CSS Syntax</a>
            <a href="{{url('/belajar/css/selector')}}" class="{{ request()->is('belajar/css/selector') ? 'active' : '' }}">CSS Selector</a>
            <a href="{{url('/belajar/css/how-to')}}" class="{{ request()->is('belajar/css/how-to') ? 'active' : '' }}">CSS Cara Menggunakan</a>
            <a href="{{url('/belajar/css/comment')}}" class="{{ request()->is('belajar/css/comment') ? 'active' : '' }}">CSS Komentar</a>
            <a href="{{url('/belajar/css/color')}}" class="{{ request()->is('belajar/css/color') ? 'active' : '' }}">CSS Warna</a>
            <a href="{{url('/belajar/css/margin')}}" class="{{ request()->is('belajar/css/margin') ? 'active' : '' }}">CSS Margin</a>
            <a href="{{url('/belajar/css/padding')}}" class="{{ request()->is('belajar/css/padding') ? 'active' : '' }}">CSS Padding</a>
            <a href="{{url('/belajar/css/dimensi')}}" class="{{ request()->is('belajar/css/dimensi') ? 'active' : '' }}">CSS Height/Width</a>
        <h3 class="sidebar-header">CSS Backgorund</h3>
            <a href="{{ url('/belajar/css/background-color') }}" class="{{ request()->is('belajar/css/background-color') ? 'active' : '' }}">Background Color</a>
            <a href="{{ url('/belajar/css/background-image') }}" class="{{ request()->is('belajar/css/background-image') ? 'active' : '' }}">Background Image</a>
            <a href="{{ url('/belajar/css/background-repeat') }}" class="{{ request()->is('belajar/css/background-repeat') ? 'active' : '' }}">Background Repeat</a>
            <a href="{{ url('/belajar/css/background-attachment') }}" class="{{ request()->is('belajar/css/background-attachment') ? 'active' : '' }}">Background Attachment</a>
            <a href="{{ url('/belajar/css/background-shorthand') }}" class="{{ request()->is('belajar/css/background-shorthand') ? 'active' : '' }}">Background Shorthand</a>
        <h3 class="sidebar-header">CSS Border</h3>
            <a href="{{ url('/belajar/css/border') }}" class="{{ request()->is('belajar/css/border') ? 'active' : '' }}">Border</a>
            <a href="{{ url('/belajar/css/border-width') }}" class="{{ request()->is('belajar/css/border-width') ? 'active' : '' }}">Border Width</a>
            <a href="{{ url('/belajar/css/border-color') }}" class="{{ request()->is('belajar/css/border-color') ? 'active' : '' }}">Border Color</a>
            <a href="{{ url('/belajar/css/border-side') }}" class="{{ request()->is('belajar/css/border-side') ? 'active' : '' }}">Border Side</a>
            <a href="{{ url('/belajar/css/border-shorthand') }}" class="{{ request()->is('belajar/css/border-shorthand') ? 'active' : '' }}">Border Shorthand</a>
            <a href="{{ url('/belajar/css/border-rounded') }}" class="{{ request()->is('belajar/css/border-rounded') ? 'active' : '' }}">Rounded Border</a>
    </nav>
</aside>
