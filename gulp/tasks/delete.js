var gulp = require('gulp');
var del = require('del');

gulp.task('delete', () => {
  del.sync('./release');
});