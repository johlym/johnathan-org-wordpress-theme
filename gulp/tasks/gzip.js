var gulp = require('gulp');
var gzip = require('gulp-gzip');

gulp.task('gzip', () => {
  return gulp
    .src('johnathan-org/assets/**/*.{css,js}')
    .pipe(gzip())
    .pipe(gulp.dest('johnathan-org/assets'));
});