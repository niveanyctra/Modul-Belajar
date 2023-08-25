<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>SMK NEGERI 1 CIREBON | PPLG - Menjadi Seorang Web Developer</title>
    <link rel="icon" href="{{ url('img/logo.png') }}">

    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <style>
    .dropdown-menu .dropdown-item {
        align-items: center;
        display: flex;
        gap: 14px;
        min-width: 300px;
        /* padding: 53px 33px 52px 34px!important; */
        min-width: -webkit-max-content;
        min-width: -moz-max-content;
        min-width: max-content;
        position: relative;
        transition: all .3s ease-in-out;
        white-space: normal!important;
        width: -webkit-max-content;
        width: -moz-max-content;
        width: max-content;
    }
    .dropdown-menu[aria-labelledby=listAlurBelajarDropdown] .dd-item-list {
    display: flex;
    flex-direction: column;
    row-gap: 24px;
}

    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg  px-5">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{ url('img/logo.png') }}" width="40" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item d-flex flex-column justify-content-start align-items-start dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="listKelasDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Kelas
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="listKelasDropdown">
                            <li class="dropdown-item">
                                <div class="row row-cols-lg-3 row-cols-2 dd-item-list">
                                    <div class="col">
                                        <a href="https://buildwithangga.com/belajar/uiux-design">
                                            <p>UI/UX Design</p>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a href="https://buildwithangga.com/belajar/uiux-design">
                                            <p>UI/UX Design</p>
                                        </a>
                                        <a href="https://buildwithangga.com/belajar/uiux-design">
                                            <p>UI/UX Design</p>
                                        </a>
                                        <a href="https://buildwithangga.com/belajar/uiux-design">
                                            <p>UI/UX Design</p>
                                        </a>
                                        <a href="https://buildwithangga.com/belajar/uiux-design">
                                            <p>UI/UX Design</p>
                                        </a>
                                        <a href="https://buildwithangga.com/belajar/uiux-design">
                                            <p>UI/UX Design</p>
                                        </a>
                                        <a href="https://buildwithangga.com/belajar/uiux-design">
                                            <p>UI/UX Design</p>
                                        </a>
                                        <a href="https://buildwithangga.com/belajar/uiux-design">
                                            <p>UI/UX Design</p>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a href="https://buildwithangga.com/belajar/uiux-design">
                                            <p>UI/UX Design</p>
                                        </a>
                                        <a href="https://buildwithangga.com/belajar/uiux-design">
                                            <p>UI/UX Design</p>
                                        </a>
                                        <a href="https://buildwithangga.com/belajar/uiux-design">
                                            <p>UI/UX Design</p>
                                        </a>
                                        <a href="https://buildwithangga.com/belajar/uiux-design">
                                            <p>UI/UX Design</p>
                                        </a>
                                        <a href="https://buildwithangga.com/belajar/uiux-design">
                                            <p>UI/UX Design</p>
                                        </a>
                                        <a href="https://buildwithangga.com/belajar/uiux-design">
                                            <p>UI/UX Design</p>
                                        </a>
                                        <a href="https://buildwithangga.com/belajar/uiux-design">
                                            <p>UI/UX Design</p>
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
                            <a href="https://buildwithangga.com/career-path/full-stack-website-developer">
                            <img src="https://buildwithangga.com/themes/front/images/ic_appcode.svg" class="icon" alt="bwa-icon">
                            </a>
                            <a href="https://buildwithangga.com/career-path/full-stack-website-developer">
                            <h3 class="title">Full-Stack Website Developer</h3>
                            <p class="subtitle">
                            Rekomendasi oleh mentor expert
                            </p>
                            </a>
                            </li>
                            <li class="dropdown-item">
                            <a href="https://buildwithangga.com/career-path/become-user-interface-designer">
                            <img src="https://buildwithangga.com/themes/front/images/ic_design.svg" class="icon" alt="bwa-icon">
                            </a>
                            <a href="https://buildwithangga.com/career-path/become-user-interface-designer">
                            <h3 class="title">UI/UX Designer</h3>
                            <p class="subtitle">
                            Rekomendasi oleh mentor expert
                            </p>
                            </a>
                            </li>
                            <li class="dropdown-item">
                            <a href="https://buildwithangga.com/career-path/become-flutter-apps-developer">
                            <img src="https://buildwithangga.com/themes/front/images/ic_flutter.svg" class="icon" alt="bwa-icon">
                            </a>
                            <a href="https://buildwithangga.com/career-path/become-flutter-apps-developer">
                            <h3 class="title">Mobile App Developer</h3>
                            <p class="subtitle">
                            Rekomendasi oleh mentor expert
                            </p>
                            </a>
                            </li>
                            <li class="dropdown-item">
                            <a href="https://buildwithangga.com/career-path/product-manager">
                            <img src="https://buildwithangga.com/themes/front/images/ic_flag.svg" class="icon" alt="bwa-icon">
                            </a>
                            <a href="https://buildwithangga.com/career-path/product-manager">
                            <h3 class="title">Product Manager</h3>
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
                                        <a href="https://buildwithangga.com/belajar/uiux-design">
                                            <p>UI/UX Design</p>
                                        </a>
                                        <a href="https://buildwithangga.com/belajar/uiux-design">
                                            <p>UI/UX Design</p>
                                        </a>
                                        <a href="https://buildwithangga.com/belajar/uiux-design">
                                            <p>UI/UX Design</p>
                                        </a>
                                        <a href="https://buildwithangga.com/belajar/uiux-design">
                                            <p>UI/UX Design</p>
                                        </a>
                                        <a href="https://buildwithangga.com/belajar/uiux-design">
                                            <p>UI/UX Design</p>
                                        </a>
                                        <a href="https://buildwithangga.com/belajar/uiux-design">
                                            <p>UI/UX Design</p>
                                        </a>
                                        <a href="https://buildwithangga.com/belajar/uiux-design">
                                            <p>UI/UX Design</p>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a href="https://buildwithangga.com/belajar/uiux-design">
                                            <p>UI/UX Design</p>
                                        </a>
                                        <a href="https://buildwithangga.com/belajar/uiux-design">
                                            <p>UI/UX Design</p>
                                        </a>
                                        <a href="https://buildwithangga.com/belajar/uiux-design">
                                            <p>UI/UX Design</p>
                                        </a>
                                        <a href="https://buildwithangga.com/belajar/uiux-design">
                                            <p>UI/UX Design</p>
                                        </a>
                                        <a href="https://buildwithangga.com/belajar/uiux-design">
                                            <p>UI/UX Design</p>
                                        </a>
                                        <a href="https://buildwithangga.com/belajar/uiux-design">
                                            <p>UI/UX Design</p>
                                        </a>
                                        <a href="https://buildwithangga.com/belajar/uiux-design">
                                            <p>UI/UX Design</p>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a href="https://buildwithangga.com/belajar/uiux-design">
                                            <p>UI/UX Design</p>
                                        </a>
                                        <a href="https://buildwithangga.com/belajar/uiux-design">
                                            <p>UI/UX Design</p>
                                        </a>
                                        <a href="https://buildwithangga.com/belajar/uiux-design">
                                            <p>UI/UX Design</p>
                                        </a>
                                        <a href="https://buildwithangga.com/belajar/uiux-design">
                                            <p>UI/UX Design</p>
                                        </a>
                                        <a href="https://buildwithangga.com/belajar/uiux-design">
                                            <p>UI/UX Design</p>
                                        </a>
                                        <a href="https://buildwithangga.com/belajar/uiux-design">
                                            <p>UI/UX Design</p>
                                        </a>
                                        <a href="https://buildwithangga.com/belajar/uiux-design">
                                            <p>UI/UX Design</p>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Post</a>
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
    <div class="px-5">
        <a href="{{ url('html/try') }}" target="_blank" rel="noopener noreferrer">coba</a>
    </div>
</body>

</html>
