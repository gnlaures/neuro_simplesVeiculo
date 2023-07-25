// modules
const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const autoprefixer = require('gulp-autoprefixer');
const concat = require('gulp-concat');
const babel = require('gulp-babel');
const uglify = require('gulp-uglify');
const debug = require('gulp-debug');


// control vars
const control = {
    "files": {
        "styles": [
            "components/_defaults/mixins.scss",
            "components/_defaults/presets.scss",
            "components/_defaults/utilities.scss",
            "components/_defaults/reset.scss",

            "components/c-responsiveGrid/index.scss",
            "components/c-defaultContentStyle/index.scss",
            "components/c-breadcrumb/index.scss",
            "components/c-btn/index.scss",
            "components/c-form/index.scss",
            "components/c-shapeDivider/index.scss",
            "components/c-countdown/index.scss",
            "components/c-author/index.scss",
            "components/c-photo/index.scss",
            "components/c-socialList/index.scss",
            "components/c-readmore/index.scss",
            "components/c-brand/index.scss",
            "components/c-cardBlogPost/index.scss",
            "components/c-cardCompany/index.scss",
            "components/c-cardIcon/index.scss",
            "components/c-cardMap/index.scss",
            "components/c-error/index.scss",
            "components/c-copyright/index.scss",
            "components/c-hamburguer/index.scss",
            "components/c-scrollLink/index.scss",
            "components/c-devSignature/index.scss",
            "components/c-pagination/index.scss",
            "components/c-btnWhatsapp/index.scss",
            "components/c-callToAction/index.scss",
            "components/c-tabs/index.scss",
            "components/c-listBrands/index.scss",
            "components/c-tablePrice/index.scss",
            "components/c-cardPricing/index.scss",
            "components/c-cardVideo/index.scss",
            "components/c-cardTestmonials/index.scss",
            "components/c-swiper/index.scss",
            "components/c-helpLink/index.scss",
            "components/c-toggleItem/index.scss",
            "components/c-newsletter/index.scss",
            "components/c-sitemap/index.scss",
            "components/c-masonryPortfolioGrid/index.scss",

            "components/s-overview/index.scss",
            "components/s-stickyContent/index.scss",
            "components/s-portfolio/index.scss",
            "components/s-plansPricingHome/index.scss",
            "components/s-testmonials/index.scss",
            "components/s-blogPostsHome/index.scss",
            "components/s-faq/index.scss",

            "components/l-nav/index.scss",
            "components/l-headerHome/index.scss",
            "components/l-footer/index.scss",
        ],
        "scripts": [
            "components/_defaults/utilities.js",
            "components/c-responsiveGrid/index.js",
            "components/c-form/index.js",
            "components/c-countdown/index.js",
            "components/c-photo/index.js",
            "components/c-copyright/index.js",
            "components/c-hamburguer/index.js",
            "components/c-masonryPortfolioGrid/index.js",
            "components/c-tabs/index.js",
            "components/c-toggleItem/index.js",
            "components/c-cardVideo/index.js",

            "components/s-overview/index.js",
            "components/s-testmonials/index.js",

            "components/l-nav/index.js",
            "components/l-headerHome/index.js",
        ],
    },
    "dist" : 'dist/'
};


// project tasks
const tasks = {
    "styles": () => {
        return gulp
            .src(control.files.styles)
            .pipe(debug({title: 'file:'}))
            .pipe(concat('styles-min.css'))
            .pipe(sass({outputStyle: 'compressed'}))
            .pipe(autoprefixer({cascade: false}))
            .pipe(gulp.dest(control.dist));
    },
    "scripts": () => {
        return gulp
            .src(control.files.scripts)
            .pipe(debug({title: 'file:'}))
            .pipe(concat('scripts-min.js'))
            .pipe(babel({presets: ['@babel/preset-env']}))
            .pipe(uglify())
            .pipe(gulp.dest(control.dist));
    },
}


// gulp tasks
gulp.task('styles', (done) => {tasks.styles(); done()});
gulp.task('scripts', (done) => {tasks.scripts(); done()});
gulp.task('watch', () => {
    gulp.watch('components/**/*.scss', tasks.styles);
    gulp.watch('components/**/*.js', tasks.scripts);
});
gulp.task('default', gulp.parallel('styles', 'scripts'));
