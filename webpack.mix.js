const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.scripts('node_modules/jquery/dist/jquery.js', 'public/app/js/jquery.js')
    .scripts('node_modules/bootstrap/dist/js/bootstrap.bundle.js', 'public/app/js/bootstrap.js')
    .scripts('resources/js/app.js', 'public/app/js/app.js')
    .styles('node_modules/bootstrap/dist/css/bootstrap.css','public/app/css/bootstrap.css')
    .styles('resources/css/app.css', 'public/app/css/app.css').version();
