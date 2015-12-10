var config = require('./../config.js');
var gulp = require("gulp");
var browserSync = require("browser-sync");
var reload = browserSync.reload;

var cache = require('gulp-cached');
var plumber = require("gulp-plumber");
var notify = require('gulp-notify');
var compass = require('gulp-compass');
var csscomb = require('gulp-csscomb');
var please = require('gulp-pleeease');
var rename = require('gulp-rename');

//SASS
gulp.task('sass', function(){
    gulp.src( config.path.sass.src )
        .pipe(cache('css'))//キャッシュ
        .pipe(plumber({//エラー通知（続行）
          errorHandler: notify.onError("Error: <%= error %>")//デスクトップ通知
        }))
        //コメント付きで一度コンパイル
        .pipe(compass({
            comments: true,
            sass: config.path.all.src + '/sass/',
            css: config.path.all.dest + '/css/'
        }))
        .pipe(csscomb())
        .pipe(please({
            //minifyせずにprefix付与
            autoprefixer: {
                browsers: [
                    'last 4 versions',
                    'ie >= 8'
                    ]
                },
            minifier: false
        }))
        .pipe(gulp.dest( config.path.all.dest + '/css/' ))//開発用書き出し
        .pipe(please({
            minifier: true
        }))
        .pipe(rename({suffix: '.min'}))
        .pipe(gulp.dest( config.path.all.dest + '/css/' ))//本番用書き出し
        .pipe(reload({stream: true}));
        console.log('sass完了');
});
