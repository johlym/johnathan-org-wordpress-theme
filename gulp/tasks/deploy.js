var gulp   = require('gulp');
var gutil  = require('gulp-util');
var gulpif = require('gulp-if');
var prompt = require('gulp-prompt');
var rsync  = require('gulp-rsync');

gulp.task('deploy', function() {
  
  // Dirs and Files to sync
  rsyncPaths = ['./johnathan-org/**/*'];
  
  // Default options for rsync
  rsyncConf = {
    progress: true,
    incremental: true,
    relative: true,
    emptyDirectories: true,
    recursive: true,
    clean: true,
    exclude: [],
  };

  rsyncConf.hostname = 'wb01.lymandigital.net'; // hostname
  rsyncConf.username = 'root'; // ssh username
  rsyncConf.destination = '/var/www/wordpress/wp-content/themes'; // path where uploaded files go

  

  // Use gulp-rsync to sync the files 
  return gulp.src(rsyncPaths)
  .pipe(rsync(rsyncConf));

});


function throwError(taskName, msg) {
  throw new gutil.PluginError({
      plugin: taskName,
      message: msg
    });
}