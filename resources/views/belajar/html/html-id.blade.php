@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.html')
<section class="main">
    <h1>HTML Id</h1>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/html/class') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/html/table') }}" class="btn btn-success">Selanjutnya</a>
    </div>
    <hr>
    <p>
        Atribut <span class="mark">id</span> dalam HTML digunakan untuk menentukan id unik untuk elemen HTML <br><br>
        Kamu tidak bisa memiliki lebih dari satu elemen dengan id yang sama di dalam dokumen HTML
    </p>
    <hr>
    <h3 class="my-3">Menggunakan Atribut id
    </h3>
    <p>
        Atribut <span class="mark">id</span> menentukan id unik untuk elemen HTML. Value dari atribut <span class="mark">id</span> harus unik dalam dokumen HTML. <br><br>
        Atribut <span class="mark">id</span> sering digunakan untuk menunjuk nama id di stylesheet.Id juga bisa digunakan JavaScript untuk mengakses dan mengubah elemen dengan nama id yang spesifik <br><br>
        Sintaks untuk id di deklarasikan dengan karakter tagar(#), diikuti dengan nama id. Lalu, mendefinisikan property CSS dengan kurung kurawal{}. <br><br>
        Dalam contoh berikut ini kita mempunyai elemen <span class="mark">&lt;h1&gt;</span> dengan nama id <span class="mark">#judulSaya</span> yang di definisikan di style di bagian head.
    </p>
    <div class="code">
    &lt;!DOCTYPE html&gt; <br>
    &lt;html&gt;<br>
    &lt;head&gt;<br>
    &lt;style&gt;<br>
    <span class="t-red">#judulSaya</span>{<br>
  background-color: light-blue; <br>
  color: white; <br>
  border: 2px solid black; <br>
  margin: 20px; <br>
  padding: 20px; <br>
    } <br>
    &lt;/style&gt; <br>
    &lt;/head&gt; <br>
    &lt;body&gt;<br><br>
    &lt;h1 <span class="t-red">id</span>=<span class="t-green">"judulSaya"</span>&gt;
Cirebon
    &lt;/h1&gt; <br> <br>
    &lt;/body&gt;<br>
    &lt;/html&gt;
    </div>
    <br>
    <div class="bg-warning p-4">
        <strong>Note :</strong> Nama id peka terhadap huruf besar-kecil <br><br>
        <strong>Note :</strong> Nama id setidaknya harus memiliki satu karakter, tidak dapat diawali dengan angka, dan tidak diperbolehkan mengandung spasi, tab, dll.
    </div>
    <hr>
    <h3 class="my-3">Perbedaan Antara Id dan Class</h3>
    <p>
        Perbedaan yang mendasar pada <span class="mark">id</span> dan <span class="mark">class</span> adalah class dapat digunakan di beberapa elemen HTML secara bersamaan, sedangkan id hanya boleh digunakan oleh satu elemen HTML.
    </p>
    <hr>
    <h3 class="my-3">
        Bookmark HTML dengan ID dan Links
    </h3>
    <p>
        Bookmark HTML digunakan untuk memperbolehkan pengguna untuk lompat ke bagian halaman web secara spesifik. <br><br>
        Bookmark sangat berguna jika halaman web memiliki ukuran halaman sangat panjang. <br><br>
        Untuk menggunakan bookmark, pertama kamu harus membuatnya, lalu menambahkan link menuju bookmark tersebut. <br><br>
        Maka jika link tersebut diklik, halaman tersebut otomatis menuju bagian yang diberi bookmark.
    </p>
    <h3 class="my-3">Contoh</h3>
    <div class="code">
        &lt;a <span class="t-red">href</span>=<span class="t-green">"#bookmark"</span>&gt;Ke bagian bookmark&lt;/a&gt;<br><br>
        &lt;h2 <span class="t-red">id</span>=<span class="t-green">"bookmark"</span>&gt;Bagian bookmark&lt;/h2&gt;
    </div><br>
    <p>
        Pada contoh diatas kita memiliki link yang menuju ke <span class="mark">"#bookmark"</span> yang jika diklik akan terarah ke bagian bookmark di halaman yang sama.

    </p>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/html/class') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/html/table') }}" class="btn btn-success">Selanjutnya</a>
    </div>
</section>
@endsection
