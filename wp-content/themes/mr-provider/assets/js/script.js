/*!
 *	Author: B360 Digital Marketing
	name: script.js	
	requires: jquery	
 */

$(document).ready(function() {  

	// Mobile responsive nav
	$('.stellarnav').stellarNav({
		theme: 'plain',
		menuLabel: '',
		breakpoint: 992,
		position: 'right',
		openingSpeed: 250,
		closingSpeed: 250,
	});

	// AOS Animate
	// AOS.init();
});