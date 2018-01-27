var gulp = require('gulp');  
var runSequence = require('run-sequence');

gulp.task('watch', function (callback) {  
  runSequence(
    'sass:compile',
    'copy:dev',
    'browsersync:production',
    () => {
      gulp.watch('app/**/*.php', () => {
        runSequence(
          'copy:dev',
          'browsersync:reload'
        );
      });
      gulp.watch('app/assets/scss/**/*.scss', () => {
        runSequence(
          'sass:compile',
          'copy:dev',
          'browsersync:reload'
        );
      });
      gulp.watch('app/assets/js/**/*.js', () => {
        runSequence(
          'copy:dev',
          'browsersync:reload'
        );
      });
      return callback;
    }
  );
});