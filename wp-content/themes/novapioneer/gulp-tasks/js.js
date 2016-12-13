'use strict';

var gulp = require('gulp');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var cache = require('gulp-cache');
var rename = require('gulp-rename');
var maps = require('gulp-sourcemaps');
var plumber = require('gulp-plumber');
var es = require('event-stream');
var notify = require('gulp-notify');
var livereload = require('gulp-livereload');

// task: js
gulp.task('js', function () {
    return gulp.src([
        'bower_components/jquery/dist/jquery.min.js',
        'bower_components/bowser/src/bowser.js',
        'bower_components/flexibility/flexibility.js',
        'bower_components/waypoints/lib/jquery.waypoints.min.js',
        'assets-src/js/bowser.js',
        'assets-src/js/scripts.js'
    ])
    .pipe(plumber())
    .pipe(concat('main.js'))
    .pipe(rename({suffix: '.min'}))
    .pipe(uglify())
    .pipe(maps.init())
    .pipe(plumber.stop())
    .pipe(maps.write('maps'))
    .pipe(gulp.dest('./assets/js'))
    .pipe(livereload())
    .pipe(notify({message: '   ### JS TASK COMPLETE ###'}));
});
