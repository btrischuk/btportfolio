(function ($) {
  $('.home').hide();
  $('.home').fadeIn(900);

// Toggle menu on mobile/tablet screens
  $('.toggle-menu-button').on('click', function () {
    $('.drop-menu').toggleClass('toggle-nav');
  }); 

  $('.site-content').on('click', function () {
    $('.drop-menu').removeClass('toggle-nav');
  });

  //underline current page
  if ($('body').hasClass('home')) {
    $( '.menu-item--home' ).addClass( 'active-page' );
  }

  if ($('body').hasClass('page-template-about')) {
    $( '.menu-link-about' ).addClass( 'active-page' );
  }

  if ($('body').hasClass('page-id-54')) {
    $( '.menu-item--about' ).addClass( 'active-page' );
  }

  if ($('body').hasClass('page-id-61')) {
    $( '.menu-item--connect' ).addClass( 'active-page' );
  }

  

})(jQuery);