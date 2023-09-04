@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.html')
<section class="main">
    <h1>HTML Block & Inline</h1>
    <a href="{{ url('/belajar/html/favicon') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/html/class') }}" class="btn btn-success">Selanjutnya</a>
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
        Dua block elemen yang umum digunakan adalah: <span class="bg-body-secondary text-danger">&lt;p&gt;</span> dan <span class="bg-body-secondary text-danger">&lt;div&gt;</span>. <br><br>
        Elemen <span class="bg-body-secondary text-danger">&lt;p&gt;</span> mendefinisikan paragaraf dalam dokumen HTML. <br><br>
        Elemen <span class="bg-body-secondary text-danger">&lt;div&gt;</span> mendefinisikan divisi atau bagian dalam dokumen HTML. <br>
        <div class="p-2" style="border: 1px solid black"> Elemen &lt;p&gt; adalah elemen block-level</div><br>
        <div class="p-2" style="border: 1px solid black"> Elemen &lt;div&gt; adalah elemen block-level</div><br>
        Berikut ini adalah elemen block-level dalam HTML: <br><br>
        <pre class="bg-dark text-light">

    &lt;adddress&gt;    &lt;article&gt;     &lt;aside&gt;          &lt;blockquote&gt;    &lt;canvas&gt;       &lt;dd&gt;
    &lt;div&gt;         &lt;dl&gt;          &lt;dt&gt;             &lt;fieldset&gt;      &lt;figcaption&gt;   &lt;figure&gt;
    &lt;footer&gt;      &lt;form&gt;        &lt;h1&gt;-&lt;h6&gt;        &lt;header&gt;        &lt;hr&gt;           &lt;li&gt;
    &lt;main&gt;        &lt;nav&gt;         &lt;noscript&gt;       &lt;ol&gt;            &lt;p&gt;            &lt;pre&gt;
    &lt;section&gt;     &lt;table&gt;       &lt;tfoot&gt;          &lt;ul&gt;            &lt;video&gt;
        </pre>
    </p>
    <hr>
    <h3 class="my-3">Inline Elemen</h3>
    <p>
        Elemen inline tidak dimulai pada baris baru. <br><br>
        Elemen inline hanya membutuhkan lebar sebanyak yang diperlukan. <br><br>
        Ini adalah <span class="p-1" style="border: 1px solid black">elemen &lt;span&gt; di dalam</span> paragraf. <br><br>
        Berikut ini adalah elemen inline dalam HTML: <br><br>
        <pre class="bg-dark text-light">

    &lt;a&gt;           &lt;abbr&gt;        &lt;acronym&gt;     &lt;b&gt;       &lt;bdo&gt;         &lt;big&gt;
    &lt;br&gt;          &lt;button&gt;      &lt;cite&gt;        &lt;code&gt;    &lt;dfn&gt;         &lt;em&gt;
    &lt;i&gt;           &lt;img&gt;         &lt;input&gt;       &lt;kbd&gt;     &lt;label&gt;       &lt;map&gt;
    &lt;object&gt;      &lt;output&gt;      &lt;q&gt;           &lt;samp&gt;    &lt;script&gt;      &lt;select&gt;
    &lt;small&gt;       &lt;span&gt;        &lt;strong&gt;      &lt;sub&gt;     &lt;sup&gt;         &lt;textarea&gt;
    &lt;time&gt;        &lt;tt&gt;          &lt;var&gt;
        </pre>
    </p>
    <div class="bg-warning p-4">
        <p><strong>Note :</strong> Sebuah elemen inline tidak bisa memuat elemen block-level</p>
    </div>
    <hr>
    <h3 class="my-3">Elemen &lt;div&gt;</h3>
    <p>
        Elemen <span class="bg-body-secondary text-danger">&lt;div&gt;</span> biasanya digunakan sebagai wadah bagi elemen HTML lain. <br><br>
        Elemen <span class="bg-body-secondary text-danger">&lt;div&gt;</span> tidak memiliki atribut bawaan, namun biasanya menggunakan atribut <span class="bg-body-secondary text-danger">style</span>, <span class="bg-body-secondary text-danger">class</span>, dan <span class="bg-body-secondary text-danger">id</span>
    </p>
    <a href="{{ url('/belajar/html/favicon') }}" class="btn btn-success">Sebelumnya</a>
    <a href="{{ url('/belajar/html/class') }}" class="btn btn-success">Selanjutnya</a>
</section>
@endsection
