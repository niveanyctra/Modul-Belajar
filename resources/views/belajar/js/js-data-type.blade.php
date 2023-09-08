@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.js')
<section class="main">
    <h1>JavaScript Tipe Data</h1>
    <a href="{{ url('/belajar/js/assignment') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/js/function') }}" class="btn btn-success">Selanjutnya</a>
    <br>
    <div class="info p-4">
        <h5 class="my-2">JavaScript memiliki 8 tipe data</h5>
        <ol>
            <li>String</li>
            <li>Number</li>
            <li>Bigint</li>
            <li>Boolean</li>
            <li>Undefined</li>
            <li>Null</li>
            <li>Symbol</li>
            <li>Object</li>
        </ol>
        <h5 class="my-2">Tipe data object</h5>
        <p>Tipe data object meliputi :</p>
        <ol>
            <li>Object</li>
            <li>Array</li>
            <li>Date/Tanggal</li>

        </ol>

    </div>
    <p>Contoh :</p>
    <div class="code">
        <span class="t-green">// Numbers:</span> <br>
        <span class="t-blue">let</span> length = 16; <br>
        <span class="t-blue">let</span> weight = 7.5; <br>
         <br>
        <span class="t-green">// Strings:</span> <br>
        <span class="t-blue">let</span> color = "Yellow"; <br>
        <span class="t-blue">let</span> lastName = "Johnson"; <br>
         <br>
        <span class="t-green">// Booleans </span><br>
        <span class="t-blue">let</span> x = true; <br>
        <span class="t-blue">let</span> y = false; <br>
         <br>
        <span class="t-green">// Object:</span> <br>
        <span class="t-blue">const</span> person = {firstName:"John", lastName:"Doe"}; <br>
         <br>
        <span class="t-green">// Array object:</span> <br>
        <span class="t-blue">const</span> cars = ["Saab", "Volvo", "BMW"]; <br>
         <br>
        <span class="t-green">// Date object:</span> <br>
        <span class="t-blue">const</span> date = new Date("2022-03-25");
    </div>
    <a href="{{ url('/belajar/js/assignment') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/js/function') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection
