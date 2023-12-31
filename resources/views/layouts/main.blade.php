<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>SMK NEGERI 1 CIREBON | RPL - Change your future with coding 💻</title>
    <link rel="icon" href="{{ asset('img/logo.png') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!-- NonCDN bootstrap -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/docs.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/nd.css') }}" rel="stylesheet">
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js" integrity="sha512-uKQ39gEGiyUJl4AI6L+ekBdGKpGw4xJ55+xyJG7YFlJokPNYegn9KwQ3P8A7aFQAUtUsAQHep+d/lrGqrbPIDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- CDN bootstrap -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet"> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script> -->

    <!-- Overlay Scrollbars -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/overlayscrollbars/2.3.0/styles/overlayscrollbars.min.css" integrity="sha512-MMVRaRR0pB97w1tzt6+29McVwX+YsQcSlIehGCGqFsC+KisK3d2F/xRxFaGMN7126EeC3A6iYRhdkr5nY8fz3Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/overlayscrollbars/2.3.0/browser/overlayscrollbars.browser.es6.min.js" integrity="sha512-tu2VesH7qQi/IX4MN47Zw0SCia4hgBgu4xY/fP/gV2XcqdZsIh1B5wbSy4Mk5AhkkfTj/XMDQt86wzsZIsxPSA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://kit.fontawesome.com/4f5ac69095.js" crossorigin="anonymous"></script>
</head>

