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
var prodDest = './johnathan-org';
var devDest = '/Users/jlyman/Local\ Sites/stagingjohnathanorg/app/public/wp-content/themes/johnathan-org';
var remoteDest = '/Volumes/johnathan.org/wordpress/wp-content/themes/johnathan-org';

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
  .src(['./johnathan-org/**/*'], {base: './johnathan-org'})
  .pipe(debug({title: 'Copying to production destination:'}))
  .pipe(gulp.dest(remoteDest));
});