
'use strict';

var gulp = require('gulp');

var plumber = require('gulp-plumber');
var notify = require('gulp-notify');
var livereload = require('gulp-livereload');
var gulpCopy = require('gulp-copy');
var sourceFiles = [
    './assets-src/slippry/images/arrows.svg',
    './assets-src/slippry/images/sy-loader.gif'
];
var destination = 'assets/js/images';

// task: copy-slippry-images
gulp.task('copy', function () {
    return gulp.src(sourceFiles)
    .pipe(plumber())
    .pipe(gulpCopy('.'))
    .pipe(gulp.dest(destination));
});
