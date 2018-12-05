// Scripts

$(document).ready(function() {

	// Animate on scroll
	AOS.init({
		offset: 400,
		duration: 600,
	});

  // Mobile menu
  $('.mobile-menu-button').click(function() {
    $(".mobile-menu-icon").toggleClass("open");
    $(".mobile-menu-wrap").toggleClass("mobile-menu-show");
  });

  // Hide mobile menu when clicked outside of it
  $(document).mouseup(function (e) {
    if ( $(".mobile-menu-icon").hasClass('open') ) {
      var $container = $(".mobile-menu-wrap");
      if (
          !$container.is(e.target) // if the target of the click isn't the container...
          && $('.mobile-menu-button').has(e.target).length === 0 // ... nor a close button
        )
      {
        $(".mobile-menu-icon").removeClass("open");
        $(".mobile-menu-wrap").removeClass("mobile-menu-show");
        return false;
      }
    }
  });

  // Navigation update
  $('.navbar-ul a').click(function() {
    $(".mobile-menu-wrap").removeClass("mobile-menu-show");
  });

  // Indicates the link on which page you are
  $('.navbar-ul a').each(function() {
	  if (top.location.pathname === "/" + $(this).attr("href")) {
	    $(this).addClass('active');
		}
	});

  // Smooth scrolling using jQuery easing
  $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, "easeInOutExpo");
        return false;
      }
    }
  });

})