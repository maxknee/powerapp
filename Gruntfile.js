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
    watch: {
    markup:{
        files: ['index.php', 'newwrapper.php', 'sqlcommands.php' ],
        options: {
            livereload:true,
            }
    }
    }

  
  });

  grunt.loadNpmTasks('grunt-php');
 
  grunt.loadNpmTasks('grunt-contrib-watch');
   grunt.registerTask('server', ['php', 'watch']);
};

