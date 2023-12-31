@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.html')
<section class="main">
    <h1>HTML Block & Inline</h1>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/html/favicon') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/html/class') }}" class="btn btn-success">Selanjutnya</a>
    </div>
    <hr>
    <p>
        Setiap elemen HTML memiliki nilai tampilan default, tergantung pada jenis elemennya. <br><br>
        Teerdapat dua tampilan nilai: block dan inline
    </p>
    <hr>
    <h3 class="my-3">
        Elemen Block-level
    </h3>
    <p>
        Elemen Block-level selalu dalam baris baru, dan browser otomatis menambah beberapa ruang (sebuah margin) sebelum dan sesudah elemen. <br><br>
        Elemen Block-level selalu menempati seluruh lebar yang tersedia (melebar kekiri dan kekanan sejauh mungkin). <br><br>
        Dua block elemen yang umum digunakan adalah: <span class="mark">&lt;p&gt;</span> dan <span class="mark">&lt;div&gt;</span>. <br><br>
        Elemen <span class="mark">&lt;p&gt;</span> mendefinisikan paragaraf dalam dokumen HTML. <br><br>
        Elemen <span class="mark">&lt;div&gt;</span> mendefinisikan divisi atau bagian dalam dokumen HTML. <br>
        <div class="p-2" style="border: 1px solid black"> Elemen &lt;p&gt; adalah elemen block-level</div><br>
        <div class="p-2" style="border: 1px solid black"> Elemen &lt;div&gt; adalah elemen block-level</div><br>
        Berikut ini adalah elemen block-level dalam HTML: <br><br>
        <ul>
        <div class="row">
            <div class="col-sm-4">

                <li><span class="mark">&lt;adddress&gt;</span></li>
                <li><span class="mark">&lt;article&gt;</span></li>
                <li><span class="mark">&lt;aside&gt;</span></li>
                <li><span class="mark">&lt;blockquote&gt;</span></li>
                <li><span class="mark">&lt;canvas&gt;</span></li>
                <li><span class="mark">&lt;dd&gt;</span></li>
                <li><span class="mark">&lt;div&gt;</span></li>
                <li><span class="mark">&lt;dl&gt;</span></li>
                <li><span class="mark">&lt;dt&gt;</span></li>
                <li><span class="mark">&lt;fieldset&gt;</span></li>
            </div>
            <div class="col-sm-4">

            <li><span class="mark">&lt;figcaption&gt;</span></li>
            <li><span class="mark">&lt;figure&gt;</span></li>
            <li><span class="mark">&lt;footer&gt;</span></li>
            <li><span class="mark">&lt;form&gt;</span></li>
            <li><span class="mark">&lt;h1&gt;-&lt;h6&gt;</span></li>
            <li><span class="mark">&lt;header&gt;</span></li>
            <li><span class="mark">&lt;hr&gt;</span></li>
            <li><span class="mark">&lt;li&gt;</span></li>
            <li><span class="mark">&lt;main&gt;</span></li>
            <li><span class="mark">&lt;nav&gt;</span></li>
        </div>
        <div class="col-sm-4">
                <li><span class="mark">&lt;noscript&gt;</span></li>

                <li><span class="mark">&lt;ol&gt;</span></li>
                <li><span class="mark">&lt;p&gt;</span></li>
                <li><span class="mark">&lt;pre&gt;</span></li>
                <li><span class="mark">&lt;section&gt;</span></li>
                <li><span class="mark">&lt;table&gt;</span></li>
                <li><span class="mark">&lt;tfoot&gt;</span></li>
                <li><span class="mark">&lt;ul&gt;</span></li>
                <li><span class="mark">&lt;video&gt;</span></li>
            </div>
            </div>
            </ul>


    </p>
    <hr>
    <h3 class="my-3">Inline Elemen</h3>
    <p>
        Elemen inline tidak dimulai pada baris baru. <br><br>
        Elemen inline hanya membutuhkan lebar sebanyak yang diperlukan. <br><br>
        Ini adalah <span class="p-1" style="border: 1px solid black">elemen &lt;span&gt; di dalam</span> paragraf. <br><br>
        Berikut ini adalah elemen inline dalam HTML: <br><br>
        <ul>
    <div class="row">
        <div class="col-sm-4">
            <li><span class="mark">&lt;a&gt;</span></li>
            <li><span class="mark">&lt;abbr&gt;</span></li>
            <li><span class="mark">&lt;acronym&gt;</span></li>
            <li><span class="mark">&lt;b&gt;</span></li>
            <li><span class="mark">&lt;bdo&gt;</span></li>
            <li><span class="mark">&lt;big&gt;</span></li>
            <li><span class="mark">&lt;br&gt;</span></li>
            <li><span class="mark">&lt;button&gt;</span></li>
            <li><span class="mark">&lt;cite&gt;</span></li>
            <li><span class="mark">&lt;code&gt;</span></li>
            <li><span class="mark">&lt;dfn&gt;</span></li>
            <li><span class="mark">&lt;em&gt;</span></li>

        </div>
        <div class="col-sm-4">

            <li><span class="mark">&lt;i&gt;</span></li>
            <li><span class="mark">&lt;img&gt;</span></li>
            <li><span class="mark">&lt;input&gt;</span></li>
            <li><span class="mark">&lt;kbd&gt;</span></li>
            <li><span class="mark">&lt;label&gt;</span></li>
            <li><span class="mark">&lt;map&gt;</span></li>
            <li><span class="mark">&lt;object&gt;</span></li>
            <li><span class="mark">&lt;output&gt;</span></li>
            <li><span class="mark">&lt;q&gt;</span></li>
            <li><span class="mark">&lt;samp&gt;</span></li>
            <li><span class="mark">&lt;script&gt; </span></li>
            <li><span class="mark">&lt;select&gt;</span></li>
        </div>
        <div class="col-sm-4">

            <li><span class="mark">&lt;small&gt;</span></li>
            <li><span class="mark">&lt;span&gt;</span></li>
            <li><span class="mark">&lt;strong&gt;</span></li>
            <li><span class="mark">&lt;sub&gt;</span></li>
            <li><span class="mark">&lt;sup&gt;</span></li>
            <li><span class="mark">&lt;textarea&gt;</span></li>
            <li><span class="mark">&lt;time&gt;</span></li>
            <li><span class="mark">&lt;tt&gt;</span></li>
            <li><span class="mark">&lt;var&gt;</span></li>
        </div>

            </div>
            </ul>
    </p>
    <div class="note">
        <p><strong>Note :</strong> Sebuah elemen inline tidak bisa memuat elemen block-level</p>
    </div>
    <hr>
    <h3 class="my-3">Elemen &lt;div&gt;</h3>
    <p>
        Elemen <span class="mark">&lt;div&gt;</span> biasanya digunakan sebagai wadah bagi elemen HTML lain. <br><br>
        Elemen <span class="mark">&lt;div&gt;</span> tidak memiliki atribut bawaan, namun biasanya menggunakan atribut <span class="mark">style</span>, <span class="mark">class</span>, dan <span class="mark">id</span>
    </p>
    <p>
