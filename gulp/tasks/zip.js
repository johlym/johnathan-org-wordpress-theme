var gulp = require('gulp');
var zip = require('gulp-zip');
var size = require('gulp-size');

gulp.task('zip', () => {
  return gulp
    .src('johnathan-org/**/*')
    .pipe(zip('johnathan-org.zip'))
    .pipe(gulp.dest('./'))
    .pipe(size());
});