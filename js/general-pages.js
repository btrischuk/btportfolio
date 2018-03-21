(function ($) {

//   $(function () {
//     $('.hero').removeClass('hidden');
// });

$('.title').hide();
$('.title').fadeIn(1000);

$('.project-image').on('click', function() {
  $('.project-image').toggleClass('project-description');
});


})(jQuery);