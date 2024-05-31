let mix = require('laravel-mix');

mix.js('src/js/index.js', 'dist/js/index.js').sass('src/css/style.scss', 'dist/css/style.css');