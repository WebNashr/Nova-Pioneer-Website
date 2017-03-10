'use strict';

var gulp = require('gulp');

// task: serve code
gulp.task('build', function() {
    gulp.start('css', 'js', 'copy');
});
