const mix = require("laravel-mix");

require("laravel-mix-tailwind");
require("laravel-mix-purgecss");

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

mix.js("resources/js/app.js", "public/js")
    .sass("resources/sass/main.scss", "public/css/app.css")
    .options({
        postCss: [
            require('autoprefixer')
        ]
    });

if (mix.inProduction()) {
    mix.version()
        .purgeCss()
        .version();
}
// mix.styles([
//     'public/css/vendor/normalize.css',
//     'public/css/vendor/videojs.css'
// ], 'public/css/all.css');
