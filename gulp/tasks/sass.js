var gulp = require('gulp');  
var sass = require('gulp-sass');  
var sourcemaps = require('gulp-sourcemaps');  
var clean = require('gulp-clean');
var runSequence = require('run-sequence');

gulp.task('sass:compile', () => {  
  return gulp
    .src('app/assets/scss/**/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('app/assets/css'));
});