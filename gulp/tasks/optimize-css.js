var gulp = require('gulp');
var cssnano = require('gulp-cssnano');
var size = require('gulp-size');

gulp.task('optimize:css', () => {
  return gulp
    .src('app/assets/css/**/*.css')
    .pipe(cssnano())
    .pipe(gulp.dest('release/assets/css'))
    .pipe(size({
      showFiles: true
    }));
});