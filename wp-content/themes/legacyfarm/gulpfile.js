'use strict';

var csso = require('gulp-csso');
var del = require('del');
var gulp = require('gulp');
var sass = require('gulp-sass');
var uglify = require('gulp-uglify');
var sourcemaps = require("gulp-sourcemaps");

var paths = {
  sassSrcPath: ['assets/scss/**/*.scss'],
  sassDistPath: ['assets/scss'],
  jsSrcPath: ['assets/js/**/*.js'],
  jsDistPath: ['assets/dist/js/']
}

// Gulp task to minify CSS files
gulp.task('sass', function () {
  return gulp.src(paths.sassSrcPath, { sourcemaps: true })
    .pipe(sourcemaps.init('./'))
    // Compile SASS files
    .pipe(sass({
      outputStyle: 'nested',
      precision: 10,
      includePaths: ['.'],
      onError: console.error.bind(console, 'Sass error:')
    }))
    .pipe(sourcemaps.write('./'))
    // Minify the file
    .pipe(csso())
    // Output
    .pipe(gulp.dest(paths.sassDistPath, { sourcemaps: true }))
});

// Gulp task to minify JavaScript files
gulp.task('js', function() {
  return gulp.src(paths.jsSrcPath, { sourcemaps: true })
    // Minify the file
    .pipe(uglify())
    // Output
    .pipe(gulp.dest(paths.jsDistPath, { sourcemaps: true }))
});

// Clean output directory
gulp.task('clean', () => del(['dist']));



gulp.task('watch', function () {
  gulp.watch(paths.sassSrcPath, gulp.series('sass'));
  gulp.watch(paths.jsSrcPath, gulp.series('js'));
});

// Gulp task to minify all files
gulp.task('default',
  gulp.parallel('js', 'sass')
);
