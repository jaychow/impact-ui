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
    gutil = require('gulp-util'),
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


// Where do you store your Sass files?
var lessDir = 'webarch/less';

// Which directory should LESS compile to?
var targetCSSDir = 'assets/css';


// CSS
gulp.task('style', function(done){
    var stream = gulp.src(lessDir + '/style.less')
        .pipe(less({ style: 'compressed' }).on('error', gutil.log))
        //.pipe(autoprefix('last 10 version'))
        .pipe(gulp.dest(targetCSSDir))
        .pipe(notify('CSS minified'));
    done();
});
gulp.task('style-v1', function(done){
    var stream1 = gulp.src(lessDir + '/style-v1.less')
        .pipe(less({ style: 'compressed' }).on('error', gutil.log))
        //.pipe(autoprefix('last 10 version'))
        .pipe(gulp.dest(targetCSSDir))
        .pipe(notify('CSS minified'));

    done();
});
gulp.task('style-v2', function (done) {

    var stream2 = gulp.src(lessDir + '/style-v2.less')
        .pipe(less({ style: 'compressed' }).on('error', gutil.log))
        //.pipe(autoprefix('last 10 version'))
        .pipe(gulp.dest(targetCSSDir))
        .pipe(notify('CSS minified'));

    done();
});

gulp.task('style-v3', function(done){
    var stream3 = gulp.src(lessDir + '/style-v3.less')
        .pipe(less({ style: 'compressed' }).on('error', gutil.log))
        //.pipe(autoprefix('last 10 version'))
        .pipe(gulp.dest(targetCSSDir))
        .pipe(notify('CSS minified'));

    done();
});

// Rimraf
gulp.task('rimraf', function () {

    return gulp
        .src(['assets/css'], {read: false})
        .pipe(rimraf());
});

// Default task
gulp.task('default', ['rimraf'], function () {
    gulp.start(['style', 'style-v1', 'style-v2', 'style-v3']);
});

// Watch
gulp.task('watch', function () {

    // Watch .less files
    gulp.watch([
        'webarch/less/style.less'
    ], ['style']);
    gulp.watch([
        'webarch/less/style-v1.less',
        'webarch/less/themes/v1/*.less',
    ], ['style-v1']);
    gulp.watch([
        'webarch/less/style-v2.less',
        'webarch/less/themes/v2/*.less',
    ], ['style-v2']);
    gulp.watch([
        'webarch/less/style-v3.less',
        'webarch/less/themes/v3/*.less',
    ], ['style-v3']);


    //// Create LiveReload server
    var server = livereload();

    //// Watch any files in , reload on change
    gulp.watch(['assets/css/style.css', 'assets/css/style-v1.css','assets/css/style-v2.css','assets/css/style-v3.css']).on('change', function (file) {
        server.changed(file.path);
    });

});
