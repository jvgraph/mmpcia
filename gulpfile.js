'use strict';
 
var gulp = require('gulp');
var sass = require('gulp-sass');
var livereload = require('gulp-livereload');

gulp.task('sass', function () {
  return gulp.src('sass/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('./css'))
    .pipe(livereload());
});
 
gulp.task('watch', function () {
  livereload.listen();
  gulp.watch('**/*.php').on('change', function(file) {
          livereload.changed(file.path);
      });
  gulp.watch(['sass/*.scss', 'sass/partials/*.scss'], ['sass']);
});

gulp.task('default', ['sass', 'watch']);