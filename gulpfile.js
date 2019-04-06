'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');
var postcss = require('gulp-postcss');
var sourcemaps = require('gulp-sourcemaps');
var autoprefixer = require('autoprefixer');
var del = require('del');

var sassFiles = './sass/app.scss';
var cssDest = './assets/css/';
var cssFiles = cssDest + 'app.css';


gulp.task('delete', function () {
  return del([cssDest + '/**/*']);
});

gulp.task("clean", function () {
  return del("assets/css/*.cs*");
});

gulp.task('sass', function () {
  return gulp.src(sassFiles)
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest(cssDest));
});

gulp.task('sass:watch', function () {
  gulp.watch(sassFiles);
});

gulp.task('autoprefixer', function () {
    return gulp.src(cssFiles)
        .pipe(sourcemaps.init())
        .pipe(postcss([ autoprefixer() ]))
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest(cssDest));
});


gulp.task('build', gulp.series('clean', 'sass', 'autoprefixer'));

gulp.task('default', gulp.series('clean', 'sass', 'autoprefixer'));

