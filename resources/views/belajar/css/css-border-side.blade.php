@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.css')
<section class="main">
    <h1>CSS Border Side</h1>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/css/border-color') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/css/border-shorthand') }}" class="btn btn-success">Selanjutnya</a>
    </div>
    <hr>
    <p>Kita bisa menentukan sisi yang akan diberi border dengan properti <span class="mark">border-top</span>, <span class="mark">border-right</span>, <span class="mark">border-bottom</span>, <span class="mark">border-left</span> <br>
    </p>
        <div class="code">
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
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/css/border-color') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/css/border-shorthand') }}" class="btn btn-success">Selanjutnya</a>
    </div>
</section>
@endsection

