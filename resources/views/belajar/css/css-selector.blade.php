@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.css')
<section class="main">
    <h1>CSS Selector</h1>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/css/syntax') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/css/how-to') }}" class="btn btn-success">Selanjutnya</a>
    </div>
    <hr>
    <h3 class="my-3">
        CSS Selector
    </h3>
    <p>
        CSS selector berfungsi untuk memilih elemen HTML, nama class dan nama id yang ingin didesain.
    </p>
    <hr>
    <h3 class="my-3">
        Contoh CSS Selector
    </h3>
    <div class="code">
        <span class="t-red">p</span> {
            <div class="ps-4">

                <span class="t-red">color</span>: <span class="t-green">red</span>;<br>
                <span class="t-red">text-align</span>: <span class="t-green">center</span>;
            </div>
        }
    </div>
    <p>Pada contoh diatas kita akan membuat tag &lt;p&gt; berwarna merah dan berada di tengah seperti ini :</p>
    <div class="bg-body-secondary p-2">
        <p class="t-red text-center">
            Contoh CSS Selector
        </p>
    </div><br>
    <p>Kita juga bisa memodifikasinya sebagai berikut</p>
    <div class="code">
        <span class="t-red">p.center</span> {
            <div class="ps-4">

                <span class="t-red">color</span>: <span class="t-green">red</span>;<br>
                <span class="t-red">text-align</span>: <span class="t-green">center</span>;
            }
            </div>

    </div>
    <p>Pada potongan kode diatas selector hanya akan mempengaruhi class 'center' pada tag &lt;p&gt;<br>
        Kita juga bisa mengelompokan beberapa tag HTML dalam satu selector
    </p>
        <div class="code">
        <span class="t-red">h1</span>,<span class="t-red">h2</span>,<span class="t-red">h3</span> {
            <div class="ps-4">

                <span class="t-red">color</span>: <span class="t-green">red</span>;<br>
                <span class="t-red">text-align</span>: <span class="t-green">center</span>;
            </div>
        }
    </div>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/css/syntax') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/css/how-to') }}" class="btn btn-success">Selanjutnya</a>
    </div>

</section>
@endsection

