
import gulp from 'gulp';
import babel from 'gulp-babel';
import sass from 'gulp-sass';
import concat from 'gulp-concat';
import livereload from 'gulp-livereload';

const path = {
  scss_src: 'assets/styles/**',
  scss_origin: 'assets/styles/style.scss',
  js_origin: 'assets/js/index.js',
  dest: './'
};

gulp.task('js', function () {
    return gulp.src(path.js_origin)
        .pipe(babel())
        .pipe(gulp.dest(path.dest));
});

gulp.task('scss', function() {
    return gulp.src(path.scss_origin)
      .pipe(sass().on('error', sass.logError))
      .pipe(gulp.dest(path.dest))
      .pipe(livereload())
});

gulp.task('watch', function() {
  livereload.listen();
  gulp.watch(path.scss_src, ['scss']);
});

gulp.task('default', ['watch']);

gulp.task('build', ['scss']);
