var gulp = require('gulp');  
var runSequence = require('run-sequence');

gulp.task('watch', function (callback) {  
  runSequence(
    'sass:compile',
    'dist:dev',
    'browsersync:production',
    () => {
      gulp.watch('app/**/*.php', () => {
        runSequence(
          'dist:dev',
          'browsersync:reload'
        );
      });
      gulp.watch('app/assets/scss/**/*.scss', () => {
        runSequence(
          'dist:dev',
          'browsersync:reload'
        );
      });
      gulp.watch('app/assets/js/**/*.js', () => {
        runSequence(
          'dist:dev',
          'browsersync:reload'
        );
      });
      return callback;
    }
  );
});