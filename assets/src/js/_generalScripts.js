import $ from 'jquery';
import Swiper from 'swiper/bundle';

class General {
	constructor() {
		this.testVariable = 'script working';
		this.init();
	}

	init() {
		$('.hamburger').click(function() {
			$(this).toggleClass('is-active');
		});

		// Init Swiper

		var slider1 = new Swiper ('.slider1', {
			autoplay: {
				delay: 4000,
			},
			centeredSlides: true,
			loop: true,
			disableOnInteraction: true,
			keyboard: {
				enabled: true,
				onlyInViewport: false,
			},
			pagination: {
				el: ".swiper-pagination",
				clickable: true
			},
			speed: 1500,
			slidesPerView: 1,
			spaceBetween: 20,
			breakpoints: {
				320: {
					slidesPerView: 1
				},				
				640: {
					slidesPerView: 2
				},
				992: {
					slidesPerView: 2
				},
				1024: {
					slidesPerView: 2
				},
				1400: {
					slidesPerView: 3
				}
			} 
		});

		var swiper = document.querySelector('.slider1').swiper;
	
		$('.slider1').mouseenter(function() {
			swiper.autoplay.stop();
		});
	
		$('.slider1').mouseleave(function() {
			swiper.autoplay.start()
		});
		
	}	
}

export default General;
