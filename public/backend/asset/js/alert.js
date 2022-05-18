$(document).ready(function(){
    $('.close').on('click',function(){
          $('.alert').hide();
      });
    setTimeout(() => {
      $('.alert').fadeOut();
    },2500);


})
