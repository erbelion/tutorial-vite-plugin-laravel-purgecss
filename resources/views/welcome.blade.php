<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div class="col-lg-8 mx-auto p-4 py-md-5">
        <main>
            <h1 class="text-body-emphasis">tutorial-vite-plugin-laravel-purgecss@0.2.5</h1>
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
                    also check out app.scss!
                </p>
            </div>
            <img src="./guide.png" class="img-fluid">
        </main>
    </div>
</body>

</html>
