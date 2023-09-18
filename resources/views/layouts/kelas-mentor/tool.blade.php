<div id="tool" style="display: none" class="container-fluid">
    <h5>Tools Pendukung</h5>
    <p>Lengkapi Sebelum Belajar</p>
    <div class="row content mt-3 gy-4">
        @if (str_contains($posts->tool, 'vscode'))
            <div class="col-lg-3 col-12">
                <div class="item-review position-relative d-flex flex-row flex-md-column align-items-center align-items-md-start gap-3 m-0">
                    <a href="https://code.visualstudio.com/" target="_blank">
                    <img src="{{ asset('img/tools/logo_vs_code.png') }}" class="photo" alt="logo">
                    </a>
                    <a href="https://code.visualstudio.com/" target="_blank" class="text-start my-0 my-md-4 w-100">
                    <h2 class="name">
                    Visual Studio Code
                    </h2>
                    <p class="role lh-base mb-0">
                    Software Gratis
                    </p>
                    </a>
                    <a class="btn btn-secondary d-none d-md-block mt-3 w-100 d-none d-md-block" href="https://code.visualstudio.com/" target="_blank">Download Now</a>
                </div>
            </div>
        @endif
        @if (str_contains($posts->tool, 'html'))
            <div class="col-lg-3 col-12">
                <div class="item-review position-relative d-flex flex-row flex-md-column align-items-center align-items-md-start gap-3 m-0">
                    <a href="https://id.wikipedia.org/wiki/HTML" target="_blank">
                    <img src="{{ asset('img/tools/logo_html.png') }}" class="photo" alt="logo">
                    </a>
                    <a href="https://id.wikipedia.org/wiki/HTML" target="_blank" class="text-start my-0 my-md-4 w-100">
                    <h2 class="name">
                    HTML
                    </h2>
                    <p class="role lh-base mb-0">
                    Software Gratis
                    </p>
                    </a>
                    <a class="btn btn-secondary d-none d-md-block mt-3 w-100 d-none d-md-block" href="https://id.wikipedia.org/wiki/HTML" target="_blank">Download Now</a>
                </div>
            </div>
        @endif
        @if (str_contains($posts->tool, 'css'))
            <div class="col-lg-3 col-12">
                <div class="item-review position-relative d-flex flex-row flex-md-column align-items-center align-items-md-start gap-3 m-0">
                    <a href="https://id.wikipedia.org/wiki/CSS" target="_blank">
                    <img src="{{ asset('img/tools/logo_css.png') }}" class="photo" alt="logo">
                    </a>
                    <a href="https://id.wikipedia.org/wiki/CSS" target="_blank" class="text-start my-0 my-md-4 w-100">
                    <h2 class="name">
                    CSS
                    </h2>
                    <p class="role lh-base mb-0">
                    Software Gratis
                    </p>
                    </a>
                    <a class="btn btn-secondary d-none d-md-block mt-3 w-100 d-none d-md-block" href="https://id.wikipedia.org/wiki/CSS" target="_blank">Download Now</a>
                </div>
            </div>
        @endif
        @if (str_contains($posts->tool, 'react'))
            <div class="col-lg-3 col-12">
                <div class="item-review position-relative d-flex flex-row flex-md-column align-items-center align-items-md-start gap-3 m-0">
                    <a href="https://react.dev/" target="_blank">
                    <img src="{{ asset('img/tools/logo_react_js.png') }}" class="photo" alt="logo">
                    </a>
                    <a href="https://react.dev/" target="_blank" class="text-start my-0 my-md-4 w-100">
                    <h2 class="name">
                    React JS
                    </h2>
                    <p class="role lh-base mb-0">
                    Software Gratis
                    </p>
                    </a>
                    <a class="btn btn-secondary d-none d-md-block mt-3 w-100 d-none d-md-block" href="https://react.dev/" target="_blank">Download Now</a>
                </div>
            </div>
        @endif
        @if (str_contains($posts->tool, 'nodejs'))
            <div class="col-lg-3 col-12">
                <div class="item-review position-relative d-flex flex-row flex-md-column align-items-center align-items-md-start gap-3 m-0">
                    <a href="https://nodejs.org/id" target="_blank">
                    <img src="{{ asset('img/tools/logo_node_js.png') }}" class="photo" alt="logo">
                    </a>
                    <a href="https://nodejs.org/id" target="_blank" class="text-start my-0 my-md-4 w-100">
                    <h2 class="name">
                    Node JS
                    </h2>
                    <p class="role lh-base mb-0">
                    Software Gratis
                    </p>
                    </a>
                    <a class="btn btn-secondary d-none d-md-block mt-3 w-100 d-none d-md-block" href="https://nodejs.org/id" target="_blank">Download Now</a>
                </div>
            </div>
        @endif
        @if (str_contains($posts->tool, 'bootstrap'))
            <div class="col-lg-3 col-12">
                <div class="item-review position-relative d-flex flex-row flex-md-column align-items-center align-items-md-start gap-3 m-0">
                    <a href="https://getbootstrap.com/" target="_blank">
                    <img src="{{ asset('img/tools/logo_bootstrap.png') }}" class="photo" alt="logo">
                    </a>
                    <a href="https://getbootstrap.com/" target="_blank" class="text-start my-0 my-md-4 w-100">
                    <h2 class="name">
                    Bootstrap CSS
                    </h2>
                    <p class="role lh-base mb-0">
                    Software Gratis
                    </p>
                    </a>
                    <a class="btn btn-secondary d-none d-md-block mt-3 w-100 d-none d-md-block" href="https://getbootstrap.com/" target="_blank">Download Now</a>
                </div>
            </div>
        @endif
        @if (str_contains($posts->tool, 'laravel'))
            <div class="col-lg-3 col-12">
                <div class="item-review position-relative d-flex flex-row flex-md-column align-items-center align-items-md-start gap-3 m-0">
                    <a href="https://laravel.com/" target="_blank">
                    <img src="{{ asset('img/tools/logo_laravel.png') }}" class="photo" alt="logo">
                    </a>
                    <a href="https://laravel.com/" target="_blank" class="text-start my-0 my-md-4 w-100">
                    <h2 class="name">
                    Laravel
                    </h2>
                    <p class="role lh-base mb-0">
                    Software Gratis
                    </p>
                    </a>
                    <a class="btn btn-secondary d-none d-md-block mt-3 w-100 d-none d-md-block" href="https://laravel.com/" target="_blank">Download Now</a>
                </div>
            </div>
        @endif
        @if (str_contains($posts->tool, 'tailwind'))
            <div class="col-lg-3 col-12">
                <div class="item-review position-relative d-flex flex-row flex-md-column align-items-center align-items-md-start gap-3 m-0">
                    <a href="https://tailwindcss.com/" target="_blank">
                    <img src="{{ asset('img/tools/logo_tailwind.png') }}" class="photo" alt="logo">
                    </a>
                    <a href="https://tailwindcss.com/" target="_blank" class="text-start my-0 my-md-4 w-100">
                    <h2 class="name">
                    Tailwind CSS
                    </h2>
                    <p class="role lh-base mb-0">
                    Software Gratis
                    </p>
                    </a>
                    <a class="btn btn-secondary d-none d-md-block mt-3 w-100 d-none d-md-block" href="https://tailwindcss.com/" target="_blank">Download Now</a>
                </div>
            </div>
        @endif
        @if (str_contains($posts->tool, 'github'))
            <div class="col-lg-3 col-12">
                <div class="item-review position-relative d-flex flex-row flex-md-column align-items-center align-items-md-start gap-3 m-0">
                    <a href="https://github.com/" target="_blank">
                    <img src="{{ asset('img/tools/logo_github.png') }}" class="photo" alt="logo">
                    </a>
                    <a href="https://github.com/" target="_blank" class="text-start my-0 my-md-4 w-100">
                    <h2 class="name">
                    Github
                    </h2>
                    <p class="role lh-base mb-0">
                    Software Gratis
                    </p>
                    </a>
                    <a class="btn btn-secondary d-none d-md-block mt-3 w-100 d-none d-md-block" href="https://github.com/" target="_blank">Download Now</a>
                </div>
            </div>
        @endif
        @if (str_contains($posts->tool, 'xampp'))
            <div class="col-lg-3 col-12">
                <div class="item-review position-relative d-flex flex-row flex-md-column align-items-center align-items-md-start gap-3 m-0">
                    <a href="https://www.apachefriends.org/index.html" target="_blank">
                    <img src="{{ asset('img/tools/logo_xampp.png') }}" class="photo" alt="logo">
                    </a>
                    <a href="https://www.apachefriends.org/index.html" target="_blank" class="text-start my-0 my-md-4 w-100">
                    <h2 class="name">
                    XAMPP
                    </h2>
                    <p class="role lh-base mb-0">
                    Software Gratis
                    </p>
                    </a>
                    <a class="btn btn-secondary d-none d-md-block mt-3 w-100 d-none d-md-block" href="https://www.apachefriends.org/index.html" target="_blank">Download Now</a>
                </div>
            </div>
        @endif
        @if (str_contains($posts->tool, 'figma'))
            <div class="col-lg-3 col-12">
                <div class="item-review position-relative d-flex flex-row flex-md-column align-items-center align-items-md-start gap-3 m-0">
                    <a href="https://www.figma.com" target="_blank">
                    <img src="{{ asset('img/tools/logo_figma.png') }}" class="photo" alt="logo">
                    </a>
                    <a href="https://www.figma.com" target="_blank" class="text-start my-0 my-md-4 w-100">
                    <h2 class="name">
                    Figma
                    </h2>
                    <p class="role lh-base mb-0">
                    Software Gratis
                    </p>
                    </a>
                    <a class="btn btn-secondary d-none d-md-block mt-3 w-100 d-none d-md-block" href="https://www.figma.com" target="_blank">Download Now</a>
                </div>
            </div>
        @endif
        @if (str_contains($posts->tool, 'js'))
            <div class="col-lg-3 col-12">
                <div class="item-review position-relative d-flex flex-row flex-md-column align-items-center align-items-md-start gap-3 m-0">
                    <a href="https://www.javascript.com/" target="_blank">
                    <img src="{{ asset('img/tools/logo_javascript.png') }}" class="photo" alt="logo">
                    </a>
                    <a href="https://www.javascript.com/" target="_blank" class="text-start my-0 my-md-4 w-100">
                    <h2 class="name">
                    JavaScript
                    </h2>
                    <p class="role lh-base mb-0">
                    Software Gratis
                    </p>
                    </a>
                    <a class="btn btn-secondary d-none d-md-block mt-3 w-100 d-none d-md-block" href="https://www.javascript.com/" target="_blank">Download Now</a>
                </div>
            </div>
        @endif
        @if (str_contains($posts->tool, 'php'))
            <div class="col-lg-3 col-12">
                <div class="item-review position-relative d-flex flex-row flex-md-column align-items-center align-items-md-start gap-3 m-0">
                    <a href="https://www.php.net/" target="_blank">
                    <img src="{{ asset('img/tools/logo_php.png') }}" class="photo" alt="logo">
                    </a>
                    <a href="https://www.php.net/" target="_blank" class="text-start my-0 my-md-4 w-100">
                    <h2 class="name">
                    PHP
                    </h2>
                    <p class="role lh-base mb-0">
                    Software Gratis
                    </p>
                    </a>
                    <a class="btn btn-secondary d-none d-md-block mt-3 w-100 d-none d-md-block" href="https://www.php.net/" target="_blank">Download Now</a>
                </div>
            </div>
        @endif
        @if (str_contains($posts->tool, 'browser'))
            <div class="col-lg-3 col-12">
                <div class="item-review position-relative d-flex flex-row flex-md-column align-items-center align-items-md-start gap-3 m-0">
                    <a href="https://www.google.com/intl/id/chrome/browser-tools/" target="_blank">
                    <img src="{{ asset('img/tools/logo_google.png') }}" class="photo" alt="logo">
                    </a>
                    <a href="https://www.google.com/intl/id/chrome/browser-tools/" target="_blank" class="text-start my-0 my-md-4 w-100">
                    <h2 class="name">
                    Google Chrome
                    </h2>
                    <p class="role lh-base mb-0">
                    Software Gratis
                    </p>
                    </a>
                    <a class="btn btn-secondary d-none d-md-block mt-3 w-100 d-none d-md-block" href="https://www.google.com/intl/id/chrome/browser-tools/" target="_blank">Download Now</a>
                </div>
            </div>
        @endif
    </div>
</div>
