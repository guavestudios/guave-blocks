'use strict';

module.exports = function (grunt) {
  // load all grunt tasks
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-watch');

  grunt.initConfig({
    concat: {
      options: {
        stripBanners: true
      },
      dist: {
        src: [
          'assets/js/libs/jquery-2.1.3.min.js',
          'assets/js/libs/highlight.pack.js',
          'assets/js/themefunctions.js'
        ],
        dest: 'assets/js/theme.js'
      }
    },

    uglify: {
      build: {
        src: 'assets/js/theme.js',
        dest: 'assets/js/theme.min.js'
      }
    },

    watch: {
      // if any .less file changes in directory "public/css/" run the "less"-task.
      scripts: {
        files: ['assets/js/*.js'],
        tasks: ['concat', 'uglify'],
        options: {
          spawn: false
        }
      },
      css: {
        files: "assets/less/**/*.less",
        tasks: ["less"]
      }
    },

    // "less"-task configuration
    less: {
      // production config is also available
      development: {
        files: {
          // compilation.css  :  source.less
          "assets/css/guaveblocks.css": "assets/less/guaveblocks.less",
          "assets/css/default.css": "assets/less/default.less"
        }
      },
    },
  });
  // the default task (running "grunt" in console) is "watch"
  grunt.registerTask('default', ['concat', 'uglify', 'watch']);
};
