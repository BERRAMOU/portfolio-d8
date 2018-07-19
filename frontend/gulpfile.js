var gulp = require('gulp');
var livereload = require('gulp-livereload');
var uglify = require('gulp-uglifyjs');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var sourcemaps = require('gulp-sourcemaps');
var imagemin = require('gulp-imagemin');
var pngquant = require('imagemin-pngquant');


gulp.task('images', function () {
  return gulp.src('src/images/*')
      .pipe(imagemin({
        progressive: true,
        svgoPlugins: [{removeViewBox: false}],
        use: [pngquant()]
      }))
      .pipe(gulp.dest('assets/img'));
});


gulp.task('css', function () {
  gulp.src('src/sass/**/*.scss')
      .pipe(sourcemaps.init())
      .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
      .pipe(autoprefixer('last 2 version', 'safari 5', 'ie 7', 'ie 8', 'ie 9', 'opera 12.1', 'ios 6', 'android 4'))
      .pipe(sourcemaps.write('./'))
      .pipe(gulp.dest('assets/css'));
});


gulp.task('js', function() {
  gulp.src('src/js/*.js')
      .pipe(uglify('main.js'))
      .pipe(gulp.dest('assets/js'))
});

gulp.task('watch', function(){
  livereload.listen();
  gulp.watch('src/sass/**/*.scss', ['css']);
  gulp.watch('src/js/*.js', ['js']);
  gulp.watch(['assets/css/style.css', 'js/*.js'], function (files){
    livereload.changed(files)
  });
});