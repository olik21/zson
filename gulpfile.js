'use strict';

/**
 *  Gulp config for Red Starter Theme aka RST
 *
 *  Author:   
 *  Version:  1.1.5
 *  Date:     Sept 15, 2018
 *  URL:      
 */



/**
 *  For php sites we need proxy to local domain,
 *  for example env.proxyurl can be http://localhost etc.
 *
 *  gulpenv.js - ingored by .gitignore file
 *
 *  Each developer can use different local domain,
 *  like http://test.lan, http://test.dev, http://test
 *
 *  So, he can just write his own domain for proxying
 *
 *  Find example of gulpenv.js here -> https://bitbucket.org/snippets/funnywheel/RonMGr
 */
let env, proxyurl;



/**
 *  Gulp & NodeJS modules:
 */
let gulp        = require( 'gulp' ),                // Gulp
    util        = require( 'gulp-util' ),           // Gulp utils
    notify      = require( 'gulp-notify' ),         // Notify on errors
    browserify  = require( 'gulp-browserify' ),     // Bundler for JS modules
    watch       = require( 'gulp-watch' ),          // File watcher, for run tasks on file change
    prefixer    = require( 'gulp-autoprefixer' ),   // Vendor autoprefixer, for CSS
    sourcemap   = require( 'gulp-sourcemaps' ),     // Sourcemap generator, works with SASS, SCSS, LESS, Stylus, JS, coffee and other
    uglify      = require( 'gulp-uglify' ),         // All file in 1 string, no spaces and line brakes, for production builds
    sass        = require( 'gulp-sass' ),           // SASS/SCSS compiler
    cssmin      = require( 'gulp-clean-css' ),
    imagemin    = require( 'gulp-imagemin' ),       // Minifier for images, .gif, .jpg, .png, .svg
    rimraf      = require( 'rimraf' ),              // Unix «rm -rf» equal for NodeJS
    browserSync = require( 'browser-sync' ),        // Powerfull browser live reload, web-server, remote degugger (ex.: for mobile)
    gulpif      = require( 'gulp-if' ),             // Conditional operator for gulp
    rename      = require( 'gulp-rename' ),         // Rename file (used for file.ext -> file.min.ext),
    fs          = require( 'file-system' ),         // Tools for filesystem usage
    wait        = require( 'gulp-wait' ),           // For delay before task start
    reload      = browserSync.reload;               // Reload browser method

if( fs.existsSync( './gulpenv.js' ) ){
    env = require( './gulpenv' );
} else {
    env = {
        proxyurl: 'http://nob'
    }
}

proxyurl = env.proxyurl;



/**
 *  Our projects have structure like this:
 *
 *  ./
 *  -- assets
 *    -- build
 *      -- css
 *      -- fonts
 *      -- svg
 *      -- js
 *      -- svg
 *    -- sources
 *      -- fonts
 *      -- svg
 *      -- js
 *      -- svg
 *      -- scss
 *  -- index.php
 *  ... other markup or php files and dirs
 *
 *  You can reconfigurate compiler path for your folders structure ease.
 *  Just edit object path for your needs
 */
let path = {
    build: {
        js:         './assets/build/js/',
        css:        './assets/build/css/',
        img:        './assets/build/img/',
        svg:        './assets/build/svg/',
        fonts:      './assets/build/fonts/'
    },
    src: {
        js:         './assets/sources/js/*.js',
        scss:       './assets/sources/scss/*.scss',
        img:        './assets/sources/img/*.*',
        svg:        './assets/sources/svg/*.svg',
        fonts:      './assets/sources/fonts/*.*'
    },
    watch: {
        js:         './assets/sources/js/**/*.js',
        img:        './assets/sources/img/*.*',
        scss:       './assets/sources/scss/*.scss',
        svg:        './assets/sources/svg/*.svg',
        fonts:      './assets/sources/fonts/*.*',
        php:    [
            './*.php',
            './inc/**/*.php',
            './parts/**/*.php',
            './templates/**/*.php'
        ]
    },
    clean:    './assets/build'
};



