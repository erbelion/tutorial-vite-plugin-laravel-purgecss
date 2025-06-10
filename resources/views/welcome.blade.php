<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/sass/app.scss', 'resources/js/app.js'])
        @endif
    </head>
    <body>
        <div class="col-lg-8 mx-auto p-4 py-md-5">
            <main>
                <h1 class="text-body-emphasis">tutorial-vite-plugin-laravel-purgecss@0.3.4</h1>
                <div class="mb-5">
                    <a href="https://github.com/erbelion/vite-plugin-laravel-purgecss"
                        class="btn btn-lg px-4 btn-primary">@erbelion/vite-plugin-laravel-purgecss</a>
                </div>
                <div class="fs-5 col-md-12">
                    <p>try replacing <code>btn-primary</code> class of the button above from
                        <code>-primary</code> to
                        <code>-danger</code> in the browser
                    </p>
                    <p>
                        if it doesn't change to <span class="text-danger">this color</span> — the plugin
                        is working
                    </p>
                    <p>
                        remember — it only works in production mode
                    </p>
                    <p id="used_rule_from_app_scss">
                        also check out resources/sass/app.scss!
                    </p>
                </div>
                <img src="./guide.png" class="img-fluid">
            </main>
        </div>
    </body>
</html>
