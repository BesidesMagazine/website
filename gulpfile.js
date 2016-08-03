var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */
elixir.config.sourcemaps = false;

elixir(function(mix){
    mix.copy('node_modules/normalize.css/normalize.css','public/css/normalize.css');
    mix.scripts(['admin/main.js'],'public/js/main.js');
    mix.scripts(['website/slide.js'],'public/js/slide.js');
    mix.sass('main.scss','public/css/main.css');
});
