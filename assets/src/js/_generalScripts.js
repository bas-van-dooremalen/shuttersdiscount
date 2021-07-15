import $ from 'jquery';
import 'owl.carousel';

class General {
	constructor() {
		this.testVariable = 'script working';
		this.init();
	}

	init() {
		// for tests purposes only
		console.log(this.testVariable);

		$('.owl-carousel').owlCarousel({
			center: true,
			loop: true,
			dots: true,
			nav: false,
			responsive: {
				0: {
					items: 1
				},
				600: {
					items: 1
				},
				1000: {
					items: 2,
					margin: 10,
				}
			}
		});
	}
}

export default General;
