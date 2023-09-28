@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.html')
<section class="main">
    <h1>HTML Ordered List</h1>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/html/unordered-list') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/html/form') }}" class="btn btn-success">Selanjutnya</a>
    </div>
    <hr>
    <h3 class="my-3">Ordered List</h3>
    <p>Ordered list adalah list yang disediakan HTML dengan menggunakan icon sebagai tanda yang defaultnya adalah angka berurut. Kita dapat membuat list ini menggunakan elemen <span class="mark">&lt;ol&gt;</span> dan diakhiri dengan <span class="mark">&lt;/ol&gt;</span></p>
    <div class="code">
        &lt;ol&gt;
        <div class="p-2">
            &lt;li&gt;Item 1&lt;/li&gt;<br>
            &lt;li&gt;Item 2&lt;/li&gt;<br>
            &lt;li&gt;Item 3&lt;/li&gt;<br>
        </div>
        &lt;/ol&gt;
    </div>
        <p>Kita dapat memodifikasi tanda dalam list ini menggunakan atribut <span class="mark">type</span> dengan value :</p>
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
    <div class="note">
        <strong>Note :</strong> tag <span class="mark">&lt;li&gt;</span> dapat diisi dengan elemen HTML lain seperti gambar,link,dll.
    </div>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/html/unordered-list') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/html/form') }}" class="btn btn-success">Selanjutnya</a>
    </div>
</section>
@endsection
