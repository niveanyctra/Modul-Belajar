@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.php')
<section class="main">
    <h1>PHP Form Handling</h1>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/php/foreach-loop') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/php/form-require') }}" class="btn btn-success">Selanjutnya</a>
    </div>
    <hr>
    <p>
        PHP memiliki variabel global untuk mengelola form yaitu <span class="mark">$_POST</span> dan <span class="mark">$_GET</span> yang dikirim melalui form HTML <a href="{{url('/belajar/html/form-atribut')}}" class="text-dark">Pelajari kembali form HTML</a>
    </p>
    <h4 class="my-3">Contoh</h4>
    <p>
        Berikut ini contoh form sederhana :
    </p>
    <div class="code">
        &lt;html&gt; <br>
&lt;body&gt; <br>
 <br>
&lt;form action="aksi.php" method="post"&gt; <br>
Nama: &lt;input type="text" name="nama"&gt;&lt;br&gt; <br>
E-mail: &lt;input type="text" name="email"&gt;&lt;br&gt; <br>
&lt;input type="submit"&gt; <br>
&lt;/form&gt; <br>
 <br>
&lt;/body&gt; <br>
&lt;/html&gt; <br>
    </div>
    <p>Kita bisa menampilkan data yang dimasukkad pada form tersebut dengan cara :</p>
    <div class="code">
        &lt;html&gt; <br>
&lt;body&gt; <br>
 <br>
Selamat datang &lt;?php echo $_POST["nama"]; ?&gt;&lt;br&gt; <br>
Alamat emailmu adalah: &lt;?php echo $_POST["email"]; ?&gt; <br>
 <br>
&lt;/body&gt; <br>
&lt;/html&gt; <br>
    </div>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/php/foreach-loop') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/php/form-require') }}" class="btn btn-success">Selanjutnya</a>
    </div>
</section>
@endsection
