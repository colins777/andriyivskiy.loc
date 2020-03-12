$(document).ready(function () {
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

// on hover
// 	let planningPopup = function () {
// 		$('.flat').hover(function () {
// 				$('.floors-popup').slideToggle();
// 				//$(this).find('.flat').css('display', 'none');
// 				//$('.floors-content').css('text-align', 'right');
// 				//let a = $('.floors-popup img').attr('src');
// 				$('.floors').css('margin-left', '300px');
// 				$('.floors-popup').html($(this).attr('data-image'));
//
// 		},
// 		function () {
// 			$('.floors-popup').slideToggle();
// 			$('.floors').css('margin-left', 'auto');
// 		});
// 	};




	/*onClick*/

	let planningPopup = function () {
		$('.flat').click(function () {
				$('.floors-popup').slideToggle();
				$('.floors-popup div').html($(this).attr('data-image'));
			});

		// $(this).on( "mouseleave", function () {
		// 	$('.floors-popup').css('display', 'none');
		// } );
	};

	let sandwich = function() {
		$(document).on('click', '.sandwich', function () {
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

