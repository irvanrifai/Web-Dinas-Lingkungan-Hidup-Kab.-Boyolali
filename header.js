@charset "utf-8";
/* CSS Document */
$(window).scroll(function(){
  var y = $(window).scrollTop()
  if (y <= 1600){
    $('home').css('background-color','yellow');
  } else if(y <= 3200){
    $('home').css('background-color','orange');
  } else {
    $('home').css('background-color','red');
  }
});
