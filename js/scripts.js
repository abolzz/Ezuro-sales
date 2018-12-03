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

  // Navigation update
  $('.navbar-ul a').click(function() {
    $('.navbar-ul a').removeClass("active");
    $(this).addClass("active");
    $(".mobile-menu-wrap").removeClass("mobile-menu-show");
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