<body style="background-color: #f8f9fa">
    @include('layouts.navbar')
    <div style="background-color: #f8f9fa">
        @yield('content')
    </div>
    <div class="modal fade" id="quickSearchModal" tabindex="-1" aria-labelledby="quickSearchModalLabel" aria-hidden="true">
        <button type="button" class="btn-close position-absolute" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content overflow-hidden position-relative">
                <div class="modal-header">
                    <form autocomplete="off" class="position-relative quick-search-modal w-100" method="GET" action="https://buildwithangga.com/search" id="quickSearchForm">
                        <div class="position-relative">
                            <span class="twitter-typeahead" style="position: relative; display: inline-block;">
                                <input type="text" value="" minlength="2" class="navbar-input-column form-control tt-hint" readonly="" autocomplete="off" spellcheck="false" tabindex="-1" dir="ltr" style="position: absolute; top: 0px; left: 0px; border-color: transparent; box-shadow: none; opacity: 1; background: none 0px 0px / auto repeat scroll padding-box border-box rgba(0, 0, 0, 0);">
                                <input type="text" value="" name="keyword" minlength="2" placeholder="Cari kelas, cth: Web development, Freelancer, App development" class="navbar-input-column form-control tt-input" id="inputSearchModule3" autocomplete="off" spellcheck="false" dir="auto" style="position: relative; vertical-align: top; background-color: transparent;">
                                <pre aria-hidden="true" style="position: absolute; visibility: hidden; white-space: pre; font-family: Poppins, sans-serif; font-size: 16px; font-style: normal; font-variant: normal; font-weight: 500; word-spacing: 0px; letter-spacing: 0px; text-indent: 0px; text-rendering: auto; text-transform: none;"></pre>
                                <div class="tt-menu tt-open tt-empty" style="position: absolute; top: 60px; left: 0px; z-index: 100; display: none;">
                                    <div class="tt-dataset tt-dataset-courses"></div>
                                </div>
                            </span>
                            <svg width="24" height="24" viewBox="0 0 24 24" class="ic_search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10 4C6.68629 4 4 6.68629 4 10C4 13.3137 6.68629 16 10 16C13.3137 16 16 13.3137 16 10C16 6.68629 13.3137 4 10 4ZM2 10C2 5.58172 5.58172 2 10 2C14.4183 2 18 5.58172 18 10C18 14.4183 14.4183 18 10 18C5.58172 18 2 14.4183 2 10Z" fill="currentColor"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.2929 14.2929C14.6834 13.9024 15.3166 13.9024 15.7071 14.2929L21.7071 20.2929C22.0976 20.6834 22.0976 21.3166 21.7071 21.7071C21.3166 22.0976 20.6834 22.0976 20.2929 21.7071L14.2929 15.7071C13.9024 15.3166 13.9024 14.6834 14.2929 14.2929Z" fill="currentColor"></path>
                            </svg>
                            <a href="javascript:void(0);" class="clear-field-x d-none" id="clear_field">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M18 6L6 18" stroke="#999AA4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M6 6L18 18" stroke="#999AA4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </a>
                        </div>
                    </form>
                </div>
                <div class="modal-body" style="height: 60vh;">

                </div>
            </div>
        </div>
    </div>
    @yield('script')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js"></script>
    <script src="https://buildwithangga.com/scripts/keypress/keypress-2.1.5.min.js"></script>
    <script type="text/javascript" src="{{ asset('assets/js/quickSearchModal.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/loadMoreSearchResult.js') }}"></script>
    <script>
        var courseConfig = new Bloodhound({
        datumTokenizer: Bloodhound.tokenizers.whitespace('q'),
        queryTokenizer: Bloodhound.tokenizers.whitespace,
        local: courseConfig,
        remote: {
            url: "/autocomplete?q=%QUERY%",
            wildcard: '%QUERY%'
        }
    });

    var initialConfig = {
        hint: true,
        highlight: true,
        minLength: 1,
        cursor: 'Typeahead-cursor'
    }

    var dataConfig = {
        source: courseConfig.ttAdapter(),
        limit: Infinity,
        display: 'nama_kelas',
        name: 'courses',
        templates: {
            empty: [
                '<div class="course-content"><div class="course-title">Data kelas tidak ditemukan.</div></div>'
            ],
            pending: function(data) {
                return (
                    '<div class="course-content">' +
                    '<div class="thumbnail skeleton">' +
                    '</div>' +
                    '<div>' +
                    '<div class="course-title skeleton">' +
                    '</div>' +
                    '<div class="price skeleton">' +
                    '<div class="disc-price blink_me">' +
                    '</div>' +
                    '<div class="promo-price">' +
                    '</div>' +
                    '</div>' +
                    '</div>' +
                    '</div>'
                );
            },

            suggestion: function(data) {
                var thumbnail = (data.id_yt);

                return (`<div class="course-content tt-suggestion tt-selectable">
                    <div class="thumbnail">
                        <img src="https://i.ytimg.com/vi/${thumbnail}/hq720.jpg" class="img-fluid" alt="thumbnail"/>
                    </div>
                    <div>
                        <div class="course-title">${data.title}</div>
                        ${data.users.name}
                    </div>
                    </div>`);

            },
            footer: `<p class="text-center text-xs text-grey m-0">
                        End of result
                    </p>`,

        }
    }

    function setUpState(state) {
        state.typeahead(initialConfig, dataConfig)
            .bind('typeahead:beforeclose',
                function(e) {
                    // keep menu open if input element is still focused
                    if (!$(e.target).is(':focus')) {
                        return false;
                    }
                })
            .bind('typeahead:selected', function(e, data) {
                var slug = data.slug;
                var category = data.category;
                var url1 = '/kelas-mentor/:category/:slug?main_leads=searchsuggestion';
                url1 = url1.replace(':slug', slug);
                var url2 = url1;
                url2 = url2.replace(':category', category);
                window.location.href = url2;
            })

        state.on("click", function() {
            ev = $.Event("keydown")
            ev.keyCode = ev.which = 40
            // uncomment this function when you set course name to search menu
            // $(this).trigger(ev)
            return true
        })
    }

    $(setUpState($("#inputSearchModule3")));
    $('.tt-menu').css('top', '60px');

    </script>

    <script id="rendered-js">
        $(function() {
            $('.toggle-menu').click(function(e) {
                e.preventDefault();
                $('.sidebar').toggleClass('toggled');
            });
        });
    </script>
    <script>
        // Sidebar save scroll
        let sidebar = document.querySelector(".sidebar");
        let topSidebar = sessionStorage.getItem("sidebar-scroll");
        if (topSidebar !== null) {
            sidebar.scrollTop = parseInt(topSidebar, 10);
        }


        window.addEventListener("beforeunload", () => {
            sessionStorage.setItem("sidebar-scroll", sidebar.scrollTop);
            sessionStorage.removeItem("sidebarSrcroll");
        });

        // Side dan sub navbar active block ke tengah
        const sideActiveLink = document.querySelector('.sidebar a.active');
        if (sideActiveLink) {
            sideActiveLink.scrollIntoView({ block: 'center' });
        }
        const subActiveLink = document.querySelector('.sub-nav a.active');
        if (subActiveLink) {
            subActiveLink.scrollIntoView({ block: 'center' });
        }
    </script>
    {{-- Side Navbar Latihan --}}
    <script>
        const basicNav = document.querySelector('.nav-side .basicNav.active');
        const menengahNav = document.querySelector('.nav-side .menengahNav.active');
        const lanjutanNav = document.querySelector('.nav-side .lanjutanNav.active');
        if (basicNav) {
            var basic = document.getElementsByClassName('basic');
            for (var i=0;i<basic.length;i+=1){
            basic[i].style.display = 'block';
            }
        }
        if (menengahNav) {
            var menengah = document.getElementsByClassName('menengah');
            for (var i=0;i<menengah.length;i+=1){
            menengah[i].style.display = 'block';
            }
        }
        if (lanjutanNav) {
            var lanjutan = document.getElementsByClassName('lanjutan');
            for (var i=0;i<lanjutan.length;i+=1){
            lanjutan[i].style.display = 'block';
            }
        }
    </script>
    {{-- Soal Latihan --}}
    <script>
        function soal(a) {
            var ElementId = "soal"+a;
            var soal = document.getElementsByClassName("soal");
            for (var i = 0; i < soal.length; i++) {
                soal[i].style.display = "none";
            }
            document.getElementById(ElementId).style.display = "block";
        }
    </script>
    {{-- Filter Level Kelas Mentor --}}
    <script>
        function levelCheck() {
            if (document.getElementById('mudahCheck').checked) {
                var mudah = document.getElementsByClassName('mudah');
                for (var i=0;i<mudah.length;i+=1){
                mudah[i].style.display = 'block';
                }
                var menengah = document.getElementsByClassName('menengah');
                for (var i=0;i<menengah.length;i+=1){
                menengah[i].style.display = 'none';
                }
            }
            else if (document.getElementById('menengahCheck').checked) {
                var mudah = document.getElementsByClassName('mudah');
                for (var i=0;i<mudah.length;i+=1){
                mudah[i].style.display = 'none';
                }
                var menengah = document.getElementsByClassName('menengah');
                for (var i=0;i<menengah.length;i+=1){
                menengah[i].style.display = 'block';
                }
            }
            else{
                var mudah = document.getElementsByClassName('mudah');
                for (var i=0;i<mudah.length;i+=1){
                mudah[i].style.display = 'block';
                }
                var menengah = document.getElementsByClassName('menengah');
                for (var i=0;i<menengah.length;i+=1){
                menengah[i].style.display = 'block';
                }
            }
        }
    </script>
    {{-- Button Active Kelas Mentor --}}
    <script>
        // Get the container element
    var btnContainer = document.getElementById("buttons");

    // Get all buttons with class="btn" inside the container
    var btns = btnContainer.getElementsByClassName("btn-mentor");

    // Loop through the buttons and add the active class to the current/clicked button
    for (var i = 0; i < btns.length; i++) {
      btns[i].addEventListener("click", function() {
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active", "");
        this.className += " active";
      });
    }
    </script>
</body>
</html>
