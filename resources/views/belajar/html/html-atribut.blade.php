@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.html')
<section class="main">
    <h1>HTML Atribut</h1>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/html/element') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/html/styling') }}" class="btn btn-success">Selanjutnya</a>
    </div>
    <hr>
    <h3 class="mt-3">Atribut HTML</h3>
    <p>Semua elemen HTML dapat memiliki atribut. Atribut dapat memberikan informasi tambahan pada element. Atribut harus ada di tag awal. Atribut biasanya ditulis dengan cara : namaatribut="value"</p>
    <hr>
    <h3 class="mt-3">Contoh</h3>
    <div class="code">

    &lt;a <span class="t-red">href</span>=<span class="t-green">"https://smkn1-cirebon.sch.id"</span>&gt;Ini sebuah tautan&lt;/a&gt;<br>
    &lt;img <span class="t-red">src</span>=<span class="t-green">"img.png"</span> <span class="t-red">height</span>=<span class="t-green">"100px"</span> <span class="t-red">width</span>=<span class="t-green">"100px"</span>&gt;

</div>
    <h5 class="mt-1">Penjelasan</h5>
    <p>Pada contoh diatas kode berwarna merah merupakan nama atribut dan kode yang berwarna hijau merupakan value dari atribut</p>
    <hr>
    <h3 class="mt-3">Jenis URL Pada Atribut src</h3>
    <p>Jenis URL pada atribut src dibagi menjadi dua yaitu : </p>
    <ul>
        <li><strong>URL Absolut</strong> - Adalah tautan ke website eksternal yang tidak ada di dokumen milik kita</li>
        <li><strong>URL Relatif</strong> - Adalah tautan ke website internal yang ada di dokumen milik kita</li>
    </ul>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/html/element') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/html/styling') }}" class="btn btn-success">Selanjutnya</a>
    </div>
</section>
@endsection
