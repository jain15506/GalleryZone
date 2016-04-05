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

elixir(function(mix) {
    mix.styles([
    	"bootstrap.min.css",
        
        
         "ripples.min.css",
         "layout-demo.css",
         "style.css",
         "dropzone.css",
         "lightbox.css",
        
         "code.css"

    	]);
    mix.scripts([
        "jquery.js",

"bootstrap.min.js",
"dropzone.js",
"lightbox.js",
"app.js",

"code.js"
    	]);
    mix.version(["css/all.css","js/all.js"]);

});    
