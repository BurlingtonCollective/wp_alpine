module.exports = function(grunt){
	grunt.initConfig({
		less: {
			options: {
				compress: true,
				yuicompress: true
				// sourceMap: true,
				// sourceMapFilename: 'css/master.css.map',
				// sourceMapUrl: '/css/master.css.map',
				// sourceMapRootPath: '/'
			},
			files: {
				"css/master.css": "css/master.less"
			}
		},
		watch: {
			less: {
				options: {
					livereload: true
				},
				files: ['css/**/*.less'],
				tasks: ['less']
			}
		}
	});

	grunt.loadNpmTasks('grunt-contrib-less');
	grunt.loadNpmTasks('grunt-contrib-watch');
}