<aside class="sidebar">
    <nav class="nav-side">
        <h3 class="sidebar-header">Latihan JavaScript</h3>
            <a href="{{url('/latihan/js/basic')}}" class="basicNav {{ request()->is('latihan/js/basic') ? 'active' : '' }} {{ request()->is('hasil/js/basic') ? 'active' : '' }}">JavaScript Basic</a>
            <div onclick="soal(1)" class="ps-5 link basic" style="display:none;">Soal 1</div>
            <div onclick="soal(2)" class="ps-5 link basic" style="display:none;">Soal 2</div>
            <div onclick="soal(3)" class="ps-5 link basic" style="display:none;">Soal 3</div>
            <div onclick="soal(4)" class="ps-5 link basic" style="display:none;">Soal 4</div>
            <div onclick="soal(5)" class="ps-5 link basic" style="display:none;">Soal 5</div>
            <a href="{{url('/latihan/js/menengah')}}" class="menengahNav {{ request()->is('latihan/js/menengah') ? 'active' : '' }} {{ request()->is('hasil/js/menengah') ? 'active' : '' }}">JavaScript Menengah</a>
            <div onclick="soal(1)" class="ps-5 link menengah" style="display:none;">Soal 1</div>
            <div onclick="soal(2)" class="ps-5 link menengah" style="display:none;">Soal 2</div>
            <div onclick="soal(3)" class="ps-5 link menengah" style="display:none;">Soal 3</div>
            <div onclick="soal(4)" class="ps-5 link menengah" style="display:none;">Soal 4</div>
            <div onclick="soal(5)" class="ps-5 link menengah" style="display:none;">Soal 5</div>
            <a href="{{url('/latihan/js/lanjutan')}}" class="lanjutanNav {{ request()->is('latihan/js/lanjutan') ? 'active' : '' }} {{ request()->is('hasil/js/lanjutan') ? 'active' : '' }}">JavaScript Lanjutan</a>
            <div onclick="soal(1)" class="ps-5 link lanjutan" style="display:none;">Soal 1</div>
            <div onclick="soal(2)" class="ps-5 link lanjutan" style="display:none;">Soal 2</div>
            <div onclick="soal(3)" class="ps-5 link lanjutan" style="display:none;">Soal 3</div>
            <div onclick="soal(4)" class="ps-5 link lanjutan" style="display:none;">Soal 4</div>
            <div onclick="soal(5)" class="ps-5 link lanjutan" style="display:none;">Soal 5</div>
            <a href="{{ url('/belajar/js') }}"><span>Pergi ke JavaScript Tutorial</span></a>
    </nav>
</aside>
