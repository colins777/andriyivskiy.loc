jQuery(function($){

$(document).ready(function ($) {
	$('.s-slider').slick({
		dots: true,
		autoplay: true,
		infinite: true,
		speed: 1000,
		fade: true,
		cssEase: 'linear',
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: true,
		dotsClass: "my-dots",
		prevArrow: '<div class="prev-arrow">12</div>',
		nextArrow: '<div class="next-arrow">123</div>'
	});

	//Вивід попапу квартир

	let planningPopup = function () {

		const $popupContentBlock = $('.floors-popup__content');
		const $popup = $('.floors-popup');

		$('.flat').click(function () {

			let flatID = $(this).data('flat-id');
			let $flatPopup = $('.popup-flat#' + flatID).clone();

			if ( $flatPopup.length ) {
				$popupContentBlock.html($flatPopup);

				let windowWidth = $(window).width();
				if (windowWidth < 481) {
					$popup.css({'left' : '0', 'marginLeft' : '0'});
					console.log(123);
				}
				else $popup.css({'left' : '50%', 'marginLeft' : '-400px'});
			}
		});

		$('.floors-popup__close').click(function () {
			$popup.css('left', '-800px');
			$popupContentBlock.delay(2000).html('');
		});
	};

	let sandwich = function() {
		$(document).on('click', '.sandwich-wrap', function () {
			$(this).toggleClass('sandwich--active');
			$('.header-menu').toggle("slow");
			$('.header-menu').css('left', 0);

		});
	}
	planningPopup();
	sandwich();

	$('body').on('click', '[href*="#anchor"]', function(e){
		let fixed_offset = 100;
		$('html,body').stop().animate({ scrollTop: $(this.hash).offset().top - fixed_offset }, 1000);
		e.preventDefault();
	});

	/*Popup*/

	$("a[href='#callback']").magnificPopup({
		mainClass: 'my-mfp-zoom-in',
		removalDelay: 300,
		type: 'inline'
	});



});
});