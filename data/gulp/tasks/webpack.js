var config = require('./../config.js');
var gulp = require("gulp");
var browserSync = require("browser-sync");
var reload = browserSync.reload;

var webpack = require('gulp-webpack');
var webpackConfig = require('../../webpack.config.js');
var uglify = require("gulp-uglify");

//webpackを使ってJSの結合 => 圧縮
gulp.task('webpack', function() {

    gulp.src('')
        .pipe(webpack(webpackConfig))
        .pipe(uglify())
        .pipe(gulp.dest(config.path.all.dest + '/js/'))
        .pipe(reload({stream: true}));
});
