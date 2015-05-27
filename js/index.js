$(document).ready(function() {
  $(window).scroll(function(){
    var anchor = $(".anchor").offset().top;
    if($(this).scrollTop() > anchor) {
      var anchorColor = $(".anchor").css('backgroundColor');
      $('.navbar').css({"backgroundColor":anchorColor});
    } else {
      $('.navbar').css({"backgroundColor":"rgba(0,0,0,0.5)"});
    }
   var y = $(document).scrollTop();
    if (y > 100) {
      $('.navbar').addClass("active");
    } else {
      $('.navbar').removeClass("active");
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
  
  setTimeout(function(){ $(".messagebox").css('bottom','-125px'); $(".messagebox").css('opacity','0'); },12000)
});
