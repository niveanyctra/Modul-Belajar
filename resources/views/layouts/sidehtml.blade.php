@extends('layouts.main')
@section('content')
<div class="row">
    <div class="container col-2">

        <nav class="container ps-3 sidenavbar sidenavbar-expand-lg navbar-light bs-side-navbar" style="background-color:rgb(147, 152, 161);">
            <a class="sidenavbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="side-list"><a href="{{url('/belajar/html/dasar')}}">HTML Dasar</a></div>
            <div class="side-list"><a href="{{url('/belajar/html/element')}}">HTML Element</a></div>
            <div class="side-list"><a href="{{url('/belajar/html/styling')}}">HTML Styling</a></div>
        </nav>
        </div>
    <div class="col-10">
        @yield('kelasHTML')
    </div>
</div>
@endsection
