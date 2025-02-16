!(function () {
    module.exports = function (grunt) {
         const sass = require('node-sass');        
        grunt.initConfig({
            pkg: grunt.file.readJSON('package.json'),
            sass: {
                options: {
                   implementation: sass,
                   sourceMap: true,
                   outputStyle: 'compressed', 
               },
                dist: {
                    files: [{
                        expand: true, 
                        cwd: 'assets/scss',
                        src: ['*.scss'],
                        dest: 'assets/css',
                        ext: '.min.css'
                    }]
                   
                }
            },
            watch: {
                scripts: {
                    files: [
                    'assets/scss/***/*.scss','assets/scss/**/*.scss','assets/scss/*/*.scss',
                    ['Gruntfile.js']],
                    tasks: ['sass']

                }
            }

        });
        grunt.loadNpmTasks('grunt-sass');
        grunt.loadNpmTasks('grunt-contrib-watch');
        grunt.registerTask('default', ['sass','watch']);
    };
})();