@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.html')
<section class="main">
    <h1>HTML Unordered List</h1>
    <a href="{{ url('/belajar/html/list') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/html/ordered-list') }}" class="btn btn-success">Selanjutnya</a>
        <hr>
    <h3 class="my-3">Unordered List</h3>
    <p>Unordered list adalah list yang disediakan HTML dengan menggunakan icon sebagai tanda yang defaultnya adalah titik hitam. Kita dapat membuat list ini menggunakan elemen <span class="mark">&lt;ul&gt;</span> dan diakhiri dengan <span class="mark">&lt;/ul&gt;</span></p>
    <div class="code">
        &lt;ul&gt;
        <div class="p-2">
            &lt;li&gt;Item 1&lt;/li&gt;<br>
            &lt;li&gt;Item 2&lt;/li&gt;<br>
            &lt;li&gt;Item 3&lt;/li&gt;<br>
        </div>
        &lt;/ul&gt;
    </div>
    <p>Kita dapat memodifikasi tanda dalam list ini menggunakan property <span class="mark">list-style-type</span> dengan value :</p>
    <table class="table table-stripped">
        <tr>
            <th>Value</th>
            <th>Deskripsi</th>
        </tr>
        <tr>
            <td>disc</td>
            <td>Icon list menjadi titik(default)</td>
        </tr>
        <tr>
            <td>circle</td>
            <td>Icon list menjadi lingkaran</td>
        </tr>
        <tr>
            <td>square</td>
            <td>Icon list menjadi kotak</td>
        </tr>
        <tr>
            <td>none</td>
            <td>Icon list menjadi hilang</td>
        </tr>
    </table><br>
    <a href="{{ url('/belajar/html/list') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/html/ordered-list') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection
