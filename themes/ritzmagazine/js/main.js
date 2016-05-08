// On document ready:

$(function(){
	// Toogle class on sidebar
	$( ".sidebar-trigger" ).click(function() {
		$('body, .sidebar').toggleClass( "side-active" );
	});

	// Initiate blog carousel
	$('.blog-carousel').slick({
		infinite: true,
		slidesToShow: 3,
		slidesToScroll: 3,
		dots: true,
		arrows: true,
		responsive: [
    {
    	breakpoint: 768,
      	settings: {
        	slidesToShow: 1,
        	slidesToScroll: 1,
        	arrows: false
      }
    }]
  	});

	$('.article-carousel').slick({
		dots: true,
		slidesToShow: 1,
		adaptiveHeight: true,
		responsive: [
    {
    	breakpoint: 768,
      	settings: {
        	slidesToShow: 1,
        	slidesToScroll: 1,
        	arrows: false
      }
    }]
	});

	//Check to see if the window is top if not then display button
	$(window).scroll(function() {
	    if ($(this).scrollTop() < 200 || $(this).scrollTop() > $(document).height() - $(window).height() - 400) {
	        $('.scrollToTop').fadeOut();
	    } else {
	        $('.scrollToTop').fadeIn();
	    }
	});

	$(window).scroll(function() {    
		var scroll = $(window).scrollTop();

		if (scroll >= 100) {
			$(".faux-header").addClass("short-header");
		} else {
			$(".faux-header").removeClass("short-header");
		}
	});

	//Click event to scroll to top
	$('.scrollToTop').click(function() {
	    $('html, body').animate({
	        scrollTop: 0
	    }, 800);
	    return false;
	});

	var infinite = new Waypoint.Infinite({
		element: $('.infinite-container')[0]
	});

	// Mobile nav
	$('.mob-menu-trig').click(function() {
		$('.mob-navigation').slideToggle(500);
	});

	// Mobile sub-nav
	$('.mob-navigation > ul > li > a').one("click", false);

	$('.mob-navigation > ul > li > a').click(function() {
		$(this).next('.sub-menu').slideDown(300);
	});

});