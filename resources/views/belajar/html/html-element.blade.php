@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.html')
<section class="main">
    <h1>HTML Element</h1>
    <a href="{{ url('/belajar/html/dasar') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/html/atribut') }}" class="btn btn-success">Selanjutnya</a>
    <h3 class="mt-3">Elemen HTML?</h3>
<p>Elemen HTML terdiri dari tag awal,konten dan penutup tag:</p>
<div class="code">
    <span class="t-red">&lt;namatag&gt;</span>Konten<span class="t-red">&lt;/namatag&gt;</span>
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

<div class="note">

    <p><strong>Note : </strong>Beberapa elemen HTML tidak memiliki konten ( seperti elemen &lt;br&gt; ).
    Elemen ini disebut <i>empty element</i>
    </p>
</div>
<h3 class="mt-3">Elemen HTML Bersarang</h3>
<p>Elemen HTML dapat bersarang atau biasa disebut <i>Nested Element</i> yang artinya elemen HTML dapat berada di dalam elemen lain</p>
<h3 class="mt-3">Contoh</h3>
    <div class="code">

    &lt;!DOCTYPE html&gt;<br>
    &lt;html&gt;
    <div class="ps-4">

        &lt;head&gt;
        <div class="ps-2">

            &lt;title&gt;Judul Halaman&lt;title&gt;
        </div>
        &lt;/head&gt;<br>
        &lt;body&gt;
        <div class="ps-2">

            &lt;h1&gt;Hello World&lt;/h1&gt;
        </div>
        &lt;/body&gt;
    </div>
    &lt;/html&gt;

    </div>
    <hr>
    <h3 class="mt-3">
        Jangan Pernah Mengabaikan Akhir Tag!
    </h3>
    <p>Jangan pernah mengabaikan akhir tag pada elemen HTML karena hal ini dapat menyebabkan kesalahan browser dalam membaca dokumen HTML</p>
    <hr>
    <h3 class="mt-3">
        Empty Element HTML
    </h3>
    <p>Adapun HTML Memiliki Empty Element atau elemen tanpa akhir tag seperti <span class="mark">&lt;br&gt;</span> dan <span class="mark">&lt;img&gt;</span></p>
    <hr>
    <h3 class="mt-3">Daftar Elemen HTML Yang Sering Digunakan</h3>
    <p>Berikut ini adalah daftar elemen HTML yang sering digunakan</p>
    <table class="table table-striped table-bordered text-center">
        <thead>
            <tr>
                <th>Tag</th>
                <th>Deskripsi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>&lt;!DOCTYPE&gt;</td>
                <td>Digunakan untuk mendefinisikan tipe dokumen</td>
            </tr>
            <tr>
                <td>&lt;html&gt;</td>
                <td>Untuk mengawali setiap dokumen HTML</td>
            </tr>
            <tr>
                <td>&lt;head&gt;</td>
                <td>Untuk menyimpan informasi meta dalam dokumen html</td>
            </tr>
            <tr>
                <td>&lt;meta&gt;</td>
                <td>Untuk mendefinisikan metadata dalam dokumen html</td>
            </tr>
            <tr>
                <td>&lt;title&gt;</td>
                <td>Untuk mendeklarasikan judul halaman HTML</td>
            </tr>
            <tr>
                <td>&lt;body&gt;</td>
                <td>untuk mendefinisikan badan untuk menampilkan halaman HTML</td>
            </tr>
            <tr>
                <td>&lt;h1&gt; sampai &lt;h6&gt;</td>
                <td>Untuk membuat heading pada halaman HTML</td>
            </tr>
            <tr>
                <td>&lt;p&gt;</td>
                <td>Untuk membuat paragraf pada halaman HTML</td>
            </tr>
            <tr>
                <td>&lt;a&gt;</td>
                <td>Untuk Membuat tautan pada halaman HTML</td>
            </tr>
            <tr>
                <td>&lt;img&gt;</td>
                <td>Untuk membuat gambar pada halaman HTML</td>
            </tr>
            <tr>
                <td>&lt;link&gt;</td>
                <td>Untuk menghubungkan dokumen HTML dengan dokumen lain</td>
            </tr>
            <tr>
                <td>&lt;style&gt;</td>
                <td>Untuk membuat CSS Internal yang biasanya ditempatkan di dalam tag &lt;head&gt;</td>
            </tr>
            <tr>
                <td>&lt;div&gt;</td>
                <td>Untuk membuat bagian dalam halaman HTML</td>
            </tr>
            <tr>
                <td>&lt;br&gt;</td>
                <td>Untuk membuat baris baru dalam halaman HTML</td>
            </tr>
            <tr>
                <td>&lt;table&gt;</td>
                <td>Untuk membuat tabel dalam halaman HTML</td>
            </tr>
            <tr>
                <td>&lt;tr&gt;</td>
                <td>Untuk membuat kolom baru pada tabel</td>
            </tr>
            <tr>
                <td>&lt;td&gt;</td>
                <td>Untuk membuat baris baru pada tabel</td>
            </tr>
            <tr>
                <td>&lt;form&gt;</td>
                <td>Untuk membuat form dalam halaman HTML</td>
            </tr>
            <tr>
                <td>&lt;input&gt;</td>
                <td>Untuk mendefinisikan input control</td>
            </tr>
            <tr>
                <td>&lt;textarea&gt;</td>
                <td>Untuk mendefinisikan input control yang lebih besar</td>
            </tr>
            <tr>
                <td>&lt;button&gt;</td>
                <td>Untuk membuat tombol dalam halaman HTML</td>
            </tr>
            <tr>
                <td>&lt;select&gt;</td>
                <td>Untuk membuat drop-down list dalam form</td>
            </tr>
            <tr>
                <td>&lt;option&gt;</td>
                <td>Untuk mendefinisikan opsi dalam drop-down list di tag &lt;select&gt;</td>
            </tr>
            <tr>
                <td>&lt;label&gt;</td>
                <td>Untuk melabeli input control</td>
            </tr>
            <tr>
                <td>&lt;ul&gt;</td>
                <td>Untuk membuat list dengan icon</td>
            </tr>
            <tr>
                <td>&lt;ol&gt;</td>
                <td>Untuk membuat list dengan huruf atau angka</td>
            </tr>
            <tr>
                <td>&lt;li&gt;</td>
                <td>Untuk mendefinisikan list item</td>
            </tr>
            <tr>
                <td>&lt;span&gt;</td>
                <td>Memiliki kesamaan dengan &lt;div&gt; namun memiliki style inline</td>
            </tr>
            <tr>
                <td>&lt;script&gt;</td>
                <td>Untuk menggunakan client-side script</td>
            </tr>
        </tbody>
    </table>
    <a href="{{ url('/belajar/html/dasar') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/html/atribut') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection
