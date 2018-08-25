var gulp = require('gulp');
var debug = require('gulp-debug');
var files = ['app/**/*.php',
'app/*.txt',
'app/screenshot.png',
'app/browserconfig.xml',
'app/assets/css/**/*',
'app/assets/fonts/**/*',
'app/style.css',
'app/assets/js/**/*',
'app/assets/images/*',
'app/assets/svg/*'];
var base = './app';
var prodDest = './release';
var devDest = '../app/public/wp-content/themes/jorgredux';
var remoteDest = '/Volumes/wp-web/wp-content/themes/jorgredux';

gulp.task('copy', () => {
  return gulp
    .src(files, {base: base})
    .pipe(debug())
    .pipe(gulp.dest(prodDest));
});

gulp.task('copy:dev', () => {
  return gulp
  .src(files, {base: base})
  .pipe(debug({title: 'Copying to development destination:'}))
  .pipe(gulp.dest(devDest));
});

gulp.task('copy:prod', () => {
  return gulp
  .src(['./release/**/*'], {base: './release'})
  .pipe(debug({title: 'Copying to production destination:'}))
  .pipe(gulp.dest(remoteDest));
});