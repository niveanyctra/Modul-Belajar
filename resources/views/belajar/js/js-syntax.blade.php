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
            <div class="code">
                10.50 <br><br>
                1001
            </div>
            <li><strong>String</strong> adalah teks, yang ditulis dalam tanda kutip ganda atau tunggal:</li>
            <div class="code">
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
        JavaScript menggunakan kata kunci <span class="mark">var</span>, <span class="mark">let</span>, dan <span class="mark">const</span> untuk <strong>mendeklarasikan</strong> variabel. <br><br>
        Tanda <strong>sama dengan</strong> digunakan untuk <strong>menetapkan value</strong> pada variabel. <br><br>
        Dalam contoh ini, x didefinisikan sebagai sebuah variabel. Kemudian, x ditetapkan (diberikan) nilai atau value 6:
    </p>
    <div class="code">
        let x; <br>
        x = 6;
    </div>
    <hr>
    <h3 class="my-3">
        JavaScript Operator
    </h3>
    <p>
        JavaScript menggunakan <strong>operator aritmatika</strong> ( <span class="mark">+ - * /</span> ) untuk menghitung nilai:
    </p>

    <p>
        JavaScript menggunakan <strong>operator assignment</strong> ( <span class="mark">=</span> ) untuk menetapkan nilai ke variabel:
    </p>
    <div class="code">
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
    <div class="code">
        5 * 10
    </div>
    <p>Ekspresi juga bisa mengandung nilai variabel:</p>
    <div class="code">
        x * 10
    </div>
    <p>
        Nilai dapat terdiri dari berbagai jenis, seperti angka dan string.<br><br>
        Misalnya, "Wahyu" + " " + "Ridwanto", dievaluasi menjadi "Wahyu Ridwanto":
    </p>
    <div class="code">
        "John" + " " + "Doe"
    </div>
    <hr>
    <h3 class="my-3">
        JavaScript Keyword
    </h3>
    <p>
        JavaScript <strong>keyword</strong> digunakan untuk mengidentifikasi tindakan yang akan dilakukan. <br><br>
        Kata kunci <span class="mark">let</span> memberi tahu browser untuk membuat variabel:
    </p>
    <div class="code">
        let x, y;  <br>
        x = 5; <br>
        y = 6;
    </div>
    <p>
        Kata kunci <span class="mark">var</span> juga memberi tahu browser untuk membuat variabel:
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
        Kode setelah garis miring ganda <span class="mark">//</span> atau di antara <span class="mark">/*</span> dan <span class="mark">*/</span> diperlakukan sebagai <strong>komentar</strong>. <br><br>
        Komentar akan diabaikan, dan tidak akan dieksekusi.
    </p>
    <hr>
    <h3 class="my-3">
        JavaScript Pengenal / Nama
    </h3>
    <p>
        Pengenal adalah nama JavaScript. <br><br>
        Pengenal digunakan untuk menamai variabel dan keyword, serta function. <br><br>
        Aturan untuk nama yang benar atau legal adalah sama di sebagian besar bahasa pemrograman. <br><br>
        Nama JavaScript haruslah dimulai dengan :
        <ul>
            <li>Huruf (A-Z atau a-z)</li>
            <li>Tanda dolar ($)</li>
            <li>Atau garis bawah (_)</li>
        </ul>
        Karakter berikutnya dapat berupa huruf, angka, garis bawah, atau tanda dolar.
    </p>
    <div class="note">
        <p>
            <strong>Note:</strong> Angka tidak diperbolehkan sebagai karakter pertama dalam nama. <br><br>
            Dengan cara ini JavaScript dapat dengan mudah membedakan pengenal dari angka.
        </p>
    </div>
    <hr>
    <h3 class="my-3">
        JavaScript Peka terhadap Huruf Besar/Kecil
    </h3>
    <p>
        Semua pengenal JavaScript <strong>peka terhadap huruf besar/kecil</strong>. <br><br>
        Variabel <span class="mark">lastName</span> dan <span class="mark">lastname</span>, adalah dua variabel yang berbeda:
    </p>
    <div class="code">
        <span class="t-blue">let</span> lastname, lastName;  <br>
        lastName = "Doe"; <br>
        lastname = "Peterson";
    </div>
    <p>
        JavaScript tidak mengartikan <strong>LET</strong> atau <strong>Let</strong> sebagai kata kunci <strong>let</strong>.
    </p>
    <hr>
    <h3 class="my-3">
        JavaScript and Camel Case
    </h3>
    <p>
        Secara historis, para programmer telah menggunakan berbagai cara untuk menggabungkan beberapa kata ke dalam satu nama variabel:
    </p>
    <h5 class="my-3">
        Tanda Hubung:
    </h5>
    <p>nama-depan, nama-belakang, layang-layang.</p>
    <div class="note">Tanda hubung tidak diperbolehkan dalam JavaScript. Tanda hubung hanya diperuntukkan untuk pengurangan.</div>
    <h5 class="my-3">
        Garis Bawah:
    </h5>
    <p>nama_depan, nama_belakang, layang_layang.</p>
    <h5 class="my-3">
        Upper Camel Case (Pascal Case):
    </h5>
    <p>NamaDepan, NamaBelakang, LayangLayang.</p>
    <h5 class="my-3">
        Lower Camel Case:
    </h5>
    <p>
        Pemrogram JavaScript cenderung menggunakan huruf besar kecil yang dimulai dengan huruf kecil: <br><br>
        namaDepan, namaBelakang, layangLayang
    </p>
    <hr>
    <h3 class="my-3">
        Kumpulan Karakter JavaScript
    </h3>
    <p>
        JavaScript menggunakan rangkaian karakter <strong>Unicode</strong>. <br><br>
        Unicode mencakup (hampir) semua karakter, tanda baca, dan simbol di dunia.
    </p>
    <a href="{{ url('/belajar/js/statement') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/js/comment') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection
