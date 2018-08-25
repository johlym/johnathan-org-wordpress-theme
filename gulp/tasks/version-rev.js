var gulp = require('gulp');
var replace = require('gulp-replace');
var runSequence = require('run-sequence');
var fs = require('fs');
var pJson = JSON.parse(fs.readFileSync('./package.json'));
var fnFile = 'release/functions.php';
var pubVerStringFile = 'release/sidebar.php'
var vString = "'" + pJson.version + "'";

gulp.task('vrev', function (callback) {  
  runSequence(
    'vrev:fn_php',
    callback
  );
});

gulp.task('vrev:fn_php', () => {
  return gulp
    .src(fnFile)
    .pipe(replace('rand(100000,999999)', vString))
    .pipe(gulp.dest('release'));
});