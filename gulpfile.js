var autoprefixer,
	browserSync,
	concat,
	config,
	gulp,
	imagemin,
	minify,
	path,
	plumber,
	rename,
	sass,
	streamqueue,
	uglify,
	changed,
	reload;

gulp = require("gulp");
sass = require("gulp-sass");
csso = require("gulp-csso");
plumber = require("gulp-plumber");
rename = require("gulp-rename");
autoprefixer = require("gulp-autoprefixer");
concat = require("gulp-concat");
uglify = require("gulp-uglify");
imagemin = require("gulp-imagemin");
minify = require("gulp-clean-css");
streamqueue = require("streamqueue");
browserSync = require("browser-sync").create();
changed = require("gulp-changed");
reload = browserSync.reload;

config = {
	nodeDir: "./node_modules/",
};

var path = {
	styles: [
		"src/styles/theme.css",
		"src/styles/style.css",
		"src/styles/media.css",
	],
	corestyle: [
		"src/plugins/bootstrap/bootstrap.min.css",
		"src/plugins/malihu-custom-scrollbar-plugin-master/jquery.mCustomScrollbar.css",
		"src/plugins/bootstrap-wysihtml5-master/bootstrap-wysihtml5.css",
		"src/plugins/air-datepicker/dist/css/datepicker.css",
		"src/plugins/timedropper/timedropper.css",
		"src/plugins/highlight.js/src/styles/solarized-dark.css",
		"src/plugins/select2/dist/css/select2.css",
		"src/plugins/bootstrap-select/bootstrap-select.min.css",
	],
	icon_styles: [
		"src/fonts/bootstrap/bootstrap-icons.css",
		"src/fonts/dropways/dropways.css",
		"src/fonts/font-awesome/css/font-awesome.css",
		"src/fonts/foundation-icons/foundation-icons.css",
		"src/fonts/ionicons-master/css/ionicons.css",
		"src/fonts/themify-icons/themify-icons.css",
	],
	scripts: ["src/scripts/setting.js"],
	core: [
		"src/scripts/jquery.min.js",
		"src/plugins/bootstrap/popper.min.js",
		"src/plugins/bootstrap/bootstrap.min.js",
		"src/scripts/moment.js",
		"src/plugins/malihu-custom-scrollbar-plugin-master/jquery.mCustomScrollbar.js",
		"src/plugins/wysihtml5-master/dist/wysihtml5-0.3.0.js",
		"src/plugins/bootstrap-wysihtml5-master/bootstrap-wysihtml5.js",
		"src/plugins/air-datepicker/dist/js/datepicker.js",
		"src/plugins/air-datepicker/dist/js/i18n/datepicker.en.js",
		"src/plugins/timedropper/timedropper.js",
		"src/plugins/highlight.js/src/highlight.pack.js",
		"src/plugins/select2/dist/js/select2.full.js",
		"src/plugins/bootstrap-select/bootstrap-select.min.js",
		"src/scripts/clipboard.min.js",
	],
	fonts: [
		"src/fonts/bootstrap/fonts/*.*",
		"src/fonts/dropways/*.*",
		"src/fonts/font-awesome/fonts/*.*",
		"src/fonts/foundation-icons/*.*",
		"src/fonts/ionicons-master/fonts/*.*",
		"src/fonts/themify-icons/fonts/*.*",
		"src/fonts/**/*.*",
	],
	images: "src/images/**/*.*",
	php: ["*.html"],
};

gulp.task("styles", function () {
	var stream;
	stream = streamqueue({
		objectMode: true,
	});
	stream.queue(gulp.src(path.styles));
	return stream
		.done()
		.pipe(plumber())
		.pipe(sass())
		.pipe(csso())
		.pipe(autoprefixer({ browsers: ["last 2 versions"], cascade: false }))
		.pipe(concat("style.css"))
		.pipe(gulp.dest("vendors/styles/"))
		.pipe(minify({ keepSpecialComments: 0 }))
		.pipe(rename({ suffix: ".min" }))
		.pipe(plumber.stop())
		.pipe(gulp.dest("vendors/styles/"))
		.pipe(browserSync.reload({ stream: true }));
});

gulp.task("corestyle", function () {
	var stream;
	stream = streamqueue({
		objectMode: true,
	});
	stream.queue(gulp.src(path.corestyle));
	return stream
		.done()
		.pipe(plumber())
		.pipe(sass())
		.pipe(csso())
		.pipe(autoprefixer({ browsers: ["last 2 versions"], cascade: false }))
		.pipe(concat("core.css"))
		.pipe(gulp.dest("vendors/styles/"))
		.pipe(minify({ keepSpecialComments: 0 }))
		.pipe(rename({ suffix: ".min" }))
		.pipe(plumber.stop())
		.pipe(gulp.dest("vendors/styles/"))
		.pipe(browserSync.reload({ stream: true }));
});

