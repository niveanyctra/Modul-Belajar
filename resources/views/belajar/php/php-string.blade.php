@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.php')
<section class="main">
    <h1>PHP String</h1>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/php/data-type') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/php/number') }}" class="btn btn-success">Selanjutnya</a>
    </div>
    <hr>
    <p>String adalah rangkaian karakter dalam PHP</p>
    <p>Pada bagian ini kita akan mengenal fungsi yang umum digunakan untuk memanipulasi string</p>
    <hr>
    <h3 class="my-3">strlen()</h3>
    <p>strlen() digunakan untuk menghitung panjang string</p>
    <div class="code">
        &lt;?php <br>
        echo strlen("Hello World!"); <span class="t-green">// outputnya adalah 12</span> <br>
        ?>
    </div>
    <hr>
    <h3 class="my-3">str_word_count()</h3>
    <p>str_word_count() digunakan untuk menghitung kata pada string</p>
    <div class="code">
        &lt;?php <br>
        echo str_word_count("Hello World!"); <span class="t-green">// outputnya adalah 1</span> <br>
        ?>
    </div>
    <hr>
    <h3 class="my-3">strrev()</h3>
    <p>strrev() digunakan untuk membalik string</p>
    <div class="code">
        &lt;?php <br>
        echo strrev("Hello World!"); <span class="t-green">// outputnya adalah !dlroW olleH</span> <br>
        ?>
    </div>
    <hr>
    <h3 class="my-3">strpos()</h3>
    <p>strpos() digunakan untuk mencari teks tertentu dalam string dan jika tidak menemukan teks maka akan mengembalikan false dan semua string diawali dari index 0</p>
    <div class="code">
        &lt;?php <br>
        echo strpos("Hello World!", "World"); <span class="t-green">// outputnya adalah 6</span> <br>
        ?>
    </div>
    <hr>
    <h3 class="my-3">str_replace()</h3>
    <p>str_replace() digunakan untuk mengganti teks pada string</p>
    <div class="code">
        &lt;?php <br>
        echo str_replace("World","Arip","Hello World!"); <span class="t-green">// outputnya adalah Hello Arip!</span> <br>
        ?>
    </div>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/php/data-type') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/php/number') }}" class="btn btn-success">Selanjutnya</a>
    </div>
</section>
@endsection
