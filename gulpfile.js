const gulp          = require('gulp');
const sass          = require('gulp-sass');
const gutil         = require('gulp-util');
const watch         = require('gulp-watch');
const imagemin      = require('gulp-imagemin');
const minify        = require('gulp-minify');
const plumber       = require('gulp-plumber');
const autoprefixer  = require('gulp-autoprefixer');

/* WATCH */
gulp.task( 'watch', function ()
{
    gutil.log(gutil.colors.red('Watching...'));
    gulp.watch( 'gulp-resources/sass/*.scss', ['sass']);
    gulp.watch( 'gulp-resources/sass/components/*.scss', ['sass']);
    gulp.watch( 'gulp-resources/img/*.*', ['images']);
    gulp.watch( 'gulp-resources/js/*.js', ['js']);
});

/* SASS */
gulp.task('sass', function () {
    return gulp.src('gulp-resources/sass/*.scss')
        .pipe(plumber())
        .pipe(sass(/*{outputStyle: 'compressed'}*/).on('error', sass.logError))
        .pipe(plumber.stop())
        .pipe(gulp.dest('css/'))
});

/* CSS-PREFIX */
gulp.task('css-prefix', function () {
    return gulp.src('css/*.css')
        .pipe(plumber())
        .pipe(autoprefixer({
            browsers: ['last 2 versions'],
            cascade: false
        }))
        .pipe(plumber.stop())
        .pipe(gulp.dest('css/'))
        .pipe(gulp.dest('about/css/'))
        .pipe(gulp.dest('event/css/'))
});

/* IMAGE COMPRESS */
gulp.task('images', ['imagesDefault', 'imagesHosts'], function(){
    gutil.log(gutil.colors.red('Compressing images'));
});

gulp.task('imagesDefault', () =>
    gulp.src('gulp-resources/img/*')
        .pipe(plumber())
        .pipe(imagemin())
        .pipe(plumber.stop())
        .pipe(gulp.dest('img/'))
        //.pipe(gulp.dest('about/img/'))
        //.pipe(gulp.dest('event/img/'))
);

gulp.task('imagesHosts', () =>
    gulp.src('gulp-resources/img/hosts/*')
        .pipe(plumber())
        .pipe(imagemin())
        .pipe(plumber.stop())
        .pipe(gulp.dest('img/hosts'))
);

/* COMPRESS JS */
gulp.task('js', function() {
    gutil.log(gutil.colors.red('Compressing js'));
    gulp.src('gulp-resources/js/*.js')
    .pipe(plumber())
    //.pipe(minify())
    .pipe(gulp.dest('js/'))
    .pipe(gulp.dest('about/js/'))
    .pipe(gulp.dest('event/js/'))
});

/* DEFAULT: GULP */
gulp.task('default', ['sass','css-prefix', 'images', 'js', 'watch']);