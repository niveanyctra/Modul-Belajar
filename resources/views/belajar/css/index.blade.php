@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.css')
<section class="main">
    <h1>CSS Pengenalan</h1>
    <a href="{{ url('/') }}" class="btn btn-success">Home</a>
    <a href="{{ url('/belajar/css/syntax') }}" class="btn btn-success">Selanjutnya</a>
    <hr>
    <h3 class="my-3">
        Apa itu CSS?
    </h3>
    <p>
        CSS adalah istilah pemrograman yang digunakan untuk mendesain sebuah website. CSS merupakan singkatan dari Cascading Style Sheet. CSS menentukan bagaimana elemen HTML ditampilkan. Satu file CSS dapat digunakan oleh beberapa dokumen HTML.
    </p>
    <hr>
    <h3 class="my-3">
        Mengapa kita harus menggunakan CSS?
    </h3>
    <p>
        CSS bisa menentukan desain dari halaman web yang kita buat mencakup layout dan responsif
    </p>
    <h4 class="my-3">
        Contoh CSS
    </h4>
    <div class="bg-dark text-light p-2">
        h1 {
            <div class="ps-4">

                <span class="text-danger">color</span>: <span class="text-success">red</span>;<br>
                <span class="text-danger">text-align</span>: <span class="text-success">center</span>;
            </div>
        }
    </div>
    <br>
    <p>CSS umumnya tersimpan secara terpisah dari dokumen HTML sehingga bisa membuat pekerjaan menjadi efisien karena kita hanya mengubah satu file untuk desain keseluruhan</p>
        <a href="{{ url('/') }}" class="btn btn-success">Home</a>
    <a href="{{ url('/belajar/css/syntax') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection

