(function ($) {

  $('.title').hide();
  $('.title').fadeIn(1000);

// Toggle menu on mobile/tablet screens
  $('.toggle-menu-button').on('click', function () {
    $('.drop-menu').toggleClass('toggle-nav');
  }); 

  $('.site-content').on('click', function () {
    $('.drop-menu').removeClass('toggle-nav');
  });

  //current page indicator 
  if ($('body').hasClass('page-template-about')) {
    $( '.menu-link-about' ).addClass( 'active-page' );
  }

  if ($('body').hasClass('page-template-projects')) {
    $( '.menu-link-projects' ).addClass( 'active-page' );
  }

  if ($('body').hasClass('page-template-contact')) {
    $( '.menu-link-contact' ).addClass( 'active-page' );
  }



  

})(jQuery);