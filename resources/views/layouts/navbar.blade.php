<nav class="navbar navbar-expand-lg px-5 sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ url('img/logo.png') }}" width="40" alt="">
        </a>
        {{-- <button class=" navbar-toggler inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions" aria-label="Toggle navigation">
            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
            </svg>
        </button> --}}
        <button style="border: none;" class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Menu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown fw-medium">
                        <a class="nav-link dropdown-toggle" href="#" id="listBelajarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Tutorial
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="listBelajarDropdown">
                            <div class="dd-item-list">
                                <li class="dropdown-item">
                                    <a href="{{ url('/belajar/html') }}">
                                        <span>Belajar HTML</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="{{ url('/belajar/css') }}">
                                        <span>Belajar CSS</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="{{ url('/belajar/php') }}">
                                        <span>Belajar PHP</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="{{ url('/belajar/js') }}">
                                        <span>Belajar JS</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="{{ url('/belajar/sql') }}">
                                        <span>Belajar SQL</span>
                                    </a>
                                </li>
                            </div>
                        </ul>
                    </li>
                    <li class="nav-item dropdown fw-medium">
                        <a class="nav-link dropdown-toggle" href="#" id="listAlurBelajarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Alur Belajar
                        </a>
                        <ul class="dropdown-menu __2022" aria-labelledby="listAlurBelajarDropdown">
                            <div class="dd-item-list">
                                <li class="dropdown-item">
                                    <a href="{{ url('/alur-belajar/front-end') }}">
                                        <img src="https://buildwithangga.com/themes/front/images/ic_appcode.svg" class="icon" alt="bwa-icon">
                                    </a>
                                    <a href="{{ url('/alur-belajar/front-end') }}">
                                        <h5 class="title">Front End</h5>
                                        <span class="subtitle">
                                        Rekomendasi oleh roadmap.sh
                                        </span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="{{ url('/alur-belajar/back-end') }}">
                                        <img src="https://buildwithangga.com/themes/front/images/ic_design.svg" class="icon" alt="bwa-icon">
                                    </a>
                                    <a href="{{ url('/alur-belajar/back-end') }}">
                                        <h5 class="title">Back End</h5>
                                        <span class="subtitle">
                                        Rekomendasi oleh roadmap.sh
                                        </span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="{{ url('/alur-belajar/ux-designer') }}">
                                        <img src="https://buildwithangga.com/themes/front/images/ic_flutter.svg" class="icon" alt="bwa-icon">
                                    </a>
                                    <a href="{{ url('/alur-belajar/ux-designer') }}">
                                        <h5 class="title">UX Designer</h5>
                                        <span class="subtitle">
                                        Rekomendasi oleh roadmap.sh
                                        </span>
                                    </a>
                                </li>
                            </div>
                        </ul>
                    </li>
                    <li class="nav-item dropdown fw-medium">
                        <a class="nav-link dropdown-toggle" href="#" id="listLatihanDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Latihan
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="listLatihanDropdown">
                            <div class="dd-item-list">
                                <li class="dropdown-item">
                                    <a href="{{ url('/latihan/html/basic') }}">
                                        <span>Latihan HTML</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="{{ url('/latihan/css') }}">
                                        <span>Latihan CSS</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="{{ url('/latihan/php') }}">
                                        <span>Latihan PHP</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="{{ url('/latihan/js') }}">
                                        <span>Latihan JS</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="{{ url('/latihan/sql') }}">
                                        <span>Latihan SQL</span>
                                    </a>
                                </li>
                            </div>
                        </ul>
                    </li>
                    <li class="nav-item dropdown fw-medium">
                        <a class="nav-link dropdown-toggle" href="#" id="listKelasMentorDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Kelas Mentor
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="listKelasMentorDropdown">
                            <div class="dd-item-list">
                                <li class="dropdown-item">
                                    <a href="{{ url('/kelas-mentor/html') }}">
                                        <span>Kelas HTML</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="{{ url('/kelas-mentor/css') }}">
                                        <span>Kelas CSS</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="{{ url('/kelas-mentor/php') }}">
                                        <span>Kelas PHP</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="{{ url('/kelas-mentor/js') }}">
                                        <span>Kelas JS</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="{{ url('/kelas-mentor/sql') }}">
                                        <span>Kelas SQL</span>
                                    </a>
                                </li>
                            </div>
                        </ul>
                    </li>
                </ul>
                <ul class="navbar-nav right-menu ms-auto">
                    <li class="nav-item">
                        <a href="{{ url('/community') }}" class="nav-link">Join Community</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
