@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.html')
<section class="main">
    <h1>HTML List</h1>
    <a href="{{ url('/belajar/html/table-colspan-rowspan') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/html/form') }}" class="btn btn-success">Selanjutnya</a>
    <hr>
    <p>List memungkinkan seorang web developer untuk menampilkan data secara urut menggunakan list</p>
    <hr>
    <h3 class="my-3">Contoh List</h3>
    <p>Dibawah ini merupakan contoh list dalam HTML</p>
    <div class="row">
        <div class="col-6">
            <h6>Unordered List</h6>
            <ul>
                <li>Item 1</li>
                <li>Item 2</li>
                <li>Item 3</li>
            </ul>
        </div>
        <div class="col-6">
            <h6>Ordered List</h6>
            <ol>
                <li>Item 1</li>
                <li>Item 2</li>
                <li>Item 3</li>
            </ol>
        </div>
    </div>
    <hr>
    <h3 class="my-3">Unordered List</h3>
    <p>Unordered list adalah list yang disediakan HTML dengan menggunakan icon sebagai tanda yang defaultnya adalah titik hitam. Kita dapat membuat list ini menggunakan elemen <span class="bg-body-secondary text-danger">&lt;ul&gt;</span> dan diakhiri dengan <span class="bg-body-secondary text-danger">&lt;/ul&gt;</span></p>
    <div class="bg-dark text-light p-2">
        &lt;ul&gt;
        <div class="p-2">
            &lt;li&gt;Item 1&lt;/li&gt;<br>
            &lt;li&gt;Item 2&lt;/li&gt;<br>
            &lt;li&gt;Item 3&lt;/li&gt;<br>
        </div>
        &lt;/ul&gt;
    </div>
    <p>Kita dapat memodifikasi tanda dalam list ini menggunakan property <span class="bg-body-secondary text-danger">list-style-type</span> dengan value :</p>
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
    </table>
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
        <a href="{{ url('/belajar/html/table-colspan-rowspan') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/html/form') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection
