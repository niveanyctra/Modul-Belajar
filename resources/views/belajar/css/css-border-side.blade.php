@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.css')
<section class="main">
    <h1>CSS Border Side</h1>
    <a href="{{ url('/belajar/css/border-color') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/css/border-shorthand') }}" class="btn btn-success">Selanjutnya</a>
        <hr>
    <p>Kita bisa menentukan sisi yang akan diberi border dengan properti <mark>border-top</mark>, <mark>border-right</mark>, <mark>border-bottom</mark>, <mark>border-left</mark> <br>
    </p>
        <div class="bg-dark text-light p-3">
            p{
            <div class="ps-4">
                border-style: solid;<br>
                border-color: red;<br>
                border-top: 2px;<br>
                border-bottom: 5px;<br>

            </div>
        } <br>
    </div><br>
    <p>Pada potongan kode diatas kita memiliki elemen &lt;p&gt; yang akan diatur ketebalan bordernya dengan border atas 2px dan border bawah 5px</p>
        <a href="{{ url('/belajar/css/border-color') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/css/border-shorthand') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection

