var gulp = require('gulp');
var saas = require('gulp-sass');
var uglify = require('gulp-uglifyjs');
var concat = require('gulp-concat');


gulp.task('sass',  done => {
   gulp.src('./dev/styles/*.scss')
       .pipe(saas())
       .pipe(gulp.dest('./css/'));
   done();
});

gulp.task('scripts', done => {
    gulp.src('./dev/scripts/*.js')
        .pipe(uglify({
            compress: {
                unused: false
            }
        }))
        .pipe(gulp.dest('./js/'));
    done();
});


gulp.task('libs',  done => {
    gulp.src('dev/libs/**/*.js')
        .pipe(concat('libs.min.js'))
        .pipe(gulp.dest('./js/'));
    done();
});

gulp.task('watch:sass', function () {
    gulp.watch('./dev/styles/*.scss', ['sass']);
});
