var gulp = require('gulp');
var bump = require('gulp-bump');
var argv = require('yargs');

gulp.task('bump', function(){
  gulp.src('./package.json')
  .pipe(bump({type: argv.vlevel}))
  .pipe(gulp.dest('./'));
});