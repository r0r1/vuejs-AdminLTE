module.exports = function(grunt) {
  var asset = 'assets/bower_components/';
  // ===========================================================================
  // CONFIGURE GRUNT ===========================================================
  // ===========================================================================
  grunt.initConfig({

    pkg: grunt.file.readJSON('package.json'),

    jshint: {
      options: {
        reporter: require('jshint-stylish')
      },

      build: ['Gruntfile.js', 'src/**/*.js']
    },

    uglify: {
      options: {
        banner: '/*\n <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> \n*/\n'
      },
      build: {
        files: {
          'build/js/app.js': [
          asset+'jquery/dist/jquery.min.js',
          asset+'bootstrap/dist/js/bootstrap.min.js',
          asset+'AdminLTE/dist/js/app.min.js'
          ]
        }
      }
    },

    cssmin: {
      options: {
        banner: '/*\n <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> \n*/\n'
      },
      build: {
        files: {
          'build/css/style.min.css': [
          asset+'bootstrap/dist/css/bootstrap.min.css',
          asset+'font-awesome/css/font-awesome.min.css',
          asset+'AdminLTE/dist/css/AdminLTE.css',
          asset+'AdminLTE/dist/css/skins/_all-skins.min.css',
          asset+'css/style.css'
          ]
        }
      }
    },

    copy: {
      main: {
        expand: true,
        src: [
        asset+'bootstrap/fonts/*', 
        asset+'font-awesome/fonts/*'
        ],
        dest: 'build/fonts/',
        flatten: true,
      },
      images: {
        expand: true,
        src: [
        asset+'AdminLTE/dist/img/*'
        ],
        dest: 'assets/image/',
        flatten: true,
      },
      plugins: {
        expand: true,
        src: [
        asset+'AdminLTE/plugins/*'
        ],
        dest: 'build/plugins/',
        flatten: true,
      }
    }

  });

  // ===========================================================================
  // LOAD GRUNT PLUGINS ========================================================
  // ===========================================================================
  // we can only load these if they are in our package.json
  // make sure you have run npm install so our app can find these
  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-copy');

  grunt.registerTask('default', ['jshint', 'uglify', 'cssmin', 'copy']);

};
