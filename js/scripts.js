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
        ) {
	        $(".mobile-menu-icon").removeClass("open");
	        $(".mobile-menu-wrap").removeClass("mobile-menu-show");
	        return false;
      	}
    }
  });

  // Navigation update
  $('.navbar-ul li').click(function() {
    $(".mobile-menu-wrap").removeClass("mobile-menu-show"); // close the mobile navigation when clicked on a navigation link
  });

  // Indicates the link on which page you are
  $('#home-link').addClass('active'); // by default indicate home

  $('.navbar-ul a').each(function() {
	  if (top.location.pathname === "/" + $(this).attr("href")) {
	  	$('.navbar-ul li').removeClass('active');
	    $(this).parent().addClass('active');
		}
	});

	//Does not reload the page when the form is submitted
	$("#question-form").submit(function(e) {
    e.preventDefault();

    var data = {
	    name: $("#name").val(),
	    email: $("#email").val(),
	    message: $("#message").val()
		};

    $.ajax({
      type: "POST",
      url: "send-mail.php",
      data: data,
      success: function() {
       $("#question-form")[0].reset();
       $(".mail-sent-message").removeClass("d-none");
      }
    });

	});

	
	// Opens FAQ answers
	$(".question-wrap .question").click(function() {
		$(this).find(".down-arrow").toggleClass("arrow-up");
		$(this).parents(".question-wrap").find(".answer-wrap").toggleClass("d-none");
	});


	// Close mail sent message
	$(".mail-sent-message .close-icon").click(function() {
		$(".mail-sent-message").addClass("d-none");
	});

})