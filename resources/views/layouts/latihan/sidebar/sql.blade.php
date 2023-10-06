<aside class="sidebar">
    <nav class="nav-side">
        <h3 class="sidebar-header">Latihan SQL</h3>
            <a href="{{url('/latihan/sql/basic')}}" class="basicNav {{ request()->is('latihan/sql/basic') ? 'active' : '' }} {{ request()->is('hasil/sql/basic') ? 'active' : '' }}">SQL Basic</a>
            <div onclick="soal(1)" class="ps-5 link basic" style="display:none;">Soal 1</div>
            <div onclick="soal(2)" class="ps-5 link basic" style="display:none;">Soal 2</div>
            <div onclick="soal(3)" class="ps-5 link basic" style="display:none;">Soal 3</div>
            <div onclick="soal(4)" class="ps-5 link basic" style="display:none;">Soal 4</div>
            <div onclick="soal(5)" class="ps-5 link basic" style="display:none;">Soal 5</div>
            <a href="{{url('/latihan/sql/menengah')}}" class="menengahNav {{ request()->is('latihan/sql/menengah') ? 'active' : '' }} {{ request()->is('hasil/sql/menengah') ? 'active' : '' }}">SQL Menengah</a>
            <div onclick="soal(1)" class="ps-5 link menengah" style="display:none;">Soal 1</div>
            <div onclick="soal(2)" class="ps-5 link menengah" style="display:none;">Soal 2</div>
            <div onclick="soal(3)" class="ps-5 link menengah" style="display:none;">Soal 3</div>
            <div onclick="soal(4)" class="ps-5 link menengah" style="display:none;">Soal 4</div>
            <div onclick="soal(5)" class="ps-5 link menengah" style="display:none;">Soal 5</div>
            <a href="{{url('/latihan/sql/lanjutan')}}" class="lanjutanNav {{ request()->is('latihan/sql/lanjutan') ? 'active' : '' }} {{ request()->is('hasil/sql/lanjutan') ? 'active' : '' }}">SQL Lanjutan</a>
            <div onclick="soal(1)" class="ps-5 link lanjutan" style="display:none;">Soal 1</div>
            <div onclick="soal(2)" class="ps-5 link lanjutan" style="display:none;">Soal 2</div>
            <div onclick="soal(3)" class="ps-5 link lanjutan" style="display:none;">Soal 3</div>
            <div onclick="soal(4)" class="ps-5 link lanjutan" style="display:none;">Soal 4</div>
            <div onclick="soal(5)" class="ps-5 link lanjutan" style="display:none;">Soal 5</div>
            <a href="{{ url('/belajar/sql') }}"><span>Pergi ke SQL Tutorial</span></a>
    </nav>
</aside>
