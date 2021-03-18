const gulp = require('gulp');
const sass = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer');
const browserSync = require('browser-sync').create();
const concat = require('gulp-concat');
const uglify = require('gulp-uglify');

function compilarSass() {
    return gulp
        .src('styles/styles.scss')
        .pipe(sass({
            outputStyle: 'compressed'
        }))
        .pipe(autoprefixer({
            Browserslist: ['last 2 versions'],
            cascade: false
        }))
        .pipe(gulp.dest('assets/css'))
        .pipe(browserSync.stream());
}

gulp.task('sass', compilarSass);



function gulpJS() {
    return gulp.src([
        'node_modules/@popperjs/core/dist/umd/popper.min.js',
        'node_modules/jquery/dist/jquery.min.js',
        'node_modules/bootstrap/dist/js/bootstrap.min.js',
        'scripts/link-scroll.js',
        'scripts/scroll.js',
        'scripts/formulario-send.js',
        'scripts/formulario-download.js',
        'scripts/lightbox-video.js'

    ])

        .pipe(concat('main.js'))
        .pipe(uglify('main.js'))
        .pipe(gulp.dest('assets/js'))
        .pipe(browserSync.stream());
}

gulp.task('mainjs', gulpJS);


function watchproject() {
    gulp.watch('styles/*.scss', compilarSass);
    gulp.watch('scripts/*.js', gulpJS);
}

gulp.task('watch', watchproject);


gulp.task('default', gulp.parallel('watch', 'sass', 'mainjs'));