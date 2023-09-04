@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.html')
<section class="main">
    <h1>HTML Element</h1>
    <a href="{{ url('/belajar/html/dasar') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/html/atribut') }}" class="btn btn-success">Selanjutnya</a>
    <h3 class="mt-3">Elemen HTML?</h3>
<p>Elemen HTML terdiri dari tag awal,konten dan penutup tag:</p>
<div class="fs-5">

    <span class="text-danger">&lt;namatag&gt;</span>Konten<span class="text-danger">&lt;/namatag&gt;</span>
</div>
<p><strong>Elemen</strong> HTML apapun yang memiliki tag awal hingga tag akhir:</p>
<table class="table table-striped table-border text-center" style="max-width: 700px">
    <thead>
        <tr>
            <th>Tag Awal</th>
            <th>Konten</th>
            <th>Tag Akhir</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>&lt;h1&gt;</td>
            <td>Ini tag Heading</td>
            <td>&lt;/h1&gt;</td>
        </tr>
        <tr>
            <td>&lt;p&gt;</td>
            <td>Ini tag Paragraf</td>
            <td>&lt;/p&gt;</td>
        </tr>
        <tr>
            <td>&lt;br&gt;</td>
            <td><i>kosong</i></td>
            <td><i>kosong</i></td>
        </tr>
    </tbody>
</table>

<div class="bg-warning py-4 px-4">

    <p><strong>Note : </strong>Beberapa elemen HTML tidak memiliki konten ( seperti elemen &lt;br&gt; ).
    Elemen ini disebut <i>empty element</i>
    </p>
</div>

</section>
@endsection
