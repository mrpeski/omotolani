(function($){

  $(window).on('scroll', function(){
      var navHeight = $('#header nav').height();
      if( $(this).scrollTop() > navHeight/2 )   {
          $('#header nav').addClass('fixed'); 
      } else {
          $('#header nav').removeClass('fixed');
      }
      if( $(this).scrollTop() > 200 ) {
          $('.chevron').fadeIn(400);
      } else { $('.chevron').fadeOut('slow'); }
    });

  if( $(this).scrollTop() > 200 ) {
    $('body').append('<a class="chevron">');
  }

  $('.nav__items').hover(function(){
    $(this).siblings('li').toggleClass('out');
  });

  $('.chevron').on('click', function(e){
      e.preventDefault();
      $('body, html').animate({scrollTop: 0}, 500);
  });

  $('.search__link').click(function(e){
    e.preventDefault();
      $('.search__block').show().animate({height: 200});
      $('.search__input').focus();
  });

})(jQuery);
