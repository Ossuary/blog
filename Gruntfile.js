module.exports = function(grunt){

    grunt.initConfig({

        concat: {
            js: {
                src: ['src/js/scripts.js'],
                dest: 'src/js/scripts.js'
            }
        },

        uglify: {
            js: {
                files: {
                    'public/js/scripts.min.js': ['src/js/scripts.js']
                }
            }
        },

        sass: {
            dist: {
                options: {
                    style: 'compressed'
                },
                files: {
                    'src/css/styles.css': 'src/css/styles.sass'
                }
            }
        },

        autoprefixer: {
            options: {
                browsers: ['last 2 versions', 'ie 8', 'ie 9']
            },
            your_target: {
                src: 'src/css/styles.css',
                dest: 'src/css/styles.css'
            }
        },

        cssmin: {
            target: {
                files: [{
                    expand: true,
                    cwd: 'src/css',
                    src: ['*.css', '!*.min.css'],
                    dest: 'public/css',
                    ext: '.min.css'
                }]
            }
        },

        htmlmin: {
            dist: {
                options: {
                    removeComments: true,
                    collapseWhitespace: true
                },
                files: {
                    // Layouts
                    'resources/views/layouts/default.blade.php'     : 'src/html/layouts/default.blade.php',
                    'resources/views/layouts/admin.blade.php'       : 'src/html/layouts/admin.blade.php'
                }
            }
        },

        watch: {
            js: {
                files: ['src/js/*.js'],
                tasks: ['concat:js', 'uglify:js'],
                options: {
                    livereload: true
                }
            },
            css: {
                files: ['src/css/**/*.sass'],
                tasks: ['sass', 'autoprefixer', 'cssmin'],
                options: {
                    livereload: true
                }
            },
            html: {
                files: ['src/html/**/*.php'],
                tasks: ['htmlmin'],
                options: {
                    collapseWhitespace: true,
                    livereload: true
                }
            }
        }
    });

    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-autoprefixer');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-htmlmin');

    grunt.registerTask('default', [ 'watch' ]);
};