const mix = require('laravel-mix');
const glob = require('glob')

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

mix
	.js('resources/js/app.js', 'public/js')
	.js('resources/js/helpers.js', 'public/js')
	.sass('resources/sass/app.scss', 'public/css');

function mixAssetsDir(query, cb) {
    (glob.sync('resources/assets/' + query) || []).forEach(f => {
        f = f.replace(/[\\\/]+/g, '/');
        cb(f, f.replace('resources/assets', 'public'));
    });
}

mixAssetsDir('analitica/*.js', (src, dest) => mix.copy(src, dest));

// mix.version();
