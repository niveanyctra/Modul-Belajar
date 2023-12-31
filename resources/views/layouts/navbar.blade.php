<nav class="navbar navbar-expand-lg bg-light bg-opacity-75 sticky-top px-5">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ url('img/logo.png') }}" width="40" alt="">
        </a>

        <button style="border: none;" class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Menu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav" class="gap-3">
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
                            <div class="dd-item" style="min-width: max-content;">
                                <li class="dropdown-item">
                                    <a href="{{ url('/alur-belajar/back-end') }}">
                                        <img src="{{ asset('img/nav_backend.png') }}" class="icon" alt="backend">
                                    </a>
                                    <a href="{{ url('/alur-belajar/back-end') }}">
                                        <h5 class="title">Back End</h5>
                                        <span class="subtitle">
                                        Rekomendasi oleh roadmap.sh
                                        </span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="{{ url('/alur-belajar/front-end') }}">
                                        <img src="{{ asset('img/nav_frontend.png') }}" class="icon" alt="frontend">
                                    </a>
                                    <a href="{{ url('/alur-belajar/front-end') }}">
                                        <h5 class="title">Front End</h5>
                                        <span class="subtitle">
                                        Rekomendasi oleh roadmap.sh
                                        </span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="{{ url('/alur-belajar/ux-designer') }}">
                                        <img src="{{ asset('img/nav_ux.png') }}" class="icon" alt="ux">
                                    </a>
                                    <a href="{{ url('/alur-belajar/ux-designer') }}">
                                        <h5 class="title">UX Design</h5>
                                        <span class="subtitle">
                                        Rekomendasi oleh roadmap.sh
                                        </span>
                                    </a>
                                </li>
                            </div>
                        </ul>
                    </li>
                    {{-- <li class="nav-item dropdown fw-medium">
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
                                    <a href="{{ url('/latihan/css/basic') }}">
                                        <span>Latihan CSS</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="{{ url('/latihan/php/basic') }}">
                                        <span>Latihan PHP</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="{{ url('/latihan/js/basic') }}">
                                        <span>Latihan JS</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="{{ url('/latihan/sql/basic') }}">
                                        <span>Latihan SQL</span>
                                    </a>
                                </li>
                            </div>
                        </ul>
                    </li> --}}
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
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <button type="button" class="nav-link btn-secondary opacity-75" data-bs-toggle="modal" data-bs-target="#quickSearchModal">
                            <img class="search" src="https://buildwithangga.com/themes/front/images/ic_search.svg" alt="Searchbar">
                        </button>

                    </li>
                    <li class="nav-item">
                        <a target="_blank" href="https://discord.gg/VqPZbNKrzD" class="nav-link">Join Community</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
