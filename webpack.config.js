const BrowserSyncPlugin = require( 'browser-sync-webpack-plugin' )
// @wordpress/scripts config.
const wordpressConfig = require( '@wordpress/scripts/config/webpack.config' )

// See svgo.config.js to configure SVG manipulation.

module.exports = {
	...wordpressConfig,
	entry: {
		// 'example/output': './path/to/dir/entrypoint.js',
		'css/theme': './src/theme.css.js',
		'css/theme-admin': './src/theme-admin.css.js',
		'css/theme-editor': './src/theme-editor.css.js',
		'css/theme-dev': './src/theme-dev.css.js',
		'js/theme': './src/theme.js',
		'third-party/js/gsap.min': './node_modules/gsap/dist/gsap.min.js',
		'third-party/js/ScrollTrigger.min': './node_modules/gsap/dist/ScrollTrigger.min.js',
	},
	plugins: [
		...wordpressConfig.plugins,
		new BrowserSyncPlugin( {
			proxy: 'localhost:6969', // Live WordPress site. Using IP breaks it.
			ui: { port: 3001 }, // BrowserSync UI.
			port: 3000, // Dev port on localhost.
			logLevel: 'debug',
			reload: false, // false = webpack handles reloads (not sure if this works with files option).
			browser: "google-chrome-stable",
			files: [
				'src/**',
				'classes/**',
				'patterns/**',
				'parts/**',
				'templates/**',
				'**/**.json'
			]
		} )
	]
}
