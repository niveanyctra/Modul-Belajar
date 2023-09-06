@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.html')
<section class="main">
    <h1>HTML Atribut</h1>
    <a href="{{ url('/belajar/html/element') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/html/styling') }}" class="btn btn-success">Selanjutnya</a>
    <hr>
    <h3 class="mt-3">Atribut HTML</h3>
    <p>Semua elemen HTML dapat memiliki atribut. Atribut dapat memberikan informasi tambahan pada element. Atribut harus ada di tag awal. Atribut biasanya ditulis dengan cara : namaatribut="value"</p>
    <hr>
    <h3 class="mt-3">Contoh</h3>
    <div class="text-light bg-dark p-2">

    &lt;a <span class="text-danger">href</span>=<span class="text-success">"https://smkn1-cirebon.sch.id"</span>&gt;Ini sebuah tautan&lt;/a&gt;<br>
    &lt;img <span class="text-danger">src</span>=<span class="text-success">"img.png"</span> <span class="text-danger">height</span>=<span class="text-success">"100px"</span> <span class="text-danger">width</span>=<span class="text-success">"100px"</span>&gt;

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
    <br>
    <a href="{{ url('/belajar/html/element') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/html/styling') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection
