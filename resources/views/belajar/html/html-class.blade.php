@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.html')
<section class="main">
    <h1>HTML Class</h1>
    <a href="{{ url('/belajar/html/block-inline') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/html/id') }}" class="btn btn-success">Selanjutnya</a>
    <hr>
    <p>
        Atribut <span class="bg-body-secondary text-danger">class</span> HTML digunakan untuk menentukan kelas elemen HTML <br><br>
        Beberapa elemen HTML dapat menggunakan kelas yang sama.

    </p>
    <hr>
    <h3 class="my-3">Menggunakan Atribut Class</h3>
    <p>

        Atribut <span class="bg-body-secondary text-danger">class</span> sering digunakan untuk menunjuk nama kelas di stylesheet.Kelas juga bisa digunakan JavaScript untuk mengakses dan mengubah elemen dengan nama kelas yang spesifik <br><br>
        Dalam contoh berikut kita mempunyai tiga elemen  <span class="bg-body-secondary text-danger">&lt;div&gt;</span> dengan atribut <span class="bg-body-secondary text-danger">class</span> dengan nama "kota". Ketiga elemen <span class="bg-body-secondary text-danger">&lt;div&gt;</span> diubah berdasarkan <span class="bg-body-secondary text-danger">.kota</span> di stylesheet.
    </p>
    <div class="bg-dark text-light p-3">
    &lt;!DOCTYPE html&gt; <br>
    &lt;html&gt;<br>
    &lt;head&gt;<br>
    &lt;style&gt;<br>
    <span class="text-danger">.kota</span>{<br>
  background-color: tomato; <br>
  color: white; <br>
  border: 2px solid black; <br>
  margin: 20px; <br>
  padding: 20px; <br>
    } <br>
    &lt;/style&gt; <br>
    &lt;/head&gt; <br>
    &lt;body&gt;<br><br>
    &lt;div <span class="text-danger">class</span>=<span class="text-success">"kota"</span>&gt;<br>
    &lt;h2&gt;Cirebon&lt;/h2&gt;<br>
    &lt;/div&gt; <br> <br>
    &lt;div <span class="text-danger">class</span>=<span class="text-success">"kota"</span>&gt;<br>
    &lt;h2&gt;Jakarta&lt;/h2&gt;<br>
    &lt;/div&gt; <br> <br>
    &lt;div <span class="text-danger">class</span>=<span class="text-success">"kota"</span>&gt;<br>
    &lt;h2&gt;Bandung&lt;/h2&gt;<br>
    &lt;/div&gt; <br> <br>
    &lt;/body&gt;<br>
    &lt;/html&gt;
    </div>
    <br>
    <div class="bg-warning p-4">
        <p>
            <strong>Tip :</strong> Atribut <span class="bg-body-secondary text-danger">class</span> dapat digunakan untuk <strong>semua</strong> elemen HTML <br><br>

            <strong>Note :</strong> Nama class peka terhadap huruf besar-kecil!
        </p>
    </div>
    <a href="{{ url('/belajar/html/block-inline') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/html/id') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection
