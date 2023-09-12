<aside class="sidebar">
    <nav class="nav-side">
        <h3 class="sidebar-header">Latihan PHP</h3>
            <a href="{{url('/latihan/php/basic')}}" class="basicNav {{ request()->is('latihan/php/basic') ? 'active' : '' }} {{ request()->is('hasil/php/basic') ? 'active' : '' }}">PHP Basic</a>
            <div onclick="soal1()" class="ps-5 link basic" style="display:none;">Soal 1</div>
            <div onclick="soal2()" class="ps-5 link basic" style="display:none;">Soal 2</div>
            <div onclick="soal3()" class="ps-5 link basic" style="display:none;">Soal 3</div>
            <div onclick="soal4()" class="ps-5 link basic" style="display:none;">Soal 4</div>
            <div onclick="soal5()" class="ps-5 link basic" style="display:none;">Soal 5</div>
            <a href="{{url('/latihan/php/menengah')}}" class="menengahNav {{ request()->is('latihan/php/menengah') ? 'active' : '' }} {{ request()->is('hasil/php/menengah') ? 'active' : '' }}">PHP Menengah</a>
            <div onclick="soal1()" class="ps-5 link menengah" style="display:none;">Soal 1</div>
            <div onclick="soal2()" class="ps-5 link menengah" style="display:none;">Soal 2</div>
            <div onclick="soal3()" class="ps-5 link menengah" style="display:none;">Soal 3</div>
            <div onclick="soal4()" class="ps-5 link menengah" style="display:none;">Soal 4</div>
            <div onclick="soal5()" class="ps-5 link menengah" style="display:none;">Soal 5</div>
            <a href="{{url('/latihan/php/lanjutan')}}" class="lanjutanNav {{ request()->is('latihan/php/lanjutan') ? 'active' : '' }} {{ request()->is('hasil/php/lanjutan') ? 'active' : '' }}">PHP Lanjutan</a>
            <div onclick="soal1()" class="ps-5 link lanjutan" style="display:none;">Soal 1</div>
            <div onclick="soal2()" class="ps-5 link lanjutan" style="display:none;">Soal 2</div>
            <div onclick="soal3()" class="ps-5 link lanjutan" style="display:none;">Soal 3</div>
            <div onclick="soal4()" class="ps-5 link lanjutan" style="display:none;">Soal 4</div>
            <div onclick="soal5()" class="ps-5 link lanjutan" style="display:none;">Soal 5</div>
            <a href="{{ url('/belajar/php') }}"><span>Pergi ke PHP Tutorial</span></a>
    </nav>
</aside>
