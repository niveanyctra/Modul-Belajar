<div class="row">
    <h6 class="text-center">Tools</h6>
    @if (str_contains($posts->tool, 'vscode'))
        <div class="col-4">
            <h6>vscode</h6>
            <a href="vscode.com">download</a>
        </div>
    @endif
    @if (str_contains($posts->tool, 'html'))
        <div class="col-4">
            <h6>html</h6>
            <a href="html.com">download</a>
        </div>
    @endif
    @if (str_contains($posts->tool, 'css'))
        <div class="col-4">
            <h6>css</h6>
            <a href="css.com">download</a>
        </div>
    @endif
    @if (str_contains($posts->tool, 'react'))
        <div class="col-4">
            <h6>react</h6>
            <a href="react.com">download</a>
        </div>
    @endif
    @if (str_contains($posts->tool, 'nodejs'))
        <div class="col-4">
            <h6>nodejs</h6>
            <a href="nodejs.com">download</a>
        </div>
    @endif
    @if (str_contains($posts->tool, 'bootstrap'))
        <div class="col-4">
            <h6>bootstrap</h6>
            <a href="bootstrap.com">download</a>
        </div>
    @endif
    @if (str_contains($posts->tool, 'laravel'))
        <div class="col-4">
            <h6>laravel</h6>
            <a href="laravel.com">download</a>
        </div>
    @endif
    @if (str_contains($posts->tool, 'tailwind'))
        <div class="col-4">
            <h6>tailwind</h6>
            <a href="tailwind.com">download</a>
        </div>
    @endif
    @if (str_contains($posts->tool, 'github'))
        <div class="col-4">
            <h6>github</h6>
            <a href="github.com">download</a>
        </div>
    @endif
    @if (str_contains($posts->tool, 'xampp'))
        <div class="col-4">
            <h6>xampp</h6>
            <a href="xampp.com">download</a>
        </div>
    @endif
    @if (str_contains($posts->tool, 'figma'))
        <div class="col-4">
            <h6>figma</h6>
            <a href="figma.com">download</a>
        </div>
    @endif
    @if (str_contains($posts->tool, 'js'))
        <div class="col-4">
            <h6>js</h6>
            <a href="js.com">download</a>
        </div>
    @endif
    @if (str_contains($posts->tool, 'php'))
        <div class="col-4">
            <h6>php</h6>
            <a href="php.com">download</a>
        </div>
    @endif
    @if (str_contains($posts->tool, 'browser'))
        <div class="col-4">
            <h6>browser</h6>
            <a href="browser.com">download</a>
        </div>
    @endif
</div>