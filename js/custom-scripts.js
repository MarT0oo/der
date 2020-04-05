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

	// Add icons to the features of the list with villas
	$('.locationslist .usa_img_bg.item').each(function() {
		var $this = $(this);

		$this.find('.img_box_2 .img_box_f').eq(0).prepend('<i class="fa fa-map-marker" aria-hidden="true"></i>');
		$this.find('.img_box_2 .img_box_f1').eq(0).prepend('<i class="fa fa-bed" aria-hidden="true"></i>');
		$this.find('.img_box_2 .img_box_f1').eq(1).prepend('<i class="fa fa-bath" aria-hidden="true"></i>');
		$this.find('.img_box_2 .img_box_f1').eq(2).prepend('<i class="fa fa-users" aria-hidden="true"></i>');
		$this.find('.img_box_2 .img_box_f').eq(1).prepend('<span>From </span>');

		$this.find('.img_box_1 > span:last-child').clone().appendTo($this.find('.img_box_2 .img_box_f').eq(1));

		// Put link in the title
		var villaLink = $this.find('a').attr('href');
		$this.find('.ca_title').wrapInner('<a href="' + villaLink + '"></a>');
	});

	$('.usa_font_2.font12.h3').closest('.usa_img_bg').addClass('locHolder');
	$('.locationslist #box_right_usa').prependTo('.locHolder');
	$('#isotopstart').parent().next('#box_right_usa').hide();
	$('.locHolder').prev('.usa_img_bg').addClass('feat-villas');

	$('#isotopstart .photo_room').each(function() {
		var $this = $(this);
		var $image = $this.find('img');
		var imgSrc = $image.attr('src');

		// console.log(imgSrc);
		$image.attr('src', imgSrc.replace('_front', ''));
	})

	// Move the features table inside the property info (location page)
	$('.img_box_2').each(function() {
		var $this = $(this);
		var $listing = $this.closest('.item');
		var $listingTitle = $listing.find('.ca_title');

		$listingTitle.after($this);
	});

	// Add span to the locations list title
	$('.locationslist .navigation_1.font24').html(function(_, html) {
		return html.replace(/(Vacation Rentals)/g, '<span>$1</span>');
	});

	$('.usa_right_title_1').html(function(_, html) {
		return html.replace(/(Destination)/g, '<span>$1</span>');
	});

	$('.fullsize-bg').each(function() {
	    var $img = $(this);

	    $img.addClass('hidden');
	    $(this).parent().addClass('container-fullsize').css('background-image', 'url('+ $img.attr('src') +')');
	});

	// Datepicker
	$('.field-date').datepicker({
		minDate: 0,
	});

	// Slider
	$('.slider-specials .owl-carousel').owlCarousel({
	    loop:true,
	    margin:10,
	    nav:true,
	    navText: [
	    	'<i class="fa fa-chevron-left" aria-hidden="true"></i>',
	    	'<i class="fa fa-chevron-right" aria-hidden="true"></i>'
	    ],
	    responsive:{
	        0:{
	            items:1
	        },
	        768:{
	            items:1
	        },
	        992:{
	            items:3
	        }
	    },
	    autoplay:true,
	    smartSpeed:1000
	});

	$('.product-slider.owl-carousel').owlCarousel({
	    loop:true,
	    items: 1,
	    margin:0,
	    nav:true,
	    navText: [
	    	'<i class="fa fa-chevron-left" aria-hidden="true"></i>',
	    	'<i class="fa fa-chevron-right" aria-hidden="true"></i>'
	    ],
	    autoplay:true,
	    smartSpeed:1000,
	    lazyLoad: true
	});

	$('.fav-posts.owl-carousel').owlCarousel({
	    loop:true,
	    items: 1,
	    margin:0,
	    nav:true,
	    navText: [
	    	'<i class="fa fa-chevron-left" aria-hidden="true"></i>',
	    	'<i class="fa fa-chevron-right" aria-hidden="true"></i>'
	    ],
	    autoplay:true,
	    smartSpeed:1000,
	    lazyLoad: true
	});

	$('.slider-reviews .owl-carousel').owlCarousel({
	    loop:true,
	    items: 2,
	    margin:30,
	    nav:true,
	    navText: [
	    	'<i class="fa fa-chevron-left" aria-hidden="true"></i>',
	    	'<i class="fa fa-chevron-right" aria-hidden="true"></i>'
	    ],
	    autoplay:true,
	    smartSpeed: 1000,
	    responsive:{
	      0:{
	          items:1
	      },
	      991:{
	          items:2
	      }
	    }
	});

	$('.list-destinations.owl-carousel').owlCarousel({
	    loop:true,
	    margin:0,
	    nav:true,
	    navText: [
	    	'<i class="fa fa-chevron-left" aria-hidden="true"></i>',
	    	'<i class="fa fa-chevron-right" aria-hidden="true"></i>'
	    ],
	    autoWidth:true
	});

	$('.list-widgets.owl-carousel').owlCarousel({
	    loop:true,
	    margin:0,
	    nav:true,
	    navText: [
	    	'<i class="fa fa-chevron-left" aria-hidden="true"></i>',
	    	'<i class="fa fa-chevron-right" aria-hidden="true"></i>'
	    ],
	    items: 5,
	    responsive:{
	      0:{
	          items:1
	      },
	      768:{
	          items:3
	      },
	      1024:{
	          items:5
	      }
	    },
	});

	/**
	 * Destinations page trigger click
	 */
	$('.widgets-destinations .widget__inner, .widgets-destinations .link-close-overlay').on('click', function(event) {
		event.preventDefault();

		$(this).closest('.widget').toggleClass('is-active').siblings().removeClass('is-active');

		$('html, body').animate({
			scrollTop: $(this).offset().top
		}, 300)
	})

	var beds_baths = $('.box_left_title_usa .usa_font strong').text(); //beds/baths
	var location = $('.box_left_title_usa .usa_font .boldRed').text(); //location
	var price = $('.box_left_title_usa .usa_font span.color3').text(); //price

	var bedrooms = beds_baths.match(/\d+/); //number of bedrooms

	var bathrooms = beds_baths.substr(beds_baths.indexOf('| ')+2, beds_baths.length); //number of bathrooms
	bathrooms = bathrooms.match(/\d+/);

	var villaprice = price.substr(5, price.indexOf(' per')-5); //number of bedrooms - 5 reffers to 'From '

	var priceperiod = price.substr(price.indexOf(villaprice)+villaprice.length+1, price.length);

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
		'<h3>Starting From </h3>' +
		'<p>'+ villaprice +'</p>' +
		'<small>'+ priceperiod +'</small>' +
		'</div></div>');



	/* Isotope */
	function initIsotope() {
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
	};
	initIsotope();

  	/* End Isotope */

  	// Toggle Accordion
  	$('.panel .panel-title a').on('click', function(event) {
  		event.preventDefault();

  		$(this).closest('.panel').siblings.find('.collapse').slideUp();
  		$(this).closest('.panel').find('.collapse').slideToggle();
  	});

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

  	// Add class if has dropdown
	$('.subnav-dropdown li').each(function() {
		var $this = $(this);

		if ( $this.find('ul').length ) {
			$this.addClass('has-dropdown');
		};
	});

	$('.subnav-dropdown .has-dropdown > a').on('click', function(event) {
		event.preventDefault();

		$(this).next('.dropdown').slideToggle();
	});

    $('.villapage .sidebar + #box_right_usa').addClass('desktop-only').clone().addClass('mobile-only').removeClass('desktop-only').insertBefore('.villapage .sidebar');

    // Tabs
    var $activeClass = 'current';

    $('.tabs-nav a').stop( true, true ).on('click', function(event) {
    	event.preventDefault();

    	var $tabLink = $(this);
    	var $targetTab = $($tabLink.attr('href'));

    	$tabLink
    		.parent() // go up to the <li> element
    		.add($targetTab)
    			.addClass($activeClass)
    			.siblings()
    				.removeClass($activeClass);
    });

	$(window)
		.on('load resize', function() {
			// Nav Dropdown height
			if( $(window).height() - $('.header').outerHeight() < $('.nav .dropdown').outerHeight() ) {
				$('.nav .dropdown').height( $(window).height() - $('.header').outerHeight() - 50 )
			};
		})
		.on('load scroll', function() {
			var st = $(window).scrollTop();

			if( st > 100 ) {
				$('.navbar-brand-secondary').addClass('logo-fixed');
			} else {
				$('.navbar-brand-secondary').removeClass('logo-fixed');
			}

			// Animate elements on scroll (Ludacris page)
			var winST = $(window).scrollTop();

			animate(winST);
		})
		.on('load', function() {
			// Disable right click on images

		  	// $('img').bind('contextmenu', function(e) {
	  		$('body').delegate('img', 'contextmenu', function() {
		  		alert('The Information and Photos are under copyright law.');
		  	    return false;
		  	});

		  	if( $('.list-luda-images').length ) {
		  		$('.list-luda-images').masonry({
					itemSelector: '.grid-item',
					percentPosition: true,
					columnWidth: 1,
				});
		  	}


		})
		.on('scroll', function() {
			introScroll();
		})

});

// Smooth Scroll
  $('.link-scroll').click(function() {
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

function introScroll() {
	var scrolled = $(window).scrollTop();

    if ( $(window).width() > 1023 ) {
    	$('.section-experience .section__image--large').css('background-position', 'center ' + -(scrolled * 0.3) + 'px');
    } else {
    	$('.section-experience .section__image--large').css('background-position', 'center center');
    }
};

function animate(winST) {
	$('.animations').each(function(){
		if (winST + $(window).height() * 0.95 > $(this).offset().top) {
			var animClass = $(this).data('animation');

			if ( !$(this).hasClass('animated') ) {
				$(this).addClass( 'animated' );
				$(this).addClass( animClass );
			}
		}
	});
};

$('.expandable-holder .link-read-more').on('click', function(event) {
	event.preventDefault();

	var $this = $(this);
	var text = $this.text();
  $this.text(text == "Read more" ? "Read less" : "Read more");

  $this.closest('.expandable-holder').find('.expandable').toggleClass('is-expanded');
})
