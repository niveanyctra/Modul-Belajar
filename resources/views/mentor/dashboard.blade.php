<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard mentor') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg py-5">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="h2 fw-bolder">Selamat datang <span style="color: tomato">{{$user->name}}</span>!</h1>
                    {{ __("Selamat datang di dashboard kelas mentor mu!") }}
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>{{ $posts->count() }}</h3>
                            <p>Total Kelas</p>
                        </div>
                        <div class="icon">
                            <i class="fa-solid fa-chalkboard-user"></i>
                        </div>
                        <a href="{{ url('post') }}" class="small-box-footer">
                            More info <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box" style="background-color: tomato">
                        <div class="inner">
                            <h3>{{ $postHtml->count() }}</h3>
                            <p>Kelas HTML</p>
                        </div>
                        <div class="icon">
                            <i class="fa-brands fa-html5"></i>
                        </div>
                        <div class="small-box-footer" style="height: 30px"></div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{ $postCss->count() }}</h3>
                            <p>Kelas CSS</p>
                        </div>
                        <div class="icon">
                            <i class="fa-brands fa-css3-alt"></i>
                        </div>
                        <div class="small-box-footer" style="height: 30px"></div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box" style="background-color: rgb(147, 0, 147)">
                        <div class="inner">
                            <h3>{{ $postPhp->count() }}</h3>
                            <p>Kelas PHP</p>
                        </div>
                        <div class="icon">
                            <i class="fa-brands fa-php"></i>
                        </div>
                        <div class="small-box-footer" style="height: 30px"></div>
                    </div>
                </div>
                <div class="col-lg-6 col-6">
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>{{ $postJs->count() }}</h3>
                            <p>Kelas JS</p>
                        </div>
                        <div class="icon">
                            <i class="fa-brands fa-square-js"></i>
                        </div>
                        <div class="small-box-footer" style="height: 30px"></div>
                    </div>
                </div>
                <div class="col-lg-6 col-6">
                    <div class="small-box" style="background-color: forestgreen">
                        <div class="inner">
                            <h3>{{ $postSql->count() }}</h3>
                            <p>Kelas SQL</p>
                        </div>
                        <div class="icon">
                            <i class="fa-solid fa-database"></i>
                        </div>
                        <div class="small-box-footer" style="height: 30px"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
</x-app-layout>
