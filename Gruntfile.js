'use strict';

module.exports = function (grunt) {
  // load all grunt tasks
  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-watch');

  grunt.initConfig({
    watch: {
      // if any .less file changes in directory "public/css/" run the "less"-task.
      files: "assets/less/**/*.less",
      tasks: ["less"]
    },

    // "less"-task configuration
    less: {
      // production config is also available
      development: {
        files: {
          // compilation.css  :  source.less
          "assets/css/default.css": "assets/less/default.less"
        }
      },
    },
  });
  // the default task (running "grunt" in console) is "watch"
  grunt.registerTask('default', ['watch']);
};
