var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');

var sassPaths = [
];

var paths = {
    styles_sass: [
        
    ],
    js: [
        'node_modules/angular/angular.js'
    ]
};

var paths_dest = {
    styles_sass: 'public/css',
    js: 'public/js'
};

gulp.task('js', function () {
    return gulp.src(paths.js)
        .pipe(concat('all.js'))
        .pipe(uglify({mangle: false}))
        .pipe(gulp.dest(paths_dest.js));
});

gulp.task('sass', function() {
    return gulp.src('resources/assets/sass/app.scss')
        .pipe(sass({
                includePaths: paths.styles_sass
            })
            .on('error', sass.logError))
        .pipe(autoprefixer({
            browsers: ['last 2 versions', 'ie >= 9']
        }))
        .pipe(gulp.dest(paths_dest.styles_sass));
});

gulp.task('default', ['sass'], function() {
    gulp.watch(['scss/**/*.scss'], ['sass']);
});

gulp.task('ci', ['sass', 'js']);