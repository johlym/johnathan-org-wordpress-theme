var gulp = require('gulp');
var debug = require('gulp-debug');
var inject = require('gulp-inject');
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

gulp.task('copy:tostylecss', () => {
  return gulp
  .src('./release/style.css')
  .pipe(inject(gulp.src('./release/assets/css/screen.css'), {
    starttag: '/* start screen.css */',
    endtag: '/* end screen.css */',
    transform: function (filePath, file) {
      // return file contents as string
      return file.contents.toString('utf8')
    }
  }))
  .pipe(gulp.dest('./release'));
});

