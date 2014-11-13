/*
	Aerial by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
*/
var config_url = 'assets/themes/aerial/';
(function() {

	skel.init({
		reset: 'full',
		breakpoints: {
			'global': { range: '*', href: config_url+'css/style.css', viewport: { scalable: false } },
			'wide': { range: '-1680', href: config_url+'css/style-wide.css' },
			'normal': { range: '-1280', href: config_url+'css/style-normal.css' },
			'mobile': { range: '-736', href: config_url+'css/style-mobile.css' },
			'mobilep': { range: '-480', href: config_url+'css/style-mobilep.css' }
		}
	});

	// Events (JS).
		
		// Remove "loading" class once the page has fully loaded.
			window.onload = function() {
				document.body.className = '';
			}

		// Prevent scrolling on touch.
			window.ontouchmove = function() {
				return false;
			}

		// Fix scroll position on orientation change.
			window.onorientationchange = function() {
				document.body.scrollTop = 0;
			}

	/*

	// Events (jQuery).
	// Aerial doesn't need jQuery, but if you're going to use it anyway remove the
	// block of JS events above and use the jQuery-based ones below instead.

		jQuery(window)

			// Remove "loading" class once the page has fully loaded.
				.on('load', function() {
					jQuery('body').removeClass('loading');
				})

			// Prevent scrolling on touch.
				.on('touchmove', function() {
					return false;
				})

			// Fix scroll position on orientation change.
				.on('orientationchange', function() {
					jQuery('body').scrollTop(0);
				});

	*/

})();