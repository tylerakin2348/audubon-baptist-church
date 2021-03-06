'use strict';
var gulp = require('gulp');
var sass = require('gulp-sass');
gulp.task('sass', function(){
  return gulp.src('assets/scss/**/*.scss')
    .pipe(sass()) // Using gulp-sass
    .pipe(gulp.dest('assets/scss/'))
});
gulp.task('sass:watch', function() {
  gulp.watch('assets/scss/**/*.scss', gulp.series('sass'));
  // gulp.watch('app/js/*.js', gulp.series('scripts'));
  // gulp.watch('app/img/*', gulp.series('images'));
});
