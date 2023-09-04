@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.html')
<section class="main">
    <h1>HTML Pengenalan</h1>
    <a href="{{ url('/') }}" class="btn btn-success">Home</a>
    <a href="{{ url('/belajar/html/dasar') }}" class="btn btn-success">Selanjutnya</a>
    <hr>
    <h3 class="mt-3">Apa Itu HTML?</h3>
    <p class="mx-4">
        HTML merupakan singkatan dari Hypertext Markup Language yang biasa digunakan sebagai
        standar untuk membuat halaman website. HTML terdiri dari elemen dan atribut. Elemen HTML memberi
        label pada bagian konten seperti "Ini Adalah Judul", "Ini adalah paragraf", "ini adalah tautan", dll.
    </p>
    <hr>
    <h3 class="mt-3">Contoh Dokumen HTML Sederhana</h3>
    <hr>
    <div class="bg-dark">
<pre class="text-light">

    &lt;!DOCTYPE html&gt;
    &lt;html&gt;
    &lt;head&gt;
    &lt;title&gt;Judul Halaman&lt;title&gt;
    &lt;/head&gt;
    &lt;body&gt;
    &lt;h1&gt;Hello World&lt;/h1&gt;
    &lt;/body&gt;
    &lt;/html&gt;

</pre>
    </div>
    <h3>Penjelasan Contoh HTML</h3>
    <ul>
        <li><span class="bg-body-secondary text-danger">&lt;!DOCTYPE html&gt;</span> Mendeklarasikan bahwa dokumen ini merupakan dokumen HTML5</li>
        <li><span class="bg-body-secondary text-danger">&lt;html&gt;</span> Merupakan elemen yang wajib di setiap dokumen HTML</li>
        <li><span class="bg-body-secondary text-danger">&lt;head&gt;</span> Merupakan elemen yang berisi informasi meta tentang halaman HTML</li>
        <li><span class="bg-body-secondary text-danger">&lt;title&gt;</span> Merupakan elemen yang mendefinisikan judul halaman HTML</li>
        <li><span class="bg-body-secondary text-danger">&lt;body&gt;</span> Merupakan elemen untuk memuat konten pada halaman HTML yang bisa dilihat,seperti heading,paragraf,gambar,tautan,tabel,urutan,dll.</li>
        <li><span class="bg-body-secondary text-danger">&lt;h1&gt;</span> Merupakan elemen yang mendefinisikan heading pada halaman HTML</li>
    </ul>
<hr>
<h3 class="mt-3">Apa Itu Elemen HTML?</h3>
<p>Elemen HTML terdiri dari tag awal,konten dan penutup tag:</p>
<div class="fs-5">

    <span class="text-danger">&lt;namatag&gt;</span>Konten<span class="text-danger">&lt;/namatag&gt;</span>
</div>
<p><strong>Elemen</strong> HTML apapun yang memiliki tag awal hingga tag akhir:</p>
<table class="table table-striped table-border text-center" style="max-width: 700px">
    <thead>
        <tr>
            <th>Tag Awal</th>
            <th>Konten</th>
            <th>Tag Akhir</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>&lt;h1&gt;</td>
            <td>Ini tag Heading</td>
            <td>&lt;/h1&gt;</td>
        </tr>
        <tr>
            <td>&lt;p&gt;</td>
            <td>Ini tag Paragraf</td>
            <td>&lt;/p&gt;</td>
        </tr>
        <tr>
            <td>&lt;br&gt;</td>
            <td><i>kosong</i></td>
            <td><i>kosong</i></td>
        </tr>
    </tbody>
</table>

<div class="bg-warning py-4 px-4">

    <p><strong>Note : </strong>Beberapa elemen HTML tidak memiliki konten ( seperti elemen &lt;br&gt; ).
    Elemen ini disebut <i>empty element</i>
    </p>
</div>
<hr>
<h3 class="mt-3">
    Web Browsers
</h3>
<p>Web browser berfungsi untuk membaca dokumen HTML dan menampilkannya dengan benar.
    Contoh web browser yang dapat membaca dokumen HTML antara lain : Chrome, Edge, Firefox, Safari<br><br>
    Browser tidak dapat menampilkan tag HTML, namun menggunakannya untuk menentukan cara menampilkan dokumen:
</p>
<img src="{{asset('img/html-pengenalan.PNG')}}" alt="">
<hr>
<h3 class="mt-3">Struktur Halaman HTML</h3>
<p>Dibawah ini merupakan visualisasi dari struktur halaman HTML:</p>
<div style="border:1px solid black">
&lt;html&gt;
    <div class="mx-3 my-3" style="border:1px solid black">
        &lt;head&gt;
        <div class="mx-3 my-3" style="border:1px solid black">&lt;title&gt;Judul halaman&lt;/title&gt;</div>
        &lt;/head&gt;
    </div>
    <div class="mx-3 my-3" style="border:1px solid black">
        &lt;body&gt;
        <div class="mx-3 my-3" style="border:1px solid black">
            <div class="mx-3 my-3" style="border:1px solid black">
            &lt;h1&gt;Ini sebuah judul&lt;/h1&gt;
            </div>
            <div class="mx-3 my-3" style="border:1px solid black">
            &lt;p&gt;Ini sebuah paragraf&lt;/p&gt;
            </div>
            <div class="mx-3 my-3 " style="border:1px solid black">
            &lt;p&gt;Ini sebuah paragraf lain&lt;/p&gt;
            </div>
        </div>
        &lt;/body&gt;
    </div>
&lt;/html&gt;

</div>
<div class="bg-warning py-4 px-4 my-3">
    <p><strong>Note : </strong>Konten di dalam bagian &lt;body&gt; akan ditampilkan di browser.Konten di dalam elemen  &lt;title&gt; akan ditampilkan di bilah judul browser atau di tab halaman browser</p>
</div>

    <a href="{{ url('/') }}" class="btn btn-success">Home</a>
    <a href="{{ url('/belajar/html/dasar') }}" class="btn btn-success">Selanjutnya</a>
</section>

@endsection
