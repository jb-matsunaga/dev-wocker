module.exports.path = {
    all: {
        src: 'src',
        dest: 'wocker/wp-content/themes/tixeebox',
    },
    ejs: {
        src: {
            on: 'src/ejs/**/*.ejs',
            off: 'src/ejs/**/_*.ejs',
        }
    },
    sass: {
        src: 'src/sass/**/*.scss',
    },
    js: {
        src: 'src/js/plugins/**/*.js',
        modules: 'src/js/modules/**/*.js',
    },
    webpack: {
        src1: 'src/js/modules/*.js',
        src2: 'src/js/*.js',
    }
}