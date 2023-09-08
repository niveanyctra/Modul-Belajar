@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.html')
<section class="main">
    <h1>HTML Ordered List</h1>
    <a href="{{ url('/belajar/html/unordered-list') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/html/other-list') }}" class="btn btn-success">Selanjutnya</a>
        <hr>
    <h3 class="my-3">Ordered List</h3>
    <p>Ordered list adalah list yang disediakan HTML dengan menggunakan icon sebagai tanda yang defaultnya adalah angka berurut. Kita dapat membuat list ini menggunakan elemen <span class="bg-body-secondary text-danger">&lt;ol&gt;</span> dan diakhiri dengan <span class="bg-body-secondary text-danger">&lt;/ol&gt;</span></p>
    <div class="bg-dark text-light p-2">
        &lt;ol&gt;
        <div class="p-2">
            &lt;li&gt;Item 1&lt;/li&gt;<br>
            &lt;li&gt;Item 2&lt;/li&gt;<br>
            &lt;li&gt;Item 3&lt;/li&gt;<br>
        </div>
        &lt;/ol&gt;
    </div>
        <p>Kita dapat memodifikasi tanda dalam list ini menggunakan atribut <span class="bg-body-secondary text-danger">type</span> dengan value :</p>
    <table class="table table-stripped">
        <tr>
            <th>Value</th>
            <th>Deskripsi</th>
        </tr>
        <tr>
            <td>"1"</td>
            <td>Icon list menjadi angka(default)</td>
        </tr>
        <tr>
            <td>"A"</td>
            <td>Icon list menjadi alfabet huruf besar</td>
        </tr>
        <tr>
            <td>"a"</td>
            <td>Icon list menjadi alfabet huruf kecil</td>
        </tr>
        <tr>
            <td>"I"</td>
            <td>Icon list menjadi angka romawi huruf besar</td>
        </tr>
        <tr>
            <td>"i"</td>
            <td>Icon list menjadi angka romawi huruf kecil</td>
        </tr>
    </table>
    <div class="bg-warning p-4">
        <strong>Note :</strong> tag <span class="bg-body-secondary text-danger">&lt;li&gt;</span> dapat diisi dengan elemen HTML lain seperti gambar,link,dll.
    </div>
    <br>
    <a href="{{ url('/belajar/html/unordered-list') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/html/other-list') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection
