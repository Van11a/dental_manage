const mix = require("laravel-mix");

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

<<<<<<< Updated upstream:src/webpack.mix.js
mix.js("resources/js/app.js", "public/js")
    .postCss("resources/css/layout.css", "public/css", [
        //
    ])
    .version();
=======
mix.js("resources/js/app.js", "public/js").postCss(
    "resources/css/layout.css",
    "public/css"
);
>>>>>>> Stashed changes:src/webpack.mix
