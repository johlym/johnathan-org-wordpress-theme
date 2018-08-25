var gulp = require('gulp');
var browserSync = require('browser-sync').create();
var proxy = 'v4-local.johnathan.org:80';

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