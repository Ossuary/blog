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

gulp.task('initial_elixir_task', function(){
    elixir(function(mix) {
        var bootstrapPath = 'node_modules/bootstrap-sass/assets';
        mix.sass('app.scss')
            .copy(bootstrapPath + '/fonts', 'public/fonts')
            .copy(bootstrapPath + '/javascripts/bootstrap.min.js', 'public/js');
    });
});