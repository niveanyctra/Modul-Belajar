<aside class="sidebar">
    <nav class="nav-side">
        <h3 class="sidebar-header">Latihan CSS</h3>
            <a href="{{url('/latihan/css/basic')}}" class="basicNav {{ request()->is('latihan/css/basic') ? 'active' : '' }} {{ request()->is('hasil/css/basic') ? 'active' : '' }}">CSS Basic</a>
            <div onclick="soal1()" class="ps-5 link basic" style="display:none;">Soal 1</div>
            <div onclick="soal2()" class="ps-5 link basic" style="display:none;">Soal 2</div>
            <div onclick="soal3()" class="ps-5 link basic" style="display:none;">Soal 3</div>
            <div onclick="soal4()" class="ps-5 link basic" style="display:none;">Soal 4</div>
            <div onclick="soal5()" class="ps-5 link basic" style="display:none;">Soal 5</div>
            <a href="{{url('/latihan/css/menengah')}}" class="menengahNav {{ request()->is('latihan/css/menengah') ? 'active' : '' }} {{ request()->is('hasil/css/menengah') ? 'active' : '' }}">CSS Menengah</a>
            <div onclick="soal1()" class="ps-5 link menengah" style="display:none;">Soal 1</div>
            <div onclick="soal2()" class="ps-5 link menengah" style="display:none;">Soal 2</div>
            <div onclick="soal3()" class="ps-5 link menengah" style="display:none;">Soal 3</div>
            <div onclick="soal4()" class="ps-5 link menengah" style="display:none;">Soal 4</div>
            <div onclick="soal5()" class="ps-5 link menengah" style="display:none;">Soal 5</div>
            <a href="{{url('/latihan/css/lanjutan')}}" class="lanjutanNav {{ request()->is('latihan/css/lanjutan') ? 'active' : '' }} {{ request()->is('hasil/css/lanjutan') ? 'active' : '' }}">CSS Lanjutan</a>
            <div onclick="soal1()" class="ps-5 link lanjutan" style="display:none;">Soal 1</div>
            <div onclick="soal2()" class="ps-5 link lanjutan" style="display:none;">Soal 2</div>
            <div onclick="soal3()" class="ps-5 link lanjutan" style="display:none;">Soal 3</div>
            <div onclick="soal4()" class="ps-5 link lanjutan" style="display:none;">Soal 4</div>
            <div onclick="soal5()" class="ps-5 link lanjutan" style="display:none;">Soal 5</div>
            <a href="{{ url('/belajar/css') }}"><span>Pergi ke CSS Tutorial</span></a>
    </nav>
</aside>
