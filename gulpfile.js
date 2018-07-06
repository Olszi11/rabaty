var gulp = require('gulp');
var babel = require('gulp-babel');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var browserSync = require('browser-sync');
var useref = require('gulp-useref');
var uglify = require('gulp-uglify');
var gulpIf = require('gulp-if');
var cssnano = require('gulp-cssnano');
var imagemin = require('gulp-imagemin');
var del = require('del');
var runSequence = require('run-sequence');
var concat = require('gulp-concat');
var notify = require('gulp-notify');
var connect = require('gulp-connect-php');

// JS related Tasks

gulp.task('es', function() {
  return gulp.src(['assets/es/**/*.js'])
    .pipe(babel({presets: ['env']}))
    .pipe(gulp.dest('assets/js'));
});

gulp.task('cleanjs', function() {
  return del(['assets/js/all.min.js']);
});

gulp.task('scripts', ['es', 'cleanjs'], function() {
  return gulp.src([
    'assets/js/jquery*.js',
    'assets/js/bootstrap*.js',
    'assets/js/swiper*.js',
    'assets/js/main.js'
    ])
    .pipe(concat('all.min.js', {newLine: '\n;'}))
    .pipe(gulp.dest('assets/js'))
    .pipe(browserSync.reload({
      stream: true
    }));
});

// CSS related tasks

gulp.task('sass', function() {
  return gulp.src('assets/scss/**/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(autoprefixer({
      browsers: ['last 2 versions'],
      cascade: false
    }))
    .pipe(gulp.dest('assets/css'));
})

gulp.task('cleancss', function() {
  return del.sync(['assets/css/all.min.css'])
});

gulp.task('css', ['sass', 'cleancss'], function() {
  return gulp.src(['assets/css/!(main)*.css', 'assets/css/main.css'])
    .pipe(concat('all.min.css'))
    .pipe(gulp.dest('assets/css'))
    .pipe(browserSync.reload({
      stream: true
    }));
});

// Open up the server

gulp.task('serve', function() {
  connect.server({}, function (){
    browserSync({
      proxy: '127.0.0.1:8000'
    });
  });

  gulp.watch(['assets/scss/**/*.scss'], ['css']);
  gulp.watch(['assets/js/!main*.js', 'assets/es/**/*.js'], ['scripts']);
  gulp.watch('**/*.php').on('change', function () {
    browserSync.reload();
  });
})
gulp.task('default', ['serve']);

// Dist version of project

gulp.task('clean', function() {
  return del.sync(['dist/**/*']);
});

gulp.task('move', function() {
  return gulp.src('*.+(png|xml|php|ico|jpg|svg|webmanifest|htaccess)')
    .pipe(gulp.dest('dist/'));
});

gulp.task('movecss', function() {
  return gulp.src(['assets/css/all.min.css'])
    .pipe(gulp.dest('dist/assets/css'));
});

gulp.task('movecsslibs', function() {
  return gulp.src(['assets/css/lib/**/*.css'])
    .pipe(gulp.dest('dist/assets/css'));
});

gulp.task('movejs', function() {
  return gulp.src(['assets/js/all.min.js'])
    .pipe(uglify())
    .pipe(gulp.dest('dist/assets/js'));
});

gulp.task('movejslibs', function() {
  return gulp.src(['assets/js/lib/**/*.js'])
    .pipe(gulp.dest('dist/assets/js'));
});

gulp.task('img', function() {
  return gulp.src('assets/img/**/*')
    // .pipe(imagemin({
    //   interlaced: true,
    //   progressive: true,
    //   optimizationLevel: 7,
    //   svgoPlugins: [{removeViewBox: true}]
    // }))
    .pipe(gulp.dest('dist/assets/img'))
});

gulp.task('moveinc', function() {
  return gulp.src(['inc/**/*.php'])
    .pipe(gulp.dest('dist/inc'));
});

gulp.task('movemodules', function() {
  return gulp.src(['modules/**/*.php'])
    .pipe(gulp.dest('dist/modules'));
});

gulp.task('movetemplates', function() {
  return gulp.src(['templates/**/*.php'])
    .pipe(gulp.dest('dist/templates'));
});

gulp.task('moveuploads', function() {
  return gulp.src(['uploads/**/*'])
    .pipe(gulp.dest('dist/uploads'));
});

gulp.task('movewebfonts', function() {
  return gulp.src(['assets/webfonts/**/*'])
    .pipe(gulp.dest('dist/assets/webfonts'));
});

gulp.task('build', function(callback) {
  runSequence(
    'clean',
    'move',
    ['movecss', 'movecsslibs', 'movejs', 'movejslibs'],
    'moveinc',
    'movemodules',
    'movetemplates',
    'moveuploads',
    'movewebfonts',
    'img',
    callback
  )
});
