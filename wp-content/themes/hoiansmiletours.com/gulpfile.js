const gulp = require('gulp')
const purgecss = require('gulp-purgecss')
const cssnano = require('cssnano');
const autoprefixer = require('autoprefixer');
const rename = require('gulp-rename');
const postcss = require('gulp-postcss');
var concatCss = require('gulp-concat-css');
var purgecssWordpress = require('purgecss-with-wordpress')

gulp.task('watch', () => {
    gulp.watch([
        '**/*.css',
        '**/*.php',
    ], function() {
        gulp.series('concat');
    });
});

gulp.task('purge', () => {
    return gulp
        .src([
            '**/*.css',
            '!**/input.css',
            '!**/output.css',
            '!node_modules/**/*',
            '!dist/**/*'
        ])
        .pipe(purgecss({
            content: ['**/*.js', '**/*.php'],
            safelist: purgecssWordpress.safelist
        }))
        .pipe(concatCss("bundle.css"))
        .pipe(gulp.dest('assets/dist'));
});

gulp.task('all', () => {
    return gulp
        .src([
            '**/*.css',
            '!**/input.css',
            '!**/output.css',
            '!node_modules/**/*',
            '!dist/**/*'
        ])
        // .pipe(purgecss({
        //     content: ['**/*.js', '**/*.php'],
        //     safelist: purgecssWordpress.safelist
        // }))
        .pipe(concatCss("bundle.css"))
        .pipe(gulp.dest('assets/dist'));
});

gulp.task('concat', () => {
    return gulp.src([
        '**/bundle.css',
        '**/output.css',
    ])
        .pipe(concatCss("bundle-concat.css"))
        .pipe(postcss([autoprefixer(), cssnano()]))
        .pipe(rename({
            extname: '.min.css'
        }))
        .pipe(gulp.dest('assets/dist'));
});