var gulp    = require('gulp'),
    sass    = require('gulp-ruby-sass'),
    include = require('gulp-include'),
    uglify  = require('gulp-uglify');

// Task Untuk Javascript
gulp.task("script", function(){
    gulp.src('assets/js/admin.js')
        .pipe(include())
        //.pipe(uglify())
        .pipe(gulp.dest('public/js'));
});

// Watcher
gulp.task('watch', function(){
    gulp.watch('assets/js/**/*.js', ['script']);
});

// Task Default
gulp.task("default", ['script','watch']);
