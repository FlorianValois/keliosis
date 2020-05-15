var gulp         = require('gulp');

var sourcemaps   = require('gulp-sourcemaps');
var sass         = require('gulp-sass');
var rename       = require('gulp-rename');

var streamqueue  = require('streamqueue');
var uglify       = require('gulp-uglify');
var concat       = require('gulp-concat');
  
gulp.task('style', function () {
  return gulp.src([
    // BASE
    'node_modules/bootstrap/scss/bootstrap.scss',
    // THEME
    'assets/scss/style.scss'
  ])
	.pipe(sourcemaps.init())
	.pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
	.pipe(sourcemaps.write(''))
	.pipe(rename({
		basename: "style",
		suffix: '.min'
	}))
	.pipe(gulp.dest('./'));
});

gulp.task('script', function() {
	return streamqueue({ objectMode: true },
      gulp.src([
        // BASE
        'node_modules/jquery/dist/jquery.js',
        'node_modules/bootstrap/dist/js/bootstrap.js',
        // PLUGIN
        'node_modules/sweetalert2/dist/sweetalert2.all.js',
        // THEME
        'assets/js/**/*.js'
      ]),
	)
//	.pipe(uglify())
	.pipe(concat('script.min.js'))
	.pipe(gulp.dest('./'))
});
 
gulp.task('default', async function () {
  gulp.watch( 'assets/scss/**/*.scss', gulp.series('style') );
  gulp.watch( 'assets/js/**/*.js', gulp.series('script') );
});