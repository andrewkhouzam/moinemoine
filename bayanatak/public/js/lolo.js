$(document).ready(function(){

  $('.home_form').submit(function(event) {
      
      $('.required').each(function(i, el){
        var val = $(this).val();
        if(val == ''){
          event.preventDefault();
         
          $(this).addClass('animated shake').css({'border-style':'solid','border-color':'#D32121','border-width':'2px'});
          $(this).one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
            $(this).removeClass('animated shake');
          });
        }
      })
  })
   $('.tosignup').click(function(event) {
  $('html,body').animate({
                scrollTop: $('.scrollmina').offset().top},
                900);

  })
})