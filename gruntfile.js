module.exports = function(grunt) {

    // 1. All configuration goes here 
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        watch: {
            options: {

                livereload: true,
            },
            css: {
                files: ['includes/sass/*.scss'],
                tasks: ['sass'],
                options: {
                    spawn: false,
                }   
            }

        },

        sass: {
            dist: {
                options: {
                    style: 'compressed',
                    compass: true,
                },
                files: {
                    // 'includes/stylesheets/reset.css': 'includes/sass/reset.scss',
                    'includes/stylesheets/screen.css': 'includes/sass/screen.scss',
                    'includes/stylesheets/variables.css': 'includes/sass/variables.scss',
                    'includes/stylesheets/typography.css': 'includes/sass/typography.scss',
                }
            } 
        },

        // compass: {                  // Task
        //     dist: {                   // Target
        //       options: {              // Target options
        //         sassDir: 'includes/sass',
        //         cssDir: 'includes/stylesheets',
        //         environment: 'production',
        //       }
        //     },
        //     dev: {                    // Another target
        //       options: {
        //         sassDir: 'includes/sass',
        //         cssDir: 'includes/stylesheets'
        //       }
        //     }
        //   }



    });

    // 3. Where we tell Grunt we plan to use this plug-in.
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-sass');
    // grunt.loadNpmTasks('grunt-contrib-compass');
    // grunt.loadNpmTasks('grunt-contrib-concat');

    // 4. Where we tell Grunt what to do when we type "grunt" into the terminal.
    grunt.registerTask('dev', ['watch','sass']);

};