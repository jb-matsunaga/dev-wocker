var config = require('./../config.js');
var gulp = require("gulp");
var browserSync = require("browser-sync");
var reload = browserSync.reload;

var ejs = require("gulp-ejs");
var plumber = require("gulp-plumber");
var rename = require('gulp-rename');


//ejs
gulp.task("ejs", function () {
            gulp.src([config.path.ejs.src.on, '!'+ config.path.ejs.src.off])
                .pipe(ejs())
                .pipe(plumber())
                .pipe(rename({extname: '.php'}))
                .pipe(gulp.dest(config.path.all.dest))
                .pipe(reload({stream: true}));
});