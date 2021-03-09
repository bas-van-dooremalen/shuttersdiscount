import $ from "jquery";

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

	}

}

export default General;
