
var gulp = require('gulp');
var sass = require('gulp-sass');
var concat = require('gulp-concat');
var livereload = require('gulp-livereload');

var path = {
  SCSS_SRC: 'assets/scss/**',
  SCSS_ORIGIN: 'assets/scss/style.scss',
  SCSS_OUT: './'
};

gulp.task('scss', function() {
    return gulp.src(path.SCSS_ORIGIN)
      .pipe(sass().on('error', sass.logError))
      .pipe(gulp.dest(path.SCSS_OUT))
      .pipe(livereload())
});

gulp.task('watch', function() {
  livereload.listen();
  gulp.watch(path.SCSS_SRC, ['scss']);
});

gulp.task('default', ['watch']);

gulp.task('build', ['scss']);
