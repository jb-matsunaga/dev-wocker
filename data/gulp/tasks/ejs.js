var config = require('./../config.js');
var gulp = require("gulp");
var browserSync = require("browser-sync");
var reload = browserSync.reload;

var ejs = require("gulp-ejs");
var plumber = require("gulp-plumber");
var rename = require('gulp-rename');
var fs = require('fs');//ファイルの読み込み

//ejs
gulp.task("ejs", function () {
            gulp.src([config.path.ejs.src.on, '!'+ config.path.ejs.src.off])
                .pipe(plumber())
                // オブジェクトを渡してデータの当て込み
                .pipe(ejs(json))
                .pipe(rename({extname: '.php'}))
                .pipe(gulp.dest(config.path.all.dest))
                .pipe(reload({stream: true}));
});