/**
 *  Web-server config
 *  used by BrowserSync module
 */
let config = {};

if( util.env.production !== true ){
    config = {
        logPrefix:  "EGO Devil",
        proxy:      env.proxyurl,
        port:       9000
    };
} else {
    config = {
        server: {
            base: '/'
        }
    }
}



/**
 *  Make timestamp
 */
gulp.task('timestamp:build', () => {
    if( util.env.production !== true ){
        fs.writeFile('./timestamp.txt', Date.now(), error => {});
    }
});



/**
 *  Build JavaScripts
 */

gulp.task('js:build', () => {
    return gulp.src(path.src.js)
        .pipe(wait(500))
     //   .pipe(gulpif(!util.env.production, sourcemap.init()))
     //   .pipe(browserify({transform: ['babelify', 'aliasify']}).on('error', notify.onError()))
      //  .pipe(gulpif(util.env.production, uglify()))
    .pipe(uglify())
        .pipe(rename({suffix: '.min'}))
     //   .pipe(gulpif(!util.env.production, sourcemap.write()))
        .pipe(gulp.dest(path.build.js))
        .pipe(reload({ stream: true }));
});



/**
 *  Build SCSS
 */
gulp.task('scss:build', () => {
    return gulp.src(path.src.scss)
        .pipe(wait(200))
        .pipe(gulpif(!util.env.production, sourcemap.init()))
        .pipe(sass().on('error', notify.onError()))
        .pipe(prefixer())
        .pipe(gulpif(util.env.production, cssmin()))
        .pipe(rename({suffix: '.min'}))
        .pipe(gulpif(!util.env.production, sourcemap.write()))
        .pipe(gulp.dest( path.build.css ))
        .pipe(reload({ stream: true }));
});



/**
 *  Minify images
 */
gulp.task('image:build', () => {
    return gulp.src(path.src.img)
        .pipe(gulpif(util.env.production, imagemin().on('error', notify.onError())))
        .pipe(gulp.dest(path.build.img))
        .pipe(reload({ stream: true }));
});



/**
 *  SVG Builds
 *  Later will clean SVG code from Adobe Illustrator staff, etc
 */
gulp.task('svg:build', () => {
    return gulp.src(path.src.svg)
        .pipe(gulp.dest(path.build.svg))
});



/**
 *  Fonts Builds
 *  In future it will conver fonts and prepare font-face automatically
 */
gulp.task('fonts:build', () => {
    return gulp.src(path.src.fonts)
        .pipe(gulp.dest(path.build.fonts))
});



/**
 *  php Builds
 *  If for sure - it's just watcher for reload browser, when you edit .php files =)
 */
gulp.task('php:build', () => { reload() });



/**
 *  Build task
 *  run all tasks
 */
gulp.task('build', [
    'js:build',
    'scss:build',
    'image:build',
    'svg:build',
    'fonts:build'
]);



/**
 *  File watchers
 */
gulp.task('watch', () => {
    watch([path.watch.scss],    {readDelay: 200},    () => { gulp.start('scss:build') } );
    watch([path.watch.js],      {readDelay: 200},    () => { gulp.start('js:build') } );
    watch([path.watch.img],     {readDelay: 200},    () => { gulp.start('image:build') } );
    watch([path.watch.svg],     {readDelay: 200},    () => { gulp.start('svg:build') } );
    watch([path.watch.fonts],   {readDelay: 200},    () => { gulp.start('fonts:build') } );
    watch(path.watch.php,       {readDelay: 200},    () => { gulp.start('php:build') } );
});



/**
 *  Start web-server
 */
gulp.task('webserver', () => browserSync(config));



/**
 *  Clean up build folder
 */
gulp.task('clean', cd => rimraf(path.clean, cd));



/**
 *  Default task for
 *  $ gulp
 *  with no args
 */
gulp.task('default', ['build', 'webserver', 'watch']);
