<aside class="sidebar">
    <nav class="nav-side" id="sidebar-latihan">
        <h3 class="sidebar-header">Latihan HTML</h3>
            <a href="{{url('/latihan/html/basic')}}" class="basicNav {{ request()->is('latihan/html/basic') ? 'active' : '' }} {{ request()->is('hasil/html/basic') ? 'active' : '' }}">HTML Basic</a>
            <div onclick="soal(1)" class="ps-5 link basic" style="display:none;">Soal 1</div>
            <div onclick="soal(2)" class="ps-5 link basic" style="display:none;">Soal 2</div>
            <div onclick="soal(3)" class="ps-5 link basic" style="display:none;">Soal 3</div>
            <div onclick="soal(4)" class="ps-5 link basic" style="display:none;">Soal 4</div>
            <div onclick="soal(5)" class="ps-5 link basic" style="display:none;">Soal 5</div>
            <a href="{{url('/latihan/html/menengah')}}" class="menengahNav {{ request()->is('latihan/html/menengah') ? 'active' : '' }} {{ request()->is('hasil/html/menengah') ? 'active' : '' }}">HTML Menengah</a>
            <div onclick="soal(1)" class="ps-5 link menengah" style="display:none;">Soal 1</div>
            <div onclick="soal(2)" class="ps-5 link menengah" style="display:none;">Soal 2</div>
            <div onclick="soal(3)" class="ps-5 link menengah" style="display:none;">Soal 3</div>
            <div onclick="soal(4)" class="ps-5 link menengah" style="display:none;">Soal 4</div>
            <div onclick="soal(5)" class="ps-5 link menengah" style="display:none;">Soal 5</div>
            <a href="{{url('/latihan/html/lanjutan')}}" class="lanjutanNav {{ request()->is('latihan/html/lanjutan') ? 'active' : '' }}  {{ request()->is('hasil/html/lanjutan') ? 'active' : '' }}">HTML Lanjutan</a>
            <div onclick="soal(1)" class="ps-5 link lanjutan" style="display:none;">Soal 1</div>
            <div onclick="soal(2)" class="ps-5 link lanjutan" style="display:none;">Soal 2</div>
            <div onclick="soal(3)" class="ps-5 link lanjutan" style="display:none;">Soal 3</div>
            <div onclick="soal(4)" class="ps-5 link lanjutan" style="display:none;">Soal 4</div>
            <div onclick="soal(5)" class="ps-5 link lanjutan" style="display:none;">Soal 5</div>
            <a href="{{ url('/belajar/html') }}"><span>Pergi ke HTML Tutorial</span></a>
    </nav>
</aside>
