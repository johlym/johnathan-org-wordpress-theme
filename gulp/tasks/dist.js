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
    'zip',
    'vrev',
    callback
  );
});

gulp.task('dist:prod', function (callback) {  
  runSequence(
    'bump',
    'dist',
    'copy:prod',
    callback
  );
});