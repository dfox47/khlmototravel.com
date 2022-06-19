
// npm i --save-dev gulp-concat gulp-csso vinyl-ftp gulp gulp-util gulp-newer gulp-rename gulp-sass gulp-uglify

let fs          = require('fs')
let concat      = require('gulp-concat')
let config      = JSON.parse(fs.readFileSync('../config.json'))
let cssMinify   = require('gulp-csso')
let ftp         = require('vinyl-ftp')
let gulp        = require('gulp')
let gutil       = require('gulp-util')
let newer       = require('gulp-newer')
let rename      = require('gulp-rename')
let sass        = require('gulp-sass')(require('sass'))
let uglify      = require('gulp-uglify')

// FTP config
let host        = config.host
let password    = config.password
let port        = config.port
let user        = config.user

let remoteFolder        = '/public_html/wp-content/themes/khl/'
let remoteFolderPress   = '/public_html/wp-content/themes/generatepress/'
let remoteFolderCss     = remoteFolder + 'css/'
let remoteFolderJs      = remoteFolder + 'js/'

let localFolder         = 'wp-content/themes/khl/'
let localFolderPress    = 'wp-content/themes/generatepress/'
let localFolderCss      = localFolder + 'css/'
let localFolderJs       = localFolder + 'js/'

function getFtpConnection() {
	return ftp.create({
		host:           host,
		log:            gutil.log,
		password:       password,
		parallel:       3,
		port:           port,
		user:           user
	});
}

let conn = getFtpConnection()

gulp.task('css', function () {
	return gulp.src(localFolderCss + 'styles.scss')
		.pipe(sass())
		.pipe(cssMinify())
		.pipe(rename({
			basename: 'style'
			// suffix: ".min"
		}))
		.pipe(conn.dest(remoteFolder))
})

gulp.task('copy_css', function () {
	return gulp.src(localFolderCss + '*')
		.pipe(conn.dest(remoteFolderCss))
})

gulp.task('copy_html', function () {
	return gulp.src(localFolder + '*.php')
		.pipe(newer(remoteFolder))
		.pipe(conn.dest(remoteFolder))
})

gulp.task('copy_html_press', function () {
	return gulp.src(localFolderPress + '*.php')
		.pipe(newer(remoteFolder))
		.pipe(conn.dest(remoteFolderPress));
});



gulp.task('copy_js', function () {
	return gulp.src(localFolderJs + '**/*.js')
		.pipe(conn.dest(remoteFolderJs))
})

gulp.task('js', function () {
	return gulp.src([
		// localFolderJs + 'jquery.3.2.1.js',
		localFolderJs + 'owl.carousel.js',
		localFolderJs + '**/*.js'
	])
		.pipe(concat('all.js'))
		// .pipe(uglify())
		.pipe(rename({
			suffix: ".min"
		}))
		.pipe(conn.dest(remoteFolder))
})

gulp.task('watch', function() {
	gulp.watch(localFolder + '*.php',           gulp.series('copy_html'))
	gulp.watch(localFolderPress + '*.php',      gulp.series('copy_html_press'))
	gulp.watch(localFolderCss + '**/*',         gulp.series('css', 'copy_css'))
	// gulp.watch(localFolderJs + '**/*.js',       gulp.series('js', 'copy_js'))
	gulp.watch(localFolderJs + '**/*.js',       gulp.series('copy_js'))
})

gulp.task('default', gulp.series(
	'watch'
))
