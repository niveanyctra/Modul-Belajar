@extends('layouts.main')
@section('content')

@include('layouts.belajar.subnav')
@include('layouts.belajar.sidebar.html')
<section class="main">
    <h1>HTML Table Colspan & Rowspan</h1>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/html/table-padding-spacing') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/html/list') }}" class="btn btn-success">Selanjutnya</a>
    </div>
    <hr>
    <p>Tabel HTML dapat memiliki sel yang mencakup beberapa baris dan/atau kolom</p>
    <div class="row">
        <div class="col-2">

            <table class="table-bordered" cellpadding="10">
                <tr>
                    <td colspan="2">Nama</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
        </div>
        <div class="col-2">

            <table class="table-bordered" cellpadding="10">
                <tr>
                    <td colspan="3">September</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
        </div>
        <div class="col-2">

            <table class="table-bordered" cellpadding="10">
                <tr>
                    <td colspan="3">{{date('Y')}}</td>
                </tr>
                <tr>
                    <td ></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="2">Acara</td>
                </tr>
            </table>
        </div>
            <hr>
            <br>
            <h3 class="my-3">Colspan</h3>
            <p>Colspan memungkinkan kita untuk sebuah sel mencakup beberapa kolom</p>
            <div class="code">
        &lt;table&gt;
        <div class="ps-4">
            &lt;tr&gt;
            <div class="ps-4">
                &lt;th&gt;Nama&lt;/th&gt;<br>
                &lt;th <span class="t-red">colspan</span>=<span class="t-green">"2"</span>&gt;Kelas dan JK&lt;/th&gt;<br>
            </div>
            &lt;/tr&gt;
        </div>
        <div class="ps-4">
            &lt;tr&gt;
            <div class="ps-4">
                &lt;td&gt;Arip&lt;/td&gt;<br>
                &lt;td&gt;XII RPL 1&lt;/td&gt;<br>
                &lt;td&gt;Laki-laki&lt;/td&gt;<br>
            </div>
            &lt;/tr&gt;
        </div>
        &lt;/table&gt;
        </div>

        <table class="table-bordered mt-3" cellpadding="5" style="max-width: 300px">
            <tr>
                <th>Nama</th>
                <th colspan="2">Kelas dan JK</th>
            </tr>
            <tr>
                <td>Arip</td>
                <td>XII RPL 1</td>
                <td>Laki-laki</td>
            </tr>
        </table>

        <div class="note">
            <strong>Note :</strong> atribut <span class="mark">colspan</span> mewakili jumlah kolom yang tergabung
        </div>
    <hr>
    <h3 class="my-3">Rowspan</h3>
    <p>Rowspan memungkinkan kita untuk sebuah sel mencakup beberapa baris</p>
        <div class="code">
            &lt;table&gt;
            <div class="ps-4">
                &lt;tr&gt;
                <div class="ps-4">
                    &lt;th <span class="t-red">rowspan</span>=<span class="t-green">"2"</span>&gt;Nama dan Kelas&lt;/th&gt;<br>
                </div>
                &lt;/tr&gt;
            </div>
            <div class="ps-4">
                &lt;tr&gt;
                <div class="ps-4">
                    &lt;td&gt;Arip&lt;/td&gt;<br>
                    &lt;td&gt;XII RPL 1&lt;/td&gt;<br>
                </div>
                &lt;/tr&gt;
            </div>
            &lt;/table&gt;
        </div>
        <br>
        <table class="table-bordered mt-3" cellpadding="5" style="max-width: 300px">
            <tr>
                <th rowspan="2">Nama dan Kelas</th>
                <td>Arip</td>
            </tr>
            <tr>
                <td>XII RPL 1</td>
            </tr>
        </table>
        <div class="note">
            <strong>Note :</strong> atribut <span class="mark">rowspan</span> mewakili jumlah baris yang tergabung
        </div>
    </div>
    <div class="d-flex justify-content-between my-4">
        <a href="{{ url('/belajar/html/table-padding-spacing') }}" class="btn btn-success">Sebelumnya</a>
        <a href="{{ url('/belajar/html/list') }}" class="btn btn-success">Selanjutnya</a>
    </div>
</section>
@endsection
