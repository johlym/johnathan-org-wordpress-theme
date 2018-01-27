var gulp = require('gulp');
var browserSync = require('browser-sync').create();
var proxy = 'johnathan-org-staging:80';

gulp.task('browsersync:production', function (callback) {
  browserSync.init({
    proxy: proxy
  });

  callback();
});

gulp.task('browsersync:reload', function (callback) {
  browserSync.reload();
  callback();
});