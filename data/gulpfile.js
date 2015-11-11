var requireDir = require( 'require-dir' );
requireDir( './gulp/task', { recurse: true } );

var gulp = require("gulp"),
    compass = require('gulp-compass'),
    hologram = require('gulp-hologram'),
    uglify = require("gulp-uglify"),
    plumber = require("gulp-plumber"),
    ejs = require("gulp-ejs"),
    cssmin = require('gulp-cssmin'),
    fs = require('fs'),
    rename = require('gulp-rename'),
    spritesmith = require('gulp.spritesmith'),
    bower = require('main-bower-files'),
    concat = require('gulp-concat'),
    notify = require('gulp-notify'),
    csscomb = require('gulp-csscomb'),
    please = require('gulp-pleeease'),
    cache = require('gulp-cached'),
    htmlhint = require("gulp-htmlhint"),
    scsslint = require('gulp-scss-lint'),
    webpack = require('gulp-webpack'),
    browserSync = require("browser-sync"),
    reload = browserSync.reload;


//パス
var SRC = "src",
    PUBLIC = "wocker/wp-content/themes/tixeebox";

var webpackConfig = require('./webpack.config.js');


//ejs
gulp.task("ejs", function () {
            // 最新のJSONファイルを同期読み込みしてオブジェクトを生成
            var json = JSON.parse(fs.readFileSync("src/data/pages.json"));

            gulp.src([SRC + "/ejs/*.ejs", SRC + "/ejs/**/**/*.ejs", '!'+ SRC + "/ejs/**/_*.ejs"])
                .pipe(plumber())
                // オブジェクトを渡してデータの当て込み
                .pipe(ejs(json))
                //.pipe(htmlhint())
                //.pipe(htmlhint.reporter())
                .pipe(rename({extname: '.php'}))
                .pipe(gulp.dest(PUBLIC))
                .pipe(reload({stream: true}));
});


//SASS,キャッシュ,エラー通知（続行）,チェック構文,コメントありで吐き出し,プロパティ記述順序を設定,圧縮,名前変更,吐き出し
gulp.task('css', function(){
    gulp.src(SRC + '/sass/**/*.scss')
        .pipe(cache('css'))
        .pipe(plumber({
          //エラーがあったときに、デスクトップで通知を出す
          errorHandler: notify.onError("Error: <%= error %>")
        }))
        //.pipe(csscomb())
        .pipe(compass({
            comments: true,
            css: PUBLIC + '/css/',
            sass: SRC + '/sass/'
        }))
        .pipe(reload({stream: true}));
});

gulp.task('mincss', function(){
    gulp.src(PUBLIC + '/css/common.css')
    .pipe(please({
            autoprefixer: {browsers: ["last 2 versions", "ie >= 8"]},//ベンダープレフィックス
            minifier: true //圧縮の有無 true/false
        }))
    .pipe(rename({suffix: '.min'}))
    .pipe(gulp.dest(PUBLIC + '/css/'))
    .pipe(reload({stream: true}));
});


//スタイルガイド生成
gulp.task('hologram', function() {
  var configGlob = 'hologram/hologram_config.yml';
  gulp.src(configGlob)
    .pipe(hologram())
    .pipe(reload({stream: true}));
});


//Sprite
gulp.task('sprite', function () {
  var spriteData = gulp.src(SRC + '/sass/base/sprite/images/*.png').pipe(spritesmith({
    imgName: 'sprite.png',
    cssName: '_sprite.scss',
    imgPath: 'img/sprite.png'
  }));
  spriteData.img.pipe(gulp.dest(PUBLIC + '/css/img'));
  return spriteData.pipe(gulp.dest(SRC + '/sass/base/sprite/'));
});


//js Library
gulp.task('jslib', function() {
    gulp.src(bower({debugging:true,checkExistence:true,filter: "**/*.js"}))
        .pipe(concat('library.js'))
        .pipe(gulp.dest(PUBLIC + '/js'))
        .pipe(uglify())
        .pipe(rename({suffix: '.min'}))
        .pipe(gulp.dest(PUBLIC + '/js'))
});


//js Plugins
gulp.task("jsplg", function() {
    gulp.src([SRC + "/js/plugins/**/*.js",'!'+ SRC + "/js/plugins/back/**/*.js"])
        .pipe(plumber())
        .pipe(concat('plugins.js'))
        .pipe(gulp.dest(PUBLIC + "/js/"))
        .pipe(uglify())
        .pipe(rename({suffix: '.min'}))
        .pipe(gulp.dest(PUBLIC + "/js/"))
        .pipe(reload({stream: true}));
});


//webpackを使ってJSの結合 => 圧縮
gulp.task('webpack', function() {

    gulp.src('')
        .pipe(webpack(webpackConfig))
        .pipe(uglify())
        .pipe(gulp.dest(PUBLIC + '/js/'))
        .pipe(reload({stream: true}));
});


//browser sync
gulp.task("server", function() {
    browserSync.init({
        proxy: "http://wocker.dev/"
    });
});


//watch
gulp.task('default',['server'],function() {
    gulp.watch([SRC + '/js/plugins/**/*.js','!'+ SRC + '/js/plugins/back/**/*.js'],['jsplg']);
    gulp.watch([SRC + "/js/modules/*.js", SRC + "/js/*.js"],['webpack']);
    gulp.watch(SRC + '/sass/**/*.scss',['css','hologram']);
    gulp.watch(PUBLIC + '/css/common.css',['mincss']);
    gulp.watch(SRC + '/sass/base/sprite/images/*.png',['sprite']);
    gulp.watch([SRC + "/ejs/*.ejs", SRC + "/ejs/**/**/*.ejs", SRC + "/data/**.json"],['ejs']);
});

//初期化処理
gulp.task('init', ['css', 'mincss', 'jslib', 'jsplg', 'webpack', 'ejs']);

