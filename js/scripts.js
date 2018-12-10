// Scripts

$(document).ready(function() {

	// Animate on scroll
		AOS.init({
			offset: 200,
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
    $(".mobile-menu-wrap").removeClass("mobile-menu-show"); // close the mobile navigation when clicked on a navigation link
  });

  // Indicates the link on which page you are

  $('#home-link').addClass('active'); // by default indicate home

  $('.navbar-ul a').each(function() {
	  if (top.location.pathname === "/" + $(this).attr("href")) {
	  	$('.navbar-ul a').removeClass('active');
	    $(this).addClass('active');
		}
	});

})