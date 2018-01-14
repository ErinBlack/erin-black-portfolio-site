module.exports = function(grunt) {

	grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-cssmin');

	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),

  watch: {
    sass: {
    files: 'scss/*.scss',
    tasks: 'sass'
    }
  },
		sass: {
			dist: {
				files: [{
					expand: true,
					cwd: 'scss',
					src: ['style.scss'],
					dest: './css',
					ext: '.css'
				}]
			}
		}
	});

	grunt.registerTask('default', ['sass'] );

};
