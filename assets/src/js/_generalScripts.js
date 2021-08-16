import $ from 'jquery';
import Swiper from 'swiper/bundle';

class General {
	constructor() {
		this.testVariable = 'script working';
		this.init();
	}

	init() {
		// Toggle mobile menu
		const hamburger = document.getElementById('toggle');
		const nav = document.getElementById('navigation');
		const lock = document.body; 

		hamburger.onclick = function() {
			this.classList.toggle('is-active');
			nav.classList.toggle('is-open');
			lock.classList.toggle('on-lock');
		}

		// Toggle callmeback form 
		const el = document.getElementById('toggleForm');
		const bar = document.querySelector('.bar'); 
		const $elBar = $('.bar');
		const btn = document.querySelector('.formButton'); 

		$(document).mouseup(e => {
			if (!$elBar.is(e.target) && $elBar.has(e.target).length === 0) {
				$elBar.removeClass('active');
				if(btn) {
					btn.classList.remove('active');
				}
			}  		
		});
		
		if (el) {
			el.onclick = function() {
				bar.classList.add('active');	
				this.classList.add('active');
			}
		}

		// Close callmeback form
		const closeForm = document.getElementById('closeForm');
		if (closeForm) {
			closeForm.onclick = function() {
				bar.classList.remove('active');
				btn.classList.remove('active');			
			}		
		}
	
		// Init Swiper
		var swiper = new Swiper('.swiper-container', {
			autoplay: {
				delay: 4500,
				disableOnInteraction: false,
			},
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
			},
			keyboard: {
				enabled: true,
				onlyInViewport: false,
			},
			loop:true,			
			pagination: '.pagination',						
			pagination: {
				el: ".swiper-pagination",
				clickable: true
			},
			slidesPerView: 1,
			spaceBetween: 20,
			speed: 1800
		});
				
		$('.swiper-container').on('mouseover', function() {
			swiper.autoplay.stop();
		});
		
		$('.swiper-container').on('mouseout', function() {
			swiper.autoplay.start();
		});

		// var slider1 = new Swiper ('.slider1', {
		// 	autoplay: {
		// 		delay: 4000,
		// 		disableOnInteraction: true
		// 	},
		// 	centeredSlides: true,
		// 	loop: true,
		// 	disableOnInteraction: true,
		// 	keyboard: {
		// 		enabled: true,
		// 		onlyInViewport: false,
		// 	},
		// 	pagination: {
		// 		el: ".swiper-pagination",
		// 		clickable: true
		// 	},
		// 	speed: 1500,
		// 	slidesPerView: 1,
		// 	spaceBetween: 20,
		// 	breakpoints: {
		// 		320: {
		// 			slidesPerView: 1
		// 		},				
		// 		640: {
		// 			slidesPerView: 2
		// 		},
		// 		992: {
		// 			slidesPerView: 2
		// 		},
		// 		1024: {
		// 			slidesPerView: 2
		// 		},
		// 		1400: {
		// 			slidesPerView: 3
		// 		}
		// 	} 
		// });

		// $('.slider1').on('mouseenter', function(e){
		// 	console.log('stop autoplay');
		// 	slider1.stopAutoplay();
		// });

		// $('.slider1').on('mouseleave', function(e){
		// 	console.log('start autoplay');
		// 	slider1.startAutoplay();
		// });
		
	}	
}

export default General;
