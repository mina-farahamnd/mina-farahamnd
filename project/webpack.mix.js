let mix = require('laravel-mix');

mix.config.fileLoaderDirs.fonts = 'assets/front/fonts/iranyekan';
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
   .sass('resources/assets/sass/app.scss', 'public/css')
   .sass('resources/sass/front/main.scss', '../../assets/front/css/style.css');

mix.copy('resources/assets/fonts/iranyekan', '../assets/front/fonts/iranyekan', false);
mix.copy('resources/assets/fonts/Mark', '../assets/front/fonts/Mark', false);