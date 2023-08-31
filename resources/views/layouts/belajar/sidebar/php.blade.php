<aside class="sidebar">
    <nav class="nav-side">
        <h3 class="sidebar-header">PHP Tutorial</h3>
            <a href="{{url('/belajar/php')}}" class="{{ request()->is('belajar/php') ? 'active' : '' }}">PHP Pengenalan</a>
            <a href="{{url('/belajar/php/syntax')}}" class="{{ request()->is('belajar/php/syntax') ? 'active' : '' }}">PHP Syntax</a>
            <a href="{{ url('/belajar/php/comment') }}" class="{{ request()->is('belajar/php/comment') ? 'active' : '' }}">PHP Komentar</a>
            <a href="{{ url('/belajar/php/variable') }}" class="{{ request()->is('belajar/php/variable') ? 'active' : '' }}">PHP Variable</a>
            <a href="{{ url('/belajar/php/echo-print') }}" class="{{ request()->is('belajar/php/echo-print') ? 'active' : '' }}">PHP Echo / Print</a>
            <a href="{{ url('/belajar/php/data-type') }}" class="{{ request()->is('belajar/php/data-type') ? 'active' : '' }}">PHP Tipe Data</a>
            <a href="{{ url('/belajar/php/string') }}" class="{{ request()->is('belajar/php/string') ? 'active' : '' }}">PHP String</a>
            <a href="{{ url('/belajar/php/number') }}" class="{{ request()->is('belajar/php/number') ? 'active' : '' }}">PHP Angka</a>
            <a href="{{ url('/belajar/php/math') }}" class="{{ request()->is('belajar/php/math') ? 'active' : '' }}">PHP Math</a>
            <a href="{{ url('/belajar/php/constant') }}" class="{{ request()->is('belajar/php/constant') ? 'active' : '' }}">PHP Constants</a>
            <a href="{{ url('/belajar/php/operator') }}" class="{{ request()->is('belajar/php/operator') ? 'active' : '' }}">PHP Operator</a>
            <a href="{{ url('/belajar/php/if-else') }}" class="{{ request()->is('belajar/php/if-else') ? 'active' : '' }}">PHP If...Else...Elseif</a>
            <a href="{{ url('/belajar/php/switch') }}" class="{{ request()->is('belajar/php/switch') ? 'active' : '' }}">PHP Switch</a>
            <a href="{{ url('/belajar/php/function') }}" class="{{ request()->is('belajar/php/function') ? 'active' : '' }}">PHP Function</a>
        <h3 class="sidebar-header">PHP Loop</h3>
            <a href="{{ url('/belajar/php/loop') }}" class="{{ request()->is('belajar/php/loop') ? 'active' : '' }}">Loop</a>
            <a href="{{ url('/belajar/php/while-loop') }}" class="{{ request()->is('belajar/php/while-loop') ? 'active' : '' }}">While Loop</a>
            <a href="{{ url('/belajar/php/do-while-loop') }}" class="{{ request()->is('belajar/php/do-while-loop') ? 'active' : '' }}">Do While Loop</a>
            <a href="{{ url('/belajar/php/for-loop') }}" class="{{ request()->is('belajar/php/for-loop') ? 'active' : '' }}">For Loop</a>
            <a href="{{ url('/belajar/php/foreach-loop') }}" class="{{ request()->is('belajar/php/foreach-loop') ? 'active' : '' }}">Foreach Loop</a>
            <a href="{{ url('/belajar/php/break-continue') }}" class="{{ request()->is('belajar/php/break-continue') ? 'active' : '' }}">Break/Continue</a>
    </nav>
</aside>
