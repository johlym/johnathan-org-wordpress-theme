var gulp = require('gulp');
var zip = require('gulp-zip');
var size = require('gulp-size');

gulp.task('zip', () => {
  return gulp
    .src('./release/**/*')
    .pipe(zip('release.zip'))
    .pipe(gulp.dest('./'))
    .pipe(size());
});