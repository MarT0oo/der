$( document ).ready(function() {
	
	/*Contact Form Validate*/
	$("#contactform").validate();
	/*End Contact Form Validate*/
	
	$.each($('.img_box_2 > strong'), function(index, value) { 
		$(this).wrapAll('<span class="img_box_f"></span>'); // dobavq span na posledniq element ot tablichkata s cenite na imotite // P.S. veche nqma nujda ot nego, zashtoto kolonata e skrita
	});
	
	$.each($('.photo_room img'), function(index, value) { 
		$(this).addClass("thumbnail");
	});
	
	/*Premestva title-a da e do snimkata v lista*/
	$('.usa_img_bg').each(function(i, e) { 
		var $room = $(this).find(".photo_room_f");
		$(this).find(".ca_title").prependTo($room);
	});
	//$(".usa_img_bg .img_box_1").insertAfter($("photo_room_f"));
	/*End Premestva title-a da e do snimkata v lista*/
	
	/* skriva poslednite 2 koloni ot tablicata s cenite */
	$('.img_box_1 span:last-child').remove();
	$('.img_box_1 span:last-child').remove();
	$('.img_box_2 span:last-child').remove();
	$('.img_box_2 span:last-child').remove();
	/* end skriva poslednite 2 koloni ot tablicata s cenite */

	// Fixed header
	$(window).scroll(function() {    
	    var scroll = $(window).scrollTop();

	     //>=, not <=
	    // if (scroll >= 100) {
	    //     $(".header").addClass("headerscroll");
	    // } else {
	    // 	$(".header").removeClass("headerscroll");
	    // }
	}); //missing );

	

	// Animations on counter icons
	if( $('.counter').length ) {
		$('.counter span').counterUp({
	          delay: 10,
	          time: 1000
	      });

		$('.counter').hover(
			function() {
				$(this).find('.counter-image').addClass('animated wobble');
			},
			function() {
				$(this).find('.counter-image').removeClass('animated wobble');
			}
		);	
	}
	 
});


$( document ).ready(function() {
	var beds_baths = $('.box_left_title_usa .usa_font strong').text(); //beds/baths
	var location = $('.box_left_title_usa .usa_font .boldRed').text(); //location
	var price = $('.box_left_title_usa .usa_font span.color3').text(); //price
	//alert(beds_baths.match(/\d+/));
	
	var bedrooms = beds_baths.match(/\d+/); //number of bedrooms
	//alert(bedrooms);
	
	//var bathrooms = beds_baths.substr(beds_baths.indexOf('| ')+2, 1); //number of bathrooms
	var bathrooms = beds_baths.substr(beds_baths.indexOf('| ')+2, beds_baths.length); //number of bathrooms
	bathrooms = bathrooms.match(/\d+/);
	
	var villaprice = price.substr(5, price.indexOf(' per')-5); //number of bedrooms - 5 reffers to 'From '
	//alert(villaprice);
	
	var priceperiod = price.substr(price.indexOf(villaprice)+villaprice.length+1, price.length);
	//alert(priceperiod);
	
	$('.villa .usa_img').after('<div class="villametadetails"><div class="villameta">' +
		'<img src="https://www.dreamexoticrentals.com/img/beds12.png" alt="beds" >' +
		'<h3>Bedrooms</h3>' +
		'<p>'+ bedrooms +'</p>' +
		'</div>' +
		'<div class="villameta">' +
		'<img src="https://www.dreamexoticrentals.com/img/bathtub3.png" alt="beds" >' +
		'<h3>Bathrooms</h3>' +
		'<p>'+ bathrooms +'</p>' +
		'</div>' +
		'<div class="villameta">' +
		'<img src="https://www.dreamexoticrentals.com/img/map32.png" alt="beds" >' +
		'<h3>Location</h3>' +
		'<p>'+ location +'</p>' +
		'</div>'+
		'<div class="villaprice">' +
		'<h3>Rates Starting Fom</h3>' +
		'<p>'+ villaprice +'</p>' +
		'<small>'+ priceperiod +'</small>' +
		'</div></div>');



	/* Isotope */
  	var $container = $('#isotopstart');
  	// init
  	$container.isotope({
  	  // options
  	  itemSelector: '.item',
  	  layoutMode: 'fitRows'
  	});
  	// filter items on button click
  	$('#filters').on( 'click', 'button', function() {
  	  var filterValue = $(this).attr('data-filter');
  	  $container.isotope({ filter: filterValue });
  	});	
  	/* End Isotope */

  	// Calendar Link for villa page
	$(".usa_font_right").each(function() {
	    if ($(this).find('a').length > 0) {
	        var theHref = $(this).find('a').attr('href');
	        //alert(theHref);
	        $('.calendar-holder a').attr('href', theHref);
	    } else {
	    	$('.calendar-holder').css({'display': 'none'});
	    }
	});
  	// End Calendar Link for villa page

  	// Locations additional information collapse
  	$(".collapse_1 .trigger").click(function(){
	    $(".collapse_1 .collapse_2").toggle(200);
	});
  	// End Locations additional information collapse

});

/* Homepage Filter */
$(function() {
	$( '#dl-menu' ).dlmenu();
});
/* End Homepage Filter */

// Smooth Scroll
$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 500);
        return false;
      }
    }
  });
});