module.exports = function(grunt) {
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    php: {
        dist: {
            options: {
                port: 80,
                
                open: true,
                keepalive: true
            }
        }
    },

  
  });

  grunt.loadNpmTasks('grunt-php');
  grunt.registerTask('server', ['php']);
};

