# tutorial-vite-plugin-laravel-purgecss

[![views](https://views.erbek.space/api/views.svg?id=github.com%2Ferbelion%2Ftutorial-vite-plugin-laravel-purgecss)](https://views.erbek.space/page/?id=github.com%2Ferbelion%2Ftutorial-vite-plugin-laravel-purgecss) [![likes](https://views.erbek.space/api/likes.svg?id=github.com%2Ferbelion%2Ftutorial-vite-plugin-laravel-purgecss)](https://views.erbek.space/api/like?id=github.com%2Ferbelion%2Ftutorial-vite-plugin-laravel-purgecss)

tutorial for [@erbelion/vite-plugin-laravel-purgecss](https://github.com/Erbelion/vite-plugin-laravel-purgecss)@0.4.8 running on laravel/laravel@13.1.0

## 🚀 how to run this example

clone this repo

```bash
composer install
npm install
npm run build
php artisan serve
```

## 🤓 how to do it yourself

```bash
composer create-project laravel/laravel:13.1.0 .
composer require laravel/ui
php artisan ui bootstrap
npm install
npm install @erbelion/vite-plugin-laravel-purgecss@0.4.8
```

in .env, set `SESSION_DRIVER=file`

overwrite [resources\views\welcome.blade.php](https://raw.githubusercontent.com/erbelion/tutorial-vite-plugin-laravel-purgecss/refs/heads/main/resources/views/welcome.blade.php)

overwrite [vite.config.js](https://raw.githubusercontent.com/erbelion/tutorial-vite-plugin-laravel-purgecss/refs/heads/main/vite.config.js)

overwrite [resources\sass\app.scss](https://raw.githubusercontent.com/erbelion/tutorial-vite-plugin-laravel-purgecss/refs/heads/main/resources/sass/app.scss)

(not needed) create [public\guide.png](https://github.com/erbelion/tutorial-vite-plugin-laravel-purgecss/blob/main/public/guide.png)

```bash
npm run build
php artisan serve
```

## 📊 results

### laravel

```
public/build/assets/app-B2qGsMUw.css  224.90 kB │ gzip: 30.58 kB
```

### laravel + @erbelion/vite-plugin-laravel-purgecss

```
public/build/assets/app-B2qGsMUw.css    9.34 kB │ gzip:  2.79 kB
```
