// Scripts

$(document).ready(function() {

  // Mobile menu
  $('.mobile-menu-button').click(function() {
    $(".mobile-menu-icon").toggleClass("open");
    $(".mobile-menu-wrap").toggleClass("mobile-menu-show");
  });

  // Navigation update
  $('.navbar-ul a').click(function() {
    $('.navbar-ul a').removeClass("active");
    $(this).addClass("active");
  });

})