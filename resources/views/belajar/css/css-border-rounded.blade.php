@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.css')
<section class="main">
    <h1>CSS Rounded Border</h1>
    <a href="{{ url('/belajar/css/border-shorthand') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/css') }}" class="btn btn-success">Home</a>
        <hr>
    <p>Kita juga bisa membuat ujung border melengkubg dengan properti <span class="mark">border-radius</span> <br><br>
        Value dari border-color adalah satuan unit seperti px, cm, persen(%) dll.
    </p>
        <div class="code">
            p{
            <div class="ps-4">
                border-style: solid;<br>
                border-color: red;<br>
                border-radius: 10px;<br>
            </div>
        } <br>
    </div><br>
    <p>Pada potongan kode diatas kita memiliki elemen &lt;p&gt; yang akan diatur warna bordernya dengan warna merah dan ujung melengkung sebesar 10px</p>
    <p style="border: 1px solid red;border-radius:10px">&nbsp;</p>
        <a href="{{ url('/belajar/css/border-shorthand') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/css') }}" class="btn btn-success">Home</a>
</section>
@endsection

