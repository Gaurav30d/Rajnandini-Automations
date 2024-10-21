
$(window).scroll(function() {
    if ($(this).scrollTop() > 50) {
      $('.navbar').addClass('shrink');
    } else {
      $('.navbar').removeClass('shrink');
    }
  });
  
  
  
  $(window).scroll(function() {
    var scroll = $(window).scrollTop();
    $('.background-image').css('background-position', 'center ' + (scroll * 0.5) + 'px');
  });
  
  $(document).ready(function() {
    $('.overlay-text').hide().fadeIn(2000); 
  });
  
  
    $(document).ready(function() {
       $('.card').hide().fadeIn(1000);
      $('.card').hover(
          function() {
              $(this).css({
                  'box-shadow': '0 4px 20px rgba(0,0,0,0.2)'
              });
          },
          function() {
              $(this).css({
                  'box-shadow': 'none' 
              });
          }
      );
  });
   
  
  $(document).ready(function() {
    $('.jumbotron').css({ display: 'block', left: '-100%', opacity: 0 });
    $('.jumbotron').animate({ left: '0', opacity: 1 }, 1000); 
  })