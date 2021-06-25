import $ from "jquery";
window.jQuery = $; 
require('@fancyapps/fancybox/dist/jquery.fancybox');
import { tns } from "tiny-slider/src/tiny-slider.module";
import "bootstrap";
import 'owl.carousel';

class General { 
	constructor() {
		this.testVariable = 'script working'; 
		this.init();
	}
  
	init() {
		$('.owl-carousel').owlCarousel({
			loop: false,
    		margin: 0,
    		nav: false,
			items: 1,
			dots: true
		});

		//Bootstrap tabs
		if ($('#tabs').length) {	
			$('#tabs a').on('click', function (event) {
				event.preventDefault()
				$(this).tab('show')
			}); 
		}	
		
		//Tiny slider
		if ($('.slider').length) {		
			var slider = tns({
				container: '.slider',
				controlsContainer: "#controls",				
				lazyload: true,
				lazyloadSelector: '.tns-lazy-img',
				mode: 'gallery',				
				items: 1,
				slideBy: 'page',
				controls: true,
				autoplay: true,
				autoplayButtonOutput: false,
				autoplayHoverPause: true,
				arrowKeys: true,			
				gutter: 15,
				nav: false,
				speed: 400
			});
		}

		$('.testimonials').carousel()

		
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

		//Pricecalculator
		var priceperm2Premium		= 282.00;
		var priceperm2Riviera	 	= 292.00;
		var priceperm2Plus 			= 262.00;		

		$('#addWindows').click(function() {
			var content = $('.tablerow').html();
			$('#calculator-table').append("<tr class='tablerow'>" + content + "</tr>");
			return false;
		});

		$('input[name=_pakket]').click(function() {
			$('.measure').addClass('show');
		})

		$('#calc-bereken').click(function(){
			$('html, body').animate({
				scrollTop: $("#calculator-result").offset().top
			}, 700);
        	
			var toWide = false;
			$('#calculator-result').slideUp(function(){
			
				var values = getValues();
				var surface = [];
				$('.generatedRow').remove();
				
				var price = 0;
				var selectedRadio = $('input[name=_pakket]:radio:checked');
				
				if(selectedRadio.val() == 'plus')
					price = priceperm2Plus;
				else if(selectedRadio.val() == 'premium')
					price = priceperm2Premium;
				else if(selectedRadio.val() == 'waterproof')
					price = priceperm2Waterproof;
				
				var totalPrice = 0.00;
				var totalm2 = 0.00;
				var i = 0;
	
				$.each(values,function(index,value){
					i++;
					surface.push({surface:calculateSurfaceM2(value['heightmm'],value['widthmm']), number:value['num']});
					if(value["widthmm"] > 2399)
						toWide = true;
					$('#result-table').append('<tr class="generatedRow">\n\
						<td>'+ (index+1) +'</td>\n\
						<td>'+ value["widthmm"] +'mm</td>\n\
						<td>'+ value["heightmm"] +'mm</td>\n\
						<td>'+ roundNumber(calculateSurfaceM2(value['heightmm'],value['widthmm']),2) +'m&sup2;</td>\n\
						<td>'+ value["num"] +'</td>\n\
						<td>&euro;'+roundNumber(calculateSurfaceM2(value['heightmm'],value['widthmm']) * price,2)+'</td>\n\
						<td>&euro;'+roundNumber(calculateSurfaceM2(value['heightmm'],value['widthmm']) * price * value["num"],2)+'</td>\n\
					</tr>');
						totalPrice += roundNumber(calculateSurfaceM2(value['heightmm'],value['widthmm']) * price * value["num"],2)
						totalm2 += calculateSurfaceM2(value['heightmm'],value['widthmm']);
					});
					$('#result-table').append('<tr class="generatedRow">\n\
						<th></th>\n\
						<th>Totaal</th>\n\
						<th></th>\n\
						<th>'+ roundNumber(totalm2,2) +'m&sup2;</th>\n\
						<th></th>\n\
						<th></th>\n\
						<th>&euro;'+ totalPrice +'</th>\n\
					</tr>');
					triggerWidthError(toWide);
					if(i > 0)
						$('#calculator-result').slideDown();
					else
						$('#error').css('top','0').toggleClass('show');
					});
					
				});
						
				function triggerWidthError(value) {
					var object = $('#widthError');
					object.slideUp(function(){
						if(value)
							object.slideDown();
					});            
				}
	
				function calculateSurfaceM2(height, width) {
					//Returns the surface in m2
					return (height / 1000) * (width / 1000);
				}
	
				function getValues(){
					var values = [];
					$('#calculator-table tr').each(function(){
						var width   = parseFloat($(this).find('.widthmm').val());
						var height  = parseFloat($(this).find('.heightmm').val());
						var num     = parseFloat($(this).find('.windownum').val());
						if(!isNaN(width) && !isNaN(height) && !isNaN(num))
							values.push({widthmm:width, heightmm:height, num:num});
					});
					return values;
				}
				function roundNumber(num, dec) {
					var result = Math.round(num*Math.pow(10,dec))/Math.pow(10,dec);
					return result;
					
				}
		
		
	}

}

export default General;