<span class="mark">&lt;div&gt;</span> bisa digunakan untuk mendesain block-level content dengan menggunakan CSS
    </p>
    <div class="code">
        &lt;div <span class="t-red">style</span>=<span class="t-green">"background-color:black;color:white;padding:20px;"</span>&gt;<br>
        &lt;h2&gt;Cirebon&lt;/h2&gt;<br>
        &lt;p&gt;Cirebon adalah kota udang&lt;/p&gt;<br>
        &lt;/div&gt;
    </div>
    <hr>
    <h3 class="my-3">Elemen &lt;span&gt;</h3>
    <p>
        Elemen <span class="mark">&lt;span&gt;</span> adalah pembungkus satu baris yang digunakan untuk menandai bagian teks atau bagian dari dokumen <br><br>
        Elemen <span class="mark">&lt;span&gt;</span> tidak memiliki atribut bawaan, namun biasanya menggunakan atribut <span class="mark">style</span>, <span class="mark">class</span>, dan <span class="mark">id</span>
    </p>
        <p>
<span class="mark">&lt;span&gt;</span> bisa digunakan untuk mendesain bagian dari teks dengan menggunakan CSS
    </p>
        <div class="code">
        &lt;p&gt;
            Bunga Mawar Berwarna &lt;span <span class="t-red">style</span>=<span class="t-green">"color:red;font-weight:bold;"</span>&gt;Merah&lt;span&gt;
        &lt;/p&gt;
    </div>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/html/favicon') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/html/class') }}" class="btn btn-success">Selanjutnya</a>
    </div>
</section>
@endsection
