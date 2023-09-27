@extends('layouts.main')
@section('content')
    <div class="container d-flex align-items-center vh-100">
        <div>
            {{-- Bagusan NeverGonnaGiveYouUp :/ --}}
            <h4 style="color: #008572;">#ProgrammerMuda</h4>
            <h1 class="fw-bolder display-3">Change your future with coding </h1>
            <p>
                Siapkan masa depan yang cerah <br>
                Modul ini menyediakan pembelajaran untuk kelas X - XII
            </p>
        </div>
        <div class="d-none d-lg-block">
            <img src="{{ url('img/uwong.png') }}" alt="" width="378px">
        </div>
    </div>
    <div class="d-flex align-items-center justify-content-center vh-100" style="background-color: #FFD6A5;">
        <div class="d-flex justify-content-center">
            <div class="d-grid text-center align-items-center">
                <h1 class="fw-bold display-4">HTML</h1>
                <h6 class="fw-bold">Bahasa untuk memuat halaman web</h6>
                <div class="buttons">
                    <a href="{{ url('/belajar/html') }}" class="button-1">Tutorial</a>
                    <a href="{{ url('/latihan/html/basic') }}" class="button-2">Latihan</a>
                    <a href="{{ url('/kelas-mentor/html') }}" class="button-3">Kelas Mentor</a>
                </div>
            </div>
            <div class="d-none d-md-grid align-items-center ms-5">
                <div class="kartu">
                    <h6>HTML Example</h6>
                    <div class="code">
                        &lt;!DOCTYPE html&gt; <br>
    &lt;html&gt;
    <div class="ps-4">

        &lt;head&gt;
        <div class="ps-4">

            &lt;title&gt;Judul Halaman&lt;/title&gt;
        </div>
        &lt;/head&gt;<br>
        &lt;body&gt;
        <div class="ps-4">

            &lt;h1&gt;Hello World&lt;/h1&gt;
        </div>
        &lt;/body&gt;
    </div>
    &lt;/html&gt;
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex align-items-center justify-content-center vh-100" style="background-color: #86DAFD;">
        <div class="d-flex justify-content-center">
            <div class="d-grid text-center align-items-center">
                <h1 class="fw-bold display-4">CSS</h1>
                <h6 class="fw-bold">Bahasa untuk memuat halaman web</h6>
                <div class="buttons">
                    <a href="{{ url('/belajar/css') }}" class="button-1">Tutorial</a>
                    <a href="{{ url('/latihan/css/basic') }}" class="button-2">Latihan</a>
                    <a href="{{ url('/kelas-mentor/css') }}" class="button-3">Kelas Mentor</a>
                </div>
            </div>
            <div class="d-none d-md-grid align-items-center ms-5">
                <div class="kartu">
                    <h6>CSS Example</h6>
                    <div class="code">
                        <span class="t-red">h1</span> {
            <div class="ps-4">

                <span class="t-red">color</span>: <span class="t-green">red</span>;<br>
                <span class="t-red">text-align</span>: <span class="t-green">center</span>;
            </div>
        }
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex align-items-center justify-content-center vh-100" style="background-color: #809BCE;">
        <div class="d-flex justify-content-center">
            <div class="d-grid text-center align-items-center">
                <h1 class="fw-bold display-4">PHP</h1>
                <h6 class="fw-bold">Bahasa untuk memuat halaman web</h6>
                <div class="buttons">
                    <a href="{{ url('/belajar/php') }}" class="button-1">Tutorial</a>
                    <a href="{{ url('/latihan/php/basic') }}" class="button-2">Latihan</a>
                    <a href="{{ url('/kelas-mentor/php') }}" class="button-3 bg-white text-dark">Kelas Mentor</a>
                </div>
            </div>
            <div class="d-none d-md-grid align-items-center ms-5">
                <div class="kartu">
                    <h6>PHP Example</h6>
                    <div class="code">
                        &lt;?php <br>
                        echo "Hello World!";<br>
        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex align-items-center justify-content-center vh-100" style="background-color: #FFED74;">
        <div class="d-flex justify-content-center">
            <div class="d-grid text-center align-items-center">
                <h1 class="fw-bold display-4">JavaScript</h1>
                <h6 class="fw-bold">Bahasa untuk memuat halaman web</h6>
                <div class="buttons">
                    <a href="{{ url('/belajar/js') }}" class="button-1">Tutorial</a>
                    <a href="{{ url('/latihan/js/basic') }}" class="button-2 bg-white text-dark">Latihan</a>
                    <a href="{{ url('/kelas-mentor/js') }}" class="button-3">Kelas Mentor</a>
                </div>
            </div>
            <div class="d-none d-md-grid align-items-center ms-5">
                <div class="kartu">
                    <h6>JavaScript Example</h6>
                    <div class="code">
                        &lt;button <span class="t-red">onclick</span>="<span class="t-green">myFunction()</span>"&gt;Click Me!&lt;/button&gt;<br><br>
                        &lt;script&gt;<br>
                        function <span class="t-blue">myFunction()</span> { 
                            <div class="ps-4">
                                let x = document.getElementById("demo");<br>
                                x.style.fontSize = "25px";<br>
                                x.style.color = "red"; 
                            </div>
                        } <br>
                        &lt;/script&gt;
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex align-items-center justify-content-center vh-100" style="background-color: #7EFDD0;">
        <div class="d-flex justify-content-center">
            <div class="d-grid text-center align-items-center">
                <h1 class="fw-bold display-4">SQL</h1>
                <h6 class="fw-bold">Bahasa untuk memuat halaman web</h6>
                <div class="buttons">
                    <a href="{{ url('/belajar/sql') }}" class="button-1 bg-white text-dark">Tutorial</a>
                    <a href="{{ url('/latihan/sql/basic') }}" class="button-2">Latihan</a>
                    <a href="{{ url('/kelas-mentor/sql') }}" class="button-3">Kelas Mentor</a>
                </div>
            </div>
            <div class="d-none d-md-grid align-items-center ms-5">
                <div class="kartu">
                    <h6>SQL Example</h6>
                    <div class="code">
                        SELECT * FROM siswa <br> 
                        WHERE kelas LIKE "X RPL 1";
                    </div>
                </div>
            </div>
        </div>
    </div>
	<div class="vh-100 container">
	   <h1 class="fw-bolder display-3 mt-5">Alur Belajar</h1>
       <h3 class="fw-bolder display-5">Raih Mimpimu</h3>
       <div>
           <div class="kartu" style="background-color: red">
                    
            </div>
       </div>
	</div>
    @include('layouts.footer')
@endsection
