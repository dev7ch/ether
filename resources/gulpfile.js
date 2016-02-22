// Project specific settings

var config = require('./project-compile-config.json');

// Include gulp
var gulp = require('gulp');

// Include gulp Plugins
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');
var gulpIf = require('gulp-if');
var postcss = require('gulp-postcss');
var livereload = require('gulp-livereload');

// Postcss plugins
var autoprefixer = require('autoprefixer');
var doiuse = require('doiuse');
var cssnano = require('cssnano');
var pxtorem = require('postcss-pxtorem');
var styleguide = require('postcss-style-guide');

// Node plugins
var del = require('del');

// Enviroment
var argv = require('yargs').argv;
var env = "dev";
if (argv.prep == true || argv.preproduction == true) {
    env = "prep";
} else if (argv.prod == true || argv.production == true) {
    env = "prod";
}

var dest = config.dest[env];

gulp.task('clean', function() {
    return del([
        dest.styles
    ]);
});

// Compile Our Sass
gulp.task('styles', function() {
    var processors = [
        autoprefixer({browsers: ['> 1%']}),                     // Run autoprefixer
        pxtorem({replace: false, rootValue: config.baseFontSize})            // Add rem with px as fallback
    ];

    return gulp.src(config.source.styles)
        .pipe( sourcemaps.init() )                                          // Init of sourcemaps
        .pipe( sass().on('error', sass.logError) )                          // Compile regular scss to css
        .pipe( postcss(processors) )                                        // Process als postcss plugins
        .pipe( gulpIf(env == "prep" || env == "prod", postcss([cssnano()])) )                // If --prod, minify css
        .pipe( sourcemaps.write('.') )                                      // Write the sourcemaps
        .pipe( gulp.dest( dest.styles ) )    // Write CSS
        .pipe( livereload() )
        ;
});

// Test styles
gulp.task('test-styles', function() {
    var processors = [
        doiuse({
            browsers: [
                'ie >= 8',
                '> 1%'
            ],
            ignore: ['rem'], // an optional array of features to ignore
            onFeatureUsage: function (usageInfo) {
                console.log(usageInfo.message)
            }
        })
    ];

    return gulp.src('scss/*.scss')
        .pipe( sass() )                 // Compile regular scss to css
        .pipe( postcss(processors) )    // Process als postcss plugins
        ;
});

gulp.task('styleguide', function() {
    return gulp.src(config.source.styles)
        .pipe( sass({outputStyle: 'expanded'}) )
        .pipe( postcss([styleguide({
            name: "Test"
        })]) )
        ;
});

gulp.task('watch', function() {
    livereload.listen();
    gulp.watch(config.source.styles, ['styles']);
});

gulp.task('default', ['clean', 'styles', 'watch']);