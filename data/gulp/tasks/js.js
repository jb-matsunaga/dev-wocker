var config = require('./../config.js');
var gulp = require("gulp");
var browserSync = require("browser-sync");
var reload = browserSync.reload;

var cached = require('gulp-cached');
var plumber = require('gulp-plumber');
var notify = require('gulp-notify');
var concat = require('gulp-concat');
var uglify = require("gulp-uglify");
var rename = require('gulp-rename');

//js
gulp.task("js", function() {
    gulp.src([config.path.js.src])
        .pipe(cached('js'))
        .pipe(plumber({
          errorHandler: notify.onError("Error: <%= error %>")
        }))
        .pipe(concat('common.js'))
        .pipe(gulp.dest(config.path.all.dest + "/js/"))
        .pipe(uglify())
        .pipe(rename({suffix: '.min'}))
        .pipe(gulp.dest(config.path.all.dest + "/js/"))
        .pipe(reload({stream: true}));
});