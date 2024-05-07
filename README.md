# tutorial-vite-plugin-laravel-purgecss

[![views](https://views.erbek.space/api/views.svg?id=github.com%2Ferbelion%2Ftutorial-vite-plugin-laravel-purgecss)](https://views.erbek.space/page/?id=github.com%2Ferbelion%2Ftutorial-vite-plugin-laravel-purgecss) [![likes](https://views.erbek.space/api/likes.svg?id=github.com%2Ferbelion%2Ftutorial-vite-plugin-laravel-purgecss)](https://views.erbek.space/api/like?id=github.com%2Ferbelion%2Ftutorial-vite-plugin-laravel-purgecss)

tutorial for [@erbelion/vite-plugin-laravel-purgecss](https://github.com/Erbelion/vite-plugin-laravel-purgecss)@0.2.5 running on laravel/laravel@11.0.7

## how to run this example

clone this repo

```
composer install
npm install
npm run build
php artisan serve
```

## how to do it yourself

```
composer create-project laravel/laravel:11.0.7 .
composer require laravel/ui
php artisan ui bootstrap
npm install @erbelion/vite-plugin-laravel-purgecss@0.2.5
```

in .env, set `SESSION_DRIVER=file`

overwrite [resources\views\welcome.blade.php](https://github.com/erbelion/tutorial-vite-plugin-laravel-purgecss/blob/main/resources/views/welcome.blade.php)

overwrite [vite.config.js](https://github.com/erbelion/tutorial-vite-plugin-laravel-purgecss/blob/main/vite.config.js)

(not needed) create [public\guide.png](https://github.com/erbelion/tutorial-vite-plugin-laravel-purgecss/blob/main/public/guide.png)

```
npm run build
php artisan serve
```

## results

### laravel
```
public/build/assets/app-D-sv12UV.css  225.52 kB │ gzip: 30.75 kB
```

### laravel + @erbelion/vite-plugin-laravel-purgecss
```
public/build/assets/app-D-sv12UV.css    9.64 kB │ gzip:  2.86 kB
```
