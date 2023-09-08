@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.js')
<section class="main">
    <h1>JavaScript Loop</h1>
    <a href="{{ url('/belajar/js/switch') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/js') }}" class="btn btn-success">Selanjutnya</a>
    <hr>
    <p>
        Loop berguna untuk menjalankan kode terus menerus dengan value berbeda tiap kali menjalankan kode. <br>
        <br>
        Loop biasanya digunakan untuk menampilkan banyak data hanya dengan menulis beberapa baris kode.
    </p>
    <h4 class="my-3">
        Jenis loop pada JavaScript
    </h4>
    <ul>
        <li><span class="mark">for</span> - mengulang blok kode beberapa kali</li>
        <li><span class="mark">for/in</span> - menelusuri properti suatu objek</li>
        <li><span class="mark">for/of</span> - mengulang nilai objek yang dapat diubah</li>
        <li><span class="mark">while</span> - mengulang blok kode selama kondisi yang ditentukan benar</li>
        <li><span class="mark">do/while</span> - juga mengulang blok kode selama kondisi yang ditentukan benar</li>
    </ul>
    <h4 class="my-3">Contoh sederhana loop</h4>
    <p>Kita akan kesulitan jika ingin menampilkan banyak data seperti berikut :</p>
    <div class="code">
        text += siswa[0] + "&lt;br&gt;";<br>
        text += siswa[1] + "&lt;br&gt;";<br>
        text += siswa[2] + "&lt;br&gt;";<br>
        text += siswa[3] + "&lt;br&gt;";<br>
        text += siswa[4] + "&lt;br&gt;";<br>
        text += siswa[5] + "&lt;br&gt;";
    </div>
<p>Kita bisa mempersingkat penulisan dengan cara :</p>
<div class="code">
    for (let i = 0; i < siswa.length; i++) { <br>
        text += siswa[i] + "&lt;br&gt;";
}
</div>
    <a href="{{ url('/belajar/js/switch') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/js') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection
