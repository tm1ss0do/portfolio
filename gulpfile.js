//プラグインの読み込み
const browserify = require("gulp-browserify");
const gulp = require("gulp");
const changed = require("gulp-changed");
const cleanCss = require("gulp-clean-css");
const sass = require("gulp-sass");
const imagemin = require("gulp-imagemin");
const rename = require("gulp-rename");

//-------------------------
//scssファイルをcssへコンパイル・圧縮・build
//-------------------------
const compileSass = () =>
gulp
  .src("src/scss/**/**/*.scss")
  .pipe( sass({outputStyle: 'expanded'}) )
  .pipe( cleanCss() )
  .pipe(gulp.dest("dist/css"));

const watchSass = () =>
      gulp.watch("src/scss/**/**/*.scss", compileSass);

//-------------------------
//画像を圧縮・build
//-------------------------
const source = "src/img/**/*.+(jpg|jpeg|JPG|png|PNG|gif|svg)";
const dist = "dist/img";

const image = () =>
gulp
  .src(source)
  .pipe( changed(dist) )
  .pipe(imagemin({
        interlaced: true,
        progressive: true,
        optimizationLevel: 5,
        }))
  .pipe(changed(dist))
  //圧縮画像を保存
  .pipe(gulp.dest(dist))

const watchImage = () =>
      gulp.watch(source, image);

//-------------------------
//browserifyでjsファイルを統合
//-------------------------
const Browserify = () =>
gulp
  .src("src/js/**.js")
  .pipe( browserify() )
  .pipe(rename("build.js"))
  .pipe(gulp.dest("./dist/js/"));

const watchJS = () =>
      gulp.watch("src/js/*.js", Browserify);

//-------------------------
//watchタスクをデフォルトで実行
//-------------------------
exports.default = gulp.parallel(watchSass,watchImage,watchJS);
