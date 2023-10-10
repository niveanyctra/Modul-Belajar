<div id="display-tool">
    <div class="row gap-1">
        @if (str_contains($data->tool, 'vscode'))
            <div class="me-3 col-2">
                <img src="{{ asset('img/tools/logo_vs_code.png') }}" class="" alt="" height="40px">
            </div>
        @endif
        @if (str_contains($data->tool, 'html'))
            <div class="me-3 col-2">
                <img src="{{ asset('img/tools/logo_html.png') }}" class="" alt=""  height="40px">
            </div>
        @endif
        @if (str_contains($data->tool, 'css'))
            <div class="me-3 col-2">
                <img src="{{ asset('img/tools/logo_css.png') }}" class="" alt="" height="40px">
            </div>
        @endif
        @if (str_contains($data->tool, 'react'))
            <div class="me-3 col-2">
                <img src="{{ asset('img/react.svg') }}" class="" alt="" height="40px">
            </div>
        @endif
        @if (str_contains($data->tool, 'nodejs'))
            <div class="me-3 col-2">
                <img src="{{ asset('img/tools/logo_node_js.png') }}" class="" alt="" height="40px">
            </div>
        @endif
        @if (str_contains($data->tool, 'bootstrap'))
            <div class="me-3 col-2">
                <img src="{{ asset('img/tools/logo_bootstrap.png') }}" class="" alt="" height="40px">
            </div>
        @endif
        @if (str_contains($data->tool, 'laravel'))
            <div class="me-3 col-2">
                <img src="{{ asset('img/laravel.svg') }}" class="" alt="" height="40px">
            </div>
        @endif
        @if (str_contains($data->tool, 'tailwind'))
            <div class="me-3 col-2">
                <img src="{{ asset('img/tools/logo_tailwind.png') }}" class="" alt="" height="40px">
            </div>
        @endif
        @if (str_contains($data->tool, 'github'))
            <div class="me-3 col-2">
                <img src="{{ asset('img/tools/logo_github.png') }}" class="" alt="" height="40px">
            </div>
        @endif
        @if (str_contains($data->tool, 'xampp'))
            <div class="me-3 col-2">
                <img src="{{ asset('img/tools/logo_xampp.png') }}" class="" alt="" height="40px">
            </div>
        @endif
        @if (str_contains($data->tool, 'figma'))
            <div class="me-3 col-2">
                <img src="{{ asset('img/figma-logomark.svg') }}" class="" alt="" height="40px">
            </div>
        @endif
        @if (str_contains($data->tool, 'js'))
            <div class="me-3 col-2">
                <img src="{{ asset('img/javascript-logomark-rounded.svg') }}" class="" alt="" height="40px">
            </div>
        @endif
        @if (str_contains($data->tool, 'php'))
            <div class="me-3 col-2">
                <img src="{{ asset('img/tools/logo_php.png') }}" class="" alt="" height="40px">
            </div>
        @endif
        @if (str_contains($data->tool, 'browser'))
            <div class="me-3 col-2">
                <img src="{{ asset('img/tools/logo_google.png') }}" class="" alt="" height="40px">
            </div>
        @endif
    </div>
</div>

