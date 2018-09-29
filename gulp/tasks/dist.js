var gulp = require('gulp');  
var runSequence = require('run-sequence');

gulp.task('dist', function (callback) {  
  runSequence(
    'delete',
    'sass:compile',
    [
      'optimize:css',
      'optimize:js',
      'optimize:images'
    ],
    'copy',
    'copy:tostylecss',
    'zip',
    'vrev',
    callback
  );
});

gulp.task('dist:prod', function (callback) {  
  runSequence(
    'dist',
    'bump',
    'copy:prod',
    callback
  );
});