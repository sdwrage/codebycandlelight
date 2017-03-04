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

mix.copy(
	'node_modules/tinymce/skins/*',
	'resources/assets/sass/libs/tinymce/skins'
).copy(
	'node_modules/tinymce/themes/*',
	'resources/assets/js/libs/tinymce/themes'
);

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');