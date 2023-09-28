@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.html')
<section class="main">
    <h1>HTML Dasar</h1>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/html') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/html/element') }}" class="btn btn-success">Selanjutnya</a>
    </div>
    <hr>
    <p>Di bagian ini kita akan menunjukan contoh HTML dasar. <br><br>
    Jangan khawatir jika kita menggunakan tag yang belum kamu pelajari.
    </p>
    <hr>
    <h3 class="mt-3">Dokumen HTML</h3>
    <p>
        Semua dokumen HTML harus diawali dengan deklarasi <span class="mark">&lt;!DOCTYPE html&gt;</span><br><br>
        Dokumen HTML sendiri harus diawali dengan <span class="mark">&lt;html&gt;</span> dan diakhiri dengan <span class="mark">&lt;/html&gt;</span><br><br>
        Bagian yang dapat dilihat dari dokumen HTML adalah antara <span class="mark">&lt;body&gt;</span> dan <span class="mark">&lt;/body&gt;</span>
    </p>
    <div class="code">

    &lt;!DOCTYPE html&gt; <br>
    &lt;html&gt;
    <div class="ps-4">

        &lt;head&gt;
        <div class="ps-2">

            &lt;title&gt;Judul Halaman&lt;title&gt;
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
    <hr>
    <h3 class="mt-3">Deklarasi &lt;!DOCTYPE&gt;</h3>
    <p>Deklarasi <span class="mark">&lt;!DOCTYPE&gt;</span> tersebut mewaliki tipe dokumen,dan membantu browser menampilkan halaman web dengan benar. <br><br>
    Tag tersebut hanya boleh muncul sekali, di bagian atas kode sebelum tag apapun. <br><br>
    Deklarasi <span class="mark">&lt;!DOCTYPE&gt;</span> ini tidak membedakan huruf besar-kecil. <br><br>
    Deklarasi <span class="mark">&lt;!DOCTYPE&gt;</span> untuk HTML5 adalah:
    </p>

<div class="code">

    &lt;!DOCTYPE html&gt;

</div>

    <h3 class="mt-3">HTML Headings</h3>
    <p>Heading di HTML terdiri dari <span class="mark">&lt;h1&gt;</span> sampai <span class="mark">&lt;h6&gt;</span><br><br>
    <span class="mark">&lt;h1&gt;</span> mendefinisikan judul yang paling besar <br>
    <span class="mark">&lt;h6&gt;</span> mendefinisikan judul yang paling kecil
    </p>
    <h3 class="mt-3">Contoh</h3>
    <div class="code">

        <h1>Heading 1</h1>
        <h2>Heading 2</h2>
        <h3>Heading 3</h3>
        <h4>Heading 4</h4>
        <h5>Heading 5</h5>
        <h6>Heading 6</h6>
    </div>
    <hr>
    <h3 class="mt-3">Paragraf HTML</h3>
    <p>Paragraf HTML didefinisikan dengan tag <span class="mark">&lt;p&gt;</span> :</p>
    <div class="code">

    &lt;p&gt;Ini sebuah paragraf&lt;/p&gt; <br>
    &lt;p&gt;Ini paragraf lain&lt;/p&gt;

    </div>
    <hr>
    <h3 class="mt-3">Tautan HTML</h3>
    <p>Tautan HTML didefinisikan dengan tag <span class="mark">&lt;a&gt;</span> :</p>
    <div class="code">

    &lt;a <span class="t-red">href</span><span class="t-green">="https://smkn1-cirebon.sch.id"</span>&gt;Ini sebuah Tautan&lt;/a&gt;

    </div>
    <p>Tujuan tautan ditentukan dalam atribut <span class="mark">href</span> <br><br>
    Atribut digunakan untuk memberikan informasi tambahan tentang elemen HTML</p>
    <hr>
    <h3 class="mt-3">Gambar HTML</h3>
    <p>Gambar dalam HTML didefinisikan dengan tag <span class="mark">&lt;img&gt;</span>. <br><br>
    Sumber file img (<span class="mark">src</span>), teks alternatif(<span class="mark">alt</span>),
    <span class="mark">width</span>, dan <span class="mark">height</span> tersedia sebagai atribut:</p>
    <div class="code">

    &lt;img <span class="t-red">src</span><span class="t-green">="image.png"</span> <span class="t-red">alt</span><span class="t-green">="gambar" </span><span class="t-red">width</span><span class="t-green">="100"</span> <span class="t-red">height</span><span class="t-green">="100"</span>&gt;

    </div>
    <hr>
    <h3 class="mt-3">Cara Melihat Sumber Kode HTML</h3>
    <p>Berikut ini adalah cara melihat sumber kode dan memeriksa elemen HTML : </p>
    <h3 class="mt-3">Melihat Kode Sumber HTML</h3>
    <p>Klik kanan di halaman HTML lalu pilih opsi "Lihat Sumber". Ini akan membuka halaman baru yang berisi kode sumber HTML di halaman tersebut</p>
    <h3 class="mt-3">Periksa Elemen HTML</h3>
    <p>Klik kanan pada sebuah elemen(atau area kosong) lalu pilih opsi "Inspeksi" untuk melihat elemen dan atribut yang digunakan(Anda akan melihat HTML dan CSS). Anda juga dapat mengedit HTML atau CSS tersebut.</p>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/html') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/html/element') }}" class="btn btn-success">Selanjutnya</a>
    </div>
</section>
@endsection
