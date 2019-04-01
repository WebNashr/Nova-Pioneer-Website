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
var debug = require('gulp-debug');

// task: js
gulp.task('js', function () {
    return gulp.src([
        /* 'bower_components/jquery/dist/jquery.min.js', */ /* Will register jquery separately on functions.php and include in header instead of footer. */
        './bower_components/bowser/src/bowser.js',
        './bower_components/flexibility/flexibility.js',
        './bower_components/waypoints/lib/jquery.waypoints.min.js',
        './assets-src/js/slippry/slippry.min.js',
        './assets-src/js/bowser.js',
        './assets-src/js/scripts.js',
        './assets-src/js/lightslider/lightslider.js',
        './assets-src/js/inview.js',
        // './assets-src/js/parallax-effect.js'
    ])
    .pipe(debug({title:'js-debug:'}))
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
