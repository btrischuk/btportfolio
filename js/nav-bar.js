(function ($) {

  $('.title').hide();
  $('.title').fadeIn(1000);


  // $('.project-image').on('click', function() {
  //   $('.project-image').toggleClass('project-description');
  // });

// Toggle menu on mobile/tablet screens
  $('.toggle-menu-button').on('click', function () {
    $('.drop-menu').toggleClass('toggle-nav');
  }); 

  $('.site-content').on('click', function () {
    $('.drop-menu').removeClass('toggle-nav');
  });

  //underline current page
  // if ($('body').hasClass('home')) {
  //   $( '.menu-item--home' ).addClass( 'active-page' );
  // }

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