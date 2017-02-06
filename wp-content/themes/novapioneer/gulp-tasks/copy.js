
'use strict';

var gulp        = require('gulp');
var plumber     = require('gulp-plumber');
var notify      = require('gulp-notify');
var livereload  = require('gulp-livereload');
var debug       = require('gulp-debug');
var es          = require('event-stream');

// task: copy
gulp.task('copy', function () {

    let sy_loader = gulp.src('./assets-src/js/slippry/images/sy-loader.gif')
        .pipe(debug({ title: 'copy-debug-sy_loader:' }))
        .pipe(gulp.dest('./assets/css/images'));
    
    let arrows = gulp.src('./assets-src/js/slippry/images/arrows.svg')
        .pipe(debug({ title: 'copy-debug-arrows:' }))
        .pipe(gulp.dest('./assets/slippry/images'));
    
    return es.concat(sy_loader, arrows.pipe(livereload())
        .pipe(notify({ message: '   ### COPY TASK COMPLETE ###' })));
    

});
