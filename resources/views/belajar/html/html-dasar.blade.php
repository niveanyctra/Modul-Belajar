@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.html')
<section class="main">
    <h1>HTML Dasar</h1>
    <a href="{{ url('/belajar/html') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/html/element') }}" class="btn btn-success">Selanjutnya</a>
    <hr>
    <p>Di bagian ini kita akan menunjukan contoh HTML dasar. <br><br>
    Jangan khawatir jika kita menggunakan tag yang belum kamu pelajari.
    </p>
    <hr>
    <h3 class="mt-3">Dokumen HTML</h3>
    <p>
        Semua dokumen HTML harus diawali dengan deklarasi <span class="bg-body-secondary text-danger">&lt;!DOCTYPE html&gt;</span><br><br>
        Dokumen HTML sendiri harus diawali dengan <span class="bg-body-secondary text-danger">&lt;html&gt;</span> dan diakhiri dengan <span class="bg-body-secondary text-danger">&lt;/html&gt;</span><br><br>
        Bagian yang dapat dilihat dari dokumen HTML adalah antara <span class="bg-body-secondary text-danger">&lt;body&gt;</span> dan <span class="bg-body-secondary text-danger">&lt;/body&gt;</span>
    </p>
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
    <hr>
    <h3 class="mt-3">Deklarasi &lt;!DOCTYPE&gt;</h3>
    <p>Deklarasi <span class="bg-body-secondary text-danger">&lt;!DOCTYPE&gt;</span> tersebut mewaliki tipe dokumen,dan membantu browser menampilkan halaman web dengan benar. <br><br>
    Tag tersebut hanya boleh muncul sekali, di bagian atas kode sebelum tag apapun. <br><br>
    Deklarasi <span class="bg-body-secondary text-danger">&lt;!DOCTYPE&gt;</span> ini tidak membedakan huruf besar-kecil. <br><br>
    Deklarasi <span class="bg-body-secondary text-danger">&lt;!DOCTYPE&gt;</span> untuk HTML5 adalah:
    </p>

<pre class="text-light bg-dark">

    &lt;!DOCTYPE html&gt;

</pre>

    <h3 class="mt-3">HTML Headings</h3>
    <p>Heading di HTML terdiri dari <span class="bg-body-secondary text-danger">&lt;h1&gt;</span> sampai <span class="bg-body-secondary text-danger">&lt;h6&gt;</span><br><br>
    <span class="bg-body-secondary text-danger">&lt;h1&gt;</span> mendefinisikan judul yang paling besar <br>
    <span class="bg-body-secondary text-danger">&lt;h6&gt;</span> mendefinisikan judul yang paling kecil
    </p>
    <h3 class="mt-3">Contoh</h3>
    <div class="bg-dark text-light">

        <h1>Heading 1</h1>
        <h2>Heading 2</h2>
        <h3>Heading 3</h3>
        <h4>Heading 4</h4>
        <h5>Heading 5</h5>
        <h6>Heading 6</h6>
    </div>
    <hr>
    <h3 class="mt-3">Paragraf HTML</h3>
    <p>Paragraf HTML didefinisikan dengan tag <span class="bg-body-secondary text-danger">&lt;p&gt;</span> :</p>
    <pre class="text-light bg-dark">

    &lt;p&gt;Ini sebuah paragraf&lt;/p&gt;
    &lt;p&gt;Ini paragraf lain&lt;/p&gt;

</pre>
    <hr>
    <h3 class="mt-3">Tautan HTML</h3>
    <p>Tautan HTML didefinisikan dengan tag <span class="bg-body-secondary text-danger">&lt;a&gt;</span> :</p>
    <pre class="text-light bg-dark">

    &lt;a <span class="text-danger">href</span><span class="text-success">="https://smkn1-cirebon.sch.id"</span>&gt;Ini sebuah Tautan&lt;/a&gt;

</pre>
<p>Tujuan tautan ditentukan dalam atribut <span class="bg-body-secondary text-danger">href</span> <br><br>
Atribut digunakan untuk memberikan informasi tambahan tentang elemen HTML</p>
    <hr>
    <h3 class="mt-3">Gambar HTML</h3>
    <p>Gambar dalam HTML didefinisikan dengan tag <span class="bg-body-secondary text-danger">&lt;img&gt;</span>. <br><br>
    Sumber file img (<span class="bg-body-secondary text-danger">src</span>), teks alternatif(<span class="bg-body-secondary text-danger">alt</span>),
    <span class="bg-body-secondary text-danger">width</span>, dan <span class="bg-body-secondary text-danger">height</span> tersedia sebagai atribut:</p>
    <pre class="text-light bg-dark">

    &lt;img <span class="text-danger">src</span><span class="text-success">="image.png"</span> <span class="text-danger">alt</span><span class="text-success">="gambar" </span><span class="text-danger">width</span><span class="text-success">="100"</span> <span class="text-danger">height</span><span class="text-success">="100"</span>&gt;

</pre>
<hr>
<h3 class="mt-3">Cara Melihat Sumber Kode HTML</h3>
<p>Berikut ini adalah cara melihat sumber kode dan memeriksa elemen HTML : </p>
<h3 class="mt-3">Melihat Kode Sumber HTML</h3>
<p>Klik kanan di halaman HTML lalu pilih opsi "Lihat Sumber". Ini akan membuka halaman baru yang berisi kode sumber HTML di halaman tersebut</p>
<h3 class="mt-3">Periksa Elemen HTML</h3>
<p>Klik kanan pada sebuah elemen(atau area kosong) lalu pilih opsi "Inspeksi" untuk melihat elemen dan atribut yang digunakan(Anda akan melihat HTML dan CSS). Anda juga dapat mengedit HTML atau CSS tersebut.</p><br>
    <a href="{{ url('/belajar/html') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/html/element') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection
