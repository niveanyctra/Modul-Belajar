@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.html')
<section class="main">
    <h1>HTML Table Padding & Spacing</h1>
    <a href="{{ url('/belajar/html/table-size') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/html/table-colspan-rowspan') }}" class="btn btn-success">Selanjutnya</a>
    <hr>
    <h3 class="my-3">Padding Sel</h3>
    <p>Kamu bisa mengatur jarak teks dengan border menggunakan properti <span class="bg-body-secondary text-danger">padding</span> didalam sel tabel</p>
        <div class="bg-dark text-light p-2">
        td, th {<br>
            padding: 15px;<br>
        }
    </div>
    <br>
    <table class="table-bordered">
        <tr>
            <td class="p-2">Padding</td>
            <td class="p-2">Padding</td>
            <td class="p-2">Padding</td>
        </tr>
        <tr>
            <td class="p-2">Padding</td>
            <td class="p-2">Padding</td>
            <td class="p-2">Padding</td>
        </tr>
        <tr>
            <td class="p-2">Padding</td>
            <td class="p-2">Padding</td>
            <td class="p-2">Padding</td>
        </tr>
    </table>
    <hr>
    <h3 class="my-3">Spacing Sel</h3>
    <p>Kamu juga bisa mengatur jarak antar border dengan properti <span class="bg-body-secondary text-danger">border-spacing</span></p>
        <div class="bg-dark text-light p-2">
table {<br>
  border-spacing: 30px;<br>
}
    </div>
    <br>
    <table style="border: 1px solid black;border-collapse:separate;border-spacing:30px" cellpadding="10">
        <tr style="border: 1px solid black;border-collapse:separate;border-spacing:50px">
            <td style="border: 1px solid black;border-collapse:separate;border-spacing:30px">Spacing</td>
            <td style="border: 1px solid black;border-collapse:separate;border-spacing:30px">Spacing</td>
            <td style="border: 1px solid black;border-collapse:separate;border-spacing:30px">Spacing</td>
        </tr>
        <tr style="border: 1px solid black;border-collapse:separate;border-spacing:50px">
            <td style="border: 1px solid black;border-collapse:separate;border-spacing:30px">Spacing</td>
            <td style="border: 1px solid black;border-collapse:separate;border-spacing:30px">Spacing</td>
            <td style="border: 1px solid black;border-collapse:separate;border-spacing:30px">Spacing</td>
        </tr>
        <tr style="border: 1px solid black;border-collapse:separate;border-spacing:50px">
            <td style="border: 1px solid black;border-collapse:separate;border-spacing:30px">Spacing</td>
            <td style="border: 1px solid black;border-collapse:separate;border-spacing:30px">Spacing</td>
            <td style="border: 1px solid black;border-collapse:separate;border-spacing:30px">Spacing</td>
        </tr>
    </table>
    <br>
    <a href="{{ url('/belajar/html/table-header') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/html/table-colspan-rowspan') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection
