const mix = require("laravel-mix");
const wsp = require("webpack-shell-plugin-next");
const glob = require("glob");
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
require("laravel-mix-merge-manifest");
mix.js("resources/js/app.js", "public/js")
    .js("resources/js/service-worker.js", "public")
    .postCss("resources/css/app.css", "public/css", [require("tailwindcss")]);
let configs = glob.sync("{./Modules/*/webpack.mix.js");
if (process.env.module !== undefined) {
    let module =
        process.env.module.charAt(0).toUpperCase() +
        process.env.module.slice(1);

    configs = [`./Modules/${module}/webpack.mix.js`];
}
let onBuildExit = [];
configs.forEach((config) => {
    require(config);

    let module = config.match(/Modules\/(\w+?)\//);
    if (module !== null) {
        onBuildExit.push(`php artisan module:publish ${module[1]}`);
    }
});

mix.webpackConfig({
    plugins: [new wsp({ onBuildExit })],
});
