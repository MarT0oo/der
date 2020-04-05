(function($) {
  'use strict';

  //Explore destination slider
  var EDS = $('.explore-destination-slider');
  if (EDS.length > 0) {
    EDS.owlCarousel({
      loop: true,
      margin: 20,
      items: 4,
      nav: true,
      dots: false,
      responsive:{
          0:{
              items:1
          },
          600:{
              items:2
          },
          1000:{
              items:4
          }
      }
    })
  }

  $( "input[required='required']" ).parent().addClass("required");

  $("#slideMenu").on("click", function(event){
    event.preventDefault();
    $("#slide-menu").toggleClass("open");
    $("body").toggleClass("open");
  });

  var HeaderHeight = $("header").outerHeight(),
    WinHeight = $(window).outerHeight();
  $(".nav .dropdown-menu").css("height",WinHeight -  HeaderHeight);


  //Avoid pinch zoom on iOS
  document.addEventListener('touchmove', function(event) {
    if (event.scale !== 1) {
      event.preventDefault();
    }
  }, false);
})(jQuery)

/* -----------------------------------------
	 Instagram Widget
	 ----------------------------------------- */
	var $instagramWidget = $('section').find('.instagram-pics');
	var $instagramWrap = $instagramWidget.parent('div');

	if ( $instagramWidget.length ) {
		var auto = $instagramWrap.data('auto'),
			speed = $instagramWrap.data('speed');

		$instagramWidget.slick({
			slidesToShow: 10,
			slidesToScroll: 3,
			arrows: false,
			autoplay: auto === 1,
			speed: speed,
			responsive: [
				{
					breakpoint: 992,
					settings: {
						slidesToShow: 6
					}
				},
				{
					breakpoint: 767,
					settings: {
						slidesToShow: 4
					}
				}
			]
		});
	}
