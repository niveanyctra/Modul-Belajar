@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.js')
<section class="main">
    <h1>JavaScript Variable</h1>
    <a href="{{ url('/belajar/js/comment') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/js/let') }}" class="btn btn-success">Selanjutnya</a>
    <div class="info">
        <h5>Variabel adalah Wadah untuk Menyimpan Data</h5>
        <p>
            Variabel JavaScript dapat dideklarasikan dalam 4 cara:
            <ul>
                <li>Otomatis</li>
                <li>Menggunakan <span class="mark">var</span></li>
                <li>Menggunakan <span class="mark">let</span></li>
                <li>Menggunakan <span class="mark">const</span></li>
            </ul>
        </p>
    </div>
    <div class="note">
        <p><strong>Note:</strong> Praktik pemrograman yang baik adalah selalu mendeklarasikan variabel sebelum digunakan.</p>
    </div>
    <p>
        Dari contoh-contoh tersebut, Anda bisa menebak:
        <ul>
            <li>x menyimpan value 5</li>
            <li>y menyimpan value 6</li>
            <li>z menyimpan value 11</li>
        </ul>
    </p>
    <h5>Contoh menggunakan var :</h5>
    <div class="code">
        <span class="t-blue">var</span> x = 5; <br>
        <span class="t-blue">var</span> y = 6; <br>
        <span class="t-blue">var</span> z = 11; 
    </div>
    <div class="note">
        <h4>Note</h4>
        <p>
            Kata kunci <span class="mark">var</span> digunakan di semua kode JavaScript dari tahun 1995 hingga 2015. <br><br>
            Kata kunci <span class="mark">let</span> dan <span class="mark">const</span> ditambahkan ke JavaScript pada tahun 2015. <br><br>
            Kata kunci <span class="mark">var</span> hanya boleh digunakan dalam kode yang ditulis untuk browser lama.
        </p>
    </div>
    <h5>Contoh menggunakan let :</h5>
    <div class="code">
        <span class="t-blue">let</span> x = 5; <br>
        <span class="t-blue">let</span> y = 6; <br>
        <span class="t-blue">let</span> z = x + y; 
    </div>
    <h5>Contoh menggunakan const :</h5>
    <div class="code">
        <span class="t-blue">const</span> x = 5; <br>
        <span class="t-blue">const</span> y = 6; <br>
        <span class="t-blue">const</span> z = x + y; 
    </div>
    <h5>Contoh ketika dicampur :</h5>
    <div class="code">
        <span class="t-blue">const</span> price1 = 5; <br>
        <span class="t-blue">const</span> price2 = 6; <br>
        <span class="t-blue">let</span> total = price1 + price2; 
    </div>
    <p>
        Dua variabel <span class="mark">price1</span> dan <span class="mark">price2</span> dideklarasikan dengan kata kunci <span class="mark">const</span>. <br><br>
        Ini adalah nilai konstan dan tidak dapat diubah. <br><br>
        Variabel <span class="mark">total</span> dideklarasikan dengan kata kunci <span class="mark">let</span>. <br><br>
        Value <span class="mark">total</span> dapat diubah
    </p>
    <div class="note">
        <h4>Pada saat kapan kita menggunakan var, let, const?</h4>
        <ol>
            <li>Selalu deklarasikan variabel</li>
            <li>Selalu gunakan <span class="mark">const</span> jika nilainya tidak boleh diubah</li>
            <li>Selalu gunakan <span class="mark">const</span> jika jenisnya tidak boleh diubah (Array dan Objek)</li>
            <li>Hanya gunakan <span class="mark">let</span> jika Anda tidak dapat menggunakan <span class="mark">const</span></li>
            <li>Hanya gunakan <span class="mark">var</span> jika Anda HARUS mendukung browser lama.</li>
        </ol>
    </div>
    <hr>
    <h3 class="my-3">
        JavaScript Identifiers
    </h3>
    <p>
        Semua <strong>variable</strong> JavaScript harus <strong>diindetifikasi</strong> dengan <strong>nama yang unik</strong>. <br><br>
        Nama-nama unik ini disebut <strong>pengenal</strong> atau <strong>indetifiers</strong>. <br><br>
        Pengidentifikasi dapat berupa nama pendek (seperti x dan y) atau nama yang lebih deskriptif (usia, sum, totalVolume). <br><br>
        Aturan umum untuk membuat nama untuk variabel (pengenal unik) adalah:
        <ul>
            <li>Nama dapat terdiri dari huruf, angka, garis bawah, dan tanda dolar.</li>
            <li>Nama harus dimulai dengan sebuah huruf.</li>
            <li>Nama juga dapat diawali dengan $ dan _ (tetapi kita tidak akan menggunakannya dalam tutorial ini).</li>
            <li>Nama-nama tersebut peka terhadap huruf besar/kecil (y dan Y adalah variabel yang berbeda).</li>
            <li>Kata-kata yang dicadangkan (seperti kata kunci JavaScript) tidak dapat digunakan sebagai nama.</li>
        </ul>
    </p>
    <hr>
    <h3 class="my-3">Mendeklarasikan Variabel JavaScript</h3>
    <p>
        Membuat variabel dalam JavaScript disebut dengan "mendeklarasikan" variabel. <br><br>
        Anda mendeklarasikan variabel JavaScript dengan <span class="mark">var</span> atau kata kunci <span class="mark">let</span>:
    </p>
    <div class="code">
        <span class="t-blue">var</span> carName;
    </div>
    <p>atau</p>
    <div class="code">
        <span class="t-blue">let</span> carName;
    </div>
</section>
@endsection
