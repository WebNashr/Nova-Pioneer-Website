'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var minifycss = require('gulp-minify-css');
var cache = require('gulp-cache');
var rename = require('gulp-rename');
var plumber = require('gulp-plumber');
var es = require('event-stream');
var notify = require('gulp-notify');
var maps = require('gulp-sourcemaps');
var livereload = require('gulp-livereload');

// task: css
gulp.task('css', function () {
    return gulp.src('./assets-src/sass/*.scss')
    .pipe(plumber())
    .pipe(maps.init())
    .pipe(sass({indentedSyntax: true, includePaths: ['./assets-src/sass/*/']}))
    .pipe(autoprefixer(
        'last 2 version',
        'safari 5',
        'ie 8',
        'ie 9',
        'opera 12.1',
        'ios 6',
        'android 4'
    ))
    .pipe(rename({suffix: '.min'}))
    .pipe(minifycss())
    .pipe(plumber.stop())
    .pipe(maps.write('maps'))
    .pipe(gulp.dest('./assets/css'))
    .pipe(livereload())
    .pipe(notify({message: '   ### css TASK COMPLETE ###'}));
});
