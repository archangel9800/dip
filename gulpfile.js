var gulp = require('gulp'),
	includer = require('gulp-htmlincluder'),
	sourcemap = require('gulp-sourcemaps'),
	sass = require('gulp-sass'),
    concat = require('gulp-concat'),
    browserSync = require('browser-sync'),
    reload = browserSync.reload,
    spritesmith = require('gulp.spritesmith');
var using = 'php';



 
gulp.task('sprite', function () {
  var spriteData = gulp.src('dev/img/spriteIcons/*.png')
  .pipe(spritesmith({
    imgName: 'sprite.png',
    cssFormat: 'css',
    cssName: 'sprite.scss',
    imgPath: '../img/sprite/sprite.png',  
    algorithm: 'binary-tree',
    padding: 10 
  }));
  spriteData.img.pipe(gulp.dest('build/img/sprite/'));
  spriteData.css.pipe(gulp.dest('dev/sass/my_style_components/')).pipe(reload({stream:true}));
  console.log('Sprite created');    
});


gulp.task('scriptsConcat', function() {
  return gulp.src('dev/js/includes/*.js')
    .pipe(concat('functions.js'))
    .pipe(gulp.dest('build/js/'));
    console.log('Script changed');
    
});

gulp.task('html', function(){
	gulp.src('dev/html/**/*.html')
		.pipe(includer())
		.pipe(gulp.dest('build/'))
        .pipe(reload({stream:true}));
    console.log('Html changed');
});

gulp.task('phpinc', function(){
	gulp.src('dev/php/**/*.php')
		.pipe(includer())
		.pipe(gulp.dest('build/'))
        .pipe(reload({stream:true}));
    console.log('PHP changed');
});

gulp.task('phpAdminInc', function(){
    gulp.src('dev/admin/includes/*.php')
        .pipe(includer())
		.pipe(gulp.dest('build/admin/'))
        .pipe(reload({stream:true}));
    console.log('PHP admin changed');
});

gulp.task('htaccess', function(){
	gulp.src('dev/php/.htaccess')
		.pipe(includer())
		.pipe(gulp.dest('build/'))
        .pipe(reload({stream:true}));
    console.log('htaccess changed');
});
gulp.task('sass', function(){
	gulp.src('dev/sass/*.scss')
	.pipe(sourcemap.init())
	.pipe(sass())
	.pipe(sourcemap.write())
	.pipe(gulp.dest('build/css/'))
    .pipe(reload({stream:true}));
    console.log('Css changed');      
});

gulp.task('move', function(){
	gulp.src('dev/fonts/**/*.*').pipe(gulp.dest('build/fonts/')).pipe(reload({stream:true}));
	gulp.src('dev/js/*.js').pipe(gulp.dest('build/js/')).pipe(reload({stream:true}));
	gulp.src('dev/img/icons/*.*').pipe(gulp.dest('build/img/icons/')).pipe(reload({stream:true}));
    gulp.src('dev/img/img/**/*.*').pipe(gulp.dest('build/img/img/')).pipe(reload({stream:true}));
	console.log('Moved'); 
});


var paths = {
  move:['dev/fonts/**/*.*', 'dev/js/*.js', 'dev/img/**/*.*'],
};

gulp.task('watcher', function(){  
    gulp.watch( paths.move, ['move']);    
    gulp.watch('dev/sass/**/*.scss', ['sass']);
    gulp.watch('dev/html/**/*.html', ['html']);
    gulp.watch('dev/php/**/*.php', ['phpinc']);
    gulp.watch('dev/admin/**/*.php', ['phpAdminInc']);
    gulp.watch('dev/php/.htaccess', ['htaccess']);
    gulp.watch('dev/js/includes/*.js', ['scriptsConcat']);
    gulp.watch('dev/img/spriteIcons/*.png', ['sprite']); 
});
    


if (using == 'html'){
    gulp.task('browserSync', function() {
  browserSync({
    server: {
      baseDir: "./build/"
    },
    port: 8080, 
    open: true,
    notify: false
  });
});
    
    gulp.task('default', ['watcher', 'browserSync', 'scriptsConcat', 'html', 'sass', 'move', 'sprite', 'phpinc', 'phpAdminInc', ]);  
    
} else if (using == 'php'){
    
  gulp.task('browserSync', function() {
  browserSync({
    proxy:'http://dip/fon/gallery/diplom/dip/build/', 
    notify: false,  
  });
});


    
    gulp.task('default', ['watcher', 'browserSync', 'scriptsConcat', 'phpinc', 'sass', 'move', 'sprite', ]);  
    
};


