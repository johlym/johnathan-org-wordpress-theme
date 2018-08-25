var gulp = require('gulp');
var imagemin = require('gulp-imagemin');
var size = require('gulp-size');

gulp.task('optimize:images', () => {
  return gulp
    .src('app/assets/images/**/*.{jpg,jpeg,png,gif,svg}')
    .pipe(imagemin())
    .pipe(gulp.dest('release/assets/images'))
    .pipe(size({
      showFiles: true
    }));
});