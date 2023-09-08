@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.js')
<section class="main">
    <h1>JavaScript Statement</h1>
    <a href="{{ url('/belajar/js/output') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/js/syntax') }}" class="btn btn-success">Selanjutnya</a>
    <hr>
    <h3 class="my-3">
        JavaScript Program
    </h3>
    <p>
        <strong>Program komputer</strong> adalah daftar "instruksi" yang akan "dieksekusi" oleh komputer. <br><br>
        Dalam bahasa pemrograman, instruksi pemrograman ini disebut <strong>statement</strong>. <br><br>
        <strong>Program JavaScript</strong> adalah daftar programming <strong>statement</strong>.
    </p>
    <hr>
    <h3 class="my-3">
        JavaScript Statement atau Pernyataan
    </h3>
    <p>
        JavaScript Statement terdiri dari: <br><br>
        Values, Operators, Expressions, Keywords, and Comments. <br><br>
        Pernyataan ini memberi tahu browser untuk menulis "Hello Semesta." di dalam elemen HTML dengan id="demo":
    </p>
    <div class="bg-dark text-light p-3">
        document.getElementById("demo").innerHTML = "Hello Semesta";
    </div> <br>
    <p>
        Sebagian besar program JavaScript berisi banyak statement JavaScript. <br><br>
        Pernyataan-pernyataan atau statement tersebut dieksekusi, satu per satu, dalam urutan yang sama seperti yang tertulis.
    </p>
    <hr>
    <h3 class="my-3">
        Semicolon atau Titik Koma ;
    </h3>
    <p>
        Titik Koma memisahkan statement atau pernyataan JavaScript. <br><br>
        Tambahkan titik koma di akhir setiap pernyataan yang dapat dieksekusi:
    </p>
    <div class="bg-dark text-light p-3">
        let a, b, c;  <br>
        a = 5;        <br>
        b = 6;        <br>
        c = a + b; 
    </div><br>
    <p>
        Jika dipisahkan dengan titik koma, beberapa pernyataan pada satu baris diperbolehkan:
    </p>
    <div class="bg-dark text-light p-3">
        a = 5; b = 6; c = a + b;
    </div><br>
    <div class="bg-warning p-4">
        <p>Mengakhiri pernyataan dengan titik koma tidak diwajibkan, tetapi sangat disarankan.</p>
    </div>
    <hr>
    <h3 class="my-3">
        JavaScript White Space atau spasi
    </h3>
    <p>
        JavaScript mengabaikan beberapa spasi. Anda dapat menambahkan spasi pada script kamu agar lebih mudah dibaca. <br><br>
        Kedua contoh berikut ini sama saja :
    </p>
    <div class="bg-dark text-light p-3">
        let orang = "Wahyu"; <br>
        let orang="Wahyu";
    </div>
    <hr>
    <h3 class="my-3">
        JavaScript Panjang Baris dan Jeda Baris
    </h3>
    <p>
        Untuk keterbacaan terbaik, programmer sering kali menghindari baris kode yang lebih panjang dari 80 karakter. <br><br>
        Jika pernyataan JavaScript tidak muat dalam satu baris, tempat terbaik untuk memecahnya adalah setelah operator:
    </p>
    <div class="bg-dark text-light p-3">
        document.getElementById("demo").innerHTML = <br>
        "Hello Wahyu!";
    </div>
    <hr>
    <h3 class="my-3">
        JavaScript Code Blocks
    </h3>
    <p>
        Pernyataan JavaScript dapat dikelompokkan bersama dalam code block, di dalam tanda kurung kurawal {...}. <br><br>
        Tujuan dari code block adalah untuk mendefinisikan pernyataan yang akan dieksekusi bersama. <br><br>
        Satu tempat di mana Anda akan menemukan pernyataan yang dikelompokkan bersama dalam blok, adalah dalam fungsi JavaScript:
    </p>
    <div class="bg-dark text-light p-3">
        function myFunction() { <br>
            document.getElementById("demo1").innerHTML = "Hello Wahyu!"; <br>
            document.getElementById("demo2").innerHTML = "Bagaimana Harimu?"; <br>
          }
    </div>
    <hr>
    <h3 class="my-3">
        JavaScript Keywords
    </h3>
    <p>
        Pernyataan JavaScript sering kali dimulai dengan <strong>keyword</strong> untuk mengidentifikasi tindakan JavaScript yang akan dilakukan. <br><br>
        Berikut ini adalah daftar beberapa kata kunci yang akan Anda pelajari dalam tutorial ini:
    </p>
    <table class="table table-striped">
        <tr>
            <th>Keyword</th>
            <th>Deskripsi</th>
        </tr>
        <tr>
            <td>var</td>
            <td>Mendeklarasikan sebuah variabel</td>
        </tr>
        <tr>
            <td>let</td>
            <td>Mendeklarasikan variabel blok</td>
        </tr>
        <tr>
            <td>const</td>
            <td>Mendeklarasikan konstanta blok</td>
        </tr>
        <tr>
            <td>if</td>
            <td>Menandai blok pernyataan yang akan dieksekusi pada suatu kondisi</td>
        </tr>
        <tr>
            <td>switch</td>
            <td>Menandai blok pernyataan yang akan dieksekusi dalam kasus yang berbeda</td>
        </tr>
        <tr>
            <td>for</td>
            <td>Menandai blok pernyataan yang akan dieksekusi dalam satu perulangan</td>
        </tr>
        <tr>
            <td>function</td>
            <td>Mendeklarasikan suatu fungsi</td>
        </tr>
        <tr>
            <td>return</td>
            <td>Keluar dari suatu fungsi</td>
        </tr>
        <tr>
            <td>try</td>
            <td>Menerapkan penanganan kesalahan pada blok pernyataan</td>
        </tr>
    </table>
    <a href="{{ url('/belajar/js/output') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/js/syntax') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection
