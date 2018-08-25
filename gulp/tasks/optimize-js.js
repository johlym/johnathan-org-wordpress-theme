var gulp = require('gulp');
var uglify = require('gulp-uglify');
var size = require('gulp-size');

gulp.task('optimize:js', () => {
  return gulp
    .src('release/assets/js/**/*.js')
    .pipe(uglify())
    .pipe(gulp.dest('release/assets/js'))
    .pipe(size({
      showFiles: true
    }));
});