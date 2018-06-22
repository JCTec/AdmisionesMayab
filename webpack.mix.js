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

mix.copy('vendor/jackocnr/intl-tel-input/build/css/intlTelInput.css', 'public/css/intlTelInput.css');
mix.copy('vendor/jackocnr/intl-tel-input/build/js/intlTelInput.js', 'public/js/intlTelInput.js');
mix.copy('vendor/jackocnr/intl-tel-input/build/js/utils.js', 'public/js/utils.js');
mix.copy('vendor/jackocnr/intl-tel-input/build/img/flags.png', 'public/img/flags.png');
mix.copy('vendor/jackocnr/intl-tel-input/build/img/flags@2x.png', 'public/img/flags@2x.png');

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');
