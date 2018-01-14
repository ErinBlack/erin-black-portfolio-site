module.exports = function(grunt) {

	grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-cssmin');

	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),

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
