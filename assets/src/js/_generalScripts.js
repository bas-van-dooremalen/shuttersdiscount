import $ from "jquery";
window.jQuery = $; 
require('@fancyapps/fancybox/dist/jquery.fancybox');

class General {
	constructor() {
		this.testVariable = 'script working'; 
		this.init();
	}

	init() {
		// for tests purposes only
		console.log(this.testVariable);
		
		//Toggle Hamburger Menu
		$('#toggle').click(function(event) {
			event.preventDefault();
			$(this).toggleClass('is-active');
			$('body').toggleClass('lock');
			$('#navigation').toggleClass('is-open');
		});

		// Add [rel='external'] attribute to all applicable anchor tags
		$('a:not(.internal)').filter(function() {
			return this.hostname && this.hostname !== location.hostname;
		}).attr('rel', 'external');
	
		// Open anchors with class or rel external in a new tab	
		$('a[rel="external"], a.external').click( openBlank );
		
		function openBlank() {
			window.open( this.href, "_blank" );
			return false;
		}
 
	}

}

export default General;
