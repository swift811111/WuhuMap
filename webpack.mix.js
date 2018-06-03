let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/assets/js/map.js', 'public/js')
    .sass('resources/assets/sass/app.scss', 'public/css')
    .sass('resources/assets/sass/comments/comment.scss', 'public/css')
    .sass('resources/assets/sass/front/map.scss', 'public/css')
    .extract(['lodash', 'jquery', 'axios', 'vue'])
    .webpackConfig({
        resolve: {
            alias: {
                '@': path.resolve('resources/assets/sass')
            }
        }
    });