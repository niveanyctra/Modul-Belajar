<nav class="navbar navbar-expand-lg  px-5">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">
            <img src="{{ url('img/logo.png') }}" width="40" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav">
                <li class="nav-item d-flex flex-column justify-content-start align-items-start dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="listKelasDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Tutorial
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="listKelasDropdown">
                        <li class="dropdown-item">
                            <div class="row row-cols-lg-3 row-cols-2 dd-item-list">
                                <div class="col">
                                    <a href="{{ url('/belajar/html') }}">
                                        <p>Belajar HTML</p>
                                    </a>
                                    <a href="{{ url('/belajar/css') }}">
                                        <p>Belajar CSS</p>
                                    </a>
                                    <a href="{{ url('/belajar/php') }}">
                                        <p>Belajar PHP</p>
                                    </a>
                                    <a href="{{ url('/belajar/js') }}">
                                        <p>Belajar JS</p>
                                    </a>
                                    <a href="{{ url('/belajar/sql') }}">
                                        <p>Belajar SQL</p>
                                    </a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="listKelasDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Alur Belajar
                    </a>
                    <ul class="dropdown-menu __2022" aria-labelledby="listAlurBelajarDropdown">
                        <div class="dd-item-list">
                        <li class="dropdown-item">
                        <a href="{{ url('/alur-belajar/front-end') }}">
                        <img src="https://buildwithangga.com/themes/front/images/ic_appcode.svg" class="icon" alt="bwa-icon">
                        </a>
                        <a href="{{ url('/alur-belajar/front-end') }}">
                        <h3 class="title">Front End</h3>
                        <p class="subtitle">
                        Rekomendasi oleh mentor expert
                        </p>
                        </a>
                        </li>
                        <li class="dropdown-item">
                        <a href="{{ url('/alur-belajar/back-end') }}">
                        <img src="https://buildwithangga.com/themes/front/images/ic_design.svg" class="icon" alt="bwa-icon">
                        </a>
                        <a href="{{ url('/alur-belajar/back-end') }}">
                        <h3 class="title">Back End</h3>
                        <p class="subtitle">
                        Rekomendasi oleh mentor expert
                        </p>
                        </a>
                        </li>
                        <li class="dropdown-item">
                        <a href="{{ url('/alur-belajar/mobile-app-dev') }}">
                        <img src="https://buildwithangga.com/themes/front/images/ic_flutter.svg" class="icon" alt="bwa-icon">
                        </a>
                        <a href="{{ url('/alur-belajar/mobile-app-dev') }}">
                        <h3 class="title">Mobile App Developer</h3>
                        <p class="subtitle">
                        Rekomendasi oleh mentor expert
                        </p>
                        </a>
                        </li>
                        </div>
                        </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="listKelasDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Latihan
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="listKelasDropdown">
                        <li class="dropdown-item">
                            <div class="row row-cols-lg-3 row-cols-2 dd-item-list">
                                <div class="col">
                                    <a href="{{ url('/latihan/html') }}">
                                        <p>Latihan HTML</p>
                                    </a>
                                    <a href="{{ url('/latihan/css') }}">
                                        <p>Latihan CSS</p>
                                    </a>
                                    <a href="{{ url('/latihan/php') }}">
                                        <p>Latihan PHP</p>
                                    </a>
                                    <a href="{{ url('/latihan/js') }}">
                                        <p>Latihan JS</p>
                                    </a>
                                    <a href="{{ url('/latihan/sql') }}">
                                        <p>Latihan SQL</p>
                                    </a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Kelas">Kelas</a>
                </li>
            </ul>
            <ul class="navbar-nav right-menu ms-auto">
                <li class="nav-item">
                    <a href="#" class="nav-link">Join Community</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
