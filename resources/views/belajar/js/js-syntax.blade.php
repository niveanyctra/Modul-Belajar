@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.js')
<section class="main">
    <h1>JavaScript Syntax</h1>
    <a href="{{ url('/belajar/js/statement') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/js/comment') }}" class="btn btn-success">Selanjutnya</a>
    <hr>
    <h3 class="my-3">
        JavaScript Value
    </h3>
    <p>
        Syntax JavaScript mendefinisikan dua jenis value: <br>
        <ul>
            <li>Fixed Value</li>
            <li>Variable Value</li>
        </ul>
        Fixed value disebut <strong>Literal</strong> <br><br>
        Variable value disebut <strong>Variable</strong>
    </p>
    <hr>
    <h3 class="my-3">
        JavaScript Literal
    </h3>
    <p>
        Dua aturan syntax yang paling penting untuk fixed value adalah: <br>
        <ol>
            <li><strong>Angka</strong> ditulis dengan atau tanpa desimal:</li>
            <div class="bg-dark text-light p-3 my-3">
                10.50 <br><br>
                1001
            </div>
            <li><strong>String</strong> adalah teks, yang ditulis dalam tanda kutip ganda atau tunggal:</li>
            <div class="bg-dark text-light p-3 my-3">
                "Wahyu" <br><br>
                'Wahyu'
            </div>
        </ol>
    </p>
    <hr>
    <h3 class="my-3">
        JavaScript Variable
    </h3>
    <p>
        Dalam bahasa pemrograman, <strong>variabel</strong> digunakan untuk <strong>menyimpan</strong> nilai data. <br><br>
        JavaScript menggunakan kata kunci <span class="bg-body-secondary text-danger">var</span>, <span class="bg-body-secondary text-danger">let</span>, dan <span class="bg-body-secondary text-danger">const</span> untuk <strong>mendeklarasikan</strong> variabel. <br><br>
        Tanda <strong>sama dengan</strong> digunakan untuk <strong>menetapkan value</strong> pada variabel. <br><br>
        Dalam contoh ini, x didefinisikan sebagai sebuah variabel. Kemudian, x ditetapkan (diberikan) nilai atau value 6:
    </p>
    <div class="bg-dark text-light p-4">
        let x; <br>
        x = 6;
    </div>
    <hr>
    <h3 class="my-3">
        JavaScript Operator
    </h3>
    <p>
        JavaScript menggunakan <strong>operator aritmatika</strong> ( <span class="bg-body-secondary text-danger">+ - * /</span> ) untuk menghitung nilai:
    </p>

    <p>
        JavaScript menggunakan <strong>operator assignment</strong> ( <span class="bg-body-secondary text-danger">=</span> ) untuk menetapkan nilai ke variabel:
    </p>
    <div class="bg-dark text-light p-4 my-3">
        let x, y;  <br>
        x = 5; <br>
        y = 6;
    </div>
    <hr>
    <h3 class="my-3">
        JavaScript Expressions
    </h3>
    <p>
        Ekspresi adalah kombinasi nilai, variabel, dan operator, yang menghitung suatu nilai. <br><br>
        Perhitungan ini disebut dengan evaluasi. <br><br>
        Sebagai contoh, 5 * 10 dievaluasi menjadi 50:
    </p>
    <div class="bg-dark text-light p-4 my-3">
        5 * 10
    </div>
    <p>Ekspresi juga bisa mengandung nilai variabel:</p>
    <div class="bg-dark text-light p-4 my-3">
        x * 10
    </div>
    <p>
        Nilai dapat terdiri dari berbagai jenis, seperti angka dan string.<br><br>
        Misalnya, "Wahyu" + " " + "Ridwanto", dievaluasi menjadi "Wahyu Ridwanto":
    </p>
    <div class="bg-dark text-light p-4 my-3">
        "John" + " " + "Doe"
    </div>
    <hr>
    <h3 class="my-3">
        JavaScript Keyword
    </h3>
    <p>
        JavaScript <strong>keyword</strong> digunakan untuk mengidentifikasi tindakan yang akan dilakukan. <br><br>
        Kata kunci <span class="bg-body-secondary text-danger">let</span> memberi tahu browser untuk membuat variabel:
    </p>
    <div class="bg-dark text-light p-4 my-3">
        let x, y;  <br>
        x = 5; <br>
        y = 6;
    </div>
    <p>
        Kata kunci <span class="bg-body-secondary text-danger">var</span> juga memberi tahu browser untuk membuat variabel:
    </p>
    <div class="code">
        var x, y;  <br>
        x = 5; <br>
        y = 6;
    </div>
    <hr>
    <h3 class="my-3">
        JavaScript Komentar
    </h3>
    <p>
        Tidak semua statement JavaScript "dieksekusi". <br><br>
        Kode setelah garis miring ganda <mark>//</mark> atau di antara <span class="mark">/*</span> dan <span class="mark">*/</span> diperlakukan sebagai <strong>komentar</strong>.
    </p>
</section>
@endsection
