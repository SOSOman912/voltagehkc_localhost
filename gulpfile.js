const gulp = require('gulp');
const uglify = require('gulp-uglify');
const sass = require('gulp-sass')(require('sass'));
const concat = require('gulp-concat');
const sourcemaps = require('gulp-sourcemaps');
const cssnano = require('gulp-cssnano');
const autoprefixer = require('gulp-autoprefixer');
const path = 'themes/voltage/assets/';
const theme = 'themes/windmaker/';

gulp.task('minify', done => {
	gulp.series('process-js')
	gulp.src(path + 'js/all.js')
	.pipe(uglify())
	.pipe(gulp.dest(path +'js/'));

	gulp.src(path + 'js/*.compiled.js')
	.pipe(uglify())
	.pipe(gulp.dest(path +'js/'));

	gulp.src(path + 'css/app.css')
	.pipe(cssnano())
	.pipe(gulp.dest(path +'css/'));

	done();
})

gulp.task('process-sass', done => {
    gulp.src([
    	path + 'sass/custom.scss',
    ])
    .pipe(sourcemaps.init())
    .pipe(sass().on('error', sass.logError))
    // .pipe(cssnano())
    .pipe(autoprefixer('last 2 versions'))
    .pipe(sourcemaps.write())
    .pipe(concat('custom2.css'))
    .pipe(gulp.dest(path + 'css/'))

    done();
});

gulp.task('process-js', done => {
    gulp.src([
		path + 'js/jquery-3.6.0.min.js',
		path + 'js/jquery.easing.1.3.js',
		path + 'js/swiper-bundle.min.js',
		path + 'js/jquery.fancybox.min.js',
		path + 'js/jquery.scrollTo.min.js',
		path + 'js/jquery.cookie.js',
		path + 'js/momentum.min.js',
		path + 'js/aos.js',
		path + 'js/gsap.min.js',
		path + 'js/scrollmagic/uncompressed/ScrollMagic.js',
		path + 'js/scrollmagic/uncompressed/plugins/animation.gsap.js',
		path + 'js/scrollmagic/uncompressed/plugins/debug.addIndicators.js',
		path + 'js/function.js',
		path + 'js/init.js',
	])
	.pipe(sourcemaps.init())
	// .pipe(uglify())
	.pipe(sourcemaps.write())
	.pipe(concat('all.js'))
    .pipe(gulp.dest(path +'js/'))

    done();
});

gulp.task('html', done => {
    gulp.src(theme + '**/*.htm')
    .pipe(livereload());

    done();
});

gulp.task('default', () => {
	// gulp.watch(
    //     [path + 'js/init.js'],
    //     { ignoreInitial: false },
    //     gulp.series('process-js')
    // )

	gulp.watch(
        [path + 'sass/custom.scss'],
        { ignoreInitial: false },
        gulp.series('process-sass')
    )
})