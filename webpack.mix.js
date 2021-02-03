let mix = require('laravel-mix');

mix.js('src/app.js', 'app')
    .setPublicPath('dist');

mix.sass('src/app.scss', 'css')
    .setPublicPath('dist')
    .options({
        processCssUrls: false
    });