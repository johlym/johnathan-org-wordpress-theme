var gulp = require('gulp');
var gzip = require('gulp-gzip');

gulp.task('gzip', () => {
  return gulp
    .src('jorgredux/assets/**/*.{css,js}')
    .pipe(gzip())
    .pipe(gulp.dest('jorgredux/assets'));
});