@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.css')
<section class="main">
    <h1>CSS Cara Menggunakan</h1>
    <a href="{{ url('/belajar/css/selector') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/css/comment') }}" class="btn btn-success">Selanjutnya</a>
        <hr>
    <h3 class="my-3">
        Cara Menggunakan CSS
    </h3>
    <p>
        Ada tiga cara untuk menggunakan CSS
    </p>
    <ol>
        <li>External CSS</li>
        <li>Internal CSS</li>
        <li>Inline CSS</li>
    </ol>
    <hr>
    <h3 class="my-3">
        External CSS
    </h3>
    <p>Untuk menggunakan external CSS kamu harus menghubungkan file CSS ke dokumen HTML dengan menambahkan tag berikut di dalam tag &lt;head&gt; :</p>
    <div class="bg-dark text-light p-2">
        &lt;link rel="stylesheet" href="namafile.css"&gt;
    </div>
    <p>Dengan tag tersebut kamu akan menghubungkan file CSS dengan dokumen HTML. Kamu bebas menamai file, namun pastikan file harus memiliki ekstensi .css setelah itu kamu bebas menentukan desain pada file CSS yang kamu buat</p>
    <hr>
    <h3 class="my-3">
        Internal CSS
    </h3>
    <p>
        Internal CSS adalah kumpulan sintaks CSS yang terletak dalam tag &lt;style&gt; yang terletak di bagian &lt;head&gt; di dalam dokumen HTML <br>

    </p>
    <h6 class="my-2">Contoh</h6>
    <div class="bg-dark text-light p-2">
        &lt;style&gt;<br>
        <span class="text-warning">h1</span> {
            <div class="ps-4">

                <span class="text-danger">color</span>: <span class="text-success">red</span>;<br>
                <span class="text-danger">text-align</span>: <span class="text-success">center</span>;
            </div>
        } <br>
        &lt;/style&gt;
    </div>
    <hr>
    <h3 class="my-3">
        Inline CSS
    </h3>
    <p>Inline CSS digunakan untuk mendesain satu tag yang dipilih menggunakan atribut <mark>style</mark> :</p>
    <div class="bg-dark text-light p-2">
        &lt;p <span class="text-danger">style</span>=<span class="text-success">"color:<span class="text-primary">blue</span>"</span>&gt;Ini teks berwarna biru&lt;/p&gt;
    </div>
    <hr>
    <h3 class="my-3">
        Urutan Prioritas File CSS
    </h3>
    <p>
        Inline CSS memiliki prioritas tertinggi untuk dijalankan oleh halaman web. Sedangkan External CSS dan Internal CSS memiliki prioritas tergantung peletakannya. Jika External CSS diletakan diatas Internal CSS, maka prioritas kedudukan Internal CSS lebih tinggi, begitupun sebaliknya.
    </p>
        <a href="{{ url('/belajar/css/selector') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/css/comment') }}" class="btn btn-success">Selanjutnya</a>
    
</section>
@endsection

