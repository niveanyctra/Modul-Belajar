<aside class="sidebar">
    <nav class="nav-side">
        <h3 class="sidebar-header">Latihan HTML</h3>
            <a href="{{url('/latihan/html/basic')}}" class="basicNav {{ request()->is('latihan/html/basic') ? 'active' : '' }}{{ request()->is('hasil/html/basic') ? 'active' : '' }}">HTML Basic</a>
            <div onclick="soal1()" class="ps-5 link basic" style="display:none;">Soal 1</div>
            <div onclick="soal2()" class="ps-5 link basic" style="display:none;">Soal 2</div>
            <div onclick="soal3()" class="ps-5 link basic" style="display:none;">Soal 3</div>
            <div onclick="soal4()" class="ps-5 link basic" style="display:none;">Soal 4</div>
            <div onclick="soal5()" class="ps-5 link basic" style="display:none;">Soal 5</div>
            <div onclick="soal6()" class="ps-5 link basic" style="display:none;">Soal 6</div>
            <div onclick="soal7()" class="ps-5 link basic" style="display:none;">Soal 7</div>
            <div onclick="soal8()" class="ps-5 link basic" style="display:none;">Soal 8</div>
            <div onclick="soal9()" class="ps-5 link basic" style="display:none;">Soal 9</div>
            <div onclick="soal10()" class="ps-5 link basic" style="display:none;">Soal 10</div>
            <a href="{{url('/latihan/html/menengah')}}" class="menengahNav {{ request()->is('latihan/html/menengah') ? 'active' : '' }}">HTML Menengah</a>
            <div onclick="soal1()" class="ps-5 link menengah" style="display:none;">Soal 1</div>
            <div onclick="soal2()" class="ps-5 link menengah" style="display:none;">Soal 2</div>
            <div onclick="soal3()" class="ps-5 link menengah" style="display:none;">Soal 3</div>
            <div onclick="soal4()" class="ps-5 link menengah" style="display:none;">Soal 4</div>
            <div onclick="soal5()" class="ps-5 link menengah" style="display:none;">Soal 5</div>
            <div onclick="soal6()" class="ps-5 link menengah" style="display:none;">Soal 6</div>
            <div onclick="soal7()" class="ps-5 link menengah" style="display:none;">Soal 7</div>
            <div onclick="soal8()" class="ps-5 link menengah" style="display:none;">Soal 8</div>
            <div onclick="soal9()" class="ps-5 link menengah" style="display:none;">Soal 9</div>
            <div onclick="soal10()" class="ps-5 link menengah" style="display:none;">Soal 10</div>
            <a href="{{url('/latihan/html/lanjutan')}}" class="lanjutanNav {{ request()->is('latihan/html/lanjutan') ? 'active' : '' }}">HTML Lanjutan</a>
            <div onclick="soal1()" class="ps-5 link lanjutan" style="display:none;">Soal 1</div>
            <div onclick="soal2()" class="ps-5 link lanjutan" style="display:none;">Soal 2</div>
            <div onclick="soal3()" class="ps-5 link lanjutan" style="display:none;">Soal 3</div>
            <div onclick="soal4()" class="ps-5 link lanjutan" style="display:none;">Soal 4</div>
            <div onclick="soal5()" class="ps-5 link lanjutan" style="display:none;">Soal 5</div>
            <div onclick="soal6()" class="ps-5 link lanjutan" style="display:none;">Soal 6</div>
            <div onclick="soal7()" class="ps-5 link lanjutan" style="display:none;">Soal 7</div>
            <div onclick="soal8()" class="ps-5 link lanjutan" style="display:none;">Soal 8</div>
            <div onclick="soal9()" class="ps-5 link lanjutan" style="display:none;">Soal 9</div>
            <div onclick="soal10()" class="ps-5 link lanjutan" style="display:none;">Soal 10</div>
            <a href="{{ url('/belajar/html') }}"><span>Pergi ke HTML Tutorial</span></a>
    </nav>
</aside>
