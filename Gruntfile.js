module.exports = function(grunt) {
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    php: {
        dist: {
            options: {
                port: 80,
                base: 'web',
                open: true,
                keepalive: true
            }
        }
    },
    phpcs: {
        application: {
            dir: 'src'
        },
        options: {
            bin: 'phpcs',
            standard: 'PSR-MOD'
        }
    },


    php_analyzer: {
        application: {
            dir: 'src'
        }
    }
  });

  grunt.loadNpmTasks('grunt-phpcs');
  grunt.loadNpmTasks('grunt-php');
  grunt.loadNpmTasks('grunt-php-analyzer');
  grunt.registerTask('default', ['phpcs', 'php_analyzer:application']);
  grunt.registerTask('server', ['php']);
};

