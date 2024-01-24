var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('build-css', function() { 
	return gulp.src('./styles/dev/styles.scss')
	.pipe(sass({
		outputStyle: 'compressed'
	}))
	.pipe(gulp.dest('./styles/prod'))
});

gulp.task('watch', function() {
	gulp.watch('./styles/dev/**/*.scss', ['build-css']);
});

