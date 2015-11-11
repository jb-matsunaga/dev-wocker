var config = require('./gulp/config.js');
var gulp = require("gulp");
var requireDir = require( 'require-dir' );
var browserSync = require("browser-sync");
var reload = browserSync.reload;

requireDir( './gulp/tasks', { recurse: true } );


//browser sync
gulp.task("server", function() {
    browserSync.init({
        proxy: "http://wocker.dev/"
    });
});

//watch
gulp.task('default',['server'], function() {
    gulp.watch( config.path.ejs.src.on, ['ejs']);
    gulp.watch( config.path.sass.src, ['sass'] );
    gulp.watch( config.path.js.src, ['js'] );
    gulp.watch( [config.path.webpack.src1, config.path.webpack.src2], ['webpack'] );
});

//初期化処理
gulp.task('init', ['sass', 'ejs', 'js', 'webpack', 'bower']);

