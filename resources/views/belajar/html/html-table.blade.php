@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.html')
<section class="main">
    <h1>HTML Table</h1>
    <a href="{{ url('/belajar/html/id') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/html/table-border') }}" class="btn btn-success">Selanjutnya</a>
    <hr>
    <p>
        Tabel memungkinkan seorang web develper untuk mengatur data menjadi baris dan kolom.
    </p>
    <hr>
    <h3 class="my-3">Contoh</h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Kelas</th>
                <th>JK</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Arip</td>
                <td>XII RPL 1</td>
                <td>Laki-laki</td>
            </tr>
            <tr>
                <td>Arip</td>
                <td>XII RPL 1</td>
                <td>Laki-laki</td>
            </tr>
            <tr>
                <td>Arip</td>
                <td>XII RPL 1</td>
                <td>Laki-laki</td>
            </tr>

        </tbody>
    </table>
    <hr>
    <h3 class="my-3">Cara Membuat Tabel HTML</h3>
    <p>Sebuah tabel dalam HTML terdiri dari sel-sel tabel dalam baris dan kolom</p>
    <h4 class="my-3">Contoh tabel sederhana</h4>
    <div class="bg-dark text-light p-3">
        &lt;table&gt;
        <div class="ps-4">
            &lt;tr&gt;
            <div class="ps-4">
                &lt;th&gt;Nama&lt;/th&gt;<br>
                &lt;th&gt;Kelas&lt;/th&gt;<br>
                &lt;th&gt;JK&lt;/th&gt;<br>
            </div>
            &lt;/tr&gt;
        </div>
        <div class="ps-4">
            &lt;tr&gt;
            <div class="ps-4">
                &lt;td&gt;Arip&lt;/td&gt;<br>
                &lt;td&gt;XII RPL 1&lt;/td&gt;<br>
                &lt;td&gt;Laki-laki&lt;/td&gt;<br>
            </div>
            &lt;/tr&gt;
        </div>
        &lt;/table&gt;
    </div>
    <hr>
    <h3 class="my-3">Sel Tabel</h3>
    <p>
        Setiap sel tabel ditentukan oleh tag <span class="bg-body-secondary text-danger">&lt;td&gt;</span> dan <span class="bg-body-secondary text-danger">&lt;/td&gt;</span> yang merupakan singkatan dari table data atau data tabel <br><br>
        Apapun yang berada diantara tag <span class="bg-body-secondary text-danger">&lt;td&gt;</span> dan <span class="bg-body-secondary text-danger">&lt;/td&gt;</span> merupakan konten dari sel tabel
    </p>
    <div class="bg-warning p-4">
        <p><strong>Note :</strong> Sebuah sel tabel dapat diisi semua jenis elemen HTML berupa teks,gambar,list,link, tabel lain, dll.</p>
    </div>
    <hr>
    <h3 class="my-3">Baris Tabel</h3>
    <p>Setiap baris dalam tabel diawali dengan <span class="bg-body-secondary text-danger">&lt;tr&gt;</span> dan diakhiri dengan <span class="bg-body-secondary text-danger">&lt;/tr&gt;</span> yang merupakan singkatan dari table row atau baris tabel <br><br>
        Kamu dapat memiliki baris sebanyak yang kamu mau didalam tabel;Namun pastikan bahwa jumlah sel sama dalam setiap baris
    </p>
    <hr>
    <h3 class="my-3">Judul Tabel</h3>
    <p>
        Terkadang kamu mau sel kamu menjadi sel judul tabel.Untuk itu kamu bisa menggunakan tag <span class="bg-body-secondary text-danger">&lt;th&gt;</span> daripada tag <span class="bg-body-secondary text-danger">&lt;td&gt;</span> yang merupakan singkatan dari table header atau judul tabel <br><br>
        Secara default, teks dalam elemen <span class="bg-body-secondary text-danger">&lt;th&gt;</span> dicetak tebal dan berada di tengah,namun anda dapat mengubahnya dalam CSS.
    </p>
    <hr>
    <h3 class="my-3">Tag Tabel HTML</h3>
    <table class="table table-striped">
        <tr>
            <th>Tag</th>
            <th>Deskripsi</th>
        </tr>
        <tr>
            <td>&lt;table&gt;</td>
            <td>Mendefinisikan sebagai tabel</td>
        </tr>
        <tr>
            <td>&lt;th&gt;</td>
            <td>Mendefinisikan sebagai judul sel dalam tabel</td>
        </tr>
        <tr>
            <td>&lt;tr&gt;</td>
            <td>Mendefinisikan sebagai baris dalam tabel</td>
        </tr>
        <tr>
            <td>&lt;td&gt;</td>
            <td>Mendefinisikan sebagai sel dalam tabel</td>
        </tr>
        <tr>
            <td>&lt;caption&gt;</td>
            <td>Mendefinisikan sebagai caption tabel</td>
        </tr>
        <tr>
            <td>&lt;colgroup&gt;</td>
            <td>Menentukan sekelompok satu kolom atau lebih dalam tabel untuk pemformatan</td>
        </tr>
        <tr>
            <td>&lt;col&gt;</td>
            <td>Untuk menentukan properti untuk setiap kolom dalam elemen &lt;colgroup&gt;</td>
        </tr>
        <tr>
            <td>&lt;thead&gt;</td>
            <td>Untuk mengelompokan judul konten dalam sebuah tabel</td>
        </tr>
        <tr>
            <td>&lt;tbody&gt;</td>
            <td>Untuk mengelompokan isi konten dalam sebuah tabel</td>
        </tr>
        <tr>
            <td>&lt;tfoot&gt;</td>
            <td>Untuk mengelompokan isi footer dalam sebuah tabel</td>
        </tr>
    </table>
</section>
@endsection
