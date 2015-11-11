var config = require('./../config.js');
var gulp = require("gulp");
var browserSync = require("browser-sync");
var reload = browserSync.reload;

var bower = require('main-bower-files');
var concat = require('gulp-concat');
var rename = require('gulp-rename');


//Bower
gulp.task('bower', function() {
    gulp.src(bower({
        debugging:true,
        checkExistence:true,
        filter: "**/*.js"
    }))
        .pipe(concat('lib.js'))
        .pipe(gulp.dest(config.path.js.dest + '/js'))
        .pipe(uglify())
        .pipe(rename({suffix: '.min'}))
        .pipe(gulp.dest(config.path.js.dest + '/js'))
});