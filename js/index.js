$(document).ready(function() {
  $(window).scroll(function(){
    var anchor = $(".anchor").offset().top;
    if($(this).scrollTop() > anchor) {
      var anchorColor = $(".anchor").css('backgroundColor');
      $('.navigation').css({"backgroundColor":anchorColor});
    } else {
      $('.navigation').css({"backgroundColor":"rgba(0,0,0,0.5)"});
    }
  });
  
  $("#login, #login").click(function() {
    $(".modal.login").toggleClass("active");
    $(".cover").toggleClass("active");
  });
  $("#register, #register").click(function() {
    $(".modal.register").toggleClass("active");
    $(".cover").toggleClass("active");
  });
  $(".cover").click(function() {
    $(".modal.active").toggleClass("active");
    $(".cover").toggleClass("active");
  });
});