gulp.task("icon_styles", function () {
	var stream;
	stream = streamqueue({
		objectMode: true,
	});
	stream.queue(gulp.src(path.icon_styles));
	return stream
		.done()
		.pipe(plumber())
		.pipe(sass())
		.pipe(csso())
		.pipe(autoprefixer({ browsers: ["last 2 versions"], cascade: false }))
		.pipe(concat("icon-font.css"))
		.pipe(gulp.dest("vendors/styles/"))
		.pipe(minify({ keepSpecialComments: 0 }))
		.pipe(rename({ suffix: ".min" }))
		.pipe(plumber.stop())
		.pipe(gulp.dest("vendors/styles/"))
		.pipe(browserSync.reload({ stream: true }));
});

gulp.task("scripts", function () {
	var stream;
	stream = streamqueue({
		objectMode: true,
	});
	stream.queue(gulp.src(path.scripts));
	return stream
		.done()
		.pipe(plumber())
		.pipe(concat("script.js"))
		.pipe(gulp.dest("vendors/scripts/"))
		.pipe(rename({ suffix: ".min" }))
		.pipe(uglify())
		.pipe(plumber.stop())
		.pipe(gulp.dest("vendors/scripts/"))
		.pipe(browserSync.reload({ stream: true }));
});

gulp.task("core", function () {
	var stream;
	stream = streamqueue({
		objectMode: true,
	});
	stream.queue(gulp.src(path.core));
	return stream
		.done()
		.pipe(plumber())
		.pipe(concat("core.js"))
		.pipe(gulp.dest("vendors/scripts/"))
		.pipe(rename({ suffix: ".min" }))
		.pipe(uglify())
		.pipe(plumber.stop())
		.pipe(gulp.dest("vendors/scripts/"))
		.pipe(browserSync.reload({ stream: true }));
});

gulp.task("php", function () {
	var stream;
	stream = streamqueue({
		objectMode: true,
	});
	stream.queue(gulp.src(path.php));
	return stream.done().pipe(browserSync.reload({ stream: true }));
});

gulp.task("fonts", function () {
	var stream;
	stream = streamqueue({
		objectMode: true,
	});
	stream.queue(gulp.src(path.fonts));
	return stream.done().pipe(gulp.dest("vendors/fonts/"));
});

gulp.task("images", function () {
	var stream;
	stream = streamqueue({
		objectMode: true,
	});
	stream.queue(gulp.src(path.images));
	return stream
		.done()
		.pipe(changed("vendors/images/"))
		.pipe(
			imagemin({
				optimizationLevel: 3,
				progressive: true,
				interlaced: true,
				svgoPlugins: [{ removeViewBox: false }],
			})
		)
		.pipe(gulp.dest("vendors/images/"));
});

gulp.task("connect-sync", function (done) {
	browserSync.reload();
	done();
	browserSync.init({
		proxy: "localhost/deskapp", // Change this value to match your local URL.
		socket: {
			domain: "localhost:3000",
		},
	});
	gulp.watch("*.html").on("change", reload);
	gulp.watch("src/styles/**/*.css").on("change", reload);
	gulp.watch("src/plugins/**/*.css").on("change", reload);
});

gulp.task("watch", function () {
	gulp.watch("src/styles/**/*.*", gulp.series("styles"));
	gulp.watch("src/styles/**/*.*", gulp.series("corestyle"));
	gulp.watch("src/fonts/**/*", gulp.series("fonts"));
	gulp.watch("src/scripts/**/*.js", gulp.series("scripts"));
	gulp.watch("src/core/**/*.js", gulp.series("core"));
});

gulp.task(
	"default",
	gulp.series(
		gulp.parallel(
			["styles"],
			"corestyle",
			"fonts",
			"scripts",
			"core",
			"icon_styles",
			["connect-sync"]
		),
		function () {
			gulp.watch("src/styles/**/*.css", gulp.series("styles"));
			gulp.watch("src/fonts/**/*", gulp.series("fonts"));
			gulp.watch("src/styles/**/*.*", gulp.series("corestyle"));
			gulp.watch("src/scripts/**/*.js", gulp.series("scripts"));
			gulp.watch("src/scripts/**/*.js", gulp.series("core"));
			gulp.watch("src/fonts/**/*.*", gulp.series("icon_styles"));
		}
	)
);
