/**
 * The MIT License (MIT)
 *
 * Copyright (c) 2011-2014 Webcomm Pty Ltd
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

// Load plugins
var
    gulp = require('gulp'),
    less = require('gulp-less-sourcemap'),
    minifycss = require('gulp-minify-css'),
    uglify = require('gulp-uglify'),
    rimraf = require('gulp-rimraf'),
    concat = require('gulp-concat'),
    notify = require('gulp-notify'),
    cache = require('gulp-cache'),
    livereload = require('gulp-livereload');
path = require('path');

var config = {

    // If you do not have the live reload extension installed,
    // set this to true. We will include the script for you,
    // just to aid with development.
    appendLiveReload: true,

    // Should CSS & JS be compressed?
    minifyCss: false,
    uglifyJS: false
}

// CSS
gulp.task('css', function (done) {
    var stream1 = gulp
        .src('webarch/less/style-v1.less')
        .pipe(less().on('error', notify.onError(function (error) {
            return 'Error compiling style LESS: ' + error.message;
        })))
        .pipe(less({
            sourceMap: {
                sourceMapRootpath: '../src/less/'
            }
        }))
        .pipe(gulp.dest('assets/css'));

    if (config.minifyCss === true) {
        stream1.pipe(minifycss());
    }

    stream1
        .pipe(notify({
            message: 'Successfully compiled style LESS'
        }));

    var stream2 = gulp
        .src('webarch/less/style-v2.less')
        .pipe(less().on('error', notify.onError(function (error) {
            return 'Error compiling style LESS: ' + error.message;
        })))
        .pipe(less({
            sourceMap: {
                sourceMapRootpath: '../src/less/'
            }
        }))
        .pipe(gulp.dest('assets/css'));

    if (config.minifyCss === true) {
        stream2.pipe(minifycss());
    }

    stream2
        .pipe(notify({
            message: 'Successfully compiled style LESS'
        }));

    var stream3 = gulp
        .src('webarch/less/style-v3.less')
        .pipe(less().on('error', notify.onError(function (error) {
            return 'Error compiling style LESS: ' + error.message;
        })))
        .pipe(less({
            sourceMap: {
                sourceMapRootpath: '../src/less/'
            }
        }))
        .pipe(gulp.dest('assets/css'));

    if (config.minifyCss === true) {
        stream3.pipe(minifycss());
    }

    stream3
        .pipe(notify({
            message: 'Successfully compiled style LESS'
        }));

    done();
});

// Rimraf
gulp.task('rimraf', function () {

    return gulp
        .src(['css'], {read: false})
        .pipe(rimraf());
});

// Default task
gulp.task('default', ['rimraf'], function () {
    gulp.start('css');
});

// Watch
gulp.task('watch', function () {

    // Watch .less files
    gulp.watch([
        'webarch/less/**/*.less'
    ], ['css']);

    //// Create LiveReload server
    var server = livereload();

    //// Watch any files in , reload on change
    gulp.watch(['assets/css/style-test.css']).on('change', function (file) {
        server.changed(file.path);
    });

});
