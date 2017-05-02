const { mix } = require('laravel-mix');

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

mix.js('resources/assets/js/app.js', 'public/js')
   .js('resources/assets/js/recipie.js', 'public/js')
   .js('resources/assets/js/menu.js', 'public/js')
   .js('resources/assets/js/bootstrap.js', 'public/js')
   .js('resources/assets/js/socketio.js', 'public/js')
   .js('resources/assets/js/socket.js', 'public/js')




   .sass('resources/assets/sass/app.scss', 'public/css');