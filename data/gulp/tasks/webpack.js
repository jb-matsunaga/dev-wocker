var config = require('./../config.js');
var gulp = require("gulp");
var browserSync = require("browser-sync");
var reload = browserSync.reload;

var cached = require('gulp-cached');
var plumber = require('gulp-plumber');
var notify = require('gulp-notify');
var eslint = require('gulp-eslint');
var webpack = require('gulp-webpack');
var webpackConfig = require('../../webpack.config.js');
var uglify = require("gulp-uglify");

//webpackを使ってJSの結合 => 圧縮
gulp.task('webpack', function() {
    gulp.src([config.path.js.modules])
        .pipe(plumber({
          errorHandler: notify.onError("Error: <%= error %>")
        }))
        .pipe(eslint({useEslintrc: true}))
        .pipe(eslint.format('./node_modules/eslint-path-formatter'))
        .pipe(eslint.failOnError())
        .pipe(webpack(webpackConfig))
        .pipe(uglify())
        .pipe(gulp.dest(config.path.all.dest + '/js/'))
        .pipe(reload({stream: true}));
});
