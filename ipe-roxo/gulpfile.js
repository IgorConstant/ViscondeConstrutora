const gulp = require('gulp');
const sass = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer');
const browserSync = require('browser-sync');
const concat = require('gulp-concat');
const uglify = require('gulp-uglify');
const connect = require('gulp-connect-php');
const imagemin = require('gulp-imagemin');


function connectPHP() {
    connect.server({}, function () {
        browserSync({
            proxy: '127.0.0.1:8000'
        });
    })
}

gulp.task('boraconectar', connectPHP);

function compilarSass() {
    return gulp
        .src('styles/main.scss')
        .pipe(sass({
            outputStyle: 'compressed'
        }))
        .pipe(autoprefixer({
            Browserlist: ['last 2 versions'],
            cascade: false
        }))
        .pipe(gulp.dest('assets/css'))
        .pipe(browserSync.stream());
}
gulp.task('sass', compilarSass);

function gulpJS() {
    return gulp.src([
        'scripts/jquery.js',
        'node_modules/uikit/dist/js/uikit-core.min.js',
        'node_modules/uikit/dist/js/uikit.min.js',
        'scripts/fontawesome.js'
    ])

        .pipe(concat('main.js'))
        .pipe(uglify('main.js'))
        .pipe(gulp.dest('assets/js'))
        .pipe(browserSync.stream());
}
gulp.task('mainjs', gulpJS);


function minImage() {
    return gulp
        .src('assets/images/*')
        .pipe(gulp.dest("assets/images/minify"))
        .pipe(imagemin({
            interlaced: true,
            progressive: true,
            optimizationLevel: 5,
            quality: 75,
            svgoPlugins: [
                {
                    removeViewBox: true
                }
            ]
        }))
}
gulp.task('squashimg', minImage);


function watchproject() {
    gulp.watch('styles/*.scss', compilarSass);
    gulp.watch('scripts/*.js', gulpJS);
    gulp.watch('assets/images/*', minImage);
    gulp.watch('*.php', connectPHP).on('change', function () {
        browserSync.reload();
    });
}
gulp.task('watch', watchproject);

gulp.task('default', gulp.parallel('watch', 'sass', 'mainjs', 'boraconectar', 'squashimg'));