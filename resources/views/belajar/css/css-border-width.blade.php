@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.css')
<section class="main">
    <h1>CSS Border Width</h1>
    <a href="{{ url('/belajar/css/border') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/css/border-color') }}" class="btn btn-success">Selanjutnya</a>
    <hr>
    <p>Kita bisa menentukan ketebalan border dengan properti <mark>border-width</mark> <br><br>
        Value dari border-width adalah satuan unit seperti px, cm, persen(%), dll.
    </p>
        <div class="bg-dark text-light p-3">
            p{
            <div class="ps-4">
                border-width: 2px;<br>
            </div>
        } <br>
    </div><br>
    <p>Pada potongan kode diatas kita memiliki elemen &lt;p&gt; yang akan diatur ketebalan bordernya sebesar 2px</p>
    <a href="{{ url('/belajar/css/border') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/css/border-color') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection

