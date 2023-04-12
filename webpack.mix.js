let mix = require('laravel-mix');

mix
   .setPublicPath('public_html/')
   .js('resources/assets/js/app.js', 'public_html/js')
   .sass('resources/assets/sass/app.scss', 'public_html/css')

   /**
   * Gera os arquivos de mapa
   */

  .sourceMaps()

  .browserSync('http://localhost:8000');