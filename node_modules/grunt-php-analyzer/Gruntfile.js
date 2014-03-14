/*
 * grunt-php-analyzer
 * https://github.com/chrsm/grunt-php-analyzer
 *
 * Copyright (c) 2013 Christopher Martinez
 * Licensed under the MIT license.
 */

'use strict';

module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    jshint: {
      all: [
        'Gruntfile.js',
        'tasks/*.js'
      ],
      options: {
        jshintrc: '.jshintrc',
      },
    },
    clean: {
      tests: ['tmp'],
    },
    php_analyzer: {
        application: {
            dir: '../whiskapp/api/src'
        },
        options: {
            bin: 'phpalizer',
            /*command: 'run'*/
        }
    },
  });

  grunt.loadTasks('tasks');
  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-contrib-clean');
  grunt.registerTask('test', ['clean']);
  grunt.registerTask('default', ['jshint']);

};
