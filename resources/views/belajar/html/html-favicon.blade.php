@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.html')
<section class="main">
    <h1>HTML Favicon</h1>
    <a href="{{ url('/belajar/html/comment') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/html/block-inline') }}" class="btn btn-success">Selanjutnya</a>
    <hr>
    <p>Favicon adalah gambar kecil yang ditampilkan disebelah judul halaman di tab browser</p>
    <hr>
    <h3 class="my-3">Bagaimana Cara Menambahkan Favicon di HTML</h3><br>
    <p>Kamu dapat menggunakan gambar apapun yang kamu suka sebagai favicon. Kamu juga dapat membuat favicon kamu sendiri pada situs seperti <a href="http://www.favicon.cc" target="_blank" rel="noopener noreferrer">http://www.favicon.cc</a></p>

    <div class="bg-warning m-2 p-4">
        <p><strong>Tip: </strong>Favicon adalah gambar dengan ukuran kecil, jadi sebaiknya haruslah gambar yang sederhana dan mempunyai kontras yang tinggi</p>
    </div>
    <p>Gambar favicon ditampilkan disebelah kiri judul halaman di tab browser, seperti ini: </p>
    <img src="{{asset('img/fav-icon-html.PNG')}}" alt="">
    <p>Untuk menampilkan favicon pada website anda, sebaiknya simpan gambar favicon kedalam folder images. Nama yang umum untuk gambar favicon adalah "favicon.ico".
        <br><br>
        Selanjutnya, tambah elemen <span class="bg-body-secondary text-danger">&lt;link&gt;</span> pada file "index.html" anda, selanjutnya elemen <span class="bg-body-secondary text-danger">&lt;title&gt;</span>, seperti berikut :
    </p>
    <div class="bg-dark text-light p-2">

    &lt;!DOCTYPE html&gt;
    <div class="p-2">

        &lt;html&gt;
        <div class="ps-4">

            &lt;head&gt;
            <div class="ps-4">

                &lt;title&gt;Judul Halaman&lt;title&gt;<br>
                &lt;link <span class="text-danger">rel</span><span class="text-success">="icon"</span> <span class="text-danger">type</span><span class="text-success">="image/x-icon"</span> <span class="text-danger">href</span><span class="text-success">="/images/favicon.ico"</span>&gt;
            </div>
            &lt;/head&gt;<br>
            &lt;body&gt;
            <div class="ps-4">

                &lt;h1&gt;Hello World&lt;/h1&gt;
            </div>
            &lt;/body&gt;
        </div>
        &lt;/html&gt;
    </div>
    </div>
    <p>Sekarang, simpan file "index.html" dan reload/refresh halaman website. Seharusnya browser tab anda sudah menampilkan gambar favicon anda pada sebelah kiri judul halaman</p>
    <a href="{{ url('/belajar/html/comment') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/html/block-inline') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection
