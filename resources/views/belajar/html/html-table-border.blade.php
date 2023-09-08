@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.html')
<section class="main">
    <h1>HTML Table Border</h1>
    <a href="{{ url('/belajar/html/table') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/html/table-size') }}" class="btn btn-success">Selanjutnya</a>
    <hr>
    <p>Tabel HTML dapat memiliki border dengan desain dan bentuk yang berbeda-beda</p>
    <hr>
    <h3 class="my-3">Cara Membuat Border</h3>
    <p>Kamu bisa membuat border di dalam stylesheet dengan property <span class="mark">border</span> pada elemen <span class="mark">&lt;table&gt;</span>,<span class="mark">&lt;th&gt;</span>,<span class="mark">&lt;td&gt;</span>:</p>
    <table style="border: 1px solid black;border-collapse:separate" cellpadding="10">
        <tr style="border: 1px solid black;border-collapse:separate">
            <th style="border: 1px solid black;border-collapse:separate"></th>
            <th style="border: 1px solid black;border-collapse:separate"></th>
            <th style="border: 1px solid black;border-collapse:separate"></th>
        </tr>
        <tr style="border: 1px solid black;border-collapse:separate">
            <th style="border: 1px solid black;border-collapse:separate"></th>
            <th style="border: 1px solid black;border-collapse:separate"></th>
            <th style="border: 1px solid black;border-collapse:separate"></th>
        </tr>
        <tr style="border: 1px solid black;border-collapse:separate">
            <th style="border: 1px solid black;border-collapse:separate"></th>
            <th style="border: 1px solid black;border-collapse:separate"></th>
            <th style="border: 1px solid black;border-collapse:separate"></th>
        </tr>
    </table>
    <br>
    <div class="code">
        table, td, th {<br>
            border: 1px solid black;<br>
        }
    </div>
    <br>
    <p>Kamu juga bisa mengganti warna background sel dan juga menggunakan <span class="mark">border-collapse</span> untuk menghindari double border seperti contoh diatas</p>
       <table style="border: 1px solid black" cellpadding="10">
        <tr style="border: 1px solid black">
            <th style="border: 1px solid white;background-color:#96D4D4"></th>
            <th style="border: 1px solid white;background-color:#96D4D4"></th>
            <th style="border: 1px solid white;background-color:#96D4D4"></th>
        </tr>
        <tr style="border: 1px solid black">
            <th style="border: 1px solid white;background-color:#96D4D4"></th>
            <th style="border: 1px solid white;background-color:#96D4D4"></th>
            <th style="border: 1px solid white;background-color:#96D4D4"></th>
        </tr>
        <tr style="border: 1px solid black">
            <th style="border: 1px solid white;background-color:#96D4D4"></th>
            <th style="border: 1px solid white;background-color:#96D4D4"></th>
            <th style="border: 1px solid white;background-color:#96D4D4"></th>
        </tr>
    </table>
    <br>
        <div class="code">
        table, td, th {<br>
            border: 1px solid white;<br>
        }<br>
        th, td {<br>
  background-color: #96D4D4;<br>
}
    </div>
    <br>
    <p>Kamu juga dapat membuat sudutnya menjadi membulat menggunakan <span class="mark">border-radius</span></p>
        <table style="border: 1px solid black;border-collapse:separate;border-radius:5px;" cellpadding="10">
        <tr style="border: 1px solid black;border-collapse:separate;border-radius:5px;">
            <th style="border: 1px solid black;border-collapse:separate;border-radius:5px;"></th>
            <th style="border: 1px solid black;border-collapse:separate;border-radius:5px;"></th>
            <th style="border: 1px solid black;border-collapse:separate;border-radius:5px;"></th>
        </tr>
        <tr style="border: 1px solid black;border-collapse:separate;border-radius:5px;">
            <th style="border: 1px solid black;border-collapse:separate;border-radius:5px;"></th>
            <th style="border: 1px solid black;border-collapse:separate;border-radius:5px;"></th>
            <th style="border: 1px solid black;border-collapse:separate;border-radius:5px;"></th>
        </tr>
        <tr style="border: 1px solid black;border-collapse:separate;border-radius:5px;">
            <th style="border: 1px solid black;border-collapse:separate;border-radius:5px;"></th>
            <th style="border: 1px solid black;border-collapse:separate;border-radius:5px;"></th>
            <th style="border: 1px solid black;border-collapse:separate;border-radius:5px;"></th>
        </tr>
    </table>
    <br>
    <div class="code">
        table, td, th {<br>
            border: 1px solid white;<br>
            border-radius:5px;<br>
        }
    </div>
    <br>
    <a href="{{ url('/belajar/html/table') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/html/table-size') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection
