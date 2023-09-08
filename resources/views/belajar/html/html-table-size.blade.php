@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.html')
<section class="main">
    <h1>HTML Table Size</h1>
    <a href="{{ url('/belajar/html/table-border') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/html/table-padding-spacing') }}" class="btn btn-success">Selanjutnya</a>
    <hr>
    <p>Kamu bisa mengatur ukuran sel tabel dengan menambah property <span class="mark">width</span> dan <span class="mark">height</span> pada elemen tabel yang kamu mau</p>
    <br>
    <div class="code">
        &lt;table&gt;
        <div class="ps-4">
            &lt;tr&gt;
            <div class="ps-4">
                &lt;th <span class="t-red">width</span>=<span class="t-grren">"50px"</span>&gt;Nama&lt;/th&gt;<br>
                &lt;th&gt;Kelas&lt;/th&gt;<br>
                &lt;th&gt;JK&lt;/th&gt;<br>
            </div>
            &lt;/tr&gt;
        </div>
        <div class="ps-4">
            &lt;tr <span class="t-red">height</span>=<span class="t-grren">"100px"</span>&gt;
            <div class="ps-4">
                &lt;td&gt;Arip&lt;/td&gt;<br>
                &lt;td&gt;XII RPL 1&lt;/td&gt;<br>
                &lt;td&gt;Laki-laki&lt;/td&gt;<br>
            </div>
            &lt;/tr&gt;
        </div>
        &lt;/table&gt;
    </div><br>
        <table class="table table-bordered" border="1">
        <thead>
            <tr>
                <th width="50px">Nama</th>
                <th>Kelas</th>
                <th>JK</th>
            </tr>
        </thead>
        <tbody>
            <tr height="100px">
                <td>Arip</td>
                <td>XII RPL 1</td>
                <td>Laki-laki</td>
            </tr>

        </tbody>
    </table>
    <br>
    <p>Pada contoh diatas kolom nama memiliki lebar yang berbeda dengan kolom lain dan baris ke dua juga memiliki yang berbeda dari baris diatasnya</p>
    <a href="{{ url('/belajar/html/table-border') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/html/table-padding-spacing') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection
