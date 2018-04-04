var autoprefixer, browserSync, concat, config, gulp, imagemin, minify, path, plumber, rename, sass, streamqueue, uglify,changed;

gulp = require('gulp');
sass = require('gulp-sass');
plumber = require('gulp-plumber');
rename = require('gulp-rename');
autoprefixer = require('gulp-autoprefixer');
concat = require('gulp-concat');
uglify = require('gulp-uglify');
imagemin = require('gulp-imagemin');
minify = require('gulp-clean-css');
streamqueue = require('streamqueue');
browserSync = require('browser-sync');
changed = require('gulp-changed');

config = {
	srcDir: './src/'
};

var path = {
	styles: [
		config.srcDir + 'styles/theme.css',
		config.srcDir + 'plugins/bootstrap-4.0.0/dist/css/bootstrap.css',
		config.srcDir + 'plugins/malihu-custom-scrollbar-plugin-master/jquery.mCustomScrollbar.css',
		config.srcDir + 'plugins/bootstrap-wysihtml5-master/src/bootstrap-wysihtml5.css',
		config.srcDir + 'fonts/font-awesome/css/font-awesome.css',
		config.srcDir + 'fonts/foundation-icons/foundation-icons.css',
		config.srcDir + 'fonts/ionicons-master/css/ionicons.css',
		config.srcDir + 'fonts/themify-icons/themify-icons.css',
		config.srcDir + 'plugins/air-datepicker/dist/css/datepicker.css',
		config.srcDir + 'plugins/timedropper/timedropper.css',
		config.srcDir + 'plugins/highlight.js/src/styles/solarized-dark.css',
		config.srcDir + 'plugins/select2/dist/css/select2.css',
		config.srcDir + 'plugins/bootstrap-select/dist/css/bootstrap-select.css',
		config.srcDir + 'styles/style.css',
		config.srcDir + 'styles/media.css',
	],
	scripts: [
		config.srcDir + 'scripts/jquery.min.js',
		config.srcDir + 'scripts/moment.js',
		config.srcDir + 'plugins/bootstrap-4.0.0/dist/js/popper.min.js',
		config.srcDir + 'plugins/bootstrap-4.0.0/dist/js/bootstrap.js',
		config.srcDir + 'plugins/malihu-custom-scrollbar-plugin-master/jquery.mCustomScrollbar.js',
		config.srcDir + 'plugins/wysihtml5-master/dist/wysihtml5-0.3.0.js',
		config.srcDir + 'plugins/bootstrap-wysihtml5-master/src/bootstrap-wysihtml5.js',
		config.srcDir + 'plugins/air-datepicker/dist/js/datepicker.js',
		config.srcDir + 'plugins/air-datepicker/dist/js/i18n/datepicker.en.js',
		config.srcDir + 'plugins/timedropper/timedropper.js',
		config.srcDir + 'plugins/highlight.js/src/highlight.pack.js',
		config.srcDir + 'plugins/select2/dist/js/select2.full.js',
		config.srcDir + 'plugins/bootstrap-select/dist/js/bootstrap-select.js',
		config.srcDir + 'scripts/clipboard.min.js',
		config.srcDir + 'scripts/setting.js'
	],
	fonts: [
		config.srcDir + 'fonts/font-awesome/fonts/*.*',
		config.srcDir + 'fonts/foundation-icons/*.*',
		config.srcDir + 'fonts/ionicons-master/fonts/*.*',
		config.srcDir + 'fonts/themify-icons/fonts/*.*',
		config.srcDir + 'fonts/**/*.*',
	],
	images: 'src/images/**/*.*',
	php: ['*.php']
};

gulp.task('styles', function() {
	var stream;
	stream = streamqueue({objectMode: true});
	stream.queue(gulp.src(path.styles));
	return stream.done()
					.pipe(plumber())
					.pipe(sass())
					.pipe(autoprefixer({browsers: ['last 2 versions'],cascade: false}))
					.pipe(concat('style.css'))
					.pipe(gulp.dest('vendors/styles/'))
					.pipe(minify({keepSpecialComments: 0}))
					.pipe(rename({suffix: '.min'}))
					.pipe(plumber.stop()).pipe(gulp.dest('vendors/styles/')).pipe(browserSync.reload({stream: true}));
});

gulp.task('scripts', function() {
	var stream;
	stream = streamqueue({objectMode: true});
	stream.queue(gulp.src(path.scripts));
	return stream.done()
					.pipe(plumber())
					.pipe(concat('script.js'))
					.pipe(gulp.dest('vendors/scripts/')).pipe(rename({suffix: '.min'}))
					.pipe(uglify())
					.pipe(plumber.stop())
					.pipe(gulp.dest('vendors/scripts/'))
					.pipe(browserSync.reload({stream: true}));
});

gulp.task('images', function() {
	var stream;
	stream = streamqueue({objectMode: true});
	stream.queue(gulp.src(path.images));
	return stream.done()
					.pipe(changed('vendors/images/'))
					.pipe(imagemin({optimizationLevel: 3,progressive: true,interlaced: true}))
					.pipe(gulp.dest('vendors/images/'));
});

gulp.task('php', function() {
	var stream;
	stream = streamqueue({objectMode: true});
	stream.queue(gulp.src(path.php));
	return stream.done()
					.pipe(browserSync.reload({stream: true}));
});

gulp.task('fonts', function() {
	var stream;
	stream = streamqueue({objectMode: true});
	stream.queue(gulp.src(path.fonts));
	return stream.done()
					.pipe(gulp.dest('vendors/fonts/'));
});

gulp.task('connect-sync', ['styles', 'scripts', 'php'], function() {
	browserSync.init({
		proxy: 'localhost/deskapp',
		open: true,
		reloadDelay: 50,
		watchOptions: {
			debounceDelay: 50
		}
	});
	gulp.watch(['src/styles/**/**'], ['styles']);
	gulp.watch(['src/scripts/**/**'], ['scripts']);
	gulp.watch(path.php, ['php']);
	return gulp.watch(['*', 'vendors/**/**'], function(file) {
		if (file.type === "changed") {
			return browserSync.reload(file.path);
		}
	});
});

gulp.task('watch', function(){
	gulp.watch("src/styles/**/*.*", ['styles']);
	gulp.watch("src/fonts/**/*", ['fonts']);
	gulp.watch("src/scripts/**/*.js", ['scripts']);
	//gulp.watch(path.images, ['images']);
});

gulp.task('default', ['styles', 'fonts', 'scripts', 'connect-sync'], function(){
	gulp.watch("src/styles/**/*.*", ['styles']);
	gulp.watch("src/fonts/**/*", ['fonts']);
	gulp.watch("src/scripts/**/*.js", ['scripts']);
	//gulp.watch(path.images, ['images']);
});