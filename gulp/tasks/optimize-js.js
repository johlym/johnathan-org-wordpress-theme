var gulp = require('gulp');
var uglify = require('gulp-uglify');
var size = require('gulp-size');

gulp.task('optimize:js', () => {
  return gulp
    .src('johnathan-org/assets/js/**/*.js')
    .pipe(uglify())
    .pipe(gulp.dest('johnathan-org/assets/js'))
    .pipe(size({
      showFiles: true
    }));
});