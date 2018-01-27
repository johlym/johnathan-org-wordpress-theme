var gulp = require('gulp');
var del = require('del');
var devDest = '/Users/jlyman/Local\ Sites/johnathanorg-staging/app/public/wp-content/themes/johnathan-org';

gulp.task('delete', () => {
  del.sync('./johnathan-org');
});