'use strict';

var gulp = require('gulp');
var livereload = require('gulp-livereload');

// task: watch
gulp.task('watch', function () {
    livereload.listen();
    gulp.watch('assets-src/sass/**/*.{scss,css}', ['css']).on('change', livereload.changed);
    gulp.watch('assets-src/js/**/*.js', ['js']).on('change', livereload.changed);
});
