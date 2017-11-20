'use strict';
module.exports = function(grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        less: {
            production: {
                options: {
                    paths: ["css"],
                },
                files: {
                    "styles/css/style.css": "styles/less/imports.less"
                }
            }
        },
        watch: {
            scripts: {
                files: ['styles/less/*.less'],
                tasks: ['less'],
                options: {
                    spawn: false,
                },
            },
        },
        serve: {
            options: {
                port: 8080
            }
        },
    });
    
    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-serve');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.registerTask('default', ['watch','serve']);
};
