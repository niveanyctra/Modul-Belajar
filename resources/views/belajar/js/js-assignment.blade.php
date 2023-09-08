@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.js')
<section class="main">
    <h1>JavaScript Assignment</h1>
    <a href="{{ url('/belajar/js/arithmetic') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/js/data-type') }}" class="btn btn-success">Selanjutnya</a>
        <hr>
    <h3 class="my-3">Operator penugasan</h3>
    <p>Operator penugasan digunakan untuk melakukan pemberian nilai pada variabel</p>
    <p>Berikut ini daftar operator penugasan yang umum digunakan pada JavaScript :</p>
    <table class="table table-sriped">
        <tr>
            <th>Operator</th>
            <th>Contoh</th>
            <th>Sama seperti</th>
        </tr>
        <tr>
            <td>=</td>
            <td>x = y</td>
            <td>x = y</td>
        </tr>
        <tr>
            <td>+=</td>
            <td>x += y</td>
            <td>x = x + y</td>
        </tr>
        <tr>
            <td>-=</td>
            <td>x -= y</td>
            <td>x = x - y</td>
        </tr>
        <tr>
            <td>*=</td>
            <td>x *= y</td>
            <td>x = x * y</td>
        </tr>
        <tr>
            <td>/=</td>
            <td>x /= y</td>
            <td>x = x / y</td>
        </tr>
        <tr>
            <td>%=</td>
            <td>x %= y</td>
            <td>x = x % y</td>
        </tr>
        <tr>
            <td>**=</td>
            <td>x **= y</td>
            <td>x = x ** y</td>
        </tr>
    </table>
    <p>Contoh :</p>
    <div class="code">
        <span class="t-blue">var</span> x = 2; <br>
        <span class="t-blue">var</span> y += 9; <br>
        <span class="t-green">// Maka variabel y memiliki nilai dari x + 9</span>

    </div>
    <a href="{{ url('/belajar/js/arithmetic') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/js/data-type') